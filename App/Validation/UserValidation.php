<?

namespace App\Validation;

use App\Validation\BaseValidation;

class UserValidation extends BaseValidation
{
    public static function checkEmpty($value)
    {
        if (!UserValidation::validateEmpty($value)) {
            $_SESSION['error_message'] = 'Tên đăng nhập và mật khẩu không được để trống.';
            header('Location:?url=logincontroller/login');
            return false;
        } else {
            return true;
        }
    }
    
}
