#!/bin/bash
spath='/home/grervirg/Videos/Tv/'
cpath='/home/grervirg/Videos/Complete/Tv/'

find $spath -iname \*.avi -exec HandBrakeCLI -i {} -o {}.mkv --preset=\"Kodi Anim\"  _ {} \;
mmv \*.avi.mkv $cpath#1.mkv
find $spath -iname \*.mp4 -exec HandBrakeCLI -i {} -o {}.mkv --preset=\"Kodi Anim\"  _ {} \;
mmv \*.mp4.mkv $cpath#1.mkv
find $spath -iname \*.mkv -exec HandBrakeCLI -i {} -o {}.mkv --preset=\"Kodi Anim\"  _ {} \;
mmv \*.mkv.mkv $cpath#1.mkv