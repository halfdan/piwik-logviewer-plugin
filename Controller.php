<?php
/**
 *
 * @package Piwik_LogViewer
 */
class Piwik_LogViewer_Controller extends Piwik_Controller_Admin
{
	public function index()
	{
		Piwik::isUserIsSuperUser();
		$view = Piwik_View::factory('index');
		$this->setBasicVariablesView($view);

		$view->menu = Piwik_GetAdminMenu();
		echo $view->render();
	}
}
