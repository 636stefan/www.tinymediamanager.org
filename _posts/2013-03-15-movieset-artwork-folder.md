---
title: Movieset artwork folder
author: mlaggner
layout: page
permalink: /blog/movieset-artwork-folder/
categories:
  - Feature
  - News
---
XBMC has a lack of supporting full movieset metadata from external tools. So it is impossible to get the movieset artwork you have chosen in tinyMediaManager into XBMC without any other tools.<!--more-->

There is an addon for XBMC ([Movie Set Artwork Automator][1]), which makes it possible to automatically set the artwork for moviesets. To get the artwork ready for this addon, tinyMediaManager can now (coming with r340) store the movieset artwork into an artwork folder inside the datasource (Settings -> Movies - Images):

<a class="fancybox" href="{{ site.urlimg }}2013/03/movieset_artwork_settings.png" rel="post">
![Movieset artwork settings]({{ site.urlimg }}2013/03/movieset_artwork_settings.png "Movieset artwork settings")
</a>

Activating this setting allows tinyMediaManager to store chosen movieset artwork into the specified folder inside "every" datasource. Inside every datasource is needed, because a movieset could contain movies from different datasources.

After storing the artwork to this folder, the addon "Movie Set Artwork Automator" should be able to pick up the images.

 [1]: http://forum.xbmc.org/showthread.php?tid=153502
