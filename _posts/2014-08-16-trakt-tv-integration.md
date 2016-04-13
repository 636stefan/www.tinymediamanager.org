---
title: Trakt.tv integration (donator feature)
author: mlaggner
layout: page
permalink: /blog/trakt-tv-integration/
categories:
  - Feature
  - News
---
### 2.6.6 includes a new trakt.tv integration

Starting with version 2.6 we added an experimental integration of [trakt.tv](http://www.trakt.tv) for our donators.<!--more-->

If you want to synchronize your tinyMediaManager library with trakt.tv you need to register to trakt.tv and add your login credentials in the tinyMediaManager settings (Settings -> General -> external Services).

<a class="fancybox" href="{{ site.urlimg }}2014/08/trakt01.png" rel="post" title="trakt.tv settings">
![trakt.tv settings]({{ site.urlimg }}2014/08/trakt01.png "trakt.tv settings")
</a>

You can also let tinyMediaManager automatically synchronize of your movies/TV shows with trakt.tv:

<a class="fancybox" href="{{ site.urlimg }}2014/08/trakt02.png" rel="post" title="trakt.tv movie synchronize">
![trakt.tv movie synchronize]({{ site.urlimg }}2014/08/trakt02.png "trakt.tv movie synchronize")
</a>

<a class="fancybox" href="{{ site.urlimg }}2014/08/trakt03.png" rel="post" title="trakt.tv TV shows synchronize">
![trakt.tv TV shows synchronize]({{ site.urlimg }}2014/08/trakt03.png "trakt.tv TV shows synchronize")
</a>

After adding your trakt.tv settings, there are some ways to synchronize the tinyMediaManager library with the trakt.tv library:

  * automatic synchronization when doing an "update datasource" or changing meta data (scrape, editing)
  * manual synchronization of
      * Your movie / TV show list (without watched state)
      * The watched state of your movies / TV shows
