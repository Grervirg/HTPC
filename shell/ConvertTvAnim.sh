#!/bin/bash
spath='/home/grervirg/Videos/Tv/'
cpath='/home/grervirg/Videos/Complete/Tv/'

find $spath -iname \*.mkv -exec HandBrakeCLI -i {} -o {}.mkv '--preset=\"Kodi Anim\"'  _ {} \;
find $spath -iname \*.avi -exec HandBrakeCLI -i {} -o {}.mkv '--preset=\"Kodi Anim\"'  _ {} \;
find $spath -iname \*.mp4 -exec HandBrakeCLI -i {} -o {}.mkv '--preset=\"Kodi Anim\"'  _ {} \;
cd $spath
rename -v 's/\.mkv.mkv$/\.mkv/' *.mkv
rename -v 's/\.avi.mkv$/\.mkv/' *.mkv
rename -v 's/\.mp4.mkv$/\.mkv/' *.mkv
mv *.mkv $cpath