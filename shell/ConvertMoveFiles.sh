#!/bin/bash

compath='/mnt/converter/Complete'
conpath='/media/MediaProcess'
sconpath='/mnt/converter'

ifconfig eth0 up
sleep 10

mmv $compath/Tv/*.* /media/Downloads/Complete/Tv/
mmv $compath/Movies/*.* /media/Downloads/Complete/Movies/
rm $sconpath/Tv/*.*
rm $sconpath/Movies/*.*
mmv $conpath/Tv/*.* $sconpath/Tv/
mmv $conpath/Movies/*.* $sconpath/Movies/
mmv $conpath/Android/*.* $sconpath/Android/



ifconfig eth0 down