<?

namespace App\Validation;

class Validation
{
    public function validateLogin($value)
    {
        if ($this->checkEmpty($_POST['username']) && $this->checkEmpty($_POST['password'])) {
            $_SESSION['final_err'] = "Không được để trống tên đăng nhập và mật khẩu";
            return false;
        } else 
        if ($this->checkEmpty($_POST['username'])) {
            $_SESSION['username_err'] = "Không được để trống tên đăng nhập";
            return false;
        } else 
        if ($this->checkEmpty($_POST['password'])) {
            $_SESSION['password_err'] = "Không được để trống mật khẩu";
            return false;
        } else {
            return true;
        }
    }
    public function checkEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }

        return false;
    }

    public function checkPasswordLength($password)
    {
        if (strlen($password) < 6) {
            return true;
        }
        return false;
    }

    public function checkPasswordMatch($password, $password2)
    {
        if ($password !== $password2) {
            return true;
        }
        return false;
    }

    public function checkEmpty($value)
    {
        if (empty($value)) {
            return true;
        }

        return false;
    }

    public function displayErr($value)
    {
        echo '<a style="color:red"><b>' . $value . '</b></a>';
    }
}
