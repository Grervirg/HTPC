#!/bin/bash

find /home/grervirg/Videos/Tv -iname \*.avi -exec HandBrakeCLI -i {} -o {}.mkv --preset=\"Kodi Anim\"  _ {} \;
rename 's/\.avi.mkv$/\.mkv/' /home/grervirg/Videos/Tv/*.*
mv /home/grervirg/Videos/Tv/*.mkv /home/grervirg/Complete/Tv/