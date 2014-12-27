#!/bin/bash

compath='/home/grervirg/Videos/Complete/'
conpath='/media/MediaProcess'
sconpath='/mnt/mediacenter'
dpath='//10.0.1.100/Downloads/Complete/'
dconpath='/mnt/downloads/'
ppath='/home/grervirg/Videos/'

mount -t cifs -o username=grervirg,password=omawiq13 //10.0.1.100/MediaProcess $sconpath
mount -t cifs -o username=grervirg,password=omawiq13 $dpath $dconpath
mmv $compath/Tv/*.* $dconpath/Tv/

mmv $compath/Movies/*.* $dconpath/Movies/
rm $sconpath/Tv/*.*
rm $sconpath/Movies/*.*
mmv $sconpath/Tv/*.* $sconpath/Tv/
mmv $conpath/Movies/*.* $sconpath/Movies/
mmv $conpath/Android/*.* $sconpath/Android/


umount $sconpath
umount $dconpath
