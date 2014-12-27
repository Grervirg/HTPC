#!/bin/bash

find .  -iname “*.avi” -exec sh -c ‘HandBrakeCLI -i {} -i {}.mkv? --present=\"Kodi\" ‘ _ {} \;