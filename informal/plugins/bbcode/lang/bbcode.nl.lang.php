<?php
/**
 * Dutch Language File for BBcode management (bbcode.nl.lang.php)
 *
 * @package bbcode
 * @version 0.9.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['adm_bbcode'] = 'BBCode';
$L['adm_bbcodes'] = 'BBCodes';
$L['adm_bbcodes_added'] = 'Nieuwe bbcode succesvol toegevoegd.';
$L['adm_bbcodes_clearcache'] = 'Wis HTML cache';
$L['adm_bbcodes_clearcache_confirm'] = 'Dit zal de cache voor alle pagina\'s en berichten wissen, doorgaan?';
$L['adm_bbcodes_clearcache_done'] = 'HTML cache is gewist.';
$L['adm_bbcodes_confirm'] = 'Wil je deze bbcode verwijderen?';
$L['adm_bbcodes_container'] = 'Container';
$L['adm_bbcodes_convert_comments'] = 'Reacties naar HTML omzetten';
$L['adm_bbcodes_convert_complete'] = 'Het omzetten is voltooid';
$L['adm_bbcodes_convert_confirm'] = 'Weet je dit zeker? Dit kan niet terug gezet worden! Maak een backup van de database als je niet zeker bent!';
$L['adm_bbcodes_convert_forums'] = 'Forums omzetten naar HTML';
$L['adm_bbcodes_convert_page'] = 'Pagina\'s omzetten naar HTML';
$L['adm_bbcodes_convert_pm'] = 'Privéberichten omzetten naar HTML';
$L['adm_bbcodes_convert_users'] = 'Handtekeningen omzetten naar HTML';
$L['adm_bbcodes_mode'] = 'Modus';
$L['adm_bbcodes_new'] = 'Nieuwe BBCode';
$L['adm_bbcodes_other'] = 'Overige acties';
$L['adm_bbcodes_pattern'] = 'Patroon';
$L['adm_bbcodes_postrender'] = 'Post-render';
$L['adm_bbcodes_priority'] = 'Prioriteit';
$L['adm_bbcodes_removed'] = 'bbcode succesvol verwijderd';
$L['adm_bbcodes_replacement'] = 'Vervanging';
$L['adm_bbcodes_updated'] = 'bbcode succesvol bijgewerkt';
$L['adm_help_bbcodes'] = <<<HTM
<ul>
<li><strong>Name</strong> - BBcode naam (alleen alfanumeriek en liggend streepje)</li>
<li><strong>Mode</strong> - Parsing modus, op de volgende: 'str' (str_replace), 'ereg' (eregi_replace), 'pcre' (preg_replace) and 'callback' (preg_replace_callback)</li>
<li><strong>Pattern</strong> - BBcode string voor reguliere expressie</li>
<li><strong>Replacement</strong> - Vervangende string of reguliere vervanging of callback body</li>
<li><strong>Container</strong> - Indien bbcode een container is (zoals [bbcode]Voorbeeld hier[/bbcode])</li>
<li><strong>Priority</strong> - BBcode prioriteit van 0 tot 255. Lagere prioriteit bbcodes worden eerst geparsed, 128 is standaard medium prioriteit.</li>
<li><strong>Plugin</strong> - Plugin/part naam voor betrefende bbcode. Blank laten, dit is alleen voor plugins.</li>
<li><strong>Post-render</strong> - Indien deze bbcode toegepast moet worden op een pre-rendered HTML cache. Alleen gebruiken wanneer de callback per-request calculaties verricht.</li>
</ul>
HTM;

$L['cfg_smilies'] = array('Smilies activeren', '');

$L['info_desc'] = 'Activeer BBCode parsing ondersteuning. Administrator kan bbcodes aanpassen via de admin tool. Voegt ook ondersteuning voor smilie codes en smilie sets toe.';

?>
