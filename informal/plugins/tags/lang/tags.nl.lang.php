<?php
/**
 * Dutch Language File for Tags Plugin (tags.nl.lang.php)
 *
 * @package tags
 * @version 0.9.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Info
 */

$L['info_desc'] = 'Biedt site content gerelateerde tags, keywords, tag clouds, tag search and API';

/**
 * Plugin Title & Subtitle
 */

$L['plu_title'] = 'Tags';

/**
 * Plugin Body
 */

$L['tags_All'] = 'Alle tags';
$L['tags_comma_separated'] = 'Scheiden met een komma (tag1,tag2,etc)';
$L['tags_Found_in_forums'] = 'Gevonden forums';
$L['tags_Found_in_pages'] = 'Gevonden in pagina\'s';
$L['tags_Keyword'] = 'Keyword';
$L['tags_Keywords'] = 'Keywords';
$L['tags_Orderby'] = 'Sorteer resultaten op';
$L['tags_Query_hint'] = 'Verschillende komma gescheiden tags zullen worden geinterpreteerd als logisch. Je kunt ook een dubbele punt gebruiken voor logisch OF. EN heeft hogere prioriteit dan OF en er kunnen geen haakjes worden gebruikt voor logisch groepering. Sterretjes (*) tussen een tag worden gezien als een mask for &quot;elke string&quot;.';
$L['tags_Search_results'] = 'Zoekresultaten';
$L['tags_Search_tags'] = 'Zoek tags';
$L['tags_Tag_cloud'] = 'Tag Cloud';
$L['tags_Tag_cloud_none'] = 'Geen tags';

/**
 * Plugin Config
 */

$L['cfg_forums'] = 'Activeer tags in forums';
$L['cfg_index'] = 'Index pagina tag cloud locatie';
$L['cfg_limit'] = 'Max. aantal tags per item, 0 voor ongelimiteerd';
$L['cfg_lim_forums'] = 'Tag limiet voor forums tag cloud, 0 voor ongelimiteerd';
$L['cfg_lim_index'] = 'Tag limiet voor index (homepage) tag cloud, 0 voor ongelimiteerd';
$L['cfg_lim_pages'] = 'Tag limiet voor pagina\'s tag cloud, 0 voor ongelimiteerd';
$L['cfg_more'] = 'Geef &quot;alle tags&quot; link weer in tag clouds';
$L['cfg_order'] = 'Cloud output volgorde &mdash; alfabetisch, aflopend of willekeurig';
$L['cfg_pages'] = 'Activeer tags in pagina\'s';
$L['cfg_perpage'] = 'Tags weergeven per pagina in standalone cloud, 0 is alles tegelijk';
$L['cfg_sort'] = 'Standaard sorteer kolom voor tag zoekresultaten';
$L['cfg_sort_params'] = 'ID: ID, Title: Titel, Date: Datum, Category: Categorie';

$L['cfg_title'] = 'Kapitaliseer de eerste letters van het keyword';
$L['cfg_translit'] = 'Zet tags om in URLs';
$L['cfg_css'] = 'Gebruik plugin\'s CSS';

?>