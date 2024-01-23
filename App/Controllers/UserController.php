<?

namespace App\Controllers;

use App\Core\RenderBase;

class UserController extends BaseController

{

    private $_renderBase;
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }
    function UserController()
    {
        $this->list();
    }
    function list()
    {
        $this->_renderBase->renderHeader();
        $this->load->render('layouts/admin/content/list');
        // render giao dien o day
        $this->_renderBase->renderFooter();
    }
    function add()
    {
        $this->_renderBase->renderHeader();
        $this->load->render('layouts/admin/content/add');
        // render giao dien o day
        $this->_renderBase->renderFooter();
    }
    function edit()
    {
        $this->_renderBase->renderHeader();
        $this->load->render('layouts/admin/content/edit');
        // render giao dien o day
        $this->_renderBase->renderFooter();
    }
    function hidden()
    {
        $this->_renderBase->renderHeader();
        $this->load->render('layouts/admin/content/hidden');
        // render giao dien o day
        $this->_renderBase->renderFooter();
    }
}
