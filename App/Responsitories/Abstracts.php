<?

namespace App\Responsitories;

abstract class Abstracts implements Interfaces
{
    abstract public function get_User();
    abstract public function add_User($username, $password, $email);
    abstract public function remove_User($id);
    abstract public function edit_User($id, $password, $email);
}
