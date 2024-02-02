<?

namespace App\Validation;

class BaseValidation
{
    public static function validateEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        return true;
    }

    public static function validatePasswordLength($password)
    {
        if (strlen($password) < 6) {
            return false;
        }
        return true;
    }

    public static function validatePasswordMatch($password, $password2)
    {
        if ($password !== $password2) {
            return false;
        }
        return true;
    }

    public static function validateEmpty($value)
    {
        if (empty($value)) {
            return false;
        }

        return true;
    }
}
