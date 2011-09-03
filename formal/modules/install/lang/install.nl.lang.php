<?php
/**
 * Dutch formal Language File for the Install Module (install.nl.lang.php)
 *
 * @package install
 * @version 0.9.4
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['Complete'] = 'Compleet';
$L['Finish'] = 'Voltooien';
$L['Install'] = 'Installeer';
$L['Next'] = 'Volgende';

$L['install_adminacc'] = 'Administrator account';
$L['install_body_title'] = 'Cotonti Web Installer';
$L['install_body_message1'] = 'Dit script configureert de basis installatie en configuratie van Cotonti voor u.';
$L['install_body_message2'] = 'Wij raden u aan om datas/config-sample.php te wijzigen naar datas/config.php. Zet vervolgens de CHMOD op 666 op het bestand datas/config.php voordat u dit script draait.';
$L['install_body_message3'] = 'U dient eerst een <strong>nieuwe database</strong> aan te maken op u server.';
$L['install_chmod_value'] = 'CHMOD {$chmod}';
$L['install_complete'] = 'Installatie is succesvol afgerond!';
$L['install_complete_note'] = 'U mag install.php verwijderen en het bestand datas/config.php terugzetten naar CHMOD 644 tot aan de volgende update voor betere beveiliging.';
$L['install_db'] = 'MySQL database instellingen';
$L['install_db_host'] = 'Database host';
$L['install_db_user'] = 'Database gebruiker';
$L['install_db_pass'] = 'Database wachtwoord';
$L['install_db_name'] = 'Database naam';
$L['install_db_x'] = 'Tabel prefix';
$L['install_dir_not_found'] = 'Installatie map niet gevonden.';
$L['install_error_config'] = 'Kan het configuratie bestand niet aanmaken of bewerken. Sla het bestand config-sample.php op als config.php and zet de CHMOD op 777.';
$L['install_error_sql'] = 'Kan geen connectie maken met de MySQL database. Controleer uw instellingen.';
$L['install_error_sql_db'] = 'Kan de juiste MySQL database niet selecteren. Controleer uw instellingen.';
$L['install_error_sql_ext'] = 'Cotonti vereist dat de PHP extensie pdo_mysql geladen is.';
$L['install_error_sql_script'] = 'Uitvoeren van SQL script is mislukt: {$msg}';
$L['install_error_sql_ver'] = 'Cotonti vereist MySQL versie 5.0.7 of nieuwer. Uw MySQL versie is: {$ver}.';
$L['install_error_mainurl'] = 'U dient de hoofd URL aan te geven voor uw website.';
$L['install_error_mbstring'] = 'Cotontie vereist dat de PHP extensie mbstring is geladen.';
$L['install_error_missing_file'] = '{$file} niet gevonden. Upload dit bestand om verder te gaan.';
$L['install_error_php_ver'] = 'Cotonti vereist PHP versie 5.2.3 of nieuwer. Uw versie is: {$ver}.';
$L['install_misc'] = 'Overige instellingen';
$L['install_misc_lng'] = 'Standaard taal';
$L['install_misc_theme'] = 'Standaard thema';
$L['install_misc_url'] = 'Website URL (geen slash (/) op het eind)';
$L['install_parsing'] = 'Parsing modus';
$L['install_parsing_hint'] = 'Parsing modus wordt globaal ingestelt op uw website. Wanneer u HTML kiest worden alle bestaande items automatisch omgezet naar HTML. Dit kan niet meer veranderd worden.';
$L['install_permissions'] = 'Bestand/Map permissies';
$L['install_recommends'] = 'Aan te raden';
$L['install_requires'] = 'Vereist';
$L['install_retype_password'] = 'Voer wachtwoord opnieuw in';
$L['install_step'] = 'Stap {$step} van de {$total}';
$L['install_title'] = 'Cotonti Web Installer';
$L['install_update'] = 'Cotonti wordt bijgewerkt';
$L['install_update_config_error'] = 'Kan datas/config.php niet bijwerken. Zet CHMOD op 644 of 666 en probeer opnieuw. Controleer dat datas/config-sample.php aanwezig is.';
$L['install_update_config_success'] = 'datas/config.php is succesvol bijgewerkt.';
$L['install_update_error'] = 'Bijwerken mislukt';
$L['install_update_nothing'] = 'Niks om bij te werken';
$L['install_update_patch_applied'] = 'Toegepaste patch {$f}: {$msg}';
$L['install_update_patch_error'] = 'Fout bij toepassen patch {$f}: {$msg}';
$L['install_update_patches'] = 'Toegepaste patches:';
$L['install_update_success'] = 'Succesvol bijgewerkt naar revisie: {$rev}';
$L['install_update_template_not_found'] = 'Bijwerk template niet gevonden';
$L['install_upgrade'] = 'Systeem is klaar om globale upgrade uit te voeren.';
$L['install_upgrade_error'] = 'Cotonti upgraden naar versie: {$ver} is mislukt.';
$L['install_upgrade_success'] = 'Cotonti is succesvol geupgrade naar versie: {$ver}';
$L['install_upgrade_success_note'] = 'Alle Genoa plugins zijn gedeïnstalleerd om compatibiliteits problemen te voorkomen. Deze plugins kunt u zelf later bijwerken.';
$L['install_ver'] = 'Server informatie';
$L['install_ver_invalid'] = '{$ver} &mdash; ongeldig!';
$L['install_ver_valid'] = '{$ver} &mdash; geldig!';
$L['install_view_site'] = 'Bekijk de website';
$L['install_writable'] = 'Schrijfbaar';

?>