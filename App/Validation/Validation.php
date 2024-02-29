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
        if (!$this->checkSpecialCharacter($_POST['username'])) {
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

        if (!isset($_SESSION['username_err']) && !isset($_SESSION['password_err']) && !isset($_SESSION['password2_err']) && !isset($_SESSION['email_err'])) {
            unset($_POST['password2']);
            return true;
        } else {
            return false;
        }
    }

    public function validateAddUser($value)
    {
        if ($this->checkSpace($_POST['username'])) {
            $_SESSION['username_err'] = "Tên đăng nhập không được có khoảng trắng";
        }
        if (!$this->checkSpecialCharacter($_POST['username'])) {
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

        if (!$this->checkSpecialCharacter($_POST['full_name'])) {
            $_SESSION['full_name_err'] = "Tên người dùng không được chứa các kí tự đặc biệt";
        }
        if ($this->checkPhoneNumber($_POST['number'])) {
            $_SESSION['phone_err'] = "Số điện thoại không hợp lệ";
        }

        if (!isset($_SESSION['username_err']) && !isset($_SESSION['phone_err']) && !isset($_SESSION['password2_err']) && !isset($_SESSION['password_err']) && !isset($_SESSION['email_err'])  && !isset($_SESSION['full_name_err'])) {
            unset($_POST['password2']);
            return true;
        } else {
            return false;
        }
    }

    public function validateEditPassword($value)
    {
        if ($this->checkEmpty($_POST['oldPassword'])) {
            $_SESSION['password_err'] = "Không được để trống mật khẩu cũ";
            return false;
        } else
        if ($this->checkEmpty($_POST['newPassword'])) {
            $_SESSION['password2_err'] = "Không được để trống mật khẩu mới";
            return false;
        } else
        if ($this->checkLength($_POST['newPassword'], 6)) {
            $_SESSION['password2_err'] = "Mật khẩu phải dài ít nhất 6 kí tự";
            return false;
        }
        if ($this->checkSpace($_POST['newPassword'])) {
            $_SESSION['password2_err'] = "Mật khẩu không được có khoảng trắng";
            return false;
        } else
        if ($this->checkPasswordMatch($_POST['newPassword'], $_POST['confirmPassword'])) {
            $_SESSION['password3_err'] = "Mật khẩu không khớp";
            return false;
        } else {
            unset($_POST['confirmPassword']);
            return true;
        }
    }
    public function validateEditProfile($value)
    {
        if ($this->checkSpecialCharacter($_POST['full_name'])) {
            $_SESSION['full_name_err'] = "Tên người dùng không được chứa các kí tự đặc biệt";
        }
        if ($this->checkEmail($_POST['email'])) {
            $_SESSION['email_err'] = "Email không hợp lệ";
        }
        if ($this->checkEmpty($_POST['email'])) {
            $_SESSION['email_err'] = "Không được để trống email";
        }
        if ($this->checkPhoneNumber($_POST['number'])) {
            $_SESSION['phone_err'] = "Số điện thoại không hợp lệ";
        }
        if ($this->checkEmpty($_POST['number'])) {
            $_SESSION['phone_err'] = "Không được để trống số điện thoại";
        }
        if ($this->checkEmpty($_POST['cityName'])) {
            $_SESSION['cityName_err'] = "Vui lòng chọn tỉnh/thành phố";
        }
        if ($this->checkEmpty($_POST['districtName'])) {
            $_SESSION['districtName_err'] = "Vui lòng chọn quận/huyện";
        }
        if ($this->checkEmpty($_POST['wardName'])) {
            $_SESSION['wardName_err'] = "Vui lòng chọn phường/xã";
        }
        if (!isset($_SESSION['full_name_err']) && !isset($_SESSION['phone_err']) && !isset($_SESSION['email_err'])  && !isset($_SESSION['cityName_err']) && !isset($_SESSION['districtName_err']) && !isset($_SESSION['wardName_err'])) {
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
    public function checkPhoneNumber($number)
    {
        if (!empty($number)) {
            if (strlen($number) != 10) {
                return true;
            } elseif (substr($number, 0, 1) != '0') {
                return true;
            }
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
        $key2 = trim($key);
        if (preg_match('/^[a-zA-Z\s\x{00C0}-\x{024F}\x{1E00}-\x{1EFF}]+$/u', $key2)) {
            return false;
        } else {
            return true;
        }
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
