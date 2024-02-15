<?

namespace App\Models;

use App\Models\BaseModels;
use App\Models\Database;
class UserModels extends BaseModels
{
    private $_conn = new Database;
    public $table = 'users';
    public $tableName = 'users';
    public function read_all_User()
    {
        return $this->read_all($this->table)->get();
    }
    // public function checkUserExist($email)
    // {
    //     return $this->select()->where('email', '=', $email)->first();
    // }


    public function checkUserExist($username)
    {
        return $this->select()->where('username', '=', $username)->first();
    }

    public function createUser($data)
    {
        $user = $this->insert($this->table, $data);
        
    }
}
