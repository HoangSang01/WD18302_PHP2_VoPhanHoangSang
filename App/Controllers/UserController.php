<?

namespace App\Controllers;

use App\Core\RenderBase;
use App\Models\UserModels;
use App\Validation\Validation;
use App\Core\Time;

$data = new UserModels;
$time = new Time;
class UserController extends BaseController

{
    private $_data;
    private $_renderBase;
    private $_validation;
    private $_time;
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->_data = new UserModels();
        $this->_validation = new Validation;
        $this->_time = new Time();
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
    function delete()
    {
        if ($this->_data->checkUserRole($_GET['user_id'], 'user')) {
            $this->_data->update_user_status($_GET['user_id'], 'inactive');
            $_SESSION['final_success'] = "Vô hiệu hoá người dùng thành công";
            header('location:?url=UserController/list');
        } else {
            $_SESSION['final_err'] = "Không thể vô hiệu hoá quản trị viên, hãy thay đổi vai trò tài khoản trước";
            header('location:?url=UserController/list');
        }
    }
    function recovery()
    {
        $this->_data->update_user_status($_GET['user_id'], 'active');
        $_SESSION['final_success'] = "Khôi phục người dùng thành công";
        header('location:?url=UserController/hidden');
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
        $this->load->render('layouts/admin/content/hidden', $data);
        $this->_renderBase->renderFooter();
    }
    function profile()
    {
        $this->_renderBase->renderHeader();
        $data = $this->_data->read_one_User($_GET['profile_id']);
        if ($this->_data->read_one_activity($data['user_id'], 'Đổi mật khẩu')) {
            $time = $this->_data->read_one_activity($data['user_id'], 'Đổi mật khẩu');
            $data['time'] = $this->_time->timecount($time['activity_time']);
        }
        $this->load->render('layouts/admin/content/profile', $data);
        // render giao dien o day
        $this->_renderBase->renderFooter();
    }
    function edit_password_action()
    {
        if ($this->_validation->validateEditPassword($_POST)) {
            $userModel = new UserModels;
            $user = $userModel->checkUserId($_POST['profile_id']);
            if ($user) {
                if (password_verify($_POST['oldPassword'], $user['password'])) {
                    $userModel->update_user_password($_POST['profile_id'], $_POST['newPassword']);
                    $userModel->user_activity($_POST['profile_id'], 'Đổi mật khẩu');
                    $_SESSION['final_success'] = "Thay đổi mật khẩu thành công";
                    header('location:?url=UserController/profile&profile_id=' . $_POST['profile_id']);
                } else {
                    $_SESSION['password_err'] = "Sai mật khẩu cũ";
                    header('location:?url=UserController/edit_password&profile_id=' . $_POST['profile_id']);
                }
            }
        } else {
            header('location:?url=UserController/edit_password&profile_id=' . $_POST['profile_id']);
        }
    }
    function edit_action()
    {
        var_dump($_POST);
    }
}
