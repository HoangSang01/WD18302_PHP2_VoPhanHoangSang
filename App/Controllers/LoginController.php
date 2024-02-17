<?

namespace App\Controllers;

use App\Core\RenderBase;
use App\Models\UserModels;
use App\Controllers\HomeController;
use App\Validation\Validation;

class LoginController extends BaseController
{
    private $_renderBase;
    private $_homePage;
    private $_validation;
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase;
        $this->_homePage = new HomeController;
        $this->_validation = new Validation;
    }

    public function Register()
    {
        $this->load->render('layouts/components/header');
        $this->load->render('layouts/register');
        // render giao dien o day
        $this->load->render('layouts/components/footer');
    }
    public function Login()
    {
        $this->load->render('layouts/components/header');
        $this->load->render('layouts/login');
        // render giao dien o day
        $this->load->render('layouts/components/footer');
    }

    public function Logout()
    {
        $userModel = new UserModels();
        $userModel->user_activity($_SESSION['user_id'], 'Đăng xuất');
        unset($_SESSION['user_id']);
        setcookie("user_id", "", time() - 3600, "/");
        header('Location:?url=LoginController/Login');
    }

    public function registerAction()
    {
        if ($this->_validation->validateRegister($_POST)) {
            $userModel = new UserModels();
            $user = $userModel->checkUserExist($_POST["username"]);
            if (!$user) {
                $_POST['password'] = $userModel->hashPassword($_POST['password']);
                $userModel->createUser($_POST);
                $_SESSION['final_success'] = 'Đăng ký thành công';
                header('Location: ?url=LoginController/login');
            } else {
                $_SESSION['final_err'] = 'Tên đăng nhập đã tồn tại';
                header('Location:?url=LoginController/register');
            }
        } else {
            header('location:?url=LoginController/register');
        }
    }

    public function loginAction()
    {
        if ($this->_validation->validateLogin($_POST)) {
            $userModel = new UserModels();
            $user = $userModel->checkUserExist($_POST["username"]);
            if ($user) {
                if (password_verify($_POST['password'], $user['password'])) {
                    setcookie("user_id", $user['user_id'], time() + 3600, "/");
                    $_SESSION['user_id'] = $user['user_id'];
                    $userModel->user_activity($_SESSION['user_id'], 'Đăng nhập');
                    header('Location:?url=HomeController/HomePage');
                } else {
                    $_SESSION['final_err'] = 'Sai mật khẩu';
                    header('Location: ?url=LoginController/login');
                }
            } else {
                $_SESSION['final_err'] = 'Tài khoản không tồn tại';
                header('Location: ?url=LoginController/login');
            }
        } else {
            header('location:?url=LoginController/Login');
        }
    }

    function checkLogged()
    {
        if (!isset($_COOKIE['user_id'])) {
            header("Location:?url=LoginController/login");
        }
    }
}
