---
title: Command line arguments
author: mlaggner
layout: page
permalink: /blog/command-line-arguments/
categories:
  - Feature
  - News
---
With r965 it is possible to do some common tasks via the command line. To start tinyMediaManager via the command line, there is a new executeable/shellscript for your system:  
Windows: tinyMediaManagerCMD.exe  
Linux/OSX: tinyMediaManagerCMD.sh (note: on OSX it is inside the tinyMediaManager.app)<!--more-->

Execute without any parameter, to display syntax.

available parameters:

  * **-updateMovies** ... update movie datasources and add new movies/files to the database
  * **-updateMoviesX** ... replace X with 1-9 - just updates a single movie datasource; ordering like GUI
  * **-updateTv** ... update TvShow datasources and add new TvShows/episodes to the database
  * **-updateTvX** ... replace X with 1-9 - just updates a single TvShow datasource; ordering like GUI
  * **-update** ... update all (short for '-updateMovies -updateTv')
  * **-scrapeUnscraped** ... scrape unscraped movies
  * **-scrapeNew** ... auto-scrape (force best match) new found movies/TvShows/episodes from former update(s)
  * **-renameNew** ... rename & cleanup of the new found movies/TvShows/episodes
  * **-checkFiles** ... does a physical check, if all files in DB are existent on filesystem (might take long!)

NOTE: if you start tinyMediaManager this way, you won't get an UI or updates! Please check for updates with the normal executeable to stay up to date
