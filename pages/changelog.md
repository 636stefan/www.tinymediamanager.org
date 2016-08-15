---
layout: page
title:  "Changelog"

permalink: "/changelog/"
---

**15.08.2016 - Version 2.8.3**
<br />=======================<br />
\+ movies: created an own column for available meta data (reverted logic for NFO column)  
\+ Take year differences more into account, when comparing scraper search results  
\+ Do not download default movie poster/fanart, if none selected.  
\+ Do not write NFO, if none selected.  
\+ better visualize running tasks  
\+ Added some memory stats to status bar  
x fix MediaInfo crash on some DVD ISOs  
x fix TV Episode NFOs for extracted DVDs  
x fix CMD line updating of TV shows  
x fix episode root path for extracted disc folders  
x fix adding/removing manual subtitle to media files  
x fix certification on rereading NFO  
x fix extracting export templates  
x fix TvShow NFO import when empty production company  
x fix manual sort title (reseted to empty on every save)  
x able to handle windows "junction" linked files (deduplication)  
x better visualize WakeOnLan menu item (disable when none found)  

---

**19.07.2016 - Version 2.8.2**
<br />=======================<br />
\+ MediaInfo for ISO files - yay!  
\+ reworked command line scraping, please check syntax (add scrapeAll, reworked logic for TvShows)  
\+ added select all/deselect all buttons for metadata scrape options  
\+ added persian to the scraper languages  
\+ added telecine, R5 and stream to media sources  
\+ added extra language setting for subtitle scraping  
\+ support folder excluding in Kodi style (.nomedia file in folder to exclude)  
\+ added media source renamer token for TV shows  
\+ updated tmdb scraper (thanks to @davidsben)  
\+ updated extras detection to Plex naming scheme  
\+ IMDB scraper: option to scrape local release date or global release date  
x fixed movie renamer dropping several image/NFO files  
x TMDB crash when scraping of several TV shows without artwork  
x fixed exporting of movies/TV shows  
x fixed TV show multi-file episode detection  
x fixed updating of tags in the UI  
x rename .idx files along with with .sub files  
x improved writing/reading speed for subtitles and NFO files  
x do not overwrite external Kodi NFO streamdetails
x overwrite existing images in the exporter  
x fix for renaming into subfolders  
x fixed wrong scraped release dates (where no release date has been found)  
x fixed TV episode detection for extracted disc files  
x changed the NFO column to better indicate scraped/unscraped movies  
x better detection of movie name out of filename  

---

**15.06.2016 - Version 2.8.1**
<br />=======================<br />
x do not reset certification style to SHORT  
x remove movies without VIDEO files after update data sources  
x follow symlinks with our new "update datasource" logic  
x fixed loading of TV show special season posters  
x fixed reading codec of Microsoft VC-1 via MediaInfo  
x fixed update single datasource for movies  
x fixed renaming movies with colon  
x prefer MI data from common video types over disc image types  
x fixed a bug in the renamer where renaming did not work  

---

**13.06.2016 - Version 2.8**
<br />=======================<br />
IMPORTANT: changed certification output (in NFO files) from a fixed string to a set of templates.  
           ! Please check your movie settings after upgrade !  
           Default for Kodi NFOs: LARGE (e.g. DE:FSK 16 / DE:FSK16 / DE:16 / DE:ab 16)  
           Default for MP NFOs: TECHNICAL (e.g. DE_FSK16)  

\+ added subtitle scraping (via OpenSubtitles.org) [http://goo.gl/oRnXnr](http://goo.gl/oRnXnr)  
\+ complete rewrite of "update datasource" for movies - massive performance boost!!!  
\+ complete rewrite of "update datasource" for TV shows - massive performance boost!!!  
\+ added edition field for movies (now you can have the same movie in multiple versions without problems) [http://goo.gl/aSWQt8](
http://goo.gl/aSWQt8)  
\+ added support for offline media (media stubs) [http://goo.gl/UR1VY7](http://goo.gl/UR1VY7)  
\+ added .tbn support for episode thumbs (Boxee box support)  
\+ added a field for movie editions (Extended, Director's cut, ..)  
\+ added bad words for TV shows  
\+ added option to opt-out our internal statistics  
\+ moved scraping of artwork/trailers in a separate task after searching for a movie  
\+ added option to automatically rename a movie after scraping  
\+ added option to set the subtitle language style (for better Plex support)  
x fixed plugin loading from paths containing a +  
x fix #22 "search episode" scrollbar  
x fixed TV show image renaming (command line)  
x fix stacking marker detection for movies  
x added setting for our internal statistics  
x fix: use creation/modification date from file to specify dateAdded  
x fixed sorting of movies (respecting white spaces now)  
x fixed an optical glitch, where sometimes seasons end episodes appeared twice  
x detect Blu-Ray as BluRay source  
x fix: do not write local artwork urls to NFO files  
x some fixes in the renamers (movie & TV show)  
x some smaller fixes  

---

**01.04.2016 – Version 2.7.4**
<br />=======================<br />
\+ added vote count for Tv shows and episodes  
x fixed TvShow renamer when having duplicate tokens or multi episodes  
x fixed MovieRenamerPreview when using a sorted list  
x fixed TMM restart (when resetting database)  
x Display information, why plugins could not be loaded  
x fixed copy/paste hotkeys for several UI field on OSX  
x fixed exporter file name creation  
x fixed writing set info for MediaPortal NFO files  
x fixed movie import with folder stacking  

---

**17.03.2016 – Version 2.7.3**
<br />=======================<br />
\+ bug reports are now solved via GitHub issues  
\+ added image exporting in the export templates (see [http://goo.gl/kuSYlH](http://goo.gl/kuSYlH) or in the wiki)  
\+ added media source to the TV show section  
\+/x moved fanart.tv client key to the scraper settings (and released it for everyone)  
x Kodi scraper: fix some invalid XML headers  
x OFDB scraper: fix actor/cast parsing  
x Zelluloid.de: fix actor/cast parsing, and fallback for broken web search  
x Trakt.tv: fix writing correct watched state to NFO  
x CMD: update TvShows only scrapes new episodes, not all  
x improved data source update; parse new entries first  
x improved TV show renamer for multi episode files  
x finally fixed the NEW indicator behavior - it will now work as in versions before 2.7 (NEW stays for the whole tmm session)  
x improved performance in the update data sources for TV shows  
x fixed searching for movie set artwork in movie folders  
x only write guests into episode NFO  
x fixed error in movie set editor when no movie was selected  
x remember last opened directory in the new chooser  
x TvShows: fix studio writing  
x fix loading of the movie-duplicate filter at startup  

---

**22.01.2016 - Version 2.7.2**
<br />=======================<br />
LINUX: We've removed the shipped mediainfo library due to massive problems between
       different distributions. Please install the libmediainfo directly from
       your package manager or from [https://mediaarea.net/](https://mediaarea.net/)

\+ Kodi scrapers are now configurable  
\+ Movie renamer preview: dropped donator-only status, now FREE FOR ALL  
\+ added web-dl to media sources  
\+ add writing of imdb id in TV show NFO  
\+ added $# rating movie renamer option  
\+ pimp scraper UI; add version s to all plugins  
x some performance fixes on updating datasources  
x remove bundled mediainfo for Linux (using system default)  
x fix movie renamer when having access problems  
x fix IMDB title fallback to TMDB  
x TvShow episode parser: fix common word replacement  
x rework scraper fallback logic, do not stop on plugin errors  
x fix the "new" marker never being cleared in special cases  
x MediaPortal NFO: parse multiple genres styles  
x NTFS: renaming to same name but other cASE now works  
x Movie actors: replace invalid file system characters when saving thumb  
x MacOS: save database on terminating with command-q  
x fixed error in movie set editor when no movies are assigned to the set  
x fixed error in movie editor where sorttitle has been lost  

---

**28.12.2015 - Version 2.7**
<br />=======================<br />
IMPORTANT: with the update to version 2.7 the internal database will be deleted due to
           internal changes. You only need to re-import (update data sources) your movies
           and TV shows

With the update to 2.7 there are massive changes under the hood of tinyMediaManager:  
\- moved source code management to GitHub and changed the build system to maven  
\- changed the internal database engine from ObjectDB to H2-MVStore + JSON this change makes tinyMediaManager more robust and faster  
\- introduced a new infrastructure for scrapers which makes developing new scrapers less complex and opens the scraper interface to other developers  

\+ added a basic setup wizard for new installations  
\+ better detection of "stacking" markers (CD1, part1, ...)  
\+ added support excluding folder from scan (via a file .tmmignore or tmmignore and settings)  
\+ rewrote all scrapers from scratch (including optimizations and bug fixes)  
\+ added a very special scraper for all that who have Kodi installed ;) (donator only)  
\+ assign movie sets feature is now free for all (dropped donator only status)  
\+ added automatic trailer download at scrape (dropped donator only status for trailer download)  
\+ added "date added" to the columns of the movie list  
\+ enhanced UI language to enable country specific translations (e.g. pt_BR)  
\+ changed trakt.tv login mode to PIN auth (you may re-check your settings)  
\+ added media info editor (some fields from media info are now maintain able)  
\+ added title sortable to TV shows section  
\+ added displayepisode and displayseason for TV shows  
\+ added option to persist UI filter settings  
\+ added native file- and directory-open dialogs  
\+ updated mediainfo to 0.7.78 and generalized folder structure  
\+ added <streamdetails> tag for episodes  
\+ refactored episode chooser (search for episode is now available)  
\+ take the date added from the video file where possible  
\+ changed behavior of the _new_ state: it will now be dropped at the next update data source the new indicator changed from the green font to an icon  
\+ added media source to NFO  
x fixed invoking the specified media player on OSX  
x included mediainfo fix for all platforms  
x changed the style of notifications to be less intrusive  
x changed NFO rewriting behavior to be less aggressive  
x prevent setting incomplete meta data when scraping was not successful  
x adding special characters to the sort title prefixes is now possible  
x several fixes in the movie renamer  
x reworked internal representation of artwork file names/url (high performance boost for movie sets)  
x changed bug reporting system  
x reworked movie name detection    
x reworked episode number detection  
x enhanced detection of extras (samples, trailers, ..)  
x updated all templates to our actual data model and JMTE 3.2  
x tweaked "best-trailer" detection  
x fixed auto complete combox  
x fixed scraping episodes with DVD ordering  
x fixed special character handling of sort titles  
x fixed real offline startup  
x fixed cleanup on artwork scraping  
x fixed NFO importing issue when having multiple tags  
x fixed display of "never ending" tasks  
x fixed file name generation of movie/tv show export templates  
x fixed finding of additional files for episodes  
x fixed writing of watched state in MediaPortal NFO  
x fixed/improved trakt.tv episode sync     
x many smaller fixes and enhancements  

---

**27.07.2015 - Version 2.6.9**
<br />=======================<br />
IMPORTANT: with tinyMediaManager version 2.7 we do not support Java6 anymore.
If you are still using Java6, please update or you will stay at version 2.6.x

\+  assign movie sets feature is now free for all (dropped donator only status)<br />
x fixed NFO writing behavior<br />
x fixed a problem with , or [] as sort title delimiter<br />
x fixed detection of extra video files (samples, trailers, extras)<br />
x improved overall memory consumption<br />
x tweaked movie naming detection

---

**08.06.2015 - Version 2.6.8**
<br />=======================<br />
IMPORTANT: with tinyMediaManager version 2.7 we do not support Java6 anymore.
If you are still using Java6, please update or you will stay at version 2.6.x


\+ added language code ZH (Chinese) to the scraper languages<br />
\+ added polish GUI translation<br />
\+ added language to the movie bulk editor<br />
\+ added option to suppress writing of movie set artwork to movie folder<br />
\+ added Polish translation<br />
x Movie renamer: fix renaming with empty settings<br />
x Movie renamer: fix renaming of unscraped movies<br />
x made writing of movie NFO less aggressive<br />
x fix occasional error where media information did not get stored<br />
x better detection of movie name/year on update<br />
x fixed sorttitle editing<br />
x fixed searching for tv show season posters (with 4 digit season)

---

**15.05.2015 - Version 2.6.7**
<br />=======================<br />
IMPORTANT: with tinyMediaManager version 2.7 we do not support Java6 anymore.<br />
If you are still using Java6, please update.

\+ updated mediainfo to 0.7.73 (ARM users now have to install the system version of mediainfo for better compatibility)<br />
\+ Mirror support: TMM now distributed on several mirrors for better availability (and error handling for network blockages)<br />
\+ Movie renamer: complete rewrite - CHECK YOUR RENAMER SETTINGS!<br />
\+ Movie renamer: possible to "downgrade" a movie, when having no distinct folder. (CHECK YOUR FOLDER RENAMER SETTINGS!)<br />
\+ added sort option via sort title<br />
\+ added an option to name the episode thumbs without the -thumb postfix (improves compatibility for different media players)<br />
\+ added director to movie renamer tokens<br />
\+ added DVD order renamer tokens ($3, $4, $D)<br />
x changed detection of DTS-HD codecs (Kodi will display the right logo now after NFO export)<br />
x fixed multichannel AAC detection<br />
x added a warning message when doing an update data source and no data source specified<br />
x renamer: exchange colon with a dash. (even better than removing completely)<br />
x TvShow renamer: remove old/left-over NFOs<br />
x subtitles: language detection for SUB ones<br />
x the NFO files has not been updated in some cases<br />
x TheTvDB search cleans out too much "special" characters<br />
x fixed occasional UI glitches with TV shows<br />
x various smaller fixes

---

**26.02.2015 - Version 2.6.6**
<br />=======================<br />
<br />\+ updated trakt.tv library to the new API<br />
IMPORTANT: please re-enter your login data for trakt.tv

\+ new sort order for movies: video bit rate<br />
\+ bulk editing of media source for movies<br />
\+ added rating column to the movie table<br />
\+ double click in movie set/TV show tree opens the editor<br />
\+ added a message history window (menu tools - show message history)<br />
\+ added filter option for year (movie)<br />
\+ added greek translation<br />
x reworked NFO naming. Now be able to add NFO inside DISC folders separately<br />
x fixed the season template in the TV show renamer<br />
x fixed renamer (movie &#038; tv shows) for case insensitive file systems<br />
x better rewriting of movie NFO after movie set editing<br />
x HDRIP is now being recognized as BluRay (more common source than TV)<br />
x change writing of .desktop files for linux<br />
x fixed OSX app (now tinyMediaManager is launch able without Java 6)<br />
x bad words are now checked case insensitive<br />
x fixed search score calculation for tmdb/rottentomatoes scraper<br />
x enhanced NFO parsing to be more tolerant<br />
x fixed subtitle writing for Kodi NFOs<br />
x improved loading of mediainfo on network shares<br />
x fixed an UI glitch, where episodes disappeared after scraping<br />
x performance fix for offline movie set artwork<br />
x fixed various smaller issues

---

**11.01.2015 - Version 2.6.5**
<br />=======================<br />
<br />\+ enhanced TV show and movie renamer (<http://goo.gl/8pbkFj><)<br />
IMPORTANT: REVIEW YOUR TV SHOW RENAMER SETTINGS!


\+ DVD ordering of episodes (<http://goo.gl/YBD5qJ>)<br />
\+ added memory options especially for large media libraries<br />
\+ write thumb url into the NFO for multi episode files<br />
\+ added h265 logo<br />
\+ (experimental) added Rotten Tomates scraper<br />
\+ added downloading of custom image-urls in the image chooser<br />
\+ added genre to the movie renamer<br />
\+ now also allowing folder.jpg/png for disc images<br />
\+ option to change the language while scraping (movie and TV show chooser)<br />
\+ added several DTS profiles to mediainfo detection (+logos)<br />
x added some workarounds for failing TVDB searches<br />
x proper handling of the watched state in the NFO<br />
x catching some NFO parsing problems<br />
x improved parsing of imdb plot<br />
x improved performance of artwork detection for movie sets<br />
x better detection of media source (brrip, hdrip, hdtvrip, &#8230;)<br />
x fixed scraping of localized movie metadata<br />
x fixed downloading of season posters<br />
x fixed some minor issues with the command line version<br />
x fixed Mac OSX startup script<br />
x fixed some export template issues<br />
x fixed some performance issues with movie set artwork detection<br />
x fixed sort title generation for movie sets<br />
x respect max. screen resolution when opening dialogs<br />
x enabled double click in the episode chooser dialog

---


**14.11.2014 - version 2.6.4**
<br />=======================<br />

\+ changed Fanart.tv to v3 API (with clientKey)<br />
\+ added more artwork scraping dialogs<br />
\+ new Excel export template (xml)<br />
\+ added $L language renaming option<br />
\+ added/improved 3D handling<br />
\+ certification bulk edit<br />
\+ add season to image chooser title<br />
\+ remember last opened directory in the directory/file chooser<br />
x fixed BD NFO<br />
x fixed Excel export template<br />
x fixed/improved some tooltips<br />
x improved artwork sorting, better language detection<br />
x fixed MacOS startup; Java detection, executable, &#8230;<br />
x fixed SSxEE TvShow parser<br />
x fixed movie exporter filename generation<br />
x ingore folders/files starting with .@<br />
x many code cleanups

---
**05.10.2014 - version 2.6.3**
<br />=======================<br />
\+ added edit button for tv show season<br />
x fix physically deletion of movies in multiMovieDir<br />
x updated Trakt.tv libs<br />
x fix release build version info<br />
x fix TMM updater in case of error download<br />
x write additional NFO for DVD/BD folder<br />
x tweak getting modified date from files (speedup)<br />
x ignore backup folder when searching for missing movies<br />
x added more transifex languages<br />
x improved some needed debug loggings<br />
x and some more minor internal things&#8230;


---

**21.09.2014 - version 2.6.2**
<br />=======================<br />

\+ added column for watched state to the movie table<br />
\+ added action to scrape episode metadata without thumbs<br />
\+ added quick creation of movie sets to the movie bulk editor<br />
x greatly improved our episode detection engine<br />
x performance improvements with loading and update datasources<br />
x fixed season poster detection<br />
x fixed occasional crashes with trakt.tv<br />
x fixed wrong filenames in the renamer preview<br />
x fixed losing donator registration information<br />
x fixed crashes in ofdb.de, moviemeter.nl and zelluloid.de scraper<br />
x fixed trailer detection (movies with trailer in their name weren&#8217;t added)<br />
x fixed startup crashes with orphaned movie sets

---

**08.09.2014 - version 2.6.1**
<br />=======================<br />

x fixed scraping of episode metadata<br />
x fixed TV show renamer<br />
x fixed year setting for TV show renamer<br />
x fixed image chooser for thumbs (they are no longer be shown as fanarts)<br />
x fixed slow performance of image cache with offline data sources<br />
x fixed crashes with trakt.tv sync<br />
x fixed opening of movie/TV show folder and playing of videos for linux/kde<br />
x improved handling of 0byte downloads (artwork) and choosing local artwork files

---

**06.09.2014 - version 2.6**
<br />=======================<br />

DONATOR VERSIONOur donators are now able to register their tinyMediaManager copies to unlock special features as a "Thank you" for their support. <http://goo.gl/L8G5BB>


\! trailer downloading (donator feature) (<http://goo.gl/hozk18>)<br />
\! Trakt.tv integration (donator feature) (<http://goo.gl/WNEzsG>)<br />
\! Movie renamer preview (donator feature) (<http://goo.gl/PS50MF>)<br />
\! automatically add existing movies to movie sets (donator feature)<br />
\+ bigger UI rework (<http://goo.gl/3wy3gL>)<br />
\+ configurable font and font size<br />
\+ preserve unsupported XML tags (from other tools) in NFO files<br />
\+ extra artwork (banner, CD art, clearart, ..) is now available for movies and movie sets<br />
\+ new threading model: you can now queue different tasks; display open tasks (<http://goo.gl/yFGtPq>)<br />
\+ preview of images in the image chooser (<http://goo.gl/kIFaKJ>)<br />
\+ smart scrape: if there is no result from automatic scrape a manual scrape will pop up<br />
\+ NFO enhancement: multiple IDs (from several meta data providers) will be stored<br />
\+ option to set the preferred media player<br />
\+ able to play trailers<br />
\+ trailer preferences (which one to automatic choose for NFO)<br />
\+ delete works now with deleting physical files (moving to backup folder)<br />
\+ ignore some Mac specific files on searching hdd/network shares<br />
\+ language updates<br />
\+ hotkeys for menu and other functions<br />
\+ improved season and episodes parser<br />
\+ several enhancements to the TV show renamer<br />
\+ show artwork from the media file panel in lightbox<br />
\+ export for TV shows basically done<br />
\+ more filter options for TV shows<br />
\+ media source management (<http://goo.gl/cE62xb>)<br />
x fix occasional database inconsistencies<br />
x fix TvShow rename in command line<br />
x fix an occasional crash when choosing artwork<br />
x empty url cache from broken/unreadable HTTP responses<br />
x better integration of the year to the result score calculation<br />
x filter duplicate results from ofdb<br />
x prevent audio streams from being added multiple times<br />
x detect stacking markers with leading zeros<br />
x import of watched state from XBMC NFO<br />
x thousands of various fixes and stabilization from past half year :)

---

**24.03.2014 - version 2.5.5**
<br />=======================<br />

\+ enhanced writing of certification to the XBMC NFO<br />
x fixed media info loading problems for some users (JNA update to 4.1)<br />
x fixed a bug where an invalid config.xml prevented tmm from starting<br />
x fixed a bug when building the TV show tree<br />
x fixed a bug where some settings got lost when updating<br />
x fixed writing of the watched flag to the XBMC TV show episode NFO

---

**04.03.2014 - version 2.5.4**
<br />=======================<br />

There was a nasty bug in an external library with version 2.5.3 which caused our internal database to become corrupted. We've added some recovery functions, but there could be data which is lost. You can either<br />
A) take a backup file from the backup folder inside tmm (the last one before 19.02.2014)<br />
B) start over with a new database by deleting the old one (menu Tools -> initialize database and rescan/update all your data sources.We are very sorry for the inconvenience caused by this bug!

x improved the TVDB scraper: the scraper provides better results and is not searchable with the TVDB id<br />
x fixed correct loading of swt.jar on all platforms<br />
x added slovenian language for the scrapers<br />
x fixed display of trailers in the table (in conjunction with a downloaded trailer)<br />
x fixed resizing behavior of the movie chooser dialog (buttons disappeared)<br />
x fixed a crash when writing NFOs<br />
x fixed a crash when canceling the movie chooser<br />
x compress database backups (to save space)<br />
x ignore more special files for Mac OSX (beginning with .\_)<br />
x tweaked our HTTP interface to provide better results for slow connections<br />
x removed episodes now also disappear from the season list

---

**19.02.2014 - version 2.5.3**
<br />=======================<br />

\+ activated SWT loading for all platforms<br />
x some crashes within the TMDB scraper<br />
x a database inconsistency with renamed episodes (if you still have some weird behavior with TV shows, try to remove and readd the TV shows)<br />
x sometimes artwork did not get downloaded/displayed<br />
x display high res fanart before the thumbs in the artwork panel<br />
languages: added russian (incomplete)

---

**07.02.2014 - version 2.5.2**
<br />=======================<br />

\+ added a lightbox effect, when clicking on an artwork in the movie/movie set/tv show panel (see <a title="Image preview (lightbox)" href="https://www.tinymediamanager.org/index.php/image-preview-lightbox/">this post</a>)<br />
\+ updated mediainfo libs<br />
\+ (movie) when removing the last movie from a movie set, the movie set is also removed<br />
\+ (movie) added filter for certifications<br />
\+ (movie) added option to fall back to another scraper when not search result has been found<br />
\+ (TV show) added episodeguide to the TV show nfo<br />
\+ (movie) added languages (spoken languages) to the nfo<br />
\+ (TV show) added function to rename complete seasons<br />
\+ (movie) added double click event (in the table) to open the movie editor<br />
\+ (movie) added a better unwatched logo<br />
\+ added comments to the NFO<br />
\+ added movie filename to the movie chooser dialog (for better support of multi movie dirs)<br />
x when renaming TV shows, some episode paths still pointed to the old path<br />
x sometimes changing movie/TV show artwork wasn&#8217;t updated internally<br />
x better renaming of TV show disc images<br />
x improved performance when removing multiple movies<br />
x some inconsistances with linking of movies and moviesets<br />
x in movie/TV show chooser - prevent strange behaviour when changing the scraper while another search is active<br />
x added producers also to the nfo<br />
x changed TV show - certification settings (thetvdb only provides US certs..)<br />
x prevent some exceptions when renaming/filtering TV shows<br />
x parsing of multi movie dirs<br />
x wrong saving of the tmdb id since 2.5.1

---

**14.01.2014 - version 2.5.1**
<br />=======================<br />

x fixed a problem where mediainfo could not be loaded<br />
x fixed a database loading problem

---

**12.01.2014 - version 2.5**
<br />=======================<br />

\+ completely reworked the TV show panel (including a new panel for seasons)<br />
\+ completely reworked the (movie) filter panel and added a filter panel for TV shows<br />
\+ added movie filters: datasource, missing metadata, missing artwork, missing subtitles, new movies<br />
\+ added TV show filters: datasource, cast member, missing metadata, missing artwork, missing subtitles, new episodes<br />
\+ added possibility to hide several columns in the movie table<br />
\+ experimental support for AniDB scraper<br />
\+ added fanart.tv for TV shows<br />
\+ added imdb top 250<br />
\+ added producers<br />
\+ added an ASCII cleaner for the renamer<br />
\+ added "bad words" to the movie importer<br />
\+ possibility to get the runtime from media files rather than scraper<br />
\+ added some settings for the TV show renamer<br />
\+/x reworked tagging of TV shows and episodes<br />
x many enhancements to the "update datasources" and database engine -> tmm is much faster now with large databases<br />
x some fixes and preventions to the "update datasources" engine<br />
x many memory optimizations (tmm now uses less memory)<br />
x when renaming an actor, the actor thumb also gets renamed<br />
x several issues/problems with the renamer<br />
x artwork naming for DVD/BR images<br />
x adapted scaling factor of the tmm window - now it should fit on lower screens nicely<br />
x crash at startup with invalid locales<br />
x crash when searching for a movie set is fixed with themoviedbapi 3.9<br />
x NFO parsing of xbmc-youtube plugin urls<br />
x externalized some more string (better translations)<br />
x several fixes to the TV show renamer<br />
translations: added spain (thx to roliverosc), italian (thx to peppe_sr), korean (thx to piodio), norwegian (thx to roandr); completed fr (thx to nerve)

---

**17.11.2013 - version 2.4.7**
<br />=======================<br />

\+ added configurable scraper threshold (thx to georg)<br />
x some performance enhancements to the movie importer<br />
x remove set tag from XBMC nfo after removing a movie from a set<br />
x more effective scaling of images (out of heap error should be gone)<br />
x MovieRenamer/Cleanup: &#8216;thumbs&#8217; were ignored/lost in GUI<br />
x better certification import from MP NFOs<br />
x more enhancements to the imdb scraper (especially for non english speaking users)<br />
x minified movie chooser window to fit on smaller screens<br />
x better subtitle detection<br />
x scrape collection info is now possible without scraping any other metadata<br />
x NFO file name/location for DVD/BR folders

---

**01.11.2013 - version 2.4.6**
<br />=======================<br />

\+ new TV show renamer option: 01&#215;01 format<br />
\+ added a tag for optional tokens {}<br />
x added -Djava.net.preferIPv4Stack=true to solve possible networking problems<br />
x regression when choosing of local files<br />
x reworked actor images (better import performance, jpg/png instead of tbn)<br />
x removed www.imdb.de (isn&#8217;t working anymore - www.imdb.com is taken all the time, including a force to the preferred scraping language)<br />
x some graphical changes to the moviechooser

---

**28.10.2013 - version 2.4.5**
<br />=======================<br />

\+ when getting only 1 search result at automatic scrape, we assume it is the right one (and take it - ignoring the score)<br />
\+ added update single data source to the menus<br />
x on some machines, tmm crashed at startup (using oracle java 8)<br />
x samples of TV show episodes will now be renamed to a samples folder<br />
x added env.txt for linux users (they can now use mediainfo without drawbacks on non-UTF8 installations)<br />
x tweaked import logic and media info parsing (should work better with large libraries)<br />
x directory separators in movie renamer file naming will now be ignored<br />
x when scraping new items in the TV show section, sometimes the whole TV show has been rescraped<br />
x the TV show importer will now recognize also .tbn

---

**20.10.2013 - version 2.4.4**
<br />=======================<br />

\+ added icons to the menu items<br />
\+ changed our notification system<br />
\+ improved caching of extrathumbs/extrafanart<br />
\+ improvements to the renamer (+new commandline argument -checkFiles)<br />
\+ at single scrape, searches with only 1 result will automatically taken<br />
\+ added context menu with common actions in the movie set panel<br />
\+ selective datasource update for commandline (see <a title="Command line arguments" href="https://www.tinymediamanager.org/index.php/command-line-arguments/">here</a>)<br />
x massive rework on our caching system (images should no longer be cut off)<br />
x do not cache images in the url cache anymore (they were kinda useless)<br />
x set movie year an initial value if deleted in the editor (rather than NULL)<br />
x for some users (mainly java 1.6 users) mediainfo was gathering nothing since 2.4.3<br />
x better name/year detection in the filename/directory parser<br />
x when downloading extrafanart/extrathumb no mediainfo was gathered for them<br />
x when renaming a multiepisode file, the episode title will no longer taken into the filename<br />
x changed IMDB scraper due to changes the plotsummary page

---

**13.10.2013 - version 2.4.3**
<br />=======================<br />

\+ added video codec / audio codec filter for movies<br />
x some enhancements to the search algorithm<br />
x some performance improvements for updating datasources<br />
x (OSX) mediainfo will now gather data from all files<br />
x media information now gathers more audio/text details<br />
x an invalid database recovery file no longer prevents tmm from starting<br />
x wrapped settings into a scrollpane (tmm window is no longer larger than the screen on small res. devices)<br />
x custom genres work as they should (also wrong picked genres are fixed)<br />
x failed http requests are no longer cached

---

**08.10.2013 - version 2.4.2**
<br />=======================<br />

x spacer replacement with . went crazy<br />
x ignore invalid IMDB entries<br />
\+ a little better IMDB movie detection<br />
\+ video format $F renamer option<br />
\+ additional TvShow renaming separator<br />
\+ better explanation why a movie is not scraped

---

**05.10.2013 - version 2.4.1**
<br />=======================<br />

\+ detect imdb id from file/folder name at import<br />
\+ switched scaling algorithm to imgscalr - is should now use less memory, be faster and the images have a better quality<br />
\+ implemented a new column resizer - the tables for media files/trailer should now have more accurate column widths<br />
\+ option to not renaming a movie into a movie set folder, when the movie set only has one movie<br />
x do not overwrite imdb id / tmdb id with empty values when scraping<br />
x better messages when renaming does not work<br />
x added a warning that TV show episodes with season/episode number -1 (not detected ones) cannot be renamed<br />
x added a warning before initializing the database<br />
x do not rename movie trailers when the renaming settings are empty<br />
x exclude movie set artwork from movie import<br />
x do not import windows special dirs (like $RECYCLE.BIN or Volume System Information)<br />
x store extrathumbs/extrafanart in the database after download<br />
x rebuild image cache now also caches extrafanart/extrathumbs

---

**30.09.2013 - version 2.4 - r1013**
<br />=======================<br />

\+ detect movies in multi movie dirs (this file structure is not recommended)<br />
\+ added wake on LAN support<br />
\+ add up to 5 fanarts to the MediaPortal NFO<br />
\+ clear image cache for single movies/TV shows/episodes<br />
\+ reworked search result score calculation (automatic scrape should now be better)<br />
\+ Moviemeter.nl will now gather more data<br />
\+ reworked movie panel for better access to common menu items<br />
\+ added certification to the renamer options<br />
\+ made search panel a bit smaller, so it is not taking up that much space<br />
\+ our 1000th commit 😉<br />
x fixed movie renamer. If you encounter some problems with incomplete renaming - an update datasource should fix it!<br />
x if you suffered from incomplete renaming, tmm crashed when selecting a movie<br />
x fixed a crash in the image panel<br />
x IMDB scraper should now return better localized titles<br />
x TheTVDb scraper will now always take the right language from settings<br />
x better detection of BR/DVD folders<br />
x changed working directory for *nix commandline shellscripts<br />
x cancel TV show renamer should now cancel immediately<br />
x close movie scraper (force best match) via &#8216;X&#8217; will no longer start the scraper

---

**16.09.2013 - version 2.3 - r967**
<br />=======================<br />

\+ command line arguments! see <a title="Command line arguments" href="https://www.tinymediamanager.org/index.php/command-line-arguments/> for more details<br />
\+ localized Genres<br />
\+ new video file type VIDEO_EXTRAS; detect additional videos according to https://github.com/brentosmith/xbmc-dvdextras<br />
\+ added three differend space replacements for the movie renamer (like in the TV show renamer)<br />
x display "runtime" from videos, if not have been scraped<br />
x trailers: do not put local ones in NFO<br />
x faster artwork panel<br />
x better video format & aspect ratio detection (XBMC like)<br />
x MediaFiles ordering<br />
x writing now always fileinfos, corrected channel settings<br />
x movie renamer: duplicate spacer replacements<br />
x mark new movies did not work in all cases<br />
x better TV show naming detection, removing more false positives<br />
x "force" mediainfo<br />
x certificate issue<br />
many internal changes

---

**31.08.2013 - version 2.2 - r912**
<br />=======================<br />

\+ added search field in the TV show section<br />
\+ added $N token for movie renamer (movieset title)<br />
\+ cleanup of empty folders in the TV show renamer<br />
\+ manual reload of mediainformation for TV shows<br />
\+ added "update selected TV show(s)" to the split button<br />
\+ added expand/collapse all nodes in the TV show section<br />
\+ added automatic backup of the database<br />
\+ added slovak translation<br />
x .desktop files will now get a valid path in linux (if you have troubles starting tmm via the .desktop, delete tinyMediaManager.desktop before starting tmm)<br />
x better video resolution detection (now detecting 4:3 HD)<br />
x some fixes for more stable TV show renaming<br />
x on update datasources (tv show section) now the episode files will also get scanned with mediainfo<br />
x subtitle renaming<br />
x removed duplicate languages from settings<br />
x some ui component layout in the movie editor<br />
x more stable highlighting of new TV shows/episodes<br />
x added /usr/share/java to the classpath for linux (to use system wide installed swt lib)<br />
x better layouting of the bulk edit window (movie section)<br />
x some code cleanups

---

**18.08.2013 - version 2.2 - r865**
<br />=======================<br />

\+ TV show renamer<br />
\+ 2 cool movie export templates from Matthew (jQueryliscious & SimpleConfluence)<br />
\+ added country to the movie NFO<br />
\+ added some more NFO tags which tmm will pass through (which tmm doesn&#8217;t support)<br />
\+ movie renamer has a new option to remove/cleanup all non tmm NFOs<br />
\+ added searching for TV show episodes (useful for specials - <a title="TV show specials" href="https://www.tinymediamanager.org/index.php/tv-show-specials/">see here</a>)<br />
\+ added changing of UI language (<a title="UI translations" href="https://www.tinymediamanager.org/index.php/ui-translations/">see here</a>)<br />
\+ added sorttitle to TV shows<br />
\+ added english as fallback language to the movieset scraper<br />
\+ added highlighting of new TV shows/episodes<br />
\+ added "scrape new items" action to TV shows<br />
\+ added artwork panel for movies (which will show all artwork for a movie)<br />
\+ added dutch and portuguese UI translations<br />
x improved writing of XBMC NFOs (you should rewrite your movie NFOs)<br />
x some improvements on the imdb and tmdb scraper<br />
x better stacking marker detection for movie and tv shows<br />
x many changes to movie sets (better scraping, better sorting)<br />
x TV show season poster for specials now have the correct filenames<br />
x remove logs which are older than 1 week<br />
x some fixes to the movie exporter<br />
x when adding new tags, they will now appear immediately in the filter panel<br />
x occasionally crashes with the movie renamer<br />
x codec/resolution images should now displayed the right way<br />
x many, many stability fixes (thx to all bug reporters!)

---

**25.07.2013 - version 2.1 - r768**
<br />=======================<br />

\+ option to update a single datasource(<a title="Update single datasource/TV show" href="https://www.tinymediamanager.org/index.php/update-single-datasourcetv-show/">see post</a>)<br />
\+ added experimental support of moviemeter.nl scraper<br />
\+ added fallback language (en) if the localized translation (title, plot, tagline) for a movie is not found<br />
\+ added copy/cut/paste context menu for textfields<br />
\+ force NFO rewrite<br />
\+ added extra scraping action for episodes (e.g. for are new episodes in a TV show)<br />
x many enchancements to the movie and TV show importers<br />
x many stability fixes<br />
x edited movie plot will now be stored (to database and NFO)<br />
x sort order of movies in a movieset if the movie count > 9<br />
x file name of episode thumb<br />
x some fixes for MediaPortal NFOs<br />
x when updating an offline TV show datasource, the TV shows will no longer get removed<br />
x duplicate TV shows<br />
x scraper settings will now be respected upon scrape

---

**14.07.2013 - version 2.1 - r716**
<br />=======================<br />

\+ movie set token available for movie renamer<br />
\+ added movie selection for the renamer preview (in settings)<br />
\+ added more languages for the scrapers<br />
\+ implemented lazy loading for actor images (now they are only fetched, if the cast tab is visible)<br />
x massively improved movie renamer<br />
x sortable title is now taken the right way<br />
x respect "to scrape options" everywhere (movie section)<br />
x improved import of BD/DVD folders<br />
x better trailer results from TMDB<br />
x better actor images from IMDB<br />
x removed useless error popups when importing movies/tv shows with unreadable NFOs<br />
x do not add the same datasource multiple times<br />
x do not clean movies if the datasource isn&#8217;t available (e.g. offline NAS)

---

**30.06.2013 version 2.1 - r694**
<br />=======================<br />

\+ added play button to launch the video file with your systems default player (<a title="Start movie/episode playback from tinyMediaManager" href="https://www.tinymediamanager.org/index.php/start-movieepisode-playback-from-tinymediamanager/">post</a>)<br />
\+ notification messages in the UI (<a title="Notification messages" href="https://www.tinymediamanager.org/index.php/notification-messages/">post</a>)<br />
\+ summary popup after a task (<a title="Notification messages" href="https://www.tinymediamanager.org/index.php/notification-messages/">post</a>)<br />
\+ mass edit of TV show episodes (remove invalid ones/add missed ones, mass change of season/episode number - <a title="Enhanced TV show editor" href="https://www.tinymediamanager.org/index.php/enhanced-tv-show-editor/">post</a>)<br />
\+ logging window (for an easy access to the errors/warnings of the log file)<br />
\+ movies can now be automatically assigned to moviesets, when using the TMDB scraper<br />
\+ worked almost all scrapers to provide better search results<br />
\+ live preview of the renamer settings<br />
\+ some enhancements to the renamer<br />
\+ added .fanart.ext as fanart filename<br />
\+ changes trailer urls in XBMC NFO for use with plugins (youtube.com will use the youtube plugin; apple.com, ign.com and some more will use the hd-trailers.net plugin)<br />
x hidden folders (like .AppleDouble) are being ignored<br />
x email field is now also in the bug report dialog (we need that for questions about the bug if it&#8217;s not clear)<br />
x export templates should work again<br />
x little fix to the actor panel (no need to change movie/TV show/episode to display newly added actors)<br />
x regathering of mediainfo is now in its own thread and won&#8217;t block the UI anymore<br />
x some problems with tags

---

**14.06.2013 - version 2 - r650**
<br />=======================<br />

\+ changing episode thumbs now possible (local files)<br />
x error in movie exporting<br />
x crash when using empty tags<br />
x crash when having an episode/season number < 0 or > 999<br />
x storing window size/position settings everytime tmm closes<br />
x multithreading issue (occasionally crashes on import/scraping)<br />
x prevent loading of system jna for linux user

---

**09.06.2013 - version 2.0 - r623**
<br />=======================<br />

biggest update in the history of tinyMediaManager (almost 3 months of work):<br />
added TV show management (not complete - renamer is missing)<br />
massively improved speed and stability<br />
multilang UI (english and german at the moment)<br />
reworked imdb scraper (better results)<br />
reworked renamer (better and faster)<br />
reworked movie importer<br />
reworked internal file handling<br />
restructured the whole code<br />
and a lot more

---

**24.03.2013 - Beta - r375**
<br />=======================<br />

\+ movielist export (we still need someone to create a nice html template)<br />
\+ native file dialogs (see <a title="File and directory chooser dialog" href="https://www.tinymediamanager.org/index.php/file-and-directory-chooser-dialog/">this post</a>)<br />
\+ added zelluloid.de scraper<br />
\+ added button to cancel "update datasources"<br />
x changed path of movieset artwork to absolute

---

**16.03.2013 - Beta - r348**
<br />=======================<br />

\+ support of custom genres (the dropdown for genres is now editable, import of new genres through NFO will create them)<br />
\+ improved support of extrathumbs and initially support of extrafanart (for details see here)<br />
\+ added support for a movieset artwork folder (for use with the XBMC Addon "Movie Set Artwork Automator - for more details see here)<br />
\+ added trailer column in movielist<br />
x display of movie name will no longer be weird after renaming the movie<br />
x improved renaming logic (should work better on windows)<br />
x improved writing of certifications to the NFO<br />
x moved statusbar a bit down, so it will be visible on all screens<br />
x added a "loading image" to visualize wether background tasks are still running<br />
x added a warning on close of tmm, if a background task is running<br />
x some minor things I forgot 😉

---

**01.03.2013 - Beta - r314**
<br />=======================<br />

\+ added "abort queue" when selecting multiple movies and do edit/search actions<br />
x NPE on moviesorting in moviesets<br />
added numerous logging locations

---

**27.02.2013 - Beta - r306**
<br />=======================<br />

\+ added bulk editing of: genres, tags, movieset assignment and watched flag<br />
\+ XBMC NFO writing should now respect many (in tmm) unused tags rather than overwrite it completely<br />
\+ added mediainfo logos for common formats<br />
\+ actor images con now be stored in .actors folder<br />
\+ jpg and png should now be stored with the correct filetype<br />
\+ added spoken languages (not in NFO so far)<br />
\+ moviesets are now sorted alphabetically<br />
\+ added sorttitle as an extra changeable field in the movie editor (will be filled automatically when in a movieset)<br />
\+ added tag in XBMC NFO<br />
x fixed memory leak with mediainfo<br />
x increased stacksize - mediainfo should no longer cause jvm crashes<br />
x added throttling of tmdb connections (only 30 requests per 10 sec per IP is allowed)<br />
x if a scraper did not find anything - nothing found will be shown in the movie chooser<br />
x if a scraper did not find anything - nothing will be overwritten when force best match<br />
x imdb scraper now serves more accurate search results<br />
x more failsafe extraction of "external" NFOs (i.e. from Ember or XBMC)<br />
x each director/writer (credits) will be stored in its own tag in the XBMC NFO<br />
x only the first studio will be exported into the XBMC NFO

---

**13.02.2013 - Beta - r279**
<br />=======================<br />

improved handling of various image filenames<br />
reworked the movie renamer (now renaming will work even better with all different image filenames)<br />
internal rework on scraper handling: now its easily possible to choose the scraper and the data to be scraped<br />
"update datasources" will now remove movies which are no longer accessible (ie deleted/moved movies)<br />
added initial support for DVD/BR disc folders<br />
added a warning, that .tbn image filenames will be dropped soon<br />
added a settings option for movie-filenames<br />
added a possibility to rename only files/folder (if there is no renaming pattern entered, the part won&#8217;t be renamed)<br />
improvements in certification parsing (but there is more work to do)<br />
improved importing of NFO which only contained an url in the "thumb" tag<br />
fixed a bug when parsing runtime from NFO which contains the string "min"<br />
fixed parsing of genres in NFO (mostly written by Ember)<br />
fixed a bug where the extrathumb folder has been created everytime an image was chosen<br />
fixed a bug where no trailers were written to the NFO<br />
fixed a bug where changing metadata on which has been filtered, caused tmm to hang<br />
added more default filenames to be recognized on import<br />
updated HTTPClient to 4.2.3<br />
last, but not least: added a "Donate" option to the "?" menu

---

**04.02.2013 - Beta - r256**
<br />=======================<br />

fixed creation of extrathumbs<br />
added the option to get the tmdbid for moviesets in movieset editor window

---

**03.02.2013 - Beta - r254**
<br />=======================<br />

added ofdb.de scraper<br />
added fanart.tv scraper (now image scraping from more than one source is possible!)<br />
added image changing for moviesets<br />
added image writing for moviesets (in each movie of a movie set there will be a movieset-fanart.jpg and movieset-poster.jpg)<br />
improved importing of movies into tmm (now also moviesets will be automatically created and assigned)<br />
several little bugfixes

---

**28.01.2013 - Beta - r241**
<br />=======================<br />

fixed parsing of NFO in UTF-8<br />
fixed a bug where mediainfo crashed tmm<br />
changed search/filter panel

---

**27.01.2013 - Beta - r229**
<br />=======================<br />

added mediainfo lib<br />
added filter for moviesets (movies in/not in a movieset)<br />
fixed a bug where trailer was recognized as movie file<br />
maybe did some more

---

**20.01.2013 - Beta - r203**
<br />=======================<br />

fixed chartset in nfo files - now file encoding of NFO files in windows should be real UTF-8 added poster naming <movie filename>-poster.jpg<br />
moved and fixed debug menu

---

**19.01.2013 - Beta - r197**
<br />=======================<br />

added movieset management (most of it is in - you may notice some little glitches when changing a movieset - most of them are solved when you restart tmm)<br />
added an option to change title prefixes<br />
improved parsing a folder name for the movie name<br />
changed JTattoo to the newest release<br />
changed tmdb api to the newest release<br />
some bugfixes<br />
many changes under the hood

---

**06.01.2012 - Beta - r156**
<br />=======================<br />

changed releasenumber to fit to the svn commit<br />
many changes under the hood (for a better scraper support)<br />
massive ui cleanup (especially for small resolutions)<br />
added scraper selection on search window<br />
added hd-trailers.net for trailer scraping (thx to myron)<br />
added sorttitles for better sorting of the movie list (thx to myron)<br />
added storage of window positions<br />
added possibility to take a local image as fanart/poster<br />
changed theme<br />
improved imdb scraper<br />
fixed a bug where runtime = 0min was being scraped by the imdb scraper<br />
fixed a bug with renaming options<br />
maybe did some more things

---

**21.12.2012 - Beta - r94**
<br />=======================<br />

added feedback and bug report form (now its possible to send feedback and bug reports directly from tmm)<br />
added duplicate search<br />
added movie tags<br />
added imdb.de as imdb source (don&#8217;t expect good results - there are many movies with no plot/tagline; imho plot/title/tagline from tmdb works better)<br />
some minor ui fixes

---

**16.12.2012 - Beta - r93**
<br />=======================<br />

Mac OSX (at least Mountain Lion) users can now start tmm again - please download the new package directly from <http://code.google.com/p/tinymediamanager/downloads/list><br />
added trailer scraping to the imdb scraper<br />
added option to explicit choose the poster and fanart when "single scrape"<br />
updated credits<br />
minor bugfixes

---

**15.12.2012 - Beta - r92**
<br />=======================<br />

added trailer support (trailer will be scraped, when using tmdb scraper)<br />
greatly reworked settings panel<br />
added genre icons<br />
some smaller bugfixes

---

**09.12.2012 - Beta - r89**
<br />=======================<br />

many changes under the hood: added glazedlists so sorting/filtering of the list is faster<br />
sorting and filtering of the list<br />
solved the gaphical bug with drawing of the tabs (thanks to Michael Hagen - developer of JTattoo)<br />
some minor bugfixes

---

**23.11.2012 - Beta - r80**
<br />=======================<br />

changed tab layout of the main screen (there is sometimes one graphical bug with rendering of the tab at startup - just change to another tab/resize window and it will render right)<br />
changed window decoration to system default<br />
added the option to scrape translateable content (title/tagline/plot) from tmdb with imdb scraper<br />
added a main menu<br />
added watched flag (also in xbmc nfo)<br />
reordered nfo tags to a more logical structure<br />
changed thumb tag in nfo to the local file<br />
and maybe some other changes

---

**18.11.2012 - Beta - r73**
<br />=======================<br />

added experimental support for IMDB scraping

---

**10.11.2012 - Beta - r68**
<br />=======================<br />

added new default skin for all OS<br />
added some performance tweaks<br />
added Actor images<br />
improved parsing of existant data (NFO; image files)<br />
added new native starters for OSX and Windows<br />
added a splashscreen<br />
fixed some bugs<br />
and maybe some other things i can&#8217;t remember

---

**04.11.2012 - Alpha 2 - r55**
<br />=======================<br />

added renamer<br />
added certifications for various countries (thx to ysMP!)<br />
added splashscreen<br />
added file naming options (for nfo, poster and fanart)<br />
added compatibility to MediaPortal<br />
some other tweaks

---

**22.10.2012 - Alpha 2**
<br />=======================<br />

implemented automatic updates (so bugfixes faster reach our testers)<br />
fixed some reported bugs<br />
changed starter for windows (the executeable crashed on windows with java7)<br />
added some logging

---

**17.10.2012 - Alpha 1**
<br />=======================<br />

Initial release
