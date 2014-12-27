#!/bin/bash

mcomppath='/home/grervirg/Videos/Complete/Movies/'
tcompath='/home/grervirg/Videos/Complete/Tv/'
acompath='/home/grervirg/Videos/Complete/Android/'
mpath='/home/grervirg/Videos/Movies/'
tpath='/home/grervirg/Videos/Tv/'
apath='/home/grervirg/Videos/Android/'

filmpreset='--preset=\"Kodi\"'
animpreset='--preset=\"KodiAnim\"'
androidpreset='--preset=\"Android\"'


if [$1 == "Movies"]
spath=$mpath
cpath=$mcompath
elif [$1 == "Tv"]
spath=$tpath
cpath=$tcompath
elif [$1 == "Android"]
spath=$apath
cpath=$acompath
fi

if [$2 == "film"]
preset=$filmpreset
elif [$2 == "anim"]
preset=$animpreset
elif [$2 == "android"]
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
