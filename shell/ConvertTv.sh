#!/bin/bash

find /home/grervirg/Videos/Tv -iname \*.avi -exec HandBrakeCLI -i {} -o /home/grervirg/Videos/Complete/Tv/${1%.avi}.mkv --preset=\"Kodi\"  _ {} \;