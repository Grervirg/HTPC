#!/bin/bash

compath='/home/grervirg/Videos/Complete'
conpath='/media/MediaProcess'
sconpath='/mnt/mediacenter'
dconpath='/media/downloads/Complete'
ppath='/home/grervirg/Videos'

mv $compath/Tv/* $dconpath/tv/
mv $compath/Movies/* $dconpath/movies/
mv $compath/Android/* $dconpath/android/
rm $ppath/Tv/*
rm $ppath/Movies/*
rm $ppath/Android/*
rsync -rvS $conpath/Tv/* $ppath/Tv/
rsync -rvS $conpath/Movies/* $ppath/Movies/
rsync -rvS $conpath/Android/* $ppath/Android/



