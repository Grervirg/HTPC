#!/bin/bash
#Add Movie to trakt watchlist
#$1 = imdb id
#$2 = title 
#$3 = year




curl -v -u grervirg:3615b54f4c0c87b6a26efb5d5f7147c97f4e43be -X POST -d " {\"movies\":  [{\"imdb_id\":\"$1\",\"title\":\"$2\",\"year\": $3} ] }" http://api.trakt.tv/movie/watchlist/744931998b63093d6717c7e68b340f3d 