<?php


namespace App\Core;

use Exception;

class Render
{

    function __construct()
    {
    }
    /**
     * render là hàm dùng để gọi các trang trong Views
     * @param array $data
     * @param  string $file
     * @return mixed
     */

    public function render($file, $data = array())
    {
        extract($data);
        require 'App/Views/' . $file . '.php';

        $viewPath = __DIR__ . '/../Views/' .  $file . '.php';
        if (!file_exists($viewPath)) {
            throw new Exception('Không tìm thấy giao diện');
        }
    }
    /**
     * renderModel là hàm dùng để gọi file model trong Models
     *
     * @param  string $file
     * @return string
     */
    public function renderModel($file)
    {
        require 'App/Models/' . $file . '.php';
        return new $file();
    }
}
