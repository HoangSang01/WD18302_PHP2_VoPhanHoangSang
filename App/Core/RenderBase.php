<?php

namespace App\Core;

use App\Controllers\BaseController;
use App\Models\UserModels;
use App\Models\Post;
use App\Models\Category;

class RenderBase extends BaseController
{
    private $_data;
    private $_topic;
    private $_category;
    public function __construct()
    {
        $data = [];
        parent::__construct();
        $this->_data = new UserModels();
        // $this->_topic = new Post();
        // $this->_category = new Category();
    }

    /**
     * @throws Exception
     */
    public function renderHeader()
    {
        if (isset($_COOKIE['user_id'])) {
            $data = $this->_data->read_one_User($_COOKIE['user_id']);
        } else {
            $data = '';
        }
        // $data = [
        //     'topics' => $this->_topic->getTopics(),
        //     'categories' => $this->_category->getAll()
        // ];
        $this->load->render('layouts/admin/components/header', $data);
    }



    /**
     * @throws Exception
     */
    public function renderFooter()
    {
        $this->load->render('layouts/admin/components/footer');
    }
    public function renderLogin()
    {
        $this->load->render('layouts/login');
    }
}
