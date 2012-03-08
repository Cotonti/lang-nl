<?php
/**
 * Dutch formal Language File for RecentItems Plugin (recentitems.nl.lang.php)
 *
 * @package recentitems
 * @version 0.9.4
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Config
 */

$L['cfg_part'] = array('Deel van waar de recente items opgeroepen moeten worden.');
$L['cfg_recentpages'] = array('Recente pagina\'s op index');
$L['cfg_maxpages'] = array('Recente pagina\'s weergegeven');
$L['cfg_recentforums'] = array('Recente forums op index');
$L['cfg_maxtopics'] = array('Recente onderwerpen in forum weergegeven');
$L['cfg_newpages'] = array('Recente pagina\'s in standalone module');
$L['cfg_newforums'] = array('Recente forums in standalone module');
$L['cfg_newadditional'] = array('Additionele modules in standalone module');
$L['cfg_itemsperpage'] = array('Elementen per pagina in standalone module');
$L['cfg_rightscan'] = array('Activeer prescanning categorie rechten');
$L['cfg_recentpagestitle'] = array('Recente pagina\'s titel lengte limiet', 'Dit geeft alleen een specifiek aantal karakters weer vanaf het begin. Standaard is deze optie uitgeschakeld.');
$L['cfg_recentpagestext'] = array('Recente pagina\'s text lengte limiet', 'Dit geeft alleen een specifiek aantal karakters weer vanaf het begin. Standaard is deze optie uitgeschakeld');
$L['cfg_recentforumstitle'] = array('Recente forums title lengte limiet', 'Dit geeft alleen een specifiek aantal karakters weer vanaf het begin. Standaard is deze optie uitgeschakeld');
$L['cfg_newpagestext'] = array('Nieuwe pagina\'s tekst lengte limiet', 'Dit geeft alleen een specifiek aantal karakters weer vanaf het begin. Standaard is deze optie uitgeschakeld');
$L['cfg_whitelist'] = array('Witte lijst voor categorieën', '1 code per regel. Alleen deze categorieën worden getoond indien ze niet leeg zijn.');
$L['cfg_blacklist'] = array('Zwarte lijst voor categorieën', '1 code per regel. Alleen deze categorieën worden gefilterd indien ze niet leeg zijn.');

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

?>