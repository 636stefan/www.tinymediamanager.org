---
title: TV show management
author: mlaggner
layout: page
permalink: /blog/tv-show-management/
categories:
  - Feature
  - News
---
Starting with version r534 the core functionality of TV shows is almost done. The settings for the TV show section is similar to the settings of the movie section. You can

  * add/delete directories containing TV shows
  * change some settings for the scrapers
<!--more-->

At the moment there is only one scraper implemented: [The TV Database](http://www.thetvdb.com). More scrapers will come later.

All settings which affect TV shows and movies are now separated out to to a "general settings" section.  
<a class="fancybox" href="{{ site.urlimg }}2013/05/settings_panel.png" rel="post" title="Settings - General section">
![Settings - General section]({{ site.urlimg }}2013/05/settings_panel.png "Settings - General section")
</a>

When adding a directory containing TV shows to tinyMediaManager, be aware to use the following directory scheme: The datasource (directory) you add, MUST be the root of all TV shows. Every TV show in this datasource has to be in its own directory - NO NESTING ALLOWED!

For example see the following example. The datasource is /media/Data/TV shows, and it is containing the following directories/files:

  * 24
      * Season 1
          * 0600-0700.avi
          * 0700-0800.avi
          * 0800-0900.avi
      * Season 2
          * 1600-1700.avi
          * 1700-1800.avi
          * 1800-1900.avi
  * Breaking Bad
      * bb.s01e01.avi
      * bb.s01e02.avi
      * bb.s01e03.avi
      * bb.s02e01.avi
      * bb.s02e02.avi

As you see in the example, tinyMediaManager is capable of detecting various forms of filenames/directory names inside a TV show folder. We are using a large set of regular expressions to parse out the season and episode number from the filename, but there isn&#8217;t a 100% success rate. If it is not detected the right way, you are able to change it manually in tinyMediaManager.

After importing TV shows from a datasource you may have a similar screen:  
<a class="fancybox" href="{{ site.urlimg }}2013/05/tvshow_panel_linux.jpg" rel="post" title="TV shows">
![TV shows]({{ site.urlimg }}2013/05/tvshow_panel_linux.jpg "TV shows")
</a>

<a class="fancybox" href="{{ site.urlimg }}2013/05/episode_panel_linux.jpg" rel="post" title="TV show episode">
![TV show episode]({{ site.urlimg }}2013/05/episode_panel_linux.jpg "TV show episode")
</a>

Scraping and editing a TV show is as easy as for Movies:  

<a class="fancybox" href="{{ site.urlimg }}2013/05/tvshow_scraper_linux.jpg" rel="post" title="TV show scraper">
![TV show scraper]({{ site.urlimg }}2013/05/tvshow_scraper_linux.jpg "TV show scraper")
</a>

<a class="fancybox" href="{{ site.urlimg }}2013/05/tvshow_editor_linux.png" rel="post" title="TV show editor">
![TV show editor]({{ site.urlimg }}2013/05/tvshow_editor_linux.png "TV show editor")
</a>

<a class="fancybox" href="{{ site.urlimg }}2013/05/episode_editor_linux.jpg" rel="post" title="Episode editor">
![Episode editor]({{ site.urlimg }}2013/05/episode_editor_linux.jpg "Episode editor")
</a>

There are some more features implemented for the TV show section:

  * Bulk editing (mass change of several metadata including genre, tags, watched flag and season)
  * automatic scraping (force best match)
  * selection of a season poster
