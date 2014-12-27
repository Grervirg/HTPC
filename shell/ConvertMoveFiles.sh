#!/bin/bash

compath='/home/grervirg/Videos/Complete/'
conpath='/media/MediaProcess'
sconpath='/mnt/mediacenter'
dpath='//10.0.1.100/Downloads/Complete/'
dconpath='/mnt/downloads/'
ppath='/home/grervirg/Videos/'

mount -t cifs -o username=grervirg,password=omawiq13,uid=1001,gid=1001 //10.0.1.100/MediaProcess $sconpath
mount -t cifs -o username=grervirg,password=omawiq13,uid=1001,gid=1001 $dpath $dconpath
mmv $compath/Tv/*.* $dconpath/Tv/

mmv $compath/Movies/*.* $dconpath/Movies/
rm $ppath/Tv/*.*
rm $ppath/Movies/*.*
mmv $ppath/Tv/*.* $sconpath/Tv/
mmv $ppath/Movies/*.* $sconpath/Movies/
mmv $ppath/Android/*.* $sconpath/Android/


umount $sconpath
umount $dconpath
