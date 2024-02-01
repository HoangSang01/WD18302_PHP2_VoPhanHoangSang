<?

namespace App\Controllers;

use App\Core\RenderBase;
use App\Models\UserModels;

class LoginController extends BaseController
{
    private $_renderBase;
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase;
    }

    public function Register()
    {
        $this->load->render('layouts/components/header');
        $this->load->render('layouts/register');
        // render giao dien o day
        $this->load->render('layouts/components/footer');
    }
    public function Login()
    {
        $this->load->render('layouts/components/header');
        $this->load->render('layouts/login');
        // render giao dien o day
        $this->load->render('layouts/components/footer');
    }

    public function Logout()
    {
    }

    public function registerAction(array $data)
    {
        $data = new UserModels();
        $data->set_username($data['username']);
        $data->set_password($data['password']);
        $data->set_password2($data['password2']);
        $data->set_email($data['email']);
        var_dump($data);
    }

    public function loginAction()
    {
        // if (!empty($_SESSION['user'])){
        //     $this->redirect['ROOT_URL'];
        // }
        var_dump($_POST['username']);

        $_POST['email'];
        $_POST['password'];
        // validation
    }
}
