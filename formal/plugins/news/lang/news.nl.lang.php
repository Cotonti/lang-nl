<?php
/**
 * Dutch formal Language File for News Plugin (news.nl.lang.php)
 *
 * @package news
 * @version 0.9.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Config
 */

$L['cfg_category'] = array('Nieuws categorieën', 'Nieuws categorie codes scheiden met komma\'s.<br />Gebruik {INDEX_NEWS} in index.tpl om de nieuws categorie weer te geven op de homepage.<br />Additionele nieuws categorieën kunnen worden weergegeven op de homepage doormiddel van de <strong>{INDEX_NEWS_CATEGORYCODE}</strong> tag in index.tpl.<br />Gebruik <strong>news.categorycode.tpl</strong> template(s) om de layout van nieuws categorieën te wijzigen.');
$L['cfg_maxpages'] = array('Aantal weer te geven recente pagina\'s');
$L['cfg_syncpagination'] = array('Sync paginering');

$L['info_desc'] = 'Gebruik pagina\'s van een categorie en geef de laatste items weer op de homepage.';

$L['Maincat']='Hoofd nieuws categorie';
$L['Addcat']='Additionele nieuws categorieën';
$L['NewsCount']='Niews per pagina';
$L['Template']='Template';
$L['Template_help']='Indien een additionele nieuws categorie template niet aanwezig is in de {YOUR_SKIN}/plugins folder, gebruikt het systeem de hoofd nieuws template.';
$L['Newscat_exists']='Deze nieuws categorie is al in gebruik. Kies een andere categorie of verwijder deze.';
$L['Unsetadd']= 'Gebruik geen additionele categorie wanneer deze hetzelfde is als de hoofd categorie.';
$L['Newsautocut']='Limiet voor bericht lengte.';
$L['Newsautocutdesc']='Dit zal alleen een specifiek aantal karakters tonen vanaf het begin van het nieuwsbericht. Standaard is deze optie uitgeschakeld.';
$L['news_help'] = '';

?>