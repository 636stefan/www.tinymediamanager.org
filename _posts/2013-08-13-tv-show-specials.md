---
title: TV show specials
author: mlaggner
layout: page
permalink: /blog/tv-show-specials/
categories:
  - Feature
  - News
---
While TV show/episode scraping works pretty well, there are some problems with specials: Sometimes a special episode isn't part of the season which is actually aired or thetvdb.com is listing the special in an other way.<!--more-->

I've had a user with such a problem: The episode "Polar Challenge" of the TV show "Top Gear" was listed as S09E08, but thetvdb.com never found a result for this episode. This special was actually aired after S09E07 so the release team supposed that to be S09E08. After some research in thetvdb.com I found out that all specials are listed in the season 0.

To get the right title/plot/thumb for this episode the user had to look at thetvdb.com, get the season number (0) and episode number (12), insert this into the episode editor an click scrape again. This sounds a bit too much work for each special, so we implemented an episode search dialog, where the user is able to explicitly take the desired episode and scraping for its metadata.

With the new feature (included in r809) the work flow for this special episode will be: edit episode S09E08, press search and you will get the following error:

<a class="fancybox" href="{{ site.urlimg }}2013/08/special_episode.png" rel="post" title="Special episode - not found">
![Special episode - not found]({{ site.urlimg }}2013/08/special_episode.png "Special episode - not found")
</a>

After that you can click on "Search episode" and you will get the following episode chooser:

<a class="fancybox" href="{{ site.urlimg }}2013/08/special_episode2.png" rel="post" title="Episode chooser">
![Episode chooser]({{ site.urlimg }}2013/08/special_episode2.png "Episode chooser")
</a>

When choosing the episode here, the metadata like title, plot and thumb will stored for the special episode.

<a class="fancybox" href="{{ site.urlimg }}2013/08/special_episode3.png" rel="post" title="Special episode - after choosing">
![Special episode - after choosing]({{ site.urlimg }}2013/08/special_episode3.png "Special episode - after choosing")
</a>
