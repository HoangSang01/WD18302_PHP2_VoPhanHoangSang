<?

namespace App\Models;

use App\Models\BaseModels;
use App\Models\Query;

class UserModels extends BaseModels
{
    public $table = 'users';
    public $tableName = 'users';
    public function read_all_User_Actived()
    {
        return $this->read_all($this->table)->join('roles', 'users.role=roles.id')->join('status', 'users.status=status.id')->join('province', 'users.province=province.province_id')->where('status', '=', '1')->orderBy('role', 'DESC')->get();
    }
    public function read_all_User_Inactived()
    {
        return $this->read_all($this->table)->join('roles', 'users.role=roles.id')->join('status', 'users.status=status.id')->join('province', 'users.province=province.province_id')->where('status', '=', '2')->orderBy('role', 'DESC')->get();
    }
    public function checkEmailExist($email)
    {
        return $this->select()->where('email', '=', $email)->first();
    }

    public function checkUserExist($username)
    {
        return $this->select()->where('username', '=', $username)->first();
    }

    public function createUser($data)
    {
        $user = $this->insert($this->table, $data);
    }

    public function read_one_User($user_id)
    {
        return $this->select()->where('user_id', '=', $user_id)->join('status', 'users.status=status.id')->join('roles', 'users.role=roles.id')->join('province', 'users.province=province.province_id')->join('district', 'users.district=district.district_id')->join('wards', 'users.ward=wards.wards_id')->first();
    }

    public function hashPassword($password)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        return $hashed_password;
    }
}
