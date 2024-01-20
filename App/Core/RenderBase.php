<?php

namespace App\Core;

use App\Controllers\BaseController;
use App\Models\Post;
use App\Models\Category;

class RenderBase extends BaseController
{
    private $_topic;
    private $_category;
    public function __construct()
    {
        $data = [];
        parent::__construct();
        // $this->_topic = new Post();
        // $this->_category = new Category();
    }

    /**
     * @throws Exception
     */
    public function renderHeader()
    {
        // $data = [
        //     'topics' => $this->_topic->getTopics(),
        //     'categories' => $this->_category->getAll()
        // ];
        $this->load->render('layouts/client/header');
    }

    /**
     * @throws Exception
     */
    public function renderFooter()
    {
        $this->load->render('layouts/client/footer');
    }
    public function rendercontent()
    {
        $this->load->render('layouts/client/slider');
    }
}
