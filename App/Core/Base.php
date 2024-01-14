<?

namespace App\Core;

use App\Responsitories\Interfaces;
use App\Responsitories\Abstracts;
use App\Core\Database;

class Base extends Abstracts implements Interfaces
{
    public function get_User()
    {
        $db = new Database();
        $sql = "SELECT * FROM users";
        $result = $db->pdo_query($sql);
        return $result;
    }
    public function remove_User($id)
    {
        $db = new Database();
        $sql = "DELETE FROM users WHERE id = $id";
        $result = $db->pdo_query_one($sql);
        return $result;
    }
    public function edit_User($id, $password, $email)
    {
        $db = new Database();
        $sql = "UPDATE users
        SET `password` = '$password', `email` = '$email'
        WHERE `id` = $id;";
        $result = $db->pdo_execute($sql);
        return $result;
    }
    public function add_User($username, $password, $email)
    {
        $db = new Database();
        $sql = "INSERT INTO users (username, `password`, email)
        VALUES ('$username', '$password', '$email')";
        $result = $db->pdo_execute($sql);
        return $result;
    }
    public function getTable()
    {
    }
}
