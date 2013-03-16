<?php
/**
 * Dutch formal Language File for RecentItems Plugin (recentitems.nl.lang.php)
 *
 * @package recentitems
 * @version 0.9.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Config
 */

$L['cfg_recentpages'] = 'Recente pagina\'s op index';
$L['cfg_maxpages'] = 'Recente pagina\'s weergegeven';
$L['cfg_recentforums'] = 'Recente forums op index';
$L['cfg_maxtopics'] = 'Recente onderwerpen in forum weergegeven';
$L['cfg_newpages'] = 'Recente pagina\'s in standalone module';
$L['cfg_newforums'] = 'Recente forums in standalone module';
$L['cfg_newadditional'] = 'Additionele modules in standalone module';
$L['cfg_itemsperpage'] = 'Elementen per pagina in standalone module';
$L['cfg_rightscan'] = 'Activeer prescanning categorie rechten';
$L['cfg_recentpagestitle'] = 'Recente pagina\'s titel lengte limiet';
$L['cfg_recentpagestitle_hint'] = 'Dit geeft alleen een specifiek aantal karakters weer vanaf het begin. Standaard is deze optie uitgeschakeld.';
$L['cfg_recentpagestext'] = 'Recente pagina\'s text lengte limiet';
$L['cfg_recentpagestext_hint'] = 'Dit geeft alleen een specifiek aantal karakters weer vanaf het begin. Standaard is deze optie uitgeschakeld';
$L['cfg_recentforumstitle'] = 'Recente forums title lengte limiet';
$L['cfg_recentforumstitle_hint'] = 'Dit geeft alleen een specifiek aantal karakters weer vanaf het begin. Standaard is deze optie uitgeschakeld';
$L['cfg_newpagestext'] = 'Nieuwe pagina\'s tekst lengte limiet';
$L['cfg_newpagestext_hint'] = 'Dit geeft alleen een specifiek aantal karakters weer vanaf het begin. Standaard is deze optie uitgeschakeld';
$L['cfg_whitelist'] = 'Witte lijst voor categorieën';
$L['cfg_whitelist_hint'] = '1 code per regel. Alleen deze categorieën worden getoond indien ze niet leeg zijn.';
$L['cfg_blacklist'] = 'Zwarte lijst voor categorieën';
$L['cfg_blacklist_hint'] = '1 code per regel. Alleen deze categorieën worden gefilterd indien ze niet leeg zijn.';

$L['info_desc'] = 'Geef recente site toevoegingen weer (pagina\'s, onderwerpen) op index.';

/**
 * Plugin Body
 */

$L['recentitems_title'] = 'Recente items';
$L['recentitems_forums'] = 'Nieuw in forums';
$L['recentitems_pages'] = 'Nieuwe pagina\'s';

$L['recentitems_nonewpages'] = 'Geen nieuwe pagina\'s';
$L['recentitems_nonewposts'] = 'Geen nieuwe berichten';

$L['recentitems_shownew'] = 'Geef nieuwe items weer';
$L['recentitems_fromlastvisit'] = 'vanaf mijn laatste bezoek';
$L['recentitems_1day'] = 'sinds gister';
$L['recentitems_2days'] = 'sinds 2 dagen';
$L['recentitems_3days'] = 'sinds 3 dagen';
$L['recentitems_1week'] = 'sinds 1 week';
$L['recentitems_2weeks'] = 'sinds 2 weken';
$L['recentitems_1month'] = 'sinds 1 maand';

$L['recentitems_posts'] = 'Geen nieuwe berichten';
$L['recentitems_posts_new'] = 'Nieuwe berichten';
$L['recentitems_posts_hot'] = 'Geen nieuwe berichten (populair)';
$L['recentitems_posts_new_hot'] = 'Nieuwe berichten (populair)';
$L['recentitems_posts_sticky'] = 'Sticky';
$L['recentitems_posts_new_sticky'] = 'Nieuwe berichten (sticky)';
$L['recentitems_posts_locked'] = 'Gesloten';
$L['recentitems_posts_new_locked'] = 'Nieuwe berichten(gesloten)';
$L['recentitems_posts_sticky_locked'] = 'Aankondiging';
$L['recentitems_posts_new_sticky_locked'] = 'Nieuwe aankondiging';
$L['recentitems_posts_moved'] = 'Verplaats naar andere sectie';