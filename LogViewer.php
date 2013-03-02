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

/**
 *
 * @package Piwik_LogViewer
 */
class Piwik_LogViewer extends Piwik_Plugin
{
	/**
	 * Return information about this plugin.
	 *
	 * @see Piwik_Plugin
	 *
	 * @return array
	 */
	public function getInformation()
	{
		return array(
			'description' => Piwik_Translate('LogViewer_PluginDescription'),
			'author' => 'Fabian Becker <halfdan@xnorfz.de>',
			'author_homepage' => 'http://geekproject.eu/',
			'license' => 'GPL v3 or later',
			'license_homepage' => 'http://www.gnu.org/licenses/gpl.html',
			'version' => '0.1',
			'translationAvailable' => true
		);
	}

	public function getListHooksRegistered()
	{
		return array(
			'AdminMenu.add' => 'addAdminMenu',
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
