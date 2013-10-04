# Piwik LogViewer Plugin

## Description

This is a plugin for the Open Source Web Analytics platform Piwik. If enabled, it will allow the superuser to view log data written to the database by Piwik.

Database logging was largely un-used and not stable in Piwik prior to version 1.11. Piwik 1.11 contains several fixes regarding database logging and is the minimum required version for the LogViewer plugin (although it will run in any version of Piwik 1.x). 

**Note:** Database logging can have an impact on performance of your Piwik installation. This plugin is useful in cases where you want to debug errors/exceptions in a running Piwik installation. It is recommended to activate database logging on production installations only for exceptions and errors.

## Documentation

1. Clone the plugin into the plugins directory of your Piwik installation.

   ```
   cd plugins/
   git clone https://github.com/halfdan/piwik-logviewer-plugin.git LogViewer
   ```

2. Login as superuser into your Piwik installation and activate the plugin under Settings -> Plugins

3. Activate database logging by adding the following lines to your `config/config.ini.php`

   ```
   [log]
   log_writers[] = database
   log_level = INFO
   ```

   This will enable database logging. Possible values for log_level are NONE, ERROR, WARN, INFO, DEBUG, VERBOSE.

4. If there are any messages logged by Piwik you can view them under Settings -> Diagnostic -> Log Viewer

## Contribute 

If you are interested in contributing to this plugin, feel free to send pull requests!
