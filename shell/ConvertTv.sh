#!/bin/bash
spath='/home/grervirg/Videos/Tv/'
cpath='/home/grervirg/Videos/Complete/Tv/'

find $spath -iname \*.avi -exec HandBrakeCLI -i {} -o {}.mkv --preset=\"Kodi\"  _ {} \;
mmv \*.avi.mkv $cpath#1.mkv
find $spath -iname \*.mp4 -exec HandBrakeCLI -i {} -o {}.mkv --preset=\"Kodi\"  _ {} \;
mmv \*.mp4.mkv $cpath#1.mkv