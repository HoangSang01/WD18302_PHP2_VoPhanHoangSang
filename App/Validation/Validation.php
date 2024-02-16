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

    public function validateRegister($value)
    {
        if ($this->checkSpace($_POST['username'])) {
            $_SESSION['username_err'] = "Tên đăng nhập không được có khoảng trắng";
        }
        if ($this->checkSpecialCharacter($_POST['username'])) {
            $_SESSION['username_err'] = "Tên đăng nhập không được chứa khoảng trắng hoặc các kí tự đặc biệt";
        }
        if ($this->checkLength($_POST['username'], 6)) {
            $_SESSION['username_err'] = "Tên đăng nhập phải dài ít nhất 6 kí tự";
        }

        if ($this->checkEmpty($_POST['username'])) {
            $_SESSION['username_err'] = "Không được để trống tên đăng nhập";
        }



        if ($this->checkEmail($_POST['email'])) {
            $_SESSION['email_err'] = "Email không hợp lệ";
        }
        if ($this->checkEmpty($_POST['email'])) {
            $_SESSION['email_err'] = "Không được để trống email";
        }


        if ($this->checkSpace($_POST['password'])) {
            $_SESSION['password_err'] = "Mật khẩu không được có khoảng trắng";
        }
        if ($this->checkLength($_POST['password'], 6)) {
            $_SESSION['password_err'] = "Mật khẩu phải dài ít nhất 6 kí tự";
        }
        if ($this->checkEmpty($_POST['password'])) {
            $_SESSION['password_err'] = "Không được để trống mật khẩu";
        }

        if ($this->checkPasswordMatch($_POST['password'], $_POST['password2'])) {
            $_SESSION['password2_err'] = "Mật khẩu không khớp";
        }

        if (!$_SESSION['username_err'] && !$_SESSION['password_err']  && !$_SESSION['password2_err'] && !$_SESSION['email_err']) {
            unset($_POST['password2']);
            return true;
        } else {
            return false;
        }
    }
    public function checkEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }

        return false;
    }

    public function checkLength($key, $value)
    {
        if (strlen($key) < $value) {
            return true;
        }
        return false;
    }
    public function checkSpace($key)
    {
        if (strpos($key, ' ')) {
            return true;
        }
        return false;
    }
    public function checkSpecialCharacter($key)
    {
        if (!preg_match('/^[a-zA-Z0-9]+$/', $key)) {
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
        echo '<a><b>' . $value . '</b></a>';
    }
}
