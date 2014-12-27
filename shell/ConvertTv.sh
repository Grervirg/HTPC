#!/bin/bash

find /home/grervirg/Videos/Tv -iname \*.avi -exec HandBrakeCLI -i {} -o /home/grervirg/Videos/Complete/Tv/{}.mkv --preset=\"Kodi\"  _ {} \;