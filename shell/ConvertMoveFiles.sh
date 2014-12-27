#!/bin/bash

compath='smb://Converter/Videos/Complete'
conpath='/media/MediaProcess'
sconpath='smb://Converter/Videos'

ifconfig eth0 up
sleep 10

mvv $compath/Tv/*.* /media/Downloads/Complete/Tv/
mvv $compath/Movies/*.* /media/Downloads/Complete/Movies/
rm $sconpath/Tv/*.*
rm $sconpath/Movies/*.*
mvv $conpath/Tv/*.* $sconpath/Tv/
mvv $conpath/Movies/*.* $sconpath/Movies/
mvv $conpath/Android/*.* $sconpath/Android/



ifconfig eth0 down