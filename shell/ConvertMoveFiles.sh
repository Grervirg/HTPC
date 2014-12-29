#!/bin/bash


ntv='/media/MediaProcess/Tv'


compath='/home/grervirg/Videos/Complete'
conpath='/media/MediaProcess'
sconpath='/mnt/mediacenter'
dconpath='/media/downloads/Complete'
ppath='/home/grervirg/Videos'


rsync -rvS --progress $conpath/Tv/* $ppath/Tv/
rsync -rvS --progress $conpath/Movies/* $ppath/Movies/
rsync -rvS --progress $conpath/Android/* $ppath/Android/



