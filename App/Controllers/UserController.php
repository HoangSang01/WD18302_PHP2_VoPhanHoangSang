<?

namespace App\Controllers;

use App\Core\RenderBase;
use App\Models\UserModels;

$data = new UserModels;
class UserController extends BaseController

{
    private $_data;
    private $_renderBase;
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->_data = new UserModels();
    }
    function UserController()
    {
        $this->list();
    }
    function list()
    {
        $this->_renderBase->renderHeader();
        $data = $this->_data->read_all_User_Actived();
        $this->load->render('layouts/admin/content/list', $data);
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
        $data = $this->_data->read_one_User($_GET['profile_id']);
        // $address = $this->_data->read_user_address();
        // var_dump($address);
        $this->load->render('layouts/admin/content/edit', $data);
        $this->_renderBase->renderFooter();
    }
    function edit_password()
    {
        $this->_renderBase->renderHeader();
        $data = $this->_data->read_one_User($_GET['profile_id']);
        // $address = $this->_data->read_user_address();
        // var_dump($address);
        $this->load->render('layouts/admin/content/edit_password', $data);
        $this->_renderBase->renderFooter();
    }
    function hidden()
    {
        $this->_renderBase->renderHeader();
        $data = $this->_data->read_all_User_Inactived();
        $this->load->render('layouts/admin/content/list', $data);
        $this->_renderBase->renderFooter();
    }
    function profile()
    {
        $this->_renderBase->renderHeader();
        $data = $this->_data->read_one_User($_GET['profile_id']);
        $this->load->render('layouts/admin/content/profile', $data);
        // render giao dien o day
        $this->_renderBase->renderFooter();
    }
    function editPassword()
    {
        
    }
}
