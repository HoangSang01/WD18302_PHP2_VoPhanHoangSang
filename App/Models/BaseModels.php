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
    // public function get()
    // {
    //     $stmt = $this->_db->pdo_get_connection()->prepare($this->_query);
    //     $stmt->execute();
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }
    public function get()
    {
        // lấy từ query 
        $sqlQuery = "SELECT $this->selectField FROM $this->tableName $this->innerJoin $this->leftJoin $this->where $this->groupBy  $this->orderBy  $this->limit";
        // echo $sqlQuery;
        // die;
        $query    = $this->query($sqlQuery);
        $this->resetQuery();
        if (!empty($query))
            return $query->fetchAll(PDO::FETCH_ASSOC);
        return false;
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
        // $this->_query = "Update " .$this->table."SET " 
    }
    public function updateData($table, $data, $condition = '')
    {
        if (!empty($data)) {
            $updateStr = '';
            foreach ($data as $key => $value) {
                if (strpos($value, ' ') !== false) {
                    $updateStr .= "$key=$value,";
                } else if ($value === '' || $value === null) {
                    $updateStr .= "$key=NULL,";
                } else {
                    $updateStr .= "$key='$value',";
                }
            }
            $updateStr = rtrim($updateStr, ',');
            $sql       = "UPDATE $table SET $updateStr";
            if (!empty($condition)) {
                $sql = "UPDATE $table SET $updateStr WHERE $condition";
                echo $sql;
            }
            $status = $this->query($sql);
            if (!$status)
                return false;
        }
        return true;
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
    public function lastId()
    {
        $sql = "SELECT LAST_INSERT_ID() AS last_id";
        return $this->query($sql);
    }
};
