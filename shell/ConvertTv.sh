#!/bin/bash

find /home/grerivrg/Videos/Tv -iname \*.avi -exec HandBrakeCLI -i {} -o /home/grervirg/Videos/Complete/Tv/${0%.avi}.mkv --preset=\"Kodi\"  _ {} \;