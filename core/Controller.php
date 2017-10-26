<?php
class Controller 
{

	public function loadView($viewName, $viewData = array()) 
	{
		extract($viewData);
		include 'views/'.$viewName.'.php';	
	}
	
	public function loadTemplate($viewName, $viewData = array()) 
	{
		include 'views/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()) 
	{
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}
	
	public function loadProduct($viewName, $array = array()) 
	{
		include 'views/'.$viewName.'.php';
		print_r($array);
	}


}


