<?php
/**
 * Dutch Informal Language File for SiteXML plugin
 *
 * @package sitemap
 * @author Cotonti Team
 * @copyright Copyright (c) Cotonti Team 2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['info_desc'] = 'XML-sitemap with content data for search engines';

$sitemap_freqs = array(
	'default' => 'Standaard',
	'always'  => 'Altijd',
	'hourly'  => 'Elk uur',
	'daily'   => 'Dagelijks',
	'weekly'  => 'Wekelijks',
	'monthly' => 'Maandelijks',
	'yearly'  => 'Jaarlijks',
	'never'   => 'Nooit'
);

$L['cfg_cache_ttl']          = 'Cache tijd to live';
$L['cfg_freq']               = 'Standaard update frequentie';
$L['cfg_freq_params']        = $sitemap_freqs;
$L['cfg_prio']               = 'Standaard prioriteit';
$L['cfg_perpage'] = array('Max items per sitemap pagina', 'Sitemaps worden in delen gesplitst wanneer er meerdere links zijn, zie http://yoursite/index.php?r=sitemap&a=index');
$L['cfg_index_freq']         = 'Homepagina update frequentie';
$L['cfg_index_freq_params']  = $sitemap_freqs;
$L['cfg_index_prio']         = 'Homepagina prioriteit';
$L['cfg_page']               = 'Activeer pagina\'s';
$L['cfg_page_freq']          = 'Pagina update frequentie';
$L['cfg_page_freq_params']   = $sitemap_freqs;
$L['cfg_page_prio']          = 'Pagina prioriteit';
$L['cfg_forums']             = 'Activeer forums';
$L['cfg_forums_freq']        = 'Forums update frequentie';
$L['cfg_forums_freq_params'] = $sitemap_freqs;
$L['cfg_forums_prio']        = 'Forums prioriteit';
$L['cfg_users']              = 'Activeer gebruikers';
$L['cfg_users_freq']         = 'Gebruikers update frequentie';
$L['cfg_users_freq_params']  = $sitemap_freqs;
$L['cfg_users_prio']         = 'Gebruikers prioriteit';
?>