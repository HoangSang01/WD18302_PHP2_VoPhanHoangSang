<?
// interface là bản thiết kế, dùng để khai báo phương thức sẽ thực hiện
namespace App\Models;

interface InterfaceCRUD
{
    /**create thêm một người dùng mới*/
    public function create($table, array $data);
    /**read_all truy xuất tất cả danh sách người dùng*/
    public function read_all();
    /**read_one truy xuất một người dùng
     *@param int $id
     *@return array $record*/
    public function read_one(int $id);
    /**update cập nhật thông tin người dùng
     *@param int $id
     *@return array $record*/
    public function update(int $id, array $data);
    /**delete xoá một người dùng
     *@param int $id*/
    public function delete(int $id): bool;
}
