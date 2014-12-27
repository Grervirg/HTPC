#!/bin/bash
spath='/home/grervirg/Videos/Android/'
cpath='/home/grervirg/Videos/Complete/Android/'

find $spath -iname \*.avi -exec HandBrakeCLI -i {} -o {}.mp4 --preset=\"Android\"  _ {} \;
mmv \*.avi.mp4 $cpath#1.mp4
find $spath -iname \*.mp4 -exec HandBrakeCLI -i {} -o {}.mp4 --preset=\"Android\"  _ {} \;
mmv \*.mp4.mp4 $cpath#1.mp4
find $spath -iname \*.mkv -exec HandBrakeCLI -i {} -o {}.mp4 --preset=\"Android\"  _ {} \;
mmv \*.mkv.mp4 $cpath#1.mp4
