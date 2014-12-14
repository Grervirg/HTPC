#!/bin/bash
#cleans out unneeded files in media
# version 0.0.0.3

find /media/MyMedia/Movies -type f -name "*.tbn" -delete
find /media/MyMedia/Movies -type f -name "*.db" -delete
find /media/MyMedia/Movies -type f -name "*.idx" -delete
find /media/MyMedia/Movies -type f -name "*.xml" -delete
find /media/MyMedia/Movies -type f -name "*.nfo" -delete
find /media/MyMedia/Movies -type f -name "*.png" -delete
find /media/MyMedia/Movies -type f -empty -delete
#find /media/MyMedia/Movies -type f -name "*.nfo" -delete
#find /media/MyMedia/Movies -type f -name "*.nfo" -delete
chown -R grervirg:grervirg /media/MyMedia
chmod -R 0777 /media/MyMedia
find /media/MyMedia/Movies -type d -empty > /media/MyMedia/Movies/empty.log
find /media/MyMedia/Movies -type d -empty -delete