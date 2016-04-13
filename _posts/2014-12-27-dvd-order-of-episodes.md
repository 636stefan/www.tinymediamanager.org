---
title: DVD order of episodes
author: mlaggner
layout: page
permalink: /blog/dvd-order-of-episodes/
categories:
  - Feature
  - News
---
Starting with 2.6.5 you can now add TV show episodes in DVD order to tinyMediaManager.  
When importing new episodes to tinyMediaManager, the episode and season number is detected for nearly every possible notation. But is the season/episode from the aired order or from the DVD order? With the new feature you are able to change between aired order and DVD order to handle both numbering schemes.<!--more-->

To switch between aired and DVD ordering you have several different options:

a) set the default ordering of new imported episodes to DVD order in the settings

<a class="fancybox" href="{{ site.urlimg }}2014/12/tvshows_dvdorder_settings.png" rel="post" title="TV shows - DVD order settings">
![TV shows - DVD order settings]({{ site.urlimg }}2014/12/tvshows_dvdorder_settings.png "TV shows - DVD order settings")
</a>

Every imported episode with that flag activated is marked as being ordered by DVD.

b) set/unset the the DVD order mark for already imported episodes by using an action for that

<a class="fancybox" href="{{ site.urlimg }}2014/12/tvshow_change_dvdorder_action.png" rel="post" title="TV show change to DVD order">
![TV show change to DVD order]({{ site.urlimg }}2014/12/tvshow_change_dvdorder_action.png "TV show change to DVD order")
</a>

You can use this action on individual episodes, seasons and whole TV shows.

c) edit individual episodes to set the mark and edit the aired and DVD orders

<a class="fancybox" href="{{ site.urlimg }}2014/12/tvshows_dvdorder_edit.png" rel="post" title="TV shows - DVD order in editor">
![TV shows - DVD order in editor]({{ site.urlimg }}2014/12/tvshows_dvdorder_edit.png "TV shows - DVD order in editor")
</a>

These are the three different approaches to switch between the aired order and the DVD order. When set the ordering scheme, the scraper will match the episode/season numbers with the results from the scraper (only TVDB offers DVD order now). For example, when importing the TV show "Firefly" into tinyMediaManager one could see a similar result:

<a class="fancybox" href="{{ site.urlimg }}2014/12/tvshows_episodelist.png" rel="post" title="TV shows - episode list">
![TV shows - episode list]({{ site.urlimg }}2014/12/tvshows_episodelist.png "TV shows - episode list")
</a>

At this time is it unclear how to handle the numbers. When DVD order is activated, you will get the following result after scraping:

<a class="fancybox" href="{{ site.urlimg }}2014/12/tvshows_dvdorder.png" rel="post" title="TV shows - DVD order">
![TV shows - DVD order]({{ site.urlimg }}2014/12/tvshows_dvdorder.png "TV shows - DVD order")
</a>

while when changing this to aired order:

<a class="fancybox" href="{{ site.urlimg }}2014/12/tvshows_airedorder.png" rel="post" title="TV shows - aired order">
![TV shows - aired order]({{ site.urlimg }}2014/12/tvshows_airedorder.png "TV shows - aired order")
</a>
