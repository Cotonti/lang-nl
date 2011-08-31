<?php
/**
 * Dutch Language File for the Forums Module (forums.nl.lang.php)
 *
 * @package forums
 * @version 0.9.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Forums Config
 */

$L['cfg_antibumpforums'] = array('Anti-bump protectie', 'Vermijdt dubbele berichten van gebruikers');
$L['cfg_hideprivateforums'] = array('Privé forums niet weergeven', '');
$L['cfg_hottopictrigger'] = array('Aantal berichten voordat een onderwerp \'hot\' is', '');
$L['cfg_maxpostsperpage'] = array('Max. aantal berichten per pagina', ' ');
$L['cfg_maxtopicsperpage'] = array('Max. aantal onderwerpen per pagina', '');
$L['cfg_mergeforumposts'] = array('Berichten samenvoegen', 'Voegt berichten van gebruiker samen, anti-bump op \'uit\' is vereist');
$L['cfg_mergetimeout'] = array('Bericht samenvoegen tijdslimiet', 'Berichten worden niet meer samengevoegd wanneer tijdslimiet (in uren) is bereikt, bericht samenvoeg functie moet op \'aan\'(0 om de functie uit te schakelen)');
$L['cfg_minpostlength'] = array('Min. bericht lengte', ' ');
$L['cfg_mintitlelength'] = array('Min. onderwerp titel lengte', ' ');
$L['cfg_title_posts'] = array('Forum bericht titel format', 'Opties: {FORUM}, {SECTION}, {TITLE}');
$L['cfg_title_topics'] = array('Forum onderwerp titel format', 'Opties: {FORUM}, {SECTION}');

$L['cfg_allowusertext'] = array('Geef handtekeningen weer');
$L['cfg_allowbbcodes'] = array('Activeer BBcodes');
$L['cfg_allowsmilies'] = array('Activeer smilies');
$L['cfg_allowprvtopics'] = array('Sta privé onderwerpen toe');
$L['cfg_allowviewers'] = array('Sta bezoekers toe');
$L['cfg_allowpolls'] = array('Activeer polls');
$L['cfg_countposts'] = array('Tel berichten');
$L['cfg_autoprune'] = array('Auto-trim onderwerpen na * dagen');
$L['cfg_defstate'] = array('Standaard toestand');
$L['cfg_defstate_params'] = array('Gevouwen', 'Uitgevouwen');

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
$L['forums_updatedby'] = '<br /><em>Dit bericht is bewerkt door %1$s (%2$s, %3$s ago)</em>';
$L['forums_postedby'] = 'Geplaatst door';

$L['forums_privatetopic1'] = 'Markeer dit onderwerp als privé';
$L['forums_privatetopic2'] = 'Alleen forum moderators en de starter van dit onderwerp (jij) hebben rechten om dit onderwerp te lezen en te reageren';
$L['forums_privatetopic'] = 'Dit onderwerp is privé, alleen moderators en de starter van dit onderwerp hebben rechten om te lezen en reageren';

$L['forums_searchinforums'] = 'Zoek in forums';
$L['forums_markasread'] = 'Markeer alle berichten als gelezen';
$L['forums_foldall'] = 'Invouwen';
$L['forums_unfoldall'] = 'Uitvouwen';
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
$L['forums_movedoutofthissection'] = 'Verplaats naar andere sectie';

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

/**
 * Unused?
 */

$L['forums_polltooshort'] = 'Poll opties moeten gelijk zijn, of groter dan 2';
$L['for_onlinestatus0'] = 'Gebruiker is offline';
$L['for_onlinestatus1'] = 'Gebruiker is online';

?>