#!/bin/bash
spath='/home/grervirg/Videos/Tv/'
cpath='/home/grervirg/Videos/Complete/Tv/'

find $spath -iname \*.mkv -exec HandBrakeCLI -i {} -o {}.mkv '--preset=\"Kodi Anim\"'  _ {} \;
find $spath -iname \*.avi -exec HandBrakeCLI -i {} -o {}.mkv '--preset=\"Kodi Anim\"'  _ {} \;
find $spath -iname \*.mp4 -exec HandBrakeCLI -i {} -o {}.mkv '--preset=\"Kodi Anim\"'  _ {} \;
cd $spath
rename \'s/\*.mkv.mkv\' *.mkv
rename \'s/\*.avi.mkv\' *.mkv
rename \'s/\*.mp4.mkv\' *.mkv