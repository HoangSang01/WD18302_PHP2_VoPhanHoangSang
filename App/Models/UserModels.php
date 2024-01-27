<?

namespace App\Models;

use App\Models\BaseModels;

class UserModels extends BaseModels
{
    public $table = 'users';

    public function read_all_User()
    {
        return $this->read_all($this->table);
    }
}
