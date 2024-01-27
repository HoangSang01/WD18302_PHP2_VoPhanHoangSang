<?

namespace App\Models;

use App\Models\InterfaceCRUD;
use App\Models\Database;

abstract class BaseModels extends Database implements InterfaceCRUD
{
    private $_db;
    private $_query;
    protected $table;

    public function __construct()
    {
        $this->_db = new Database;
    }
    public function create(array $data)
    {
    }
    public function update(int $id, array $data)
    {
    }

    public function read_all()
    {
        $sql = "SELECT * FROM " . $this->table;
        $stmt = $this->_db->pdo_query($sql);
        return $stmt;
    }

    public function read_one(int $id, array $data)
    {
        return [];
    }

    public function delete(int $id): bool
    {
        return true;
    }
};
