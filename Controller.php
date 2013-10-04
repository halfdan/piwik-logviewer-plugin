<?php
namespace Piwik\Plugins\LogViewer;

/**
 *
 * @package Piwik_LogViewer
 */
class Controller extends \Piwik\Controller\Admin
{
	public function index()
	{
		\Piwik::isUserIsSuperUser();
		$view = new \Piwik\View('@LogViewer/index');
		$this->setBasicVariablesView($view);

		$view->menu = Piwik_GetAdminMenu();
		echo $view->render();
	}
}
