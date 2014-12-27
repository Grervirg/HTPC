#!/bin/bash

find .  -iname \*.avi -exec HandBrakeCLI -i {} -i {}.mkv? --present=\"Kodi\"  _ {} \;