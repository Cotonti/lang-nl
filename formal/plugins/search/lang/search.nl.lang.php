<?php

/**
 * Dutch formal Language File for Search Plugin (search.nl.lang.php)
 *
 * @package search
 * @version 0.9.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Title & Subtitle
 */

$L['plu_search'] = 'Zoeken';

/**
 * Plugin Body
 */

// Common - title, info, query
$L['plu_search_req'] = 'Zoekterm';
$L['plu_search_key'] = 'Zoeken';
$L['plu_search_forums'] = 'Zoek in forums';
$L['plu_search_pages'] = 'Zoek in pagina\'s';

// Mode selectors and result titles
$L['plu_tabs_all'] = 'Alles';
$L['plu_tabs_frm'] = 'Forums';
$L['plu_tabs_pag'] = 'Pagina\'s';

// Parameters - common
$L['plu_ctrl_list'] = 'Selecteer meerdere secties door CTRL in te houden';
$L['plu_allsections'] = 'Alle secties';
$L['plu_allcategories'] = 'Alle categorieën';
$L['plu_res_sort'] = 'Sorteer resultaten op';
$L['plu_sort_desc'] = 'Aflopend';
$L['plu_sort_asc'] = 'Oplopend';
$L['plu_other_opt'] = 'Optionale parameters';
$L['plu_other_date'] = 'Voeg datum toe';
$L['plu_other_userfilter'] = 'Filter gebruikers';

// Parameters - dates
$L['plu_any_date'] = 'Alle data';
$L['plu_last_2_weeks'] = 'Laatste 2 weken';
$L['plu_last_1_month'] = 'Laatste maand';
$L['plu_last_3_month'] = 'Laatste 3 maanden';
$L['plu_last_1_year'] = 'Laaste jaar';
$L['plu_need_datas'] = 'Aangepaste periode';

// Parameters - forums
$L['plu_frm_set_sec'] = 'Selecteer forum secties';
$L['plu_frm_res_sort1'] = 'Onderwerp bijgewerkt';
$L['plu_frm_res_sort2'] = 'Onderwerp geplaatst';
$L['plu_frm_res_sort3'] = 'Onderwerp titel';
$L['plu_frm_res_sort4'] = 'Aantal reacties';
$L['plu_frm_res_sort5'] = 'Aantal keer bekeken';
$L['plu_frm_res_sort6'] = 'Sectie';
$L['plu_frm_search_names'] = 'Zoeken in onderwerp titels';
$L['plu_frm_search_post'] = 'Zoeken in berichten';
$L['plu_frm_search_answ'] = 'Laat alleen onderwerpen met reacties zien';
$L['plu_frm_set_subsec'] = 'Zoek ook in subsecties';

// Parameters - pages
$L['plu_pag_set_sec'] = 'Selecteer pagina categorie';
$L['plu_pag_res_sort1'] = 'Datum geplaatst';
$L['plu_pag_res_sort2'] = 'Titel';
$L['plu_pag_res_sort3'] = 'Populariteit';
$L['plu_pag_res_sort3'] = 'Categorie';
$L['plu_pag_search_names'] = 'Zoek in pagina titels';
$L['plu_pag_search_desc'] = 'Zoek in pagina beschrijvingen';
$L['plu_pag_search_text'] = 'Zoek in pagina tekst';
$L['plu_pag_search_file'] = 'Alleen pagina\'s met bestanden weergeven';
$L['plu_pag_set_subsec'] = 'Zoek ook in subcategorieën';

// Error messages
$L['plu_querytooshort'] = 'De zoekterm is te kort.';
$L['plu_toomanywords'] = 'Zoekterm is te lang, maximale zoekterm is:';
$L['plu_noneresult'] = 'Geen resultaten, probeer een andere zoekterm.';
$L['plu_usernotexist'] = 'Gebruiker niet gevonden.';

// Results
$L['plu_result'] = 'Zoekresultaten';
$L['plu_found'] = 'Gevonden';
$L['plu_match'] = 'Overeenkomsten';
$L['plu_section'] = 'Sectie';
$L['plu_last_date'] = 'Laatst bijgewerkt';

/**
 * Plugin Config
 */

$L['cfg_maxwords'] = 'Max. aantal woorden in zoekterm';
$L['cfg_maxsigns'] = 'Max. aantal letters in zoekterm';
$L['cfg_maxitems'] = 'Max. items in zoekresultaten';
$L['cfg_minsigns'] = 'Min. aantal karakters in zoekterm';
$L['cfg_pagesearch'] = 'Activeer pagina zoekfunctie';
$L['cfg_forumsearch'] = 'Activeer forums zoekfunctie';
$L['cfg_searchurl'] = 'Soort forumbericht link om te gebruiken';
$L['cfg_searchurl_hint'] = 'Single gebruikt single bericht view, terwijl Normaal de traditionele onderwerp/spring-naar link gebruikt';

$L['cfg_addfields'] = 'Additionele pagina velden voor zoeken, gescheiden met komma\'s';
$L['cfg_addfields_hint'] = '"Voorbeeld page_extra1,page_extra2,page_key"';

$L['cfg_extrafilters'] = 'Geef extra filters weer op de zoekpagina';

$L['info_desc'] = 'Zoek in pagina\'s, forums en andere afdelingen van de website met geavanceerde opties';