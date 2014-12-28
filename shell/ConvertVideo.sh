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

echo $1
echo $2

if ["$t" == "Movies"]; then
spath=$mpath
cpath=$mcompath
elif ["$t" == "Tv"]; then
spath=$tpath
cpath=$tcompath
elif ["$t" == "Android"]; then
spath=$apath
cpath=$acompath
fi

if ["$p" == "film"]; then
preset=$filmpreset
elif ["$p" == "anim"]; then
preset=$animpreset
elif ["$p" == "android"]; then
preset=$androidpreset
fi

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
