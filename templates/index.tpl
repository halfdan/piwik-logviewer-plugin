{include file="CoreAdminHome/templates/header.tpl"}

<h2>{'LogViewer_AdminHead'|translate}</h2>

<p>{'LogViewer_AdminDescription'|translate}</p>

<code>[log]
logger_message[]	= database
logger_error[]		= database
logger_exception[]	= database
</code>

{include file="CoreAdminHome/templates/footer.tpl"}
