<?php
/**
 * Dutch formal Language File for the Page Module (page.nl.lang.php)
 *
 * @package page
 * @version 0.9.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */

$L['cfg_autovalidate'] = 'Valideer pagina automatisch';
$L['cfg_autovalidate_hint'] = 'Automatisch pagina valideren wanneer auteur administratie rechten heeft voor de categorie';
$L['cfg_count_admin'] = 'Tel administrator hits';
$L['cfg_count_admin_hint'] = '';
$L['cfg_maxlistsperpage'] = 'Max. aantal lijsten per page';
$L['cfg_maxlistsperpage_hint'] = ' ';
$L['cfg_order'] = 'Sortering kolommen';
$L['cfg_title_page'] = 'Pagina titel tag format';
$L['cfg_title_page_hint'] = 'Opties: {TITLE}, {CATEGORY}';
$L['cfg_way'] = 'Sorteer richting';
$L['cfg_truncatetext'] = 'Maximale lengte voor ingekorte tekst';
$L['cfg_truncatetext_hint'] = '0 om deze functie uit te schakelen';
$L['cfg_allowemptytext'] = 'Lege pagina toestaan';
$L['cfg_keywords'] = 'Keywords';

$L['info_desc'] = 'Uit te breiden content management functionaliteit: pagina\'s\ en pagina categorieën.';

/**
 * Structure Config
 */

$L['cfg_order_params'] = array(); // Redefined in cot_page_config_order()
$L['cfg_way_params'] = array($L['Oplopend'], $L['Aflopend']);

/**
 * Extrafields Subsection
 */

$L['adm_help_pages_extrafield'] = '<p><em>Base HTML</em> automatisch geslecteerd indien blank</p>
<p class="margintop10"><b>Nieuwe tags in tpl bestanden:</b></p>
<ul class="follow">
<li>page.tpl: {PAGE_XXXXX}, {PAGE_XXXXX_TITLE}</li>
<li>page.add.tpl: {PAGEADD_FORM_XXXXX}, {PAGEADD_FORM_XXXXX_TITLE}</li>
<li>page.edit.tpl: {PAGEEDIT_FORM_XXXXX}, {PAGEEDIT_FORM_XXXXX_TITLE}</li>
<li>page.list.tpl: {LIST_ROW_XXXXX}, {LIST_TOP_XXXXX}</li>
</ul>';

/**
 * Admin Page Section
 */

$L['adm_queue_deleted'] = 'Pagina is verwijderd en in de prullenbak geplaatst';
$L['adm_valqueue'] = 'In de wacht voor validatie';
$L['adm_validated'] = 'Al gevalideerd';
$L['adm_expired'] = 'Verlopen';
$L['adm_structure'] = 'Structuur van pagina\'s (categorieën)';
$L['adm_sort'] = 'Sorteer';
$L['adm_sortingorder'] = 'Stel een standaard sorteer methode in voor categorieën';
$L['adm_showall'] = 'Alles weergeven';
$L['adm_help_page'] = 'De pagina\'s behorende tot de categorie &quot;systeem&quot; worden niet weergeven in de publieke lijsten. Dit is om standalone pagina\'s te creëren.';
$L['adm_fileyesno'] = 'Bestand (ja/nee)';
$L['adm_fileurl'] = 'Bestands URL';
$L['adm_filecount'] = 'Aantal hits';
$L['adm_filesize'] = 'Bestands grootte';

/**
 * Page add and edit
 */

$L['page_addtitle'] = 'Pagina insturen';
$L['page_addsubtitle'] = 'Vul de vereiste velden in';
$L['page_edittitle'] = 'Pagina eigenschappen';
$L['page_editsubtitle'] = 'Bewerk de vereiste velden';

$L['page_aliascharacters'] = 'De karakters \'+\', \'/\', \'?\', \'%\', \'#\', \'&\' zijn niet toegestaan in aliases';
$L['page_catmissing'] = 'De categorie code is niet ingevuld';
$L['page_confirm_delete'] = 'Weet u zeker dat u deze pagina wilt verwijderen?';
$L['page_confirm_validate'] = 'Wilt u deze pagina valideren?';
$L['page_confirm_validate'] = 'Wilt u deze pagina valideren?';
$L['page_notavailable'] = 'Deze pagina wordt gepubliceerd in ';
$L['page_textmissing'] = 'Pagina tekst mag niet leeg zijn';
$L['page_titletooshort'] = 'De titel is te kort';
$L['page_validation'] = 'In de wacht voor validatie';
$L['page_validation_desc'] = 'Uw pagina is nog niet gevalideerd door een administrator';

$L['page_file'] = 'Bestands download';
$L['page_filehint'] = '(Stel &quot;Ja&quot; in om de download module te activeren, en vul de velden in)';
$L['page_urlhint'] = '(Directe link naar bestand)';
$L['page_filesize'] = 'Bestandsgrootte in kB';
$L['page_filesizehint'] = '(Grootte van het bestand)';
$L['page_filehitcount'] = 'Download hits';
$L['page_filehitcounthint'] = '(Aantal hits voor download)';
$L['page_metakeywords'] = 'Meta keywords';
$L['page_metatitle'] = 'Meta titel';
$L['page_metadesc'] = 'Meta beschrijving';

$L['page_formhint'] = 'Zodra uw inzending klaar is zal de pagina in een validatie lijst gezet worden. Een administrator zal de inzending controleren en publiceren wanneer de inhoud goedgekeurd is. Zorg dat u alle vereiste velden ingevuld heeft om een langere wachttijd te voorkomen.';

$L['page_pageid'] = 'Pagina ID';
$L['page_deletepage'] = 'Pagina verwijderen?';

$L['page_savedasdraft'] = 'Pagina opgeslagen als concept';

/**
 * Page statuses
 */

$L['page_status_draft'] = 'Concept';
$L['page_status_pending'] = 'Wachtende';
$L['page_status_approved'] = 'Goedgekeurd';
$L['page_status_published'] = 'Gepubliceerd';
$L['page_status_expired'] = 'Verlopen';

/**
 * Moved from theme.lang
 */

$L['pag_linesperpage'] = 'Regels per pagina';
$L['pag_linesinthissection'] = 'Regels in deze sectie';

$Ls['pages'] = "pagina\s,pagina";
$Ls['unvalidated_pages'] = "ongevalideerde pagina\s,ongevalideerde pagina";