#!/bin/bash
t=$1
p=$2
mcomppath='/home/grervirg/Videos/Complete/Movies/'
tcompath='/home/grervirg/Videos/Complete/Tv/'
acompath='/home/grervirg/Videos/Complete/Android/'
mpath='/home/grervirg/Videos/Movies/'
tpath='/home/grervirg/Videos/Tv/'
apath='/home/grervirg/Videos/Android/'

filmpreset='--preset=\"Kodi\"'
animpreset='--preset=\"KodiAnim\"'
androidpreset='--preset=\"Android\"'

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
	cd $spath
	mv *.mkv.mkv $cpath
	mv *.avi.mkv $cpath
	mv *.mp4.mkv $cpath
	cd $cpath
	rename -v 's/\.mkv.mkv$/\.mkv/' *.mkv
	rename -v 's/\.avi.mkv$/\.mkv/' *.mkv
	rename -v 's/\.mp4.mkv$/\.mkv/' *.mkv
	
}


while getopts ":h:a:b:c:d:e:f:" arg; do
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





