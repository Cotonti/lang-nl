<?php
/**
 * Dutch Language File for the Forums Module (forums.nl.lang.php)
 *
 * @package forums
 * @version 0.9.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Forums Config
 */

$L['cfg_antibumpforums'] = 'Anti-bump protectie';
$L['cfg_antibumpforums_hint'] = 'Vermijdt dubbele berichten van gebruikers';
$L['cfg_hideprivateforums'] = 'Privé forums niet weergeven';
$L['cfg_hideprivateforums_hint'] = '';
$L['cfg_hottopictrigger'] = 'Aantal berichten voordat een onderwerp \'hot\' is';
$L['cfg_hottopictrigger_hint'] = '';
$L['cfg_maxpostsperpage'] = 'Max. aantal berichten per pagina';
$L['cfg_maxpostsperpage_hint'] = ' ';
$L['cfg_maxtopicsperpage'] = 'Max. aantal onderwerpen per pagina';
$L['cfg_maxtopicsperpage_hint'] = '';
$L['cfg_mergeforumposts'] = 'Berichten samenvoegen';
$L['cfg_mergeforumposts_hint'] = 'Voegt berichten van gebruiker samen, anti-bump op \'uit\' is vereist';
$L['cfg_mergetimeout'] = 'Bericht samenvoegen tijdslimiet';
$L['cfg_mergetimeout_hint'] = 'Berichten worden niet meer samengevoegd wanneer tijdslimiet (in uren) is bereikt, bericht samenvoeg functie moet op \'aan\'(0 om de functie uit te schakelen)';
$L['cfg_minpostlength'] = 'Min. bericht lengte';
$L['cfg_minpostlength_hint'] = ' ';
$L['cfg_mintitlelength'] = 'Min. onderwerp titel lengte';
$L['cfg_mintitlelength_hint'] = ' ';
$L['cfg_title_posts'] = 'Forum bericht titel format';
$L['cfg_title_posts_hint'] = 'Opties: {FORUM}, {SECTION}, {TITLE}';
$L['cfg_title_topics'] = 'Forum onderwerp titel format';
$L['cfg_title_topics_hint'] = 'Opties: {FORUM}, {SECTION}';

$L['cfg_allowusertext'] = 'Geef handtekeningen weer';
$L['cfg_allowbbcodes'] = 'Activeer BBcodes';
$L['cfg_allowsmilies'] = 'Activeer smilies';
$L['cfg_allowprvtopics'] = 'Sta privé onderwerpen toe';
$L['cfg_allowviewers'] = 'Sta bezoekers toe';
$L['cfg_allowpolls'] = 'Activeer polls';
$L['cfg_countposts'] = 'Tel berichten';
$L['cfg_autoprune'] = 'Auto-trim onderwerpen na * dagen';
$L['cfg_defstate'] = 'Standaard toestand';
$L['cfg_defstate_params'] = 'Ingevouwen,Uitgevouwen';

$L['info_desc'] = 'Cotonti Bulletin Board Module: secties, subsecties, onderwerpen, berichten. Simpel forum voor community websites.';

/**
 * Main
 */

$L['forums_post'] = 'Bericht';
$L['forums_posts'] = 'Berichten';
$L['forums_topic'] = 'Onderwerp';
$L['forums_topics'] = 'Onderwerpen';

$L['forums_antibump'] = 'The anti-bump protectie staat aan, u kunt niet 2 keer achter elkaar posten.';
$L['forums_keepmovedlink'] = 'Bewaar onderwerp-verplaats link';
$L['forums_markallasread'] = 'Markeer alle berichten gelezen';
$L['forums_mergetime'] = '%1$s later toegevoegd:';
$L['forums_messagetooshort'] = 'Onderwerp inhoud is te kort';
$L['forums_newtopic'] = 'Nieuw onderwerp';
$L['forums_newpoll'] = 'Nieuwe poll';
$L['forums_titletooshort'] = 'Onderwerp titel is te kort';
$L['forums_topiclocked'] = 'Dit onderwerp is gesloten, nieuwe berichten zijn niet toegestaan.';
$L['forums_topicoptions'] = 'Onderwerp opties';
$L['forums_updatedby'] = '<br /><em>Dit bericht is bewerkt door %1$s (%2$s, %3$s geleden)</em>';
$L['forums_postedby'] = 'Geplaatst door';
$L['forums_edittimeoutnote'] = 'Timeout voor het bewerken of verwijderen van eigen bericht is ';

$L['forums_privatetopic1'] = 'Markeer dit onderwerp als privé';
$L['forums_privatetopic2'] = 'Alleen forum moderators en de starter van dit onderwerp (jij) hebben rechten om dit onderwerp te lezen en te reageren';
$L['forums_privatetopic'] = 'Dit onderwerp is privé, alleen moderators en de starter van dit onderwerp hebben rechten om te lezen en reageren';

$L['forums_searchinforums'] = 'Zoek in forums';
$L['forums_markasread'] = 'Markeer alle berichten als gelezen';
$L['forums_foldall'] = 'Vouw alles in';
$L['forums_unfoldall'] = 'Vouw alles uit';
$L['forums_viewers'] = 'Kijkers';

$L['forums_nonewposts'] = 'Geen nieuwe berichten';
$L['forums_newposts'] = 'Nieuwe berichten';
$L['forums_nonewpostspopular'] = 'Geen nieuwe berichten (populair)';
$L['forums_newpostspopular'] = 'Nieuwe berichten (populair)';
$L['forums_sticky'] = 'Sticky';
$L['forums_newpostssticky'] = 'Nieuwe berichten (sticky)';
$L['forums_locked'] = 'Gesloten';
$L['forums_newpostslocked'] = 'Nieuwe berichten (gesloten)';
$L['forums_announcment'] = 'Aankondiging';
$L['forums_newannouncment'] = 'Nieuwe aankondiging';
$L['forums_movedoutofthissection'] = 'Verplaatst naar andere sectie';

$L['forums_announcement'] = 'Aankondiging';
$L['forums_bump'] = 'Bump';
$L['forums_makesticky'] = 'Sticky';
$L['forums_private'] = 'Privé';

$L['forums_explainbump'] = 'Zet onderwerp boven in de onderwerpen lijst (Tot ander onderwerp bijgewerkt wordt)';
$L['forums_explainlock'] = 'Sluit onderwerp (deactiveer nieuwe berichten)';
$L['forums_explainsticky'] = 'Zet onderwerp boven in de onderwerpen lijst (Tot onderwerp op standaarde waarde is gezet)';
$L['forums_explainannounce'] = 'Markeer onderwerp als aankondiging';
$L['forums_explainprivate'] = 'Markeer onderwerp als privé (Toegang alleen voor moderator(s) en onderwerp starter)';
$L['forums_explaindefault'] = 'Reset onderwerp naar standaard waarde';
$L['forums_explaindelete'] = 'Verwijder onderwerp';

$L['forums_confirm_delete_topic'] = 'Weet je zeker dat je dit topic wilt verwijderen?';
$L['forums_confirm_delete_post'] = 'Weet je zeker dat je dit bericht wilt verwijderen?';

/**
 * Unused?
 */

$L['forums_polltooshort'] = 'Poll opties moeten gelijk zijn, of groter dan 2';
$L['for_onlinestatus0'] = 'Gebruiker is offline';
$L['for_onlinestatus1'] = 'Gebruiker is online';

?>