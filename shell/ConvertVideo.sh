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




while getopts "movie:tv:android:tv-anim:movie-anim" arg; do
case $arg in
	movie)
		spath=$mpath
		cpath=$mcompath
		preset=$filmpreset
		;;
	tv)
		spath=$tpath
		cpath=$tcompath
		preset=$filmpreset
		;;
	android)
		spath=$apath
		cpath=$acompath
		preset=$androidpreset
		;;
	tv-anim)
		spath=$tpath
		cpath=$tcompath
		preset=$animpreset
		;;
	movie-anim)
		spath=$mpath
		cpath=$mcompath
		preset=$animpreset
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
