<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://github.com/halfdan/piwik-logviewer-plugin
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik_Plugins
 * @package Piwik_LogViewer
 */
namespace Piwik\Plugins\LogViewer;

/**
 *
 * @package Piwik_LogViewer
 */
class LogViewer extends \Piwik\Plugin
{
	public function getListHooksRegistered()
	{
		return array(
			'Menu.Admin.add' => 'addAdminMenu',
			'TaskScheduler.getScheduledTasks' => 'getScheduledTasks'
		);
	}

	public function addAdminMenu()
	{
		Piwik_AddAdminSubMenu('CoreAdminHome_MenuDiagnostic', 'LogViewer_MenuLogViewer',
			array('module' => 'LogViewer', 'action' => 'index'),
			Piwik::isUserIsSuperUser(),
			$order = 5);
	}

	public function getScheduledTasks()
	{
		
	}
}
