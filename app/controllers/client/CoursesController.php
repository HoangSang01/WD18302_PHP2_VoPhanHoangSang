<?php

namespace App\controllers\client;

use Illuminate\framework\Controller;
use Illuminate\framework\Response;
use Illuminate\framework\Request;
use Illuminate\framework\factory\Model;

class CoursesController extends Controller
{
    public function index()
    {   
        
        echo $this->view('pages/client/courses', [
    
        ]);
    }
    
    public function detail()
    {   
        
        echo $this->view('pages/client/course', [
    
        ]);
    }
}