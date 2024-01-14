<?

namespace App\Responsitories;

interface Interfaces
{
    public function get_User();
    public function add_User($username, $password, $email);
    public function remove_User($id);
    public function edit_User($id, $password, $email);
}
