<?php
/**
 * Dutch Language File for URL management tool (urleditor.nl.lang.php)
 *
 * @package urleditor
 * @version 0.9.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['adm_urls'] = 'URLs';
$L['adm_urls_area'] = 'Area';
$L['adm_urls_custom_htaccess'] = 'Aangepaste .htaccess regels';
$L['adm_urls_error_dat'] = 'Fout: datas/urltrans.dat is niet schrijfbaar! Creëer het bestand en zet CHMOD op 666.';
$L['adm_urls_format'] = 'Format';
$L['adm_urls_htaccess'] = '.htaccess overschrijven?';
$L['adm_urls_new'] = 'Nieuwe regel';
$L['adm_urls_parameters'] = 'Parameters';
$L['adm_urls_rules'] = 'URL transformatie regels';
$L['adm_urls_save'] = 'Opslaan';
$L['adm_urls_your'] = 'Jouw';
$L['adm_urls_callbacks'] = 'regel bevat callbacks';
$L['adm_urls_errors'] = 'Je zal rewrite opties zelf moeten toevoegen.';
$L['adm_help_urls'] = 'Op deze pagina kan je zelf de URL\'s aanpassen met simpele URL transformatie regels. Let op dat de regels correct zijn en niet dubbel zijn. Gebruik geen spaties, tabs of andere speciale karakters. Secties en parameters zijn hieronder beschreven.<ol><li><strong>Area</strong> is script name the rule belongs to. The metasymbol (*) stands for &quot;any script&quot;.</li><li><strong>Parameters</strong> is a condition matched against URL parameters. It is a string, containing name-value pairs separated with &amp; and = sign used between parameter name and value. No ? sign in the beginning is needed. If you specify some variable here, it must be present in the URL to match the rule. You can use * which means &quot;any value&quot;, a single value, or a list of possible values separated with | sign. All values should be urlencoded. <em>Example: name=Val|Josh&amp;id=124&amp;page=*</em>.</li><li><strong>Format</strong> sets format of the URLs matching this rule. It is a string containing special sequences substituded with their values. Normal sequence looks like {$name} where &quot;name&quot; is the name of URL parameter (GET variable), value of which will be inserted instead of this sequence. There are several special sequences which are not from URL parameters (&quot;query string&quot;):<ul><li><em>{$_area}</em> - script name;</li><li><em>{$_host}</em> - host name from your site Main URL;</li><li><em>{$_rhost}</em> - host name from the current HTTP request;</li><li><em>{$_path}</em> - server-related path of your site, / if your site is in server root.</li></ul>You can also use parametrized subdomains by specifying absolute URL format like: <em>http://{$c}.site.com/{$al}.html</em>. Currently subdomains are supported for Apache webservers only.</li><li><strong>New Rule</strong> appends a new rule line to the table.</li><li><strong>Order</strong> - keep in mind that order of the rules in the table is important. URL Transformation algorithm looks up a rule for a link this way: first it fetches all rules defined for the area, then it tries to find <em>the first</em> rule that matches the parameter condition; if no matching rules found, it will try to fall back to * area and look for the first matching rule there. It is recommended that your default rule (with * area and * parameters) is the last of the *-area rules, or even last in the table.<br />You can change rule order by simply dragging the rows and dropping them at desired positions. It is recommended to save new rules before you can change their order with drag-and-drop.</li><li><strong>Query String</strong> is what you usually see in most links after the question mark. It is used to pass the rest of GET parameters that you have not used in the rest of the Format string and is appended automatically in that case.</li><li><strong>Save</strong> button will save rules and apply changes immediately. It will also apply changes on your .htaccess (if writable) and provide you with .htaccess/IsapiRewrite4.ini/nginx.conf (depending on your server type).</li></ol>';

$L['cfg_preset'] = 'URL Preset';
$L['cfg_preset_params'] = 'Handy,Genoa/Seditio compatibel,Aangepast urltrans.dat,Gedeactiveerd';

$L['info_desc'] = 'Met deze plugin kan je aangepaste regels maken voor URL transformatie in het administratie paneel.';