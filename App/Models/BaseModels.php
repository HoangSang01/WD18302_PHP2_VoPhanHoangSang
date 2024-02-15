<?

namespace App\Models;

use App\Models\InterfaceCRUD;
use App\Models\Database;
use PDO;
use Exception;
use App\Models\Query;

abstract class BaseModels extends Database implements InterfaceCRUD
{
    use Query;
    private $_db;
    private $_query;
    protected $table;

    public function __construct()
    {
        $this->_db = new Database;
    }
    public function get()
    {
        $stmt = $this->_db->pdo_get_connection()->prepare($this->_query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create($table, array $data)
    {
        if (!empty($data)) {

            $fielStr  = '';
            $valueStr = '';
            foreach ($data as $key => $value) {
                $fielStr .= $key . ',';
                $valueStr .= "'" . $value . "',";
            }

            $fielStr  = rtrim($fielStr, ',');
            $valueStr = rtrim($valueStr, ',');
            $sql      = "INSERT INTO  $table($fielStr) VALUES ($valueStr)";
            $status = $this->query($sql);
            
            if (!$status)
                return false;
        }
        return true;
    }
    public function update(int $id, array $data)
    {
    }

    public function read_all()
    {
        $this->_query = "SELECT * FROM $this->table";

        return $this;
    }
    public function read_one(int $id)
    {
        return [];
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM " . $this->table . " WHERE id = $id";
        return true;
    }
    public function limit(int $limit = 10)
    {
        $stmt   = $this->_db->pdo_get_connection()->prepare($this->_query);
        $result = $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function query($sql)
    {
        try {
            $statement = $this->_db->pdo_get_connection()->prepare($sql);
            $statement->execute();
            return $statement;
        } catch (Exception $ex) {
            $mess = $ex->getMessage();
            echo $mess;
            die();
        }
    }
};
