---
title: Movie editions
author: mlaggner
layout: page
permalink: /blog/movie-editions/
categories:
  - News
  - Feature

---
With version 2.8 we've added a feature called movie editions. Before 2.8 having a movie in several editions (e.g. Directors Cut and Extended Edition) resulted in a messed up directory after renaming (the renamer put the two editions in the same destination folder).

With version 2.8 there is a new field in the movie editor where you can choose the movie edition for this movie. This field will also be pre-filled during "update datasources" along with a set of regular expressions.

In the movie renamer there is an additional token for the movie edition ($U) which is included in the new default pattern for folders

```$T { - $U }($Y)```

and files

```$T { - $U }($Y) $V $A```

Renaming a movie with a set edition will result in a unique destination folder. E.g.:

```The Matrix - Directors Cut (1999)```
