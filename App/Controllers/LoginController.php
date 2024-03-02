<?

namespace App\Controllers;

use App\Core\RenderBase;
use App\Models\UserModels;
use App\Controllers\HomeController;
use App\Validation\Validation;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
    function forgotPassword()
    {
        $this->load->render('layouts/components/header');
        $this->load->render('layouts/forgot');
        // render giao dien o day
        $this->load->render('layouts/components/footer');
    }

    function otpInput()
    {
        $this->load->render('layouts/components/header');
        $this->load->render('layouts/otp_input');
        // render giao dien o day
        $this->load->render('layouts/components/footer');
    }

    function resetPassword()
    {
        $this->load->render('layouts/components/header');
        $this->load->render('layouts/reset_password');
        // render giao dien o day
        $this->load->render('layouts/components/footer');
    }

    public function Logout()
    {
        $userModel = new UserModels();
        $userModel->user_activity($_SESSION['user_id'], 'Đăng xuất');
        unset($_SESSION['user_id']);
        setcookie("user_id", "", time() - 7200, "/");
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
            // $user = $userModel->checkUserExist($_POST["username"]);
            $user = $userModel->checkEmailExist($_POST["username"]);
            if ($user) {
                if (password_verify($_POST['password'], $user['password'])) {
                    setcookie("user_id", $user['user_id'], time() + 7200, "/");
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
    public function forgotPasswordAction()
    {
        if ($this->_validation->validateForgot($_POST)) {
            $email = $_POST['email'];
            $userModel = new UserModels();
            $user = $userModel->checkEmailExist($email);

            if ($user) {
                $code = $userModel->generateRandomNumber(6);
                $userModel->deleteOTP($email);
                $userModel->saveOTP($email, $code);
                $this->sendMail($email, $code);
                $_SESSION['email'] = $user['email'];
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['final_success'] = "Mã OTP gồm 6 kí tự đã được gửi tới <b> " . $email . "</b>. Hãy kiểm tra hòm thư";
                $this->otpInput();
            } else {
                $_SESSION['email_err'] = "Email không tồn tại";
                header('location:?url=LoginController/forgotPassword');
            }
        } else {
            header('location:?url=LoginController/forgotPassword');
        }
    }
    public function otpCheck()
    {
        if ($this->_validation->validateOTP($_POST)) {
            $otpInput = $_POST['otp'];
            $emailInput = $_POST['email'];
            $userModel = new UserModels();
            $otp = $userModel->checkOTP($emailInput);
            if ($otp['otp_code'] == $otpInput) {
                $_SESSION['final_success'] = 'Xác minh thành công, hãy nhập mật khẩu mới';
                header('location:?url=LoginController/resetPassword');
            } else {
                $_SESSION['otp_err'] = "OTP không hợp lệ";
                $this->otpInput();
            }
        } else {
            $this->otpInput();
        }
    }

    public function resetPasswordAction()
    {
        $user_id = $_SESSION['user_id'];
        $email = $_SESSION['email'];
        if ($this->_validation->validateResetPassword($_POST)) {
            $userModel = new UserModels;
            $userModel->update_user_password($user_id, $_POST['password']);
            $userModel->user_activity($user_id, 'Đổi mật khẩu');
            $_SESSION['final_success'] = "Thay đổi mật khẩu thành công";
            if (isset($_SESSION['email'])) {
                unset($_SESSION['email']);
            };
            if (isset($_SESSION['user_id'])) {
                unset($_SESSION['user_id']);
            };
            header('location:?url=LoginController/login');
        } else {
            header('location:?url=LoginController/resetPassword');
        }
    }


    function checkLogged()
    {
        if (!isset($_COOKIE['user_id'])) {
            header("Location:?url=LoginController/login");
        }
    }


    function sendMail($email, $code)
    {

        $mail = new PHPMailer(true);
        try {
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->CharSet = "utf-8";
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'yuukirito0107@gmail.com';
            $mail->Password = 'szcx gvmd kzub nuib';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('yuukirito0107@gmail.com', 'Võ Phan Hoàng Sang');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = "Mã xác nhận đặt lại mật khẩu";
            $mail->Body    = "Mã xác nhận của bạn là: $code";
            $mail->send();
        } catch (Exception $e) {
            echo "Gửi email thất bại: {$mail->ErrorInfo}";
        }
    }
}
