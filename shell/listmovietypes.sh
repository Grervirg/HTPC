#!/bin/bash
#Logs File by Type

#Vars
#===========================================================
#Path to Movie Directory
mpath='/media/MyMedia'
tpath='/media/Tv'

logpath='/var/medialogs/'
avilog={$logpath}'Avilog.log'
mp4log='/media/MyMedia/Mp4log.log'
mkvlog='/media/MyMedia/Mkvlog.log'
wmvlog='/media/MyMedia/WmvLog.log'
isolog='/media/MyMedia/isolog.log'
tslog='/media/MyMedia/tslog.log'
voblog='/media/MyMedia/voblog.log'



find $mpath -type f -name "*.avi" > $avilog
find $mpath -type f -name "*.mp4" > $mp4log
find $mpath -type f -name "*.mkv" > $mkvlog
find $mpath -type f -name "*.wmv" > $wmvlog
find $mpath -type f -name "*.iso" > $isolog
find $mpath -type f -name "*.ts" > $tslog
find $mpath -type f -name "*.vob" > $voblog





