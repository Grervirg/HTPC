#!/bin/bash

compath='/home/grervirg/Videos/Complete'
#conpath='/media/MediaProcess'
sconpath='/mnt/mediacenter'
dconpath='/media/downloads/Complete'
ppath='/home/grervirg/Videos'
conpath='nfs://10.0.1.100/media/MediaProcess'

mv $compath/Tv/* $dconpath/tv/
mv $compath/Movies/* $dconpath/movies/
mv $compath/Android/* $dconpath/android/
rm $ppath/Tv/*
rm $ppath/Movies/*
rm $ppath/Android/*
cd $ppath/Tv
wget -r  $conpath/Tv/*
#mv $conpath/Tv/* $ppath/Tv/
#mv $conpath/Movies/* $ppath/Movies/
#mv $conpath/Android/* $ppath/Android/



