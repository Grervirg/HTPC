#!/bin/bash

compath='/home/grervirg/Videos/Complete'
conpath='/media/MediaProcess'
sconpath='/mnt/mediacenter'
dconpath='/media/downloads/Complete'
ppath='/home/grervirg/Videos'

rsync -rvS --progress $compath/Tv/* $dconpath/tv/
rsync -rvS --progress $compath/Movies/* $dconpath/movies/
rsync -rvS --progress $compath/Android/* $dconpath/android/
rm -rfv $ppath/Tv/*
rm -rfv $ppath/Movies/*
rm -rfv $ppath/Android/*
rsync -rvS --progress $conpath/Tv/* $ppath/Tv/
rsync -rvS --progress $conpath/Movies/* $ppath/Movies/
rsync -rvS --progress $conpath/Android/* $ppath/Android/



