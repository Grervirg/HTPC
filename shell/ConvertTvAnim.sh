#!/bin/bash
spath='/home/grervirg/Videos/Tv/'
cpath='/home/grervirg/Videos/Complete/Tv/'

find $spath -iname \*.avi -exec HandBrakeCLI -i {} -o {}.mkv --preset=\"Kodi Anim\"  _ {} \;
mmv \*.avi.mkv $cpath#1.mkv