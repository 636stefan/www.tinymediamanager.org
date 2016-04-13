---
title: New internal threading model
author: mlaggner
layout: page
permalink: /blog/new-internal-threading-model/
categories:
  - Feature
  - News
---
We've reworked our internal threading model, to address some shortcomings of our old versions and provide better multi tasking.

In the new threading model we decide between several different types of tasks:<!--more-->

  * The so called main tasks (e.g. update data source, scrape, rename); only one can run at a time - **now queue able and cancel able**
  * Image download tasks. Like in the old tinyMediaManager version a background task, which is **now a queue and cancel able**
  * Big download tasks like trailer download (donator feature). **A single task which provides a progress and speed indicator; cancel able**
  * Misc. smaller tasks which are in a queue and cancel able.

The progress indicator on the lower right of the tinyMediaManager screen has been enhanced and provides a much better overview of all open and running tasks:

<a class="fancybox" href="{{ site.urlimg }}2014/08/threading01.png" rel="post" title="Threading popup">
![Threading popup]({{ site.urlimg }}2014/08/threading01.png "Threading popup")
</a>

When clicking on the progress bar, a popup opens, showing an overview over all running and waiting tasks.
