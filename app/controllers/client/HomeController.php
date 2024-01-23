<?php

namespace App\controllers\client;

use Illuminate\framework\Controller;
use Illuminate\framework\Response;
use Illuminate\framework\Request;
use Illuminate\framework\factory\Model;

class HomeController extends Controller
{
    public function index()
    {   

        echo $this->view('pages/client/home', [
            ''
        ]);
    }
}