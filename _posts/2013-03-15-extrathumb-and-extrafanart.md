---
title: Extrathumb and extrafanart
author: mlaggner
layout: page
permalink: /blog/extrathumb-and-extrafanart/
categories:
  - Feature
  - News
---
With version r345 there are now 2 new features available: storing of extrathumbs (including resizing) and extrafanart.

To enable extrathumbs and extrafanart there are new options in Settings->Movie Images:<!--more-->

<a class="fancybox" href="{{ site.urlimg }}2013/03/extrathumbs_settings.png" rel="post" title="Settings for extrathumbs and extrafanart">
![Settings for extrathumbs and extrafanart]({{ site.urlimg }}2013/03/extrathumbs_settings.png "Settings for extrathumbs and extrafanart")
</a>

  * **Enable extrathumbs**: to enable storing of extrathumbs. Extrathumbs will be stored in the folder extrathumbs inside the movie folder.
  * **Resize extrathumbs to (width)**: Extrathumbs can be resized to the given width (with the correct aspect ratio)
  * **maximum of downloaded images on automatic scraping**: When doing an automatic scrape, up to x extrathumbs will be downloaded
  * **Enable extrafanart**: to enable storing of extrafanart. Extrafanart will be stored in the folder extrafanart inside the movie folder.
  * **maximum of downloaded images on automatic scraping**: When doing an automatic scrape, up to x extrafanart will be downloaded

When doing a manual selection of images, the image chooser window will now look like:

<a class="fancybox" href="{{ site.urlimg }}2013/03/change_fanart_linux.jpg" rel="post" title="Change fanart">
![Change fanart]({{ site.urlimg }}2013/03/change_fanart_linux.jpg "Change fanart")
</a>

Some new options have been added to the image chooser:

  * Checkbox **Extrathumb**: available if you enable extrathumbs through settings. When checked the image will be downloaded (and optionally resized) to the folder extrathumbs after clicking OK. If its not resized, it will be downloaded with the size chosen in the combobox.
  * Checkbox **Extrafanart**: available if you enable extrafanart through settings. When checked the image will be downloaded (with the size chosen via the combobox) and stored in the folder extrafanart after clicking OK.
  * Checkbox **Select all extrathumbs**: available if you enable extrathumbs. This will allow you to select all extrathumbs with one click.
  * Checkbox **Deselect all extrathumbs**: available if you enable extrathumbs. This will allow you to deselect all extrathumbs with one click.
  * Checkbox **Select all extratfanart**: available if you enable extrafanart. This will allow you to select all extrafanart with one click.
  * Checkbox **Deselect all extrafanart**: available if you enable extrafanart. This will allow you to deselect all extrafanart with one click.
