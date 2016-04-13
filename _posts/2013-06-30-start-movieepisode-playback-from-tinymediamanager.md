---
title: Start movie/episode playback from tinyMediaManager
author: mlaggner
layout: page
permalink: /blog/start-movieepisode-playback-from-tinymediamanager/
categories:
  - Feature
  - News
---
With version 2.1 - r685 we added the possibility to start a movie/episode (and downloaded trailer/samples) directly from within tinyMediaManager. The play is included in the details tab of movies and episodes:<!--more-->

<a class="fancybox" href="{{ site.urlimg }}2013/06/movie_play.jpg" rel="post" title="Play movie">
![Play movie]({{ site.urlimg }}2013/06/movie_play.jpg "Play movie")
</a>
<a class="fancybox" href="{{ site.urlimg }}2013/06/episode_play.jpg" rel="post" title="Play episode">
![Play episode]({{ site.urlimg }}2013/06/episode_play.jpg "Play episode")
</a>

Since we (have to) use the systems default media player, there are some restrictions for this function: We are not able to start multi part files, because there is no way to pass multiple files to "all" media players out there. There is also a problem starting at a defined place in a video file (e.g. the second episode in a multi episode file). To handle this restriction we've added the play buttons also to all playable files (movies, episodes, samples, trailers) in the "Media files" tab:

<a class="fancybox" href="{{ site.urlimg }}2013/06/movie_play2.jpg" rel="post" title="Play from media files">
![Play from media files]({{ site.urlimg }}2013/06/movie_play2.jpg "Play from media files")
</a>
