<?

namespace App\Models;

use App\Models\BaseModels;

class UserModels extends BaseModels
{
    public $table = 'users';
    private $id;
    private $username;
    private $password;
    private $password2;
    private $email;
    private $number;
    private $full_name;
    private $ward;
    private $district;
    private $province;

    public function set_username($username)
    {
        $this->username = $username;
    }
    public function set_password($password)
    {
        $this->password = $password;
    }
    public function set_password2($password2)
    {
        $this->password2 = $password2;
    }
    public function set_email($email)
    {
        $this->email = $email;
    }
    public function set_number($number)
    {
        $this->number = $number;
    }
    public function set_full_name($full_name)
    {
        $this->full_name = $full_name;
    }
    public function set_ward($ward)
    {
        $this->ward = $ward;
    }
    public function set_district($district)
    {
        $this->district = $district;
    }
    public function set_province($province)
    {
        $this->province = $province;
    }

    public function read_all_User()
    {
        return $this->read_all($this->table);
    }
}
