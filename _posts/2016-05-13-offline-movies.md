---
title: Offline movies
author: mlaggner
layout: page
permalink: /blog/offline-movies/
categories:
  - News
  - Feature

---
With version 2.8 we've added a feature called offline movies. This feature can be used to add offline movies like DVD, BluRay or VHS movies to your media library and assist Kodi with the playback of these movies (see the [Kodi wiki](http://kodi.wiki/view/HOW-TO:Catalog_and_use_lookups_on_your_offline_DVD/CD_movie_library_by_creating_fake_files) for more information).

The offline movies feature works as follows:

* when detecting an existing `.disc` file in your data source, this movie will be marked as an offline movie inside tinyMediaManager.
* you can add new offline movies by using the new add button in the button bar of the movie section and/or in the menu `Movies`. (This will create a `.disc` file in a new folder in your datasource and place all other files like artwork and NFO in the same folder). After adding a new offline movie you can do the all operations like scraping, editing and renaming with this movie.
