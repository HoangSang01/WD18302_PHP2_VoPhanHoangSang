<?

namespace App\Responsitories;

abstract class Abstracts
{
    protected $models;
    public function getModels()
    {
        return $this->models;
    }
    abstract public function getTable();
    abstract public function get_User();
    abstract public function add_User();
    abstract public function remove_User();
    abstract public function edit_User();
}
