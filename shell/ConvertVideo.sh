#!/bin/sh
 

itpath='/media/MediaProcess/Tv'
impath='/media/MediaProcess/Movies'
iapath='/media/MediaProcess/Android'
 
mcompath='/home/grervirg/Videos/Complete/Movies/'
tcompath='/home/grervirg/Videos/Complete/Tv/'
acompath='/home/grervirg/Videos/Complete/Android/'
mpath=$impath 
#'/home/grervirg/Videos/Movies/'
tpath=$itpath
#'/home/grervirg/Videos/Tv/'
apath=$iapath
#'/home/grervirg/Videos/Android/'
dpath='/home/grervirg/Videos/Dvd/'
dtpath='/home/grervirg/Videos/dvdtmp/'
dcompath='/home/grervirg/Videos/Complete/DVD/'
rmcompath='/media/downloads/Complete/movies/'
rtcompath='/media/downloads/Complete/tv/'
racompath='/media/downloads/Complete/android/'

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
	
	#rsync -rvs --progress $ipath/* $spath
	
	echo $spath
	echo $cpath
	echo $preset
	find $spath -iname \*.mkv -exec HandBrakeCLI -i {} -o $cpath/{%f}.mkv $preset  _ {} \;
	find $spath -iname \*.avi -exec HandBrakeCLI -i {} -o $cpath/{%f}.mkv $preset  _ {} \;
	find $spath -iname \*.mp4 -exec HandBrakeCLI -i {} -o $cpath/{%f}.mkv $preset  _ {} \;
	
	#find $spath -name *.mkv.mkv -exec mv {} $cpath \;
	#find $spath -name *.avi.mkv -exec mv {} $cpath \;
	#find $spath -name *.mp4.mkv -exec mv {} $cpath \;
	#cd $cpath
	rename -v 's/\.mkv.mkv$/\.mkv/' *.mkv
	rename -v 's/\.avi.mkv$/\.mkv/' *.mkv
	rename -v 's/\.mp4.mkv$/\.mkv/' *.mkv
	find $spath -name *.mkv -exec mv {} $rpath \;
	rm -rfv $spath/*
	
}

convertandroid() {

	
	echo $spath
	echo $cpath
	echo $preset
	find $spath -iname \*.mkv -exec HandBrakeCLI -i {} -o {}.mp4 $preset -w 480 _ {} \;
	find $spath -iname \*.avi -exec HandBrakeCLI -i {} -o {}.mp4 $preset -w 480 _ {} \;
	find $spath -iname \*.mp4 -exec HandBrakeCLI -i {} -o {}.mp4 $preset -w 480 _ {} \;
	
	find $spath -name *.mkv.mp4 -exec mv {} $cpath \;
	find $spath -name *.avi.mp4 -exec mv {} $cpath \;
	find $spath -name *.mp4.mp4 -exec mv {} $cpath \;
	cd $cpath
	rename -v 's/\.mkv.mp4$/\.mp4/' *.mp4
	rename -v 's/\.avi.mp4$/\.mp4/' *.mp4
	rename -v 's/\.mp4.mp4$/\.mp4/' *.mp4
	
	rm -rfv $spath/*
	
}

dvdconvert(){
ffmpeg -i $dpath/*.* -filter:v "scale='if(gt(a,720/480),720,-1)':'if(gt(a,720/480),-1,480)',pad=w=720:h=480:x=(ow-iw)/2:y=(oh-ih)/2" -target ntsc-dvd $dtpath/out.mpg
dvdauthor --title -o $dcompath -f $dtpath out.mpg
dvdauthor -T -o $dcompath
}


while getopts ":habcdef:" arg; do
case $arg in
	h)
		usage
		;;
	a)
		spath=$tpath
		cpath=$tcompath
		rpath=$rtcompath
		ipath=$itpath
		preset=$filmpreset
		convert
		;;
	b)
		spath=$tpath
		cpath=$tcompath
		rpath=$rtcompath
		ipath=$itpath
		preset=$animpreset
		convert
		;;
	c)
		spath=$mpath
		cpath=$mcompath
		rpath=$rmcompath
		ipath=$impath
		preset=$filmpreset
		convert
		;;
	d)
		spath=$mpath
		cpath=$mcompath
		rpath=$rmcompath
		ipath=$impath
		preset=$animpreset
		convert
		;;
	e)
		spath=$apath
		cpath=$acompath
		rpath=$acompath
		ipath=$iapath
		preset=$androidpreset
		convertandroid
		;;
	*)
		usage
		;;
	esac
done

