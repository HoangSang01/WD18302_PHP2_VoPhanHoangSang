<?

namespace App\Models;

use App\Models\BaseModels;
use App\Models\Query;

class UserModels extends BaseModels
{
    public $table = 'users';
    public $tableName = 'users';
    public function read_all_User()
    {
        return $this->read_all($this->table)->join('user_info', 'users.id = user_info.user_id')->get();
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
}
