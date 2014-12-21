#!/bin/bash
#Logs File by Type

#Vars
#===========================================================
#Path to Movie Directory
mpath = '/media/MyMedia'

avilog = '/media/MyMedia/Avilog.log'
mp4log = '/media/MyMedia/Mp4log.log'
mkvlog = '/media/MyMedia/Mkvlog.log'


find /media/MyMedia -type f -name "*.avi" > /media/MyMedia/Avilog.log
find /media/MyMedia -type f -name "*.mp4" > /media/MyMedia/Mp4log.log
find /media/MyMedia -type f -name "*.mkv" > /media/MyMedia/Mkvlog.log