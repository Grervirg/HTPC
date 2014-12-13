#!/bin/bash
#Updates and scrapes movie files
# version 0.0.0.2

sh /opt/tinymedia/tinyMediaManagerCMD.sh -updateMovies -scrapeNew
curl -X POST -H "Content-Type: application/json" -d '{"jsonrpc":"2.0","method":"GUI.ShowNotification","params":{"title":"Libray Update","message":"Attempting to Update Library"},"id":1}' http://10.0.1.100:8080/jsonrpc
 curl --data-binary '{ "jsonrpc": "2.0", "method": "VideoLibrary.Scan", "id": "mybash"}' -H 'content-type: application/json;' http://10.0.1.100:8080/jsonrpc