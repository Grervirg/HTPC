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
spath=''
cpath=''
preset=''



while getopts "m:t:a:f:n" arg; do
case $arg in
	m)
		spath=$mpath
		cpath=$mcompath
		;;
	t)
		spath=$tpath
		cpath=$tcompath
		;;
	a)
		spath=$apath
		cpath=$acompath
		preset=$androidpreset
		;;
	f)
		preset=$filmpreset
		;;
	n)
		preset=$animpreset
		;;
	esac
done

echo $spath
echo $cpath
echo $preset

#if [$1 -eq "Movies"] 
#then
#	spath=$mpath
#	cpath=$mcompath
#elif [$1 -eq "Tv"] 
#then
#	spath=$tpath
#	cpath=$tcompath
#elif [$1 -eq "Android"] 
#then
#	spath=$apath
#	cpath=$acompath
#else
#	echo "Missing Video Type"
#fi
#
#if [$2 = "film"]
#then
#	preset=$filmpreset
#elif [$2 = "anim"]
#then
#	preset=$animpreset
#elif [$2 = "android"]
#then
#	preset=$androidpreset
#else
#	echo "Missing Preset"
#fi

find $spath -iname \*.mkv -exec HandBrakeCLI -i {} -o {}.mkv $preset  _ {} \;
find $spath -iname \*.avi -exec HandBrakeCLI -i {} -o {}.mkv $preset  _ {} \;
find $spath -iname \*.mp4 -exec HandBrakeCLI -i {} -o {}.mkv %preset  _ {} \;
cd $spath
mv *.mkv.mkv $cpath
mv *.avi.mkv $cpath
mv *.mp4.mkv $cpath
cd $cpath
rename -v 's/\.mkv.mkv$/\.mkv/' *.mkv
rename -v 's/\.avi.mkv$/\.mkv/' *.mkv
rename -v 's/\.mp4.mkv$/\.mkv/' *.mkv
