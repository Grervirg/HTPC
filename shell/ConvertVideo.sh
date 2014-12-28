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




while getopts "h:1:2:3:4:5:6" arg; do
case $arg in
	h)
	echo "Usage: $0 [option]"
	echo "-1 = Tv Film"
	echo "-2 = Tv Animation"
	echo "-3 = Movie Film"
	echo "-4 = Movie Animation"
	echo "-5 = Android"
	echo "-6 = DVD Coming soon"
	1)
		spath=$tpath
		cpath=$tcompath
		preset=$filmpreset
		;;
	2)
		spath=$tpath
		cpath=$tcompath
		preset=$animpreset
		;;
	3)
		spath=$mpath
		cpath=$mcompath
		preset=$filmpreset
		;;
	4)
		spath=$mpath
		cpath=$mcompath
		preset=$animpreset
		;;
	5)
		spath=$apath
		cpath=$acompath
		preset=$androidpreset
		;;
	esac
done

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
