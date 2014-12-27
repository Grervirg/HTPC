#!/bin/bash

spath='/home/grervirg/Videos/Movies/'
cpath='/home/grervirg/Videos/Complete/Movies/'

find $spath -iname \*.avi -exec HandBrakeCLI -i {} -o {}.mkv --preset=\"Kodi Anim\"  _ {} \;
mmv \*.avi.mkv $cpath#1.mkv