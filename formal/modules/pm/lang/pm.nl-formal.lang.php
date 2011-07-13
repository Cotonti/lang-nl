<?php
/**
 * Dutch formal Language File for the PM Module (pm.nl-formal.lang.php)
 *
 * @package pm
 * @version 0.7.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */

$L['cfg_allownotifications'] = array('Sta priv&eacute;bericht notificaties toe via e-mail', '');
$L['cfg_maxsize'] = array('Maximale lengte voor bericht', '');
$L['cfg_maxpmperpage'] = array('Max. aantal berichten per pagina', ' ');
$L['info_desc'] = 'Priv&eacute;berichten bieden u de mogelijkheid om binnen de website te communiceren met andere gebruikers';

/**
 * Other
 */

$L['adm_pm_totaldb'] = 'Priv&eacute;berichten in database';
$L['adm_pm_totalsent'] = 'Totaal aantal verzonden priv&eacute;berichten';

/**
 * Main
 */

$L['pmsend_title'] = 'Stuur nieuwe priv&eacute;bericht';
$L['pmsend_subtitle'] = 'Nieuw priv&eacute;bericht formulier';

$L['pm_bodytoolong'] = 'Inhoud van het priv&eacute;bericht is te lang, '.$cfg['pm']['pm_maxsize'].' is het maximale aantal karakters';
$L['pm_bodytooshort'] = 'Inhoud van het priv&eacute;bericht is te kort';
$L['pm_inbox'] = 'Inbox';
$L['pm_inboxsubtitle'] = 'Priv&eacute;berichten, nieuwste bericht staat bovenaan';
$L['pm_norecipient'] = 'Geen ontvanger gespecificeerd';
$L['pm_notifytitle'] = 'Nieuwe priv&eacute;bericht';
$Ls['Privatemessages'] = array('Nieuwe priv&eacute;berichten','nieuw priv&eacute;bericht');
$L['pm_replyto'] = 'Reageer op deze gebruiker';
$L['pm_sendnew'] = 'Stuur nieuwe priv&eacute;bericht';
$L['pm_sentbox'] = 'Outbox';
$L['pm_sentboxsubtitle'] = 'Verzonden berichten';
$L['pm_titletooshort'] = 'Titel is te kort';
$L['pm_toomanyrecipients'] = '%1$s is het maximale aantal ontvangers';
$L['pm_wrongname'] = 'Een ontvanger was onjuist, deze is van de lijst verwijderd.';
$L['pm_messageshistory'] = 'Berichten geschiedenis';
$L['pm_notmovetosentbox'] = 'Niet in outbox plaatsen"';

$L['pm_filter'] = 'Filter';
$L['pm_all'] = 'Bekijk alles';
$L['pm_starred'] = 'Gemarkeerd';
$L['pm_unread'] = 'Ongelezen';
$L['pm_deletefromstarred'] = 'Verwijder uit gemarkeerd';
$L['pm_putinstarred'] = 'Voeg toe aan gemarkeerd';
$L['pm_read'] = 'Lezen';
$L['pm_selected'] = 'Geselecteerd';
	
/**
 * Private messages: notification
 */

$L['pm_notify'] = 'Hallo %1$s,
U heeft een nieuwe priv&eacute;bericht ontvangen van %2$s.
Klik op de volgende link om het priv&eacute;bericht te lezen: %3$s.';

?>