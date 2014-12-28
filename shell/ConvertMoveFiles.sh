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
cd $ppath/Tv
wget $conpath/Tv/*
#mv $conpath/Tv/* $ppath/Tv/
#mv $conpath/Movies/* $ppath/Movies/
#mv $conpath/Android/* $ppath/Android/



