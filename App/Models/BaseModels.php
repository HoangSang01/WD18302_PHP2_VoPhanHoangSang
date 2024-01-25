<?

namespace App\Model;

use App\Model\InterfaceCRUD;
use App\Models\Database;

abstract class BaseModels extends Database implements InterfaceCRUD
{
    protected $table;
    public function create(array $data)
    {
        
    }

    public function read_all()
    {
    }

    public function read_one(int $id, array $data)
    {
    }

    public function delete(int $id): bool
    {
        return true;
    }
};
