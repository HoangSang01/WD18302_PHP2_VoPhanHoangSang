<?

namespace App\Controllers;

use App\Core\RenderBase;

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
        $this->homePage();
    }
    function homePage()
    {
        $this->_renderBase->renderHeader();
        $this->load->render('layouts/client/slider');
        // render giao dien o day
        $this->_renderBase->renderFooter();
    }
}
