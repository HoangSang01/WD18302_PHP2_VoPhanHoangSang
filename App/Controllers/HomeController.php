<?

namespace App\Controllers;

use App\Core\RenderBase;
use App\Controllers\LoginController;

class HomeController extends BaseController

{
    private $_renderBase;
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }
    function HomeController()
    {
        if (!isset($_COOKIE['user_id'])) {
            $this->redirect('?url=LoginController/login');
        } else {
            $this->homePage();
        }
    }
    function homePage()
    {
        $this->_renderBase->renderHeader();
        $this->load->render('layouts/admin/content/dashboard');
        // render giao dien o day
        $this->_renderBase->renderFooter();
    }
}
