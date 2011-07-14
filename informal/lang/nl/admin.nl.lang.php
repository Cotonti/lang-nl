<?php

/**
 * Dutch Language File for the Admin Module (admin.nl.lang.php)
 *
 * @package Cotonti
 * @version 0.9.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Common words
 */

$L['Extension'] = 'Extensie';
$L['Extensions'] = 'Extensies';

/**
 * Home Section
 */

$L['home_newusers'] = 'Nieuwe leden';
$L['home_newpages'] = 'Nieuwe pagina\'s';
$L['home_newtopics'] = 'Nieuwe onderwerpen';
$L['home_newposts'] = 'Nieuwe berichten';
$L['home_newpms'] = 'Nieuwe privéberichten';

$L['home_db_rows'] = 'SQL database, aantal regels';
$L['home_db_indexsize'] = 'SQL database, index grootte (KB)';
$L['home_db_datassize'] = 'SQL database, data grootte (KB)';
$L['home_db_totalsize'] = 'SQL database, totale grootte (KB)';

$L['home_ql_b1_title'] = 'Site eigenschappen';
$L['home_ql_b1_1'] = 'Basis configuratie';
$L['home_ql_b1_2'] = 'Titels';
$L['home_ql_b1_3'] = 'Thema en charset';
$L['home_ql_b1_4'] = 'Menu slots in tpl-files';
$L['home_ql_b1_5'] = 'Taal';
$L['home_ql_b1_6'] = 'Tijd en datum';

$L['home_ql_b2_1'] = 'Structuur van pagina\'s (categorieën)';
$L['home_ql_b2_2'] = 'Extra velden voor pagina\'s';
$L['home_ql_b2_3'] = 'Extra velden voor categorieën';
$L['home_ql_b2_4'] = 'Parser configuratie';

$L['home_ql_b3_1'] = 'Basis configuratie';
$L['home_ql_b3_2'] = 'Extra velden voor leden';
$L['home_ql_b3_4'] = 'Gebruikersrechten';

$L['home_rev_title'] = 'Revisie';
$L['home_rev'] = 'r';
$L['home_update_notice'] = 'Update beschikbaar';
$L['home_update_revision'] = 'Huidige versie: <span style="color:#C00;font-weight:bold;">%1$s(r%2$s)</span><br />Nieuwe versie: <span style="color:#4E9A06;font-weight:bold;">%3$s(r%4$s)</span>'; // %1/%2 Huidige versie/revisie %3/%4 Laatste versie/revisie

/**
 * Config Section
 */

$L['core_forums'] = &$L['Forums'];
$L['core_locale'] = &$L['Locatie'];
$L['core_main'] = 'Hoofdinstellingen';
$L['core_menus'] = &$L['Menu\'s'];
$L['core_page'] = &$L['pagina\'s'];
$L['core_parser'] = &$L['Parser'];
$L['core_performance'] = 'Performance';
$L['core_pfs'] = &$L['PFS'];
$L['core_plug'] = &$L['Plugins'];
$L['core_pm'] = &$L['Privéberichten'];
$L['core_polls'] = &$L['Polls'];
$L['core_rss'] = &$L['RSS_Feeds'];
$L['core_structure'] = &$L['categorieën'];
$L['core_theme'] = &$L['Thema\'s'];
$L['core_time'] = 'Tijd en datum';
$L['core_title'] = 'Titels en meta\'s';
$L['core_users'] = &$L['Gebruikers'];

$L['cfg_struct_defaults'] = 'Structuur standaard';

/**
 * Config Section
 * Locale Subsection
 */

$L['cfg_forcedefaultlang'] = array('Forceer de standaard taal voor alle gebruikers', '');
$L['cfg_defaulttimezone'] = array('Standaard tijdzone', 'Voor gasten en nieuwe leden, van -12 to +12');

/**
 * Config Section
 * Main Subsection
 */

$L['cfg_adminemail'] = array('Administrator\'s e-mail', 'Verplicht');
$L['cfg_clustermode'] = array('Cluster van servers', 'Ja, voor een load balanced setup.');
$L['cfg_cookiedomain'] = array('Domein voor cookies', 'Standaard: leeg');
$L['cfg_cookielifetime'] = array('Maximale cookie levensduur', 'In seconden');
$L['cfg_cookiepath'] = array('Pad voor cookies', 'Standaard: leeg');
$L['cfg_devmode'] = array('Debugging mode', 'Niet aan laten in live modus');
$L['cfg_easypagenav'] = array('Gebruiksvriendelijke paginering', 'Gebruikt paginanummers in URLs inplaats van DB offsets');
$L['cfg_hostip'] = array('Server IP', 'IP van de server, optioneel.');
$L['cfg_jquery'] = array('Activeer jQuery', '');
$L['cfg_maintenance'] = array('Onderhoudsmodus', 'Laat alleen bevoegd personeel toe');
$L['cfg_maintenancereason'] = array('Verklaring voor onderhoud', 'Optioneel, korte beschrijving');
$L['cfg_maxrowsperpage'] = array('Maximale aantal items per pagina', 'standaard item limiet voor paginering');
$L['cfg_parser'] = array('Markup parser', 'standaard is: plain text');
$L['cfg_redirbkonlogin'] = array('Terugsturen na inloggen', 'Stuur de gebruiker terug naar de locatie van voor het inloggen');
$L['cfg_redirbkonlogout'] = array('Terugsturen na uitloggen', 'Stuur de gebruiker terug naar de locatie van voor het uitloggen');
$L['cfg_shieldenabled'] = array('Activeer schild', 'Anti-spamming en anti-hammering');
$L['cfg_shieldtadjust'] = array('Stel schild timers bij (in %)', 'Hogere waarde is harder te spammen');
$L['cfg_shieldzhammer'] = array('Anti-hammer na * snelle hits', 'Hoe lager de waarde, hoe sneller de 3 minuten auto-ban geactiveerd wordt');
$L['cfg_turnajax'] = array('Activeer AJAX', 'Werkt alleen wanneer jQuery geactiveerd is');

/**
 * Config Section
 * Menus Subsection
 */

$L['cfg_banner'] = array('Banner<br />{HEADER_BANNER} in header.tpl', '');
$L['cfg_bottomline'] = array('Bodem tekst<br />{FOOTER_BOTTOMLINE} in footer.tpl', '');
$L['cfg_topline'] = array('Top tekst<br />{HEADER_TOPLINE} in header.tpl', '');

$L['cfg_freetext1'] = array('Tekst slot #1<br />{PHP.cfg.freetext1} in alle tpl bestanden', '');
$L['cfg_freetext2'] = array('Tekst slot #2<br />{PHP.cfg.freetext2} in alle tpl bestanden', '');
$L['cfg_freetext3'] = array('Tekst slot #3<br />{PHP.cfg.freetext3} in alle tpl bestanden', '');
$L['cfg_freetext4'] = array('Tekst slot #4<br />{PHP.cfg.freetext4} in alle tpl bestanden', '');
$L['cfg_freetext5'] = array('Tekst slot #5<br />{PHP.cfg.freetext5} in alle tpl bestanden', '');
$L['cfg_freetext6'] = array('Tekst slot #6<br />{PHP.cfg.freetext6} in alle tpl bestanden', '');
$L['cfg_freetext7'] = array('Tekst slot #7<br />{PHP.cfg.freetext7} in alle tpl bestanden', '');
$L['cfg_freetext8'] = array('Tekst slot #8<br />{PHP.cfg.freetext8} in alle tpl bestanden', '');
$L['cfg_freetext9'] = array('Tekst slot #9<br />{PHP.cfg.freetext9} in alle tpl bestanden', '');

$L['cfg_menu1'] = array('Menu slot #1<br />{PHP.cfg.menu1} in alle tpl bestanden', '');
$L['cfg_menu2'] = array('Menu slot #2<br />{PHP.cfg.menu2} in alle tpl bestanden', '');
$L['cfg_menu3'] = array('Menu slot #3<br />{PHP.cfg.menu3} in alle tpl bestanden', '');
$L['cfg_menu4'] = array('Menu slot #4<br />{PHP.cfg.menu4} in alle tpl bestanden', '');
$L['cfg_menu5'] = array('Menu slot #5<br />{PHP.cfg.menu5} in alle tpl bestanden', '');
$L['cfg_menu6'] = array('Menu slot #6<br />{PHP.cfg.menu6} in alle tpl bestanden', '');
$L['cfg_menu7'] = array('Menu slot #7<br />{PHP.cfg.menu7} in alle tpl bestanden', '');
$L['cfg_menu8'] = array('Menu slot #8<br />{PHP.cfg.menu8} in alle tpl bestanden', '');
$L['cfg_menu9'] = array('Menu slot #9<br />{PHP.cfg.menu9} in alle tpl bestanden', '');

/**
 * Config Section
 * Performance Subsection
 */

$L['cfg_gzip'] = array('Gzip', 'Gzip compressie op de HTML output');
$L['cfg_headrc_consolidate'] = array('Consolideer header en footer resources (JS/CSS)');
$L['cfg_headrc_minify'] = array('Verklein geconsolideerde JS/CSS');
$L['cfg_jquery_cdn'] = array('Gebruik jQuery via CDN URL', 'Voorbeeld: https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js');

/**
 * Config Section
 * Themes Subsection
 */

$L['cfg_charset'] = array('HTML charset', '');
$L['cfg_disablesysinfos'] = array('Zet pagina creatie tijd uit', '(in footer.tpl)');
$L['cfg_doctypeid'] = array('Document Type', '&lt;!DOCTYPE&gt; van de HTML layout');
$L['cfg_forcedefaulttheme'] = array('Forceer het standaard thema voor alle gebruikers', '');
$L['cfg_homebreadcrumb'] = array('Zet Home in kruimelpad', 'Zet link naar hoofdpagina in kruimelpad');
$L['cfg_keepcrbottom'] = array('Zet copyright in de tag {FOOTER_BOTTOMLINE}', '(in footer.tpl)');
$L['cfg_metakeywords'] = array('HTML Meta keywords', '(komma gescheiden)');
$L['cfg_msg_separate'] = array('Laat berichten los zien voor elke bron', '');
$L['cfg_separator'] = array('Algemene separator', '(gebruikt in kruimelpad etc)');
$L['cfg_showsqlstats'] = array('Laat SQL queries statistieken zien', '(gebruikt in footer.tpl)');

/**
 * Config Section
 * Title Subsection
 */

$L['cfg_maintitle'] = array('Site titel', 'Hoofd titel voor de website, verplicht');
$L['cfg_subtitle'] = array('Beschrijving', 'Optioneel, wordt na de titel geplaatst');
$L['cfg_title_header'] = array('Header titel', 'Opties: {MAINTITLE}, {DESCRIPTION}, {SUBTITLE}');
$L['cfg_title_header_index'] = array('Header Index titel', 'Opties: {MAINTITLE}, {DESCRIPTION}, {SUBTITLE}');
$L['cfg_title_users_details'] = array('Gebruiker details titel', 'Opties: {USER}, {NAME}');
$L['cfg_subject_mail'] = array('E-mail onderwerp', 'Opties: {SITE_TITLE}, {SITE_DESCRIPTION}, {MAIL_SUBJECT}');
$L['cfg_body_mail'] = array('E-mail titel', 'Opties: {SITE_TITLE}, {SITE_DESCRIPTION}, {SITE_URL}, {ADMIN_EMAIL}, {MAIL_BODY}, {MAIL_SUBJECT}');

/**
 * Config Section
 * Users Subsection
 */

$L['cfg_disablereg'] = array('Deactiveer registratie proces', 'Mogelijkheid voor registratie uitschakelen');
$L['cfg_disablewhosonline'] = array('Deactiveer Wie is online', 'Automatisch gedeactiveerd wanneer shield actief is');
$L['cfg_forcerememberme'] = array('Forceer &quot;onthoud mij&quot;', 'Te gebruiken op multi-domein websites om plotselinge logouts te voorkomen');
$L['cfg_maxusersperpage'] = array('Maximale aantal regels in ledenlijst', '');
$L['cfg_regnoactivation'] = array('Skip e-mail check voor nieuwe leden', '\'Nee\' aanbevolen wegens beveiligings redenen');
$L['cfg_regrequireadmin'] = array('Administratoren moeten nieuwe gebruikers valideren', '');
$L['cfg_timedout'] = array('Inactiviteit in seconden', 'De gebruiker is afwezig na deze pauze');
$L['cfg_user_email_noprotection'] = array('Schakel wachtwoord beveiliging uit bij e-mail wijziging', '\'Nee\' aanbevolen wegens beveiligings redenen');
$L['cfg_useremailchange'] = array('Sta gebruikers toe wachtwoord te wijzigen', '\'Nee\' aanbevolen wegens beveiligings redenen');
$L['cfg_usertextimg'] = array('Sta plaatjes en HTML toe in gebruikers handtekening', '\'Nee\' aanbevolen wegens beveiligings redenen');
$L['cfg_usertextmax'] = array('Maximale lengte voor gebruikers handtekening', '');

/**
 * Config Section
 * Common strings
 */
$L['cfg_css'] = array('Activeer module/plugin CSS');
$L['cfg_editor'] = array('Rich text editor', '');
$L['cfg_markup'] = array('Activeer markup', 'Activeert HTML/BBcode of andere parsing die geinstalleerd is op het systeem');

/**
 * Extension management
 */

$L['ext_already_installed'] = 'Deze extensie is al geinstalleerd: {$name}';
$L['ext_auth_installed'] = 'Standaard autorisatie waardes geinstalleerd';
$L['ext_auth_locks_updated'] = 'Autorisatie locks bijgewerkt';
$L['ext_auth_uninstalled'] = 'Autorisatie opties verwijderd';
$L['ext_bindings_installed'] = 'Geinstalleerde {$cnt} hook bindings';
$L['ext_bindings_uninstalled'] = 'Verwijderde {$cnt} hook bindings';
$L['ext_config_error'] = 'Installatie configuratie mislukt';
$L['ext_config_installed'] = 'Configuratie geinstalleerd';
$L['ext_config_uninstalled'] = 'Configuratie verwijderd';
$L['ext_config_updated'] = 'Configuratie opties bijgewerkt';
$L['ext_config_struct_error'] = 'Installatie configuratie structuur mislukt';
$L['ext_config_struct_installed'] = 'Configuratie structuur geinstalleerd';
$L['ext_config_struct_updated'] = 'Configuratie structuur bijgewerkt';
$L['ext_dependency_error'] = '{$dep_type} &quot;{$dep_name}&quot; vereist door {$type} &quot;{$name}&quot; is niet geinstalleerd en/of niet geselecteerd voor installatie';
$L['ext_executed_php'] = 'Executed PHP handler part: {$ret}';
$L['ext_executed_sql'] = 'Executed SQL handler part: {$ret}';
$L['ext_installing'] = 'Installing {$type} &quot;{$name}&quot;';
$L['ext_invalid_format'] = 'Dit is geen geldige Cotonti >= 0.9 extensie. Neem contact op met de developer';
$L['ext_old_format'] = 'Dit is een oude Genoa/Seditio plugin. De plugin functioneert misschien niet volledig.';
$L['ext_patch_applied'] = 'Patch uitgevoerd {$f}: {$msg}';
$L['ext_patch_error'] = 'Fout bij uitvoeren patch {$f}: {$msg}';
$L['ext_setup_not_found'] = 'Installatie bestand niet gevonden: {$path}';
$L['ext_uninstall_confirm'] = 'Wil je de extensie deinstalleren? Data van de extensie wordt verwijderd.<br/><a href="{$url}">Ja, deinstalleer en verwijder data.</a>';
$L['ext_uninstalling'] = '{$type} &quot;{$name}&quot; wordt gedeïnstalleerd';
$L['ext_up2date'] = '{$type} &quot;{$name}&quot; is up to date';
$L['ext_update_error'] = 'Bijwerken {$type} &quot;{$name}&quot; mislukt';
$L['ext_updated'] = '{$type} &quot;{$name}&quot; is bijgewerkt naar versie {$ver}';
$L['ext_updating'] = '{$type} &quot;{$name}&quot; wordt bijgewerkt';

/**
  * Structure Section
 */

$L['adm_cat_exists'] = 'Een categorie met deze code bestaat al';
$L['adm_tpl_mode'] = 'Template modus';
$L['adm_tpl_empty'] = 'Standaard';
$L['adm_tpl_forced'] = 'Zelfde als';
$L['adm_tpl_parent'] = 'Zelfde als moeder categorie';
$L['adm_tpl_resyncalltitle'] = 'Resync alle pagina tellers';
$L['adm_tpl_resynctitle'] = 'Resync categorie pagina teller';
$L['adm_help_structure'] = 'De pagina\'s die behoren tot de categorie &quot;system&quot; worden niet getoond in de publieke lijst, dit is voor het maken van standalone pagina\'s.';

/**
 * Structure Section
 * Extrafields Subsection
 */

$L['adm_extrafields_desc'] = 'Voeg toe/bewerk extra velden';
$L['adm_extrafields_all'] = 'Geef alle database tabellen weer';

$L['adm_help_structure_extrafield'] = '<b>Base HTML</b> automatisch geslecteerd indien blank<br /><br />
<b>Nieuwe tags in tpl bestanden:</b><br /><br />
<u>list.tpl:</u><br /><br />
&nbsp;&nbsp;&nbsp;{LIST_XXXXX}, {LIST_XXXXX_TITLE}<br /><br />
<u>list.group.tpl:</u><br /><br />
&nbsp;&nbsp;&nbsp;{LIST_XXXXX}, {LIST_XXXXX_TITLE}<br /><br />
<u>admin.structure.inc.tpl :</u><br /><br />
&nbsp;&nbsp;&nbsp;&lt;!-- BEGIN: OPTIONS --&gt; {ADMIN_STRUCTURE_XXXXX}, {ADMIN_STRUCTURE_XXXXX_TITLE} &lt;!-- END: OPTIONS --&gt;<br /><br />
&nbsp;&nbsp;&nbsp;&lt;!-- BEGIN: DEFULT --&gt; {ADMIN_STRUCTURE_FORMADD_XXXXX}, {ADMIN_STRUCTURE_FORMADD_XXXXX_TITLE} &lt;!-- END: DEFULT --&gt;<br /><br />
<br />';

/**
 * Users Section
 */

$L['adm_rightspergroup'] = 'Rechten per groep';
$L['adm_maxsizesingle'] = 'Maximale grootte voor een los bestand in '.$L['PFS'].' (KB)';
$L['adm_maxsizeallpfs'] = 'Maximale grootte voor alle bestanden samen in '.$L['PFS'].' (KB)';
$L['adm_copyrightsfrom'] = 'Zelfde rechten als groep instellen';
$L['adm_rights_maintenance'] = 'Toegang tot website in onderhoudsmodus';

/**
 * Users Section
 * Extrafields Subsection
 */

$L['adm_help_users_extrafield'] = '<b>Base HTML</b> automatisch geslecteerd indien blank<br /><br />
<b>New tags in tpl files:</b><br /><br />
users.profile.tpl: {USERS_PROFILE_XXXXX}, {USERS_PROFILE_XXXXX_TITLE}<br /><br />
users.edit.tpl: {USERS_EDIT_XXXXX}, {USERS_EDIT_XXXXX_TITLE}<br /><br />
users.details.tpl: {USERS_DETAILS_XXXXX}, {USERS_DETAILS_XXXXX_TITLE}<br /><br />
user.register.tpl: {USERS_REGISTER_XXXXX}, {USERS_REGISTER_XXXXX_TITLE}<br /><br />
forums.posts.tpl: {FORUMS_POSTS_ROW_USERXXXXX}, {FORUMS_POSTS_ROW_USERXXXXX_TITLE}<br />';

/**
 * Plug Section
 */

$L['adm_defauth_guests'] = 'Standaard rechten voor gasten';
$L['adm_deflock_guests'] = 'Lock mask voor gasten';
$L['adm_defauth_members'] = 'Standaard rechten voor leden';
$L['adm_deflock_members'] = 'Lock mask voor leden';

$L['adm_present'] = 'Aanwezig';
$L['adm_missing'] = 'Afwezig';
$L['adm_paused'] = 'Gepauzeerd';
$L['adm_running'] = 'Operationeel';
$L['adm_partrunning'] = 'Gedeeltelijk operationeel';
$L['adm_partstopped'] = 'Gedeeltelijk gestopt';
$L['adm_installed'] = 'Geinstalleerd';
$L['adm_notinstalled'] = 'Niet geinstalleerd';

$L['adm_plugsetup'] = 'Plugin installatie';
$L['adm_override_guests'] = 'Systeem overschrijven, gasten en inactieve leden niet toegestaan';
$L['adm_override_banned'] = 'Systeem overschrijven, gebanned';
$L['adm_override_admins'] = 'System overschrijven, administratoren';

$L['adm_opt_install'] = 'Installeer';
$L['adm_opt_install_explain'] = 'Extensie installeren';
$L['adm_opt_pause'] = 'Pauzeer';
$L['adm_opt_pauseall'] = 'Pauzeer alles';
$L['adm_opt_pauseall_explain'] = 'Pauzeer alle delen van de extensie';
$L['adm_opt_update'] = 'Bijwerken';
$L['adm_opt_update_explain'] = 'Werkt de extensie bij wanneer de extensie bestanden op de server bijgewerkt zijn';
$L['adm_opt_uninstall'] = 'Deinstalleren';
$L['adm_opt_uninstall_explain'] = 'Deinstalleer de extensie volledig. Extensie bestanden zelf worden niet verwijderd';
$L['adm_opt_unpause'] = 'Pauze opheffen';
$L['adm_opt_unpauseall'] = 'Pauze opheffen voor alle delen';
$L['adm_opt_unpauseall_explain'] = 'Pauze opheffen voor alle delen van de extensie';

$L['adm_opt_setup_missing'] = 'Fout: installatie bestanden niet gevonden!';

/**
 * Tools Section
 */

$L['adm_listisempty'] = 'Lijst is leeg';

/**
 * Other Section
 * Cache Subsection
 */

$L['adm_delcacheitem'] = 'Cache item verwijderd';
$L['adm_internalcache'] = 'Interne cache';
$L['adm_purgeall_done'] = 'Cache volledig geleegd';
$L['adm_diskcache'] = 'Disk cache';

/**
 * Other Section
 * Log Subsection
 */

$L['adm_log'] = 'Systeem log';
$L['adm_infos'] = 'Informatie';
$L['adm_versiondclocks'] = 'Versie en klokken';
$L['adm_checkcorethemes'] = 'Check core files and themes';
$L['adm_checkcorenow'] = 'Controleer core bestanden nu!';
$L['adm_checkingcore'] = 'Core bestanden worden gecheckt..';
$L['adm_checkthemes'] = 'Controleer of alle bestanden aanwezig zijn in thema\'s';
$L['adm_checktheme'] = 'Controleer TPL bestanden voor het thema';
$L['adm_checkingtheme'] = 'Thema wordt gecontroleerd..';
$L['adm_check_ok'] = 'Oke';
$L['adm_check_missing'] = 'Niet aanwezig';

/**
 * Other Section
 * Infos Subsection
 */

$L['adm_phpver'] = 'PHP engine versie';
$L['adm_zendver'] = 'Zend engine versie';
$L['adm_interface'] = 'Interface tussen webserver en PHP';
$L['adm_cachedrivers'] = 'Cache drivers';
$L['adm_os'] = 'Operating system';
$L['adm_clocks'] = 'Klokken';
$L['adm_time1'] = '#1: Raw server time';
$L['adm_time2'] = '#2: GMT time van de server';
$L['adm_time3'] = '#3: GMT time + server afwijking (Cotonti referentie)';
$L['adm_time4'] = '#4: Jouw lokale tijdzone, aangepast via je profiel';
$L['adm_help_versions'] = 'Stel de server tijdzone in zodat klok #3 correct is<br />
Klok #4 is afhankelijk van de tijdzone in je profiel.<br />
Klok #1 en #2 worden niet gebruikt door Cotonti.';

/**
 * Common Entries
 */

$L['adm_area'] = 'Sectie';
$L['adm_clicktoedit'] = '(Klik om aan te passen)';
$L['adm_confirm'] = 'Klik om te bevestigen: ';
$L['adm_done'] = 'Klaar';
$L['adm_failed'] = 'Mislukt';
$L['adm_from'] = 'Van';
$L['adm_more'] = 'Meer tools..';
$L['adm_purgeall'] = 'Trim alles';
$L['adm_queue_unvalidated'] = 'Ongevalideerd';
$L['adm_queue_validated'] = 'Gevalideerd';
$L['adm_required'] = '(Vereist)';
$L['adm_setby'] = 'Ingesteld door';
$L['adm_to'] = 'Naar';
$L['adm_totalsize'] = 'Totale grootte';
$L['adm_warnings'] = 'Waarschuwingen';

$L['editdeleteentries'] = 'Bewerk of verwijder entry';
$L['viewdeleteentries'] = 'Bekijk of verwijder entry';

$L['alreadyaddnewentry'] = 'Entry toegevoegd';
$L['alreadyupdatednewentry'] = 'Entry bijgewerkt';
$L['alreadydeletednewentry'] = 'Entry verwijderd';

/**
 * Extra Fields (Common Entries for Pages & Structure & Users)
 */

$L['adm_extrafields'] = 'Extra velden';
$L['adm_extrafield_added'] = 'Nieuwe extra veld succesvol toegevoegd';
$L['adm_extrafield_not_added'] = 'Fout! Nieuwe extra veld niet toegevoegd';
$L['adm_extrafield_updated'] = 'Extra veld \'%1$s\' bijgewerkt';
$L['adm_extrafield_not_updated'] = 'Fout! Extra veld \'%1$s\' niet bijgewerkt.';
$L['adm_extrafield_removed'] = 'Extra veld succesvol verwijderd.';
$L['adm_extrafield_not_removed'] = 'Fout! Extra veld niet verwijderd.';
$L['adm_extrafield_confirmdel'] = 'Dit veld verwijderen? Alle data in dit veld gaat verloren!';
$L['adm_extrafield_confirmupd'] = 'Dit veld bijwerken? Sommige data in dit veld kan verloren gaan!';
$L['adm_extrafield_default'] = 'Standaard waarde';
$L['adm_extrafield_required'] = 'Vereist veld';
$L['adm_extrafield_parse'] = 'Parse';
$L['adm_extrafield_enable'] = 'Activeer veld';
$L['adm_extrafield_params'] = 'Veld parameters';

$L['extf_Name'] = 'Naam';
$L['extf_Type'] = 'Veld type';
$L['extf_Base_HTML'] = 'Basis HTML';
$L['extf_Page_tags'] = 'Tags';
$L['extf_Description'] = 'Beschrijving (_TITLE)';

$L['adm_extrafield_new'] = 'Nieuw extra veld';
$L['adm_extrafield_noalter'] = 'Veld niet daadwerkelijk toevoegen aan database, alleen als extra veld';
$L['adm_extrafield_selectable_values'] = 'Opties voor select en radio (komma gescheiden.)';
$L['adm_help_extrafield'] = 'Hint: Veld &quot;Base HTML&quot; automatisch geslecteerd indien blank';

/**
 * Help messages that still don't work
 */

$L['adm_help_cache'] = 'Niet beschikbaar';
$L['adm_help_check1'] = 'Niet beschikbaar';
$L['adm_help_check2'] = 'Niet beschikbaar';
$L['adm_help_config']= 'Niet beschikbaar';

?>