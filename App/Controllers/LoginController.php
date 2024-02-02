<?

namespace App\Controllers;

use App\Core\RenderBase;
use App\Models\UserModels;
use App\Controllers\HomeController;
use App\Validation\UserValidation;

class LoginController extends BaseController
{
    private $_renderBase;
    private $_homePage;
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase;
        $this->_homePage = new HomeController;
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
        $validate = new UserValidation;
        if ($validate->checkEmpty($_POST['username'])) {
            $userModel = new UserModels();
            $user = $userModel->checkUserExist($_POST["username"]);
            if (!$user) {
                // header('Location: ?url=LoginController/login');
                echo ('tài khoản không tồn tại');
            }
            $hashedPassword = password_hash($user['password'], PASSWORD_BCRYPT);
            if (password_verify($_POST['password'], $hashedPassword)) {
                echo 'đăng nhập thành công';
                setcookie("user_id", $user['id'], time() + 3600, "/");
                $_SESSION['user'] = $user;
                header('Location:?url=HomeController/HomePage');
            } else {
                // header('Location: ?url=LoginController/login');
                echo ('sai mật khẩu');
            }
        }
    }

    function checkLogged()
    {
        if (!isset($_COOKIE['user_id'])) {
            header("Location:?url=LoginController/login");
        }
    }
}
