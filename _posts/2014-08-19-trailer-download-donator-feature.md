---
title: Trailer download (donator feature)
author: mlaggner
layout: page
permalink: /blog/trailer-download-donator-feature/
categories:
  - Feature
  - News
---
The second donator feature included in version 2.6 is the trailer download. When scraping a movie, several different trailers for every movie will be fetched.<!--more-->

<a class="fancybox" href="{{ site.urlimg }}2014/08/trailer_download01.png" rel="post" title="Trailer download">
![Trailer download]({{ site.urlimg }}2014/08/trailer_download01.png "Trailer download")
</a>

For some of these trailer provider we've written a downloader. At the moment our downloader supports trailer downloads from

  * Apple
  * AOL
  * hd-trailers.net
  * Youtube (limited support; never trailers, where audio and video streams are split in different files are not downloadable, because you get two different files which tinyMediaManager can't merge)

In the trailer overview, click on the icon on the left, which will start the download for the chosen trailer. The trailer will be downloaded to the movie folder with the same name as the movie file plus -trailer (e.g. The Dark Knight Rises (2012)-trailer.mov). Because of this file naming scheme, there is only one downloaded trailer at a time per movie possible.
