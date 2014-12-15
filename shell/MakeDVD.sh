#!/bin/bash
#Covert video to dvd

filein = $1
fileout = $2


ffmpeg -i $filein -filter:v "scale='if(gt(a,720/480),720,-1)':'if(gt(a,720/480),-1,480)',pad=w=720:h=480:x=(ow-iw)/2:y=(oh-ih)/2" -target ntsc-dvd out.mpg

dvdauthor --title -o folder_name -f out.mpg
dvdauthor -T -o folder_name

genisoimage -dvd-video -o movie.iso folder_name