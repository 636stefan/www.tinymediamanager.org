---
title: Media source detection
author: mlaggner
layout: page
permalink: /blog/media-source-detection/
categories:
  - Feature
  - News
---
There is another feature for version 2.6: media source detection and management. To support several Kodi/XBMC skins, we've added the detection, management and renamer pattern for media sources as described in the [Kodi/XBMC wiki](http://wiki.xbmc.org/blog?title=Media\_flags\#Media_source)

According to the media sources which are mentioned in the wiki, we've also added a few common sources. At the moment we are able to detect<!--more-->

  * BluRay
  * HD-DVD
  * DVD
  * TV
  * VHS
  * DVD screener
  * Telesync
  * CAM
  * Webrip

with several regular expressions in the task "update data source" for movies (only). The media source is taken from the file name and/or folder name of the movie.  
The media source will be displayed in the "media information panel" along with all other media information of the video file (like bitrate, codec, audio streams..):

<a class="fancybox" href="{{ site.urlimg }}2014/08/mediasource01.png" rel="post" title="Media source">
![Media source]({{ site.urlimg }}2014/08/mediasource01.png "Media source")
</a>

You can also change the media source in the movie editor:

<a class="fancybox" href="{{ site.urlimg }}2014/08/mediasource02.png" rel="post" title="Movie editor">
![Movie editor]({{ site.urlimg }}2014/08/mediasource02.png "Movie editor")
</a>

And this media source is also available in the movie renamer:

<a class="fancybox" href="{{ site.urlimg }}2014/08/mediasource03.png" rel="post" title="Movie renamer">
![Movie renamer]({{ site.urlimg }}2014/08/mediasource03.png "Movie renamer")
</a>
