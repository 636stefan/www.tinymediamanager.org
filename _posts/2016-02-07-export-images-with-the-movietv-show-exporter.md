---
title: Export images with the movie/TV show exporter
author: mlaggner
layout: page
permalink: /blog/export-images-with-the-movietv-show-exporter/
categories:
  - News
  - Feature

---
With version 2.7.3 we've added a feature to export the images/artwork along with the meta data to build better/more complete export templates.

You will find the latest information about the exporting engine in our [wiki](https://github.com/tinyMediaManager/tinyMediaManager/wiki/Export-Templates#exporting-images). <!--more-->Here is an excerpt of the new feature:

---

You can either embed image urls (see the example above) into your templates or export the images from your library.

**Be aware**: Image urls are not always available. Whenever you scrape a movie/episode in tinyMediaManager we store the image url in our internal database. But if you import existing objects into tinyMediaManager (via NFOs), there are no more urls available and your export template could get incomplete.

We've added a feature to trigger an export of images (with or without scaling) along the meta data export. In the following example you see how a movie poster can be exported via the template:  

<pre>${foreach movies movie}
  &lt;img src="../${movie(../nopicture.gif);copyArtwork(type=POSTER, thumb=true, width=180, destination=images)}" /&gt;
${end}</pre>

To initiate the export process you only need `${movie;copyArtwork(type=...)}`. All other options are optional.

As you see there are some options for exporting available:  

* `(../nopicture.gif)`: this image will be taken if the desired image can not be exported for this movie  
* `type=...`: select which artwork type you want to export:  
  * POSTER  
  * FANART  
  * BANNER  
  * CLEARART  
  * DISCART  
  * LOGO  
  * THUMB  
  * SEASON_POSTER  
* `thumb=...`: rescale the image to a thumbnail? Valid options are `true` and `false`. Default is `false`  
* `width=...`: scale to the desired width when creating a thumbnail. Valid is any number. Default: `150`  
* `destination=...`: the destination folder where to export the images to. This name is relative to the chosen export folder (e.g. you want to export to `H:\export` and have `img` as destination, all images will be exported to `H:\export\img`). Default: `images`
