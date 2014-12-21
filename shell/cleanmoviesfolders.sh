#!/bin/bash
#cleans out unneeded files in media

#Vars
#===========================================================
#Path to Movie Directory
mpath='/media/MyMedia'

#Log file
medialog='/var/logs/media.log'

#User:Group
muser='grervirg:grervirg'

#Permissions
perms=0777

#============================================================


#Options
#============================================================
#$1 = Clean Nfo's

##===========================================================

find $mpath -type f -name "*.tbn" -delete
find $mpath -type f -name "*.db" -delete
find $mpath -type f -name "*.idx" -delete
find $mpath -type f -name "*.xml" -delete

if [$1 == "true"]; then
	find $mpath -type f -name "*.nfo" -delete
fi

find $mpath -type f -name "*.png" -delete
find $mpath -type f -empty -delete
#find $mpath -type f -name "*.nfo" -delete
#find $mpath -type f -name "*.nfo" -delete
chown -R $muser $mpath
chmod -R $perms $mpath
date >> $medialog
find $mpath -type d -empty >> $medialog
find $mpath -type d -empty -delete







