#!/bin/bash

spath='/home/grervirg/Videos/Movies/'
cpath='/home/grervirg/Videos/Complete/Movies/'

find $spath -iname \*.mkv -exec HandBrakeCLI -i {} -o {}.mkv '--preset=\"Kodi Anim\"'  _ {} \;
mmv 's/\*.mp4.mkv$/.mkv' $cpath\*.mkv
find $spath -iname \*.avi -exec HandBrakeCLI -i {} -o {}.mkv '--preset=\"Kodi Anim\"'  _ {} \;
mmv 's/\*.mp4.mkv$/.mkv' $cpath\*.mkv
find $spath -iname \*.mp4 -exec HandBrakeCLI -i {} -o {}.mkv '--preset=\"Kodi Anim\"'  _ {} \;
mmv 's/\*.mp4.mkv$/.mkv' $cpath\*.mkv

