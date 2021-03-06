<?php
/**
 * Dutch formal Language File for the PFS Module (pfs.nl.lang.php)
 *
 * @package pfs
 * @version 0.9.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */

$L['cfg_maxpfsperpage'] = 'Max. aantal elementen per pagina';
$L['cfg_maxpfsperpage_hint'] = ' ';
$L['cfg_pfsfilecheck'] = array('Bestands check', 'Wanneer dit actief is zullen de geuploade bestanden gecontroleerd worden via het '.$L['PFS'].' of via afbeeldingen in het profiel.
Dit is om te controleren dat de bestanden geldig zijn. &quot;Ja&quot; is aanbevolen om veiligheids redenen.');
$L['cfg_pfsmaxuploads'] = 'Max. aantal concurrerende uploads tegelijkertijd';
$L['cfg_pfsmaxuploads_hint'] = '';
$L['cfg_pfsnomimepass'] = 'Geen Mimetype Pass';
$L['cfg_pfsnomimepass_hint'] = 'Wanneer actief worden de geuploade bestanden geaccepteerd, ook wanneer er geen mimetype aanwezig is in de config.';
$L['cfg_pfstimename'] = 'Time-based bestandsnamen';
$L['cfg_pfstimename_hint'] = 'Genereer bestandsnamen gebaseerd op een tijdstempel. Standaard wordt de originele bestandsnaam gebruikt in combinatie met vereiste karakter conversies.';
$L['cfg_pfsuserfolder'] = 'Map opslag modus';
$L['cfg_pfsuserfolder_hint'] = 'Wanneer actief, bestanden zullen worden opgeslagen in submappen zoals /datas/users/USERID/mapnaam/... Dit moet ingesteld worden bij de eerste configuratie van de website. Zodra bestanden al geupload zijn is dit niet meer mogelijk.';
$L['cfg_flashupload'] = 'Gebruik Flash uploader';
$L['cfg_flashupload_hint'] = 'Sta het uploaden van meerdere bestanden tegelijk toe.';
$L['cfg_pfs_winclose'] = 'Sluit popup scherm na invoegen bbcode.';
$L['cfg_th_amode'] = 'Thumbnail generator';
$L['cfg_th_amode_hint'] = '';
$L['cfg_th_border'] = 'Thumbnail, bordergrootte';
$L['cfg_th_border_hint'] = 'Standaard: 4 pixels';
$L['cfg_th_colorbg'] = 'Thumbnail, borderkleur';
$L['cfg_th_colorbg_hint'] = 'Standaard: 000000, hex kleuren code';
$L['cfg_th_colortext'] = 'Thumbnails, tekstkleur';
$L['cfg_th_colortext_hint'] = 'Standaard: FFFFFF, hex kleuren code';
$L['cfg_th_dimpriority'] = 'Thumbnail, resize dimensie prioriteit';
$L['cfg_th_dimpriority_hint'] = '';
$L['cfg_th_jpeg_quality'] = 'Thumbnail, Jpeg kwaliteit';
$L['cfg_th_jpeg_quality_hint'] = 'Standaard: 85';
$L['cfg_th_keepratio'] = 'Thumbnail, behoudt verhouding?';
$L['cfg_th_keepratio_hint'] = '';
$L['cfg_th_separator'] = 'Thumbnail opties';
$L['cfg_th_textsize'] = 'Thumbnail, tekstgrootte';
$L['cfg_th_textsize_hint'] = '';
$L['cfg_th_x'] = 'Thumbnail, breedte';
$L['cfg_th_x_hint'] = 'Standaard: 112 pixels';
$L['cfg_th_y'] = 'Thumbnail, hoogte';
$L['cfg_th_y_hint'] = 'Standaard: 84 pixel, advies: Breedte x 0.75';

/**
 * Other
 */

$L['adm_gd'] = 'GD graphical library';
$L['adm_allpfs'] = 'Alle '.$L['PFS'];
$L['adm_allfiles'] = 'Alle bestanden';
$L['adm_thumbnails'] = 'Thumbnails';
$L['adm_orphandbentries'] = 'Vrijstaande DB entries';
$L['adm_orphanfiles'] = 'Vrijstaande bestanden';
$L['adm_delallthumbs'] = 'Verwijder alle thumbnails';
$L['adm_rebuildallthumbs']= 'Verwijder en herbouw alle thumbnails';
$L['adm_help_allpfs'] = $L['PFS'].' van alle gebruikers';
$L['adm_nogd'] = 'GD graphical library wordt niet ondersteund door de host, Cotonti kan hierdoor geen thumbnails aanmaken. Ga naar '.$L['Configuratie'].' &gt; '.$L['PFS'].' en zet &quot;Thumbnails generator&quot; op &quot;'.$L['Inactief'].'&quot;.';
$L['adm_help_pfsfiles'] = 'Niet beschikbaar';
$L['adm_help_pfsthumbs'] = 'Niet beschikbaar';
$L['info_desc'] = 'Georganiseerde bestandsopslag (Personal File Space) voor geregistreerde gebruikers. En bestandsopslag voor de gehele website (Site File Space).';

/**
 * Main
 */

$L['pfs_cancelall'] = 'Annuleer alles';
$L['pfs_direxists'] = 'Deze map bestaat al.<br />Oude pad: %1$s<br />Nieuwe pad: %2$s';
$L['pfs_extallowed'] = 'Toegestane extensies';
$L['pfs_filecheckfail'] = 'Waarschuwing: Bestandscheck mislukt voor extensie: %1$s Bestandsnaam - %2$s';
$L['pfs_filechecknomime'] = 'Waarschuwing: Geen Mime Type data gevonden voor deze extensie: %1$s Bestandsnaam - %2$s';
$L['pfs_fileexists'] = 'Upload mislukt, een bestand met deze naam is al aanwezig?';
$L['pfs_filelistempty'] = 'Lijst is leeg.';
$L['pfs_filemimemissing'] = 'Mime type voor %1$s is niet aanwezig. Upload mislukt';
$L['pfs_filenotmoved'] = 'Upload mislukt, tijdelijk bestand kan niet worden verplaatst.';
$L['pfs_filenotvalid'] = 'Dit is geen valide %1$s bestand.';
$L['pfs_filesintheroot'] = 'bestand(en) in root';
$L['pfs_filesinthisfolder'] = 'bestand(en) in deze map';
$L['pfs_filetoobigorext'] = 'Upload mislukt. Bestand is te groot of de extensie is niet toegestaan.';
$L['pfs_folderistempty'] = 'Deze map is leeg.';
$L['pfs_foldertitlemissing'] = 'Een titel voor de map is vereist.';
$L['pfs_isgallery'] = 'Galerij?';
$L['pfs_ispublic'] = 'Publiekelijk?';
$L['pfs_maxsize'] = 'Maximale grootte voor bestand';
$L['pfs_maxspace'] = 'Maximale ruimte toegestaan';
$L['pfs_newfile'] = 'Upload bestand:';
$L['pfs_newfolder'] = 'Creëer nieuwe map:';
$L['pfs_onpage'] = 'Op deze pagina';
$L['pfs_parentfolder'] = 'Hoofdmap';
$L['pfs_pastefile'] = 'Plak als bestandslink';
$L['pfs_pasteimage'] = 'Plak als afbeelding';
$L['pfs_pastethumb'] = 'Plak als thumbnail';
$L['pfs_resizeimages'] = 'afbeelding herschalen?';
$L['pfs_title'] = 'Uw Personal File Space';
$L['pfs_totalsize'] = 'Totale grootte';
$L['pfs_uploadfiles'] = 'Upload bestanden';

$L['pfs_insertasthumbnail'] = 'Invoegen als thumbnail';
$L['pfs_insertasimage'] = 'Invoegen als volledige afbeelding';
$L['pfs_insertaslink'] = 'Invoegen als link naar bestand';
$L['pfs_dimensions'] = 'Dimensies';

$L['pfs_confirm_delete_file'] = 'Weet u zeker dat u dit bestand wilt verwijderen?';
$L['pfs_confirm_delete_folder'] = 'Weet u zeker dat u deze map met alle inhoud wilt verwijderen?';