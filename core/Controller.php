<?php
namespace Core;

class Controller {

	public function view($viewName, $viewData = array()) {
		extract($viewData);
		require 'themes/theme'.THEME.'/'.$viewName.'.php';
	}

	public function render($viewName, $viewData = array()) {
//		require 'themes/layout'.LAYOUT.'/header.php';
		 require 'themes/layout'.LAYOUT.'/template.php';
		// require 'theme_v1/template/content.php';
//		require 'themes/layout'.LAYOUT.'/footer.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);
		require 'themes/theme'.THEME.'/'.$viewName.'.php';
	}

//	public function redirect($route)
//	{
//		header("Location: ".$_ENV['APP_URL'].$route);
//		exit;
//	}

    public function redirect($route, $message = null)
    {
        header("Location: ".$_ENV['APP_URL'].$route);
    }

	public function request()
	{
		return $obj = (object)$_REQUEST; //change array to stdClass object
	}

    public function reqGet()
    {
        return $obj = (object)$_GET; //change array to stdClass object
    }

}