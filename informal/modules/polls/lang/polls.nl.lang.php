<?php
/**
 * Dutch Language File for the Polls Module (polls.nl.lang.php)
 *
 * @package polls
 * @version 0.7.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Admin
 */

$L['adm_help_polls'] = 'Vul het poll formulier in om een nieuwe poll aan te maken. Lege velden worden automatisch verwijderd. Het is niet aanbevolen om een bestaande poll te wijzigen, dit is om een accuraat poll resultaat te houden.';
$L['adm_polls_forumpolls'] = 'Polls van forums (meest recent bovenaan):';
$L['adm_polls_indexpolls'] = 'Index polls (meest recent bovenaan):';
$L['adm_polls_msg916_bump'] = 'Succesvol gebumped!';
$L['adm_polls_msg916_deleted'] = 'Succesvol verwijderd!';
$L['adm_polls_msg916_reset'] = 'Reset succesvol';
$L['adm_polls_polltopic'] = 'Poll onderwerp';
$L['adm_polls_nopolls'] = 'Er zijn momenteel geen polls';

$L['poll'] = 'Poll';
$L['polls_alreadyvoted'] = 'Je hebt al op deze poll gestemd.';
$L['polls_created'] = 'De poll is succesvol aangemaakt';
$L['polls_error_count'] = 'Een poll moet 2 of meer opties hebben';
$L['polls_error_title'] = 'Poll naam is te kort';
$L['polls_locked'] = 'Poll gesloten'; // New in 1.0.0
$L['polls_multiple'] = 'Sta meerdere keuzes toe';
$L['polls_notyetvoted'] = 'Je kan stemmen door een keuze te maken.';
$L['polls_registeredonly'] = 'Alleen geregistreerde gebruikers kunnen stemmen';
$L['polls_since'] = 'sinds';
$L['polls_updated'] = 'De poll is succesvol bijgewerkt';
$L['polls_viewarchives'] = 'Bekijk alle polls';
$L['polls_viewresults'] = 'Bekijk resultaten';
$L['polls_Vote'] = 'Stemmen';
$L['polls_votecasted'] = 'Je stem is geregistreerd';
$L['polls_votes'] = 'Stemmen';

/**
 * Config
 */
$L['cfg_del_dup_options'] = array('Force duplicate option removal', ' Remove duplicate options even if it is already in the database');

$L['cfg_ip_id_polls'] = array('Vote counting method', '');
$L['cfg_max_options_polls'] = array('Max number of options', 'Options above this limit will be automatically removed');
$L['cfg_maxpolls'] = array('Number of polls displayed on index');
$L['cfg_mode'] = array('Poll display mode on index', '&quot;Recent polls&quot; displays last poll(s)<br />&quot;Random polls&quot; displays random poll(s)');
$L['cfg_mode_params'] = array('Recent polls', 'Random polls');

$L['info_desc'] = 'Laat gebruikers stemmen voor een of meerdere opties';

/**
 * Moved from theme.lang
 */

$L['polls_voterssince'] = 'Stemmen sinds';
$L['polls_allpolls'] = 'Alle polls';

?>