<?php
/**
 * Dutch Language File for the PM Module (pm.nl.lang.php)
 *
 * @package pm
 * @version 0.9.4
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */

$L['cfg_allownotifications'] = array('Sta privébericht notificaties toe via e-mail', '');
$L['cfg_maxsize'] = array('Maximale lengte voor bericht', '');
$L['cfg_maxpmperpage'] = array('Max. aantal berichten per pagina', ' ');
$L['info_desc'] = 'Privéberichten bieden je de mogelijkheid om binnen de website te communiceren met andere gebruikers';

/**
 * Other
 */

$L['adm_pm_totaldb'] = 'Privéberichten in database';
$L['adm_pm_totalsent'] = 'Totaal aantal verzonden privéberichten';

/**
 * Main
 */

$L['pmsend_title'] = 'Stuur nieuw privébericht';
$L['pmsend_subtitle'] = 'Nieuw privébericht formulier';

$L['pm_bodytoolong'] = 'Inhoud van het privébericht is te lang, '.$cfg['pm']['pm_maxsize'].' is het maximale aantal karakters';
$L['pm_bodytooshort'] = 'Inhoud van het privébericht is te kort';
$L['pm_inbox'] = 'Inbox';
$L['pm_inboxsubtitle'] = 'Privéberichten, nieuwste bericht staat bovenaan';
$L['pm_norecipient'] = 'Geen ontvanger gespecificeerd';
$L['pm_notifytitle'] = 'Nieuw privébericht';
$Ls['Privatemessages'] = array('Nieuwe privéberichten','nieuw privébericht');
$L['pm_replyto'] = 'Reageer op deze gebruiker';
$L['pm_sendnew'] = 'Stuur nieuw privébericht';
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
Je hebt een nieuw privébericht ontvangen van %2$s.
Klik op de volgende link om het privébericht te lezen: %3$s.';

?>