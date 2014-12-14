#!/bin/bash
#Updates and scrapes movie files
# version 0.0.0.3

sh /opt/tinymedia/tinyMediaManagerCMD.sh -updateMovies -scrapeNew

curl -i -X POST -H "Content-Type: application/json" -u xbmc:hannie0523 -d "{\"jsonrpc\": \"2.0\", \"method\": \"GUI.ShowNotification\", \"params\": {\"title\": \"Update\", \"message\": \"Update required\"}, \"id\": 1}" http://10.0.1.100:8080/jsonrpc
curl -H "Content-Type: application/json" -u xbmc:hannie0523 -d '{"jsonrpc":"2.0","method":"VideoLibrary.Scan","id":"scan"}' http://10.0.1.100:8080/jsonrpc
