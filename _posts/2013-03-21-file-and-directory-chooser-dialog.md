---
title: File and directory chooser dialog
author: mlaggner
layout: page
permalink: /blog/file-and-directory-chooser-dialog/
categories:
  - Feature
  - News
---
Some time ago I recognized (and a user pointed me to that issue) the file and directory chooser dialogs aren't as nice as the native counterparts. In the swing JFileChooser you have limited functions - only the filesystem as is is displayed, which is (at least) on linux a problem for some users. The swing version of the directory chooser looked like this:<!--more-->

<a class="fancybox" href="{{ site.urlimg }}2013/03/directorychooser_linux_old.png" rel="post" title="Directory chooser - Swing">
![Directory chooser - Swing]({{ site.urlimg }}2013/03/directorychooser_linux_old.png "Directory chooser - Swing")
</a>

As you see there is only the filesystem available - that's good: Everything in linux is a file :) But if a user connects an USB drive to the computer (or worse, he connects to a smb share), he has to know where the system mounts it.

The last week I've faced this problem - with success. It wasn't an easy task and it is not a "all in one" solution like java should be. The file chooser is a native part, so I had to tweak it for every system:

  * Windows: this was the easiest operating system to change. The "native" swing look and feel provides a dialog which is already useable:  
    <a class="fancybox" href="{{ site.urlimg }}2013/03/JFileChooser_Windows.png" rel="post" title="Directory chooser on Windows">
    ![Directory chooser on Windows]({{ site.urlimg }}2013/03/JFileChooser_Windows.png "Directory chooser on Windows")
    </a>
  * Mac OSX: changing the dialog in OSX was also pretty easy: here I could take the AWT FileDialog which is a native component and supports choosing directories after setting a property:
    <a class="fancybox" href="{{ site.urlimg }}2013/03/Directorychooser_osx.png" rel="post" title="Directory chooser on Mac OSX">
    ![Directory chooser on Mac OSX]({{ site.urlimg }}2013/03/Directorychooser_osx.png "Directory chooser on Mac OSX")
    </a>
  * Linux: was a horrific problem. Neither the swing approach with native look and feel nor AWT worked. So I had a choice: take the swing dialog we already have or use some other libraries. But the old dialog wasn't good enough, so I had to try several different things. Taking SWT did the trick: SWT connects natively to the system libraries to use their UI components. The directory chooser in linux (with SWT) now looks like:  
    <a class="fancybox" href="{{ site.urlimg }}2013/03/directorychooser_linux_swt.png" rel="post" title="Directory chooser on Linux with SWT">
    ![Directory chooser on Linux with SWT]({{ site.urlimg }}2013/03/directorychooser_linux_swt.png "Directory chooser on Linux with SWT")
    </a>
    The con is: SWT needs almost 1.8mb storage and is system dependend. So it is no easy thing to ship SWT with tinyMediaManager, but I've included a check whether SWT is available or not. So you can install SWT for your linux distro through the package manager (i.e. swt-gtk in Ubuntu; swt in Arch Linux) or simply download the appropriate package from <http://www.eclipse.org/swt/> and place the swt.jar (you may need to rename it) in the tinyMediaManager/lib folder. This also work on all other platforms (windows and OSX)

as a fallback (if no native dialogs working) tinyMediaManager tries to take the swing JFileChooser
