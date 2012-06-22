<?php

/**
 * Dutch Language File for the Users Module (users.nl.lang.php)
 *
 * @package Cotonti
 * @version 0.9.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * User authentication
 */

$L['users_nameormail'] = 'Gebruikersnaam of e-mail';
$L['users_rememberme'] = 'Onthoud mij';
$L['users_lostpass'] = 'Wachtwoord vergeten?';
$L['users_maintenance1'] = 'Website in onderhoudsmodus';
$L['users_maintenance2'] = 'Alleen administratoren hebben momenteel toegang';

/**
 * User registration
 */

$L['users_validemail'] = 'Geldig e-mail adres';
$L['users_validemailhint'] = '(Een geldig e-mail adres is vereist om de registratie te voltooien.)';
$L['users_confirmpass'] = 'Bevestig wachtwoord';

$L['aut_contactadmin'] = 'Mocht je problemen ondervinden bij het registreren, neem dan contact met ons op.';
$L['aut_emailalreadyindb'] = 'Het e-mail adres is al aanwezig in de database.';
$L['aut_emailbanned'] = 'Registratie met dit adres is niet mogelijk. Dit e-mail adres is mogelijk gebanned: ';
$L['aut_emailtooshort'] = 'Het e-mail adres is niet correct.';
$L['aut_invalidloginchars'] = 'De gegevens bevatten ongeldige tekens.';
$L['aut_logintitle'] = 'Inloggen';
$L['aut_mailnoticetitle'] = 'E-mail transitie';
$L['aut_passwordmismatch'] = 'De wachtwoorden komen niet overeen.';
$L['aut_passwordtooshort'] = 'Het wachtwoord moet minstens 4 tekens bevatten.';
$L['aut_registersubtitle'] = '';
$L['aut_registertitle'] = 'Registreren';
$L['aut_regreqnoticetitle'] = 'Nieuw account aanvragen';
$L['aut_regrequesttitle'] = 'Registratie aanvraag';
$L['aut_usernamealreadyindb'] = 'De gebruikersnaam is al aanwezig in de database.';
$L['aut_usernametooshort']= 'De gebruikersnaam moet minstens 2 tekens bevatten.';

/**
 * User registration: messages
 */

$L['aut_regrequest'] = 'Hallo %1$s,<br />
Je account is nog niet actief. Een administrator zal zo spoedig mogelijk je account activeren.<br />
Je ontvangt een e-mail wanneer je account actief is.<br />
<br /><br />
Wanneer de activatie compleet is kun je inloggen met de volgende gegevens:<br />
Gebruikersnaam = %1$s
Wachtwoord = %2$s';

$L['aut_regreqnotice'] = 'Je ontvangt deze e-mail omdat %1$s een nieuw account aangevraagd heeft.
Je kunt het account pas gebruiken wanneer het op \'actief\' gezet is via de volgende link:
%2$s';

$L['aut_emailreg'] = 'Hallo %1$s,
Om je account te kunnen gebruiken dien je het te activeren door op de volgende link te klikken:
%3$s
<br />
Je kunt inloggen met de volgende gegevens:
Gebruikersnaam = %1$s
Wachtwoord = %2$s
<br />
Om het account te annuleren klik je op de volgende link:
%4$s';

$L['aut_emailchange'] = 'Hallo %1$s,
Om je gewijzigde e-mail adres te bevestigen klik je op de volgende link:
%2$s';

/**
 * User list
 */

$L['users_usersperpage'] = 'Gebruikers per pagina';
$L['users_usersinthissection'] = 'Gebruikers totaal';

$L['pro_emailandpass'] = 'Je e-mail adres en wachtwoord kunnen niet gelijktijdig gewijzigd worden.';
$L['pro_passdiffer'] = 'De 2 wachtwoord velden komen niet overeen.';
$L['pro_passtoshort'] = 'Het wachtwoord moet minimaal 4 tekens bevatten.';
$L['pro_subtitle'] = ' Jouw account';
$L['pro_title'] = 'Profiel';
$L['pro_wrongpass'] = 'Je hebt je huidige wachtwoord niet correct ingevoerd.';
$L['pro_invalidbirthdate'] = 'Geboortedatum is niet correct.';

$L['useed_accountactivated'] = 'Account geactiveerd';
$L['useed_email'] = 'Account is succesvol geactiveerd door een administrator. Je kunt nu inloggen met je eigen gebruikersnaam en wachtwoord.';
$L['useed_subtitle'] = '&nbsp;';
$L['useed_title'] = 'Bewerk';

$L['use_allbannedusers'] = 'Gebruiker gebanned';
$L['use_allinactiveusers'] = 'Gebruiker inactief';
$L['use_allusers'] = 'Alle gebruikers';
$L['use_byfirstletter'] = 'Naam beginnend met';
$L['use_subtitle'] = 'Geregistreerde gebruikers';
$L['use_title'] = 'Gebruikers';

$L['pasrec_title'] = 'Wachtwoord vergeten';
$L['pasrec_email1'] = 'Je kan je wachtwoord resetten door de volgende link te volgen:';
$L['pasrec_email1b'] = 'Attentie: IP van de aanvrager is %1$s, en het tijdstip van de aanvraag is: %2$s.';
$L['pasrec_email2'] = 'Je wachtwoord reset is succesvol uitgevoerd.';
$L['pasrec_explain1'] = 'Voer je e-mail adres in.';
$L['pasrec_explain2'] = 'Je ontvangt een link in je e-mail inbox waarmee je het wachtwoord kan resetten.';
$L['pasrec_explain3'] = 'Wanneer de e-mail is bevestigd, ontvang je een tijdelijk wachtwoord.';
$L['pasrec_explain4'] = 'Wanneer je het wachtwoord in je profiel verwijderd hebt dien je contact op te nemen met een administrator.';
$L['pasrec_mailsent'] = 'Wachtwoord aanvraag succesvol. Controleer je e-mail inbox en klik op de link in de e-mail.';
$L['pasrec_mailsent2'] = 'Wachtwoord reset succesvol. Controleer je e-mail inbox om je nieuwe wachtwoord te bekijken.';
$L['pasrec_request'] = 'Aanvragen';
$L['pasrec_youremail'] = 'Jouw e-mail adres:';

/**
 * User details
 */

$L['users_sendpm'] = 'Stuur een privébericht';

/**
 * User profile & edit
 */

$L['users_id'] = 'Gebruiker ID';
$L['users_hideemail'] = 'E-mail adres altijd verbergen';
$L['users_pmnotify'] = 'Privébericht notificatie';
$L['users_pmnotifyhint'] = '(E-mail notificatie bij nieuw privébericht)';
$L['users_newpass'] = 'Nieuw wachtwoord';
$L['users_newpasshint1'] = '(Veld leeg laten om huidig wachtwoord te behouden)';
$L['users_newpasshint2'] = '(Vul je wachtwoord tweemaal in)';
$L['users_oldpasshint'] = '(Vul je huidig wachtwoord in om te wijzigen)';
$L['users_lastip'] = 'Laatst bekende IP';
$L['users_logcounter'] = 'Log teller';
$L['users_deleteuser'] = 'Verwijder gebruiker';

/**
 * Moved from theme.lang
 */

$themelang['usersprofile']['Emailpassword'] = 'Je huidig wachtwoord';
$themelang['usersprofile']['Emailnotes'] = '<p><b>E-mail transitie (Wanneer e-mail transitie beschikbaar is en e-mail adres validatie vereist is.):</b></p>
<ol>
	<li>Huidig e-mail adres kan niet worden gebruikt</li>
	<li>Wegens beveiligings redenen ben je verplicht je huidig wachtwoord in te voeren</li>
	<li>Je dient het account opnieuw te valideren om je e-mail adres te bevestigen</li>
	<li>Je account is pas actief wanneer de validatie voltooid is</li>
	<li>Mocht je een typfout hebben gemaakt, neem dan contact op met een administrator</li>
</ol>
<p><b>Wanneer het valideren niet vereist is wordt je account direct geactiveerd.</b></p>';

?>