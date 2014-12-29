#!/bin/sh
t=$1
p=$2
mcompath='/home/grervirg/Videos/Complete/Movies/'
tcompath='/home/grervirg/Videos/Complete/Tv/'
acompath='/home/grervirg/Videos/Complete/Android/'
mpath='/home/grervirg/Videos/Movies/'
tpath='/home/grervirg/Videos/Tv/'
apath='/home/grervirg/Videos/Android/'
dpath='/home/grervirg/Videos/Dvd/

filmpreset='--preset=\"Kodi\"'
animpreset='--preset=\"KodiAnim\"'
androidpreset='--preset=\"ndroid\"'

usage() {
	echo "Usage: $0 [option]"
	echo "-a = Tv Film"
	echo "-b = Tv Animation"
	echo "-c = Movie Film"
	echo "-d = Movie Animation"
	echo "-e = Android"
	echo "-f = DVD Coming soon"
	exit 1;}
		
convert() {
	echo $spath
	echo $cpath
	echo $preset
	find $spath -iname \*.mkv -exec HandBrakeCLI -i {} -o {}.mkv $preset  _ {} \;
	find $spath -iname \*.avi -exec HandBrakeCLI -i {} -o {}.mkv $preset  _ {} \;
	find $spath -iname \*.mp4 -exec HandBrakeCLI -i {} -o {}.mkv $preset  _ {} \;
	
	find $spath -name *.mkv.mkv -exec mv {} $cpath \;
	find $spath -name *.avi.mkv -exec mv {} $cpath \;
	find $spath -name *.mp4.mkv -exec mv {} $cpath \;
	cd $cpath
	rename -v 's/\.mkv.mkv$/\.mkv/' *.mkv
	rename -v 's/\.avi.mkv$/\.mkv/' *.mkv
	rename -v 's/\.mp4.mkv$/\.mkv/' *.mkv
	
}

dvdcreate() {
	#ffmpeg -i infile -filter:v "scale='if(gt(a,720/480),720,-1)':'if(gt(a,720/480),-1,480)',pad=w=720:h=480:x=(ow-iw)/2:y=(oh-ih)/2" -target ntsc-dvd out.mpg
}


while getopts ":habcdef:" arg; do
case $arg in
	h)
		usage
		;;
	a)
		spath=$tpath
		cpath=$tcompath
		preset=$filmpreset
		convert
		;;
	b)
		spath=$tpath
		cpath=$tcompath
		preset=$animpreset
		convert
		;;
	c)
		spath=$mpath
		cpath=$mcompath
		preset=$filmpreset
		convert
		;;
	d)
		spath=$mpath
		cpath=$mcompath
		preset=$animpreset
		convert
		;;
	e)
		spath=$apath
		cpath=$acompath
		preset=$androidpreset
		convert
		;;
	*)
		usage
		;;
	esac
done


echo $args


