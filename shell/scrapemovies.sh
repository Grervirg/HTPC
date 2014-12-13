#!/bin/bash
#Updates and scrapes movie files
# version 0.0.0.2

sh /opt/tinymedia/tinyMediaManagerCMD.sh -updateMovies -scrapeNew
 curl --data-binary '{ "jsonrpc": "2.0", "method": "VideoLibrary.Scan", "id": "mybash"}' -H 'content-type: application/json;' http://localhost:9191/jsonrpc