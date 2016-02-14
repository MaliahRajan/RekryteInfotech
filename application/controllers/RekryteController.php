<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class RekryteController extends CI_Controller
{
    function __construct()
    {
      parent::__construct();
      parent::registerXajax();
    }
    public function index()
    {
        /*Load Model */
        $this->load->model('Rekryte_model');
        /*Load Urls */
        $_SESSION['appPath'] =  $this->config->item('app_url_manual');
        $_SESSION['basePath'] = $this->config->item('base_url_manual');
        /*Config Values*/
        $config = $this->Rekryte_model->getConfig();
        $siteTitleKey = $this->Rekryte_model->searchArray($config,'key','site_title');
        $appTitleKey = $this->Rekryte_model->searchArray($config,'key','app_title');
        /*Assign Smarty Values*/
       	$this->smarty->assign($config[$siteTitleKey]['key'],$config[$siteTitleKey]['value']);
        $this->smarty->assign($config[$appTitleKey]['key'],$config[$appTitleKey]['value']);

        $this->smarty->assign("basePath",$_SESSION['basePath']);
       	$this->smarty->assign("xjaxJs",$this->xajax->printJavaScript());

        $menu = $this->Rekryte_model->getMenu('1');
        $this->smarty->assign("menu",$menu);
     		$this->smarty->view('index');
     }

}
?>