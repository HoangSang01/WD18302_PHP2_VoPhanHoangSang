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
        unset($_SESSION['user']);
        setcookie("user_id", "", time() - 3600, "/");
        header('Location:?url=LoginController/Login');
    }

    public function registerAction()
    {
        // validation form

        $userModel = new UserModels();

        $user = $userModel->checkUserExist($_POST["username"]);

        if ($user) {
            echo 'Tài khoản đã tồn tại';
        }
        $userModel->createUser($_POST);
        // //xác thực
        if (password_verify($_POST['password'], $_POST['password2'])) {
            // xử lý session
            $userModel->createUser($_POST);
        } else {
            echo 'sai mật khẩu';
        }

        // var_dump($_SESSION['user']);
    }

    public function loginAction()
    {
        if ($this->_validation->validateLogin($_POST)) {
            $userModel = new UserModels();
            $user = $userModel->checkUserExist($_POST["username"]);
            if ($user) {
                $hashedPassword = password_hash($user['password'], PASSWORD_BCRYPT);
                if (password_verify($_POST['password'], $hashedPassword)) {
                    echo 'đăng nhập thành công';
                    setcookie("user_id", $user['id'], time() + 3600, "/");
                    $_SESSION['user'] = $user;
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
