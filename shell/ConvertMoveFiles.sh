#!/bin/bash

compath='/home/grervirg/Videos/Complete'
conpath='/media/MediaProcess'
sconpath='/mnt/mediacenter'
dconpath='/media/downloads/Complete'
ppath='/home/grervirg/Videos'

mv $compath/Tv/* $dconpath/tv/
mv $compath/Movies/* $dconpath/movies/
mv $compath/Android/* $dconpath/android/
rm -rf $ppath/Tv/*
rm -rf $ppath/Movies/*
rm -rf $ppath/Android/*
rsync -rvS --progress $conpath/Tv/* $ppath/Tv/
rsync -rvS --progress $conpath/Movies/* $ppath/Movies/
rsync -rvS --progress $conpath/Android/* $ppath/Android/



