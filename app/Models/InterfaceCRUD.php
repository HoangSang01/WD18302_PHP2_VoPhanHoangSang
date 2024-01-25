<?
// interface là bản thiết kế, dùng để khai báo phương thức sẽ thực hiện
namespace App\Model;

interface InterfaceCRUD
{
    /**create thêm một người dùng mới*/
    public function create(array $data);
    /**read_all truy xuất tất cả danh sách người dùng*/
    public function read_all();
    /**read_one truy xuất một người dùng
     *@param int $id
     *@return array $record*/
    public function read_one(int $id, array $data);
    /**update cập nhật thông tin người dùng
     *@param int $id
     *@return array $record*/
    public function update(int $id, array $data);
    /**delete xoá một người dùng
     *@param int $id*/
    public function delete(int $id): bool;
}
