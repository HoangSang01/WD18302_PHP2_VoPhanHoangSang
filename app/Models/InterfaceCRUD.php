<?
// interface là bản thiết kế, dùng để khai báo phương thức sẽ thực hiện
namespace App\Model;

class InterfaceCRUD
{
    /**get_all truy xuất tất cả danh sách người dùng*/
    public function get_all_user();
    /**get_all truy xuất một người dùng
     *@param int $id
     *@return array $record*/
    public function get_one_user(int $id, array $data);
    /**create_user thêm một người dùng mới*/
    public function create_user(array $data);
    /**update_user cập nhật thông tin người dùng
     *@param int $id
     *@return array $record*/
    public function update_user(int $id, array $data);
    /**delete_user xoá một người dùng
     *@param int $id*/
    public function delete_user(int $id):b;
}
