#!/bin/bash

compath='/home/grervirg/Videos/Complete'
conpath='/media/MediaProcess'
sconpath='/mnt/mediacenter'
dpath='//10.0.1.100/Downloads/Complete'
dconpath='/mnt/downloads/'
ppath='/home/grervirg/Videos'

mount -t cifs -o username=guest,rw,exec,auto //10.0.1.100/MediaProcess $sconpath
mount -t cifs -o username=guest,rw,exec,auto $dpath $dconpath
mv $compath/Tv/*.* $dconpath/Tv/

mv $compath/Movies/*.* $dconpath/Movies/
rm $ppath/Tv/*.*
rm $ppath/Movies/*.*
mv $sconpath/Tv/*.* $ppath/Tv/
mv $sconpath/Movies/*.* $ppath/Movies/
mv $sconpath/Android/*.* $ppath/Android/


umount $sconpath
umount $dconpath
