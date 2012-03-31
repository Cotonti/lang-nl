<?php
/**
 * Dutch Language File for Banlist (banlist.nl.lang.php)
 *
 * @package Banlist
 * @version 0.9.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['info_desc'] = 'Administratie tool voor het bannen van gebruikers via IP of e-mail adres';

/**
 * Plugin Body
 */

$L['banlist_title'] = 'Banlijst';
$L['banlist_ipmask'] = 'IP mask';
$L['banlist_emailmask'] = 'E-mail mask';
$L['banlist_reason'] = 'Reden';
$L['banlist_duration'] = 'Duur';
$L['banlist_neverexpire'] = 'Nooit verlopen';

$L['banlist_help'] = 'Voorbeelden van IP masks: 194.31.13.41, 194.31.13.*, 194.31.*.*, 194.*.*.*<br />Voorbeelden voor e-mail masks: @hotmail.com, @yahoo (Wildcards worden niet ondersteund)<br />Een regel kan 1 IP mask en/of e-mail mask bevatten. <br />IP\'s worden gefiltered voor elke pagina die wordt weergegeven. E-mail masks worden toegepast bij registraties.';

?>