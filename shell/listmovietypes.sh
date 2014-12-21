#!/bin/bash
#Logs File by Type

#Vars
#===========================================================
#Path to Movie Directory
mpath = /media/MyMedia/

avilog = /media/MyMedia/Avilog.log
mp4log = /media/MyMedia/Mp4log.log
mkvlog = /media/MyMedia/Mkvlog.log


find $mpath -type f -name "*.avi" > $avilog
find $mpath -type f -name "*.mp4" > $mp4log
find $mpath -type f -name "*.mkv" > $mkvlog