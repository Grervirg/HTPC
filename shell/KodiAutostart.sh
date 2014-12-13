#!/bin/bash

UDP_PORT=12          # Change this if you need to run this on a different port, just remember to update Yatse's settings as well
RUN_XBMC_AS=xbmc     # Change this if you need to run it as another user

START_PHRASE="YatseStart-Xbmc"    # Do not touch this, unless you know what you are doing...

# The following block checks if the user running this script has the required privileges to listen on the port specified above
   WHO=`whoami` 
   if [ "$WHO" != "root" ]; then
      echo "Unprivileged users may not evesdrop on ports. Cannot start unless running as root." 
      exit 1
   fi

echo "Listening on port $UDP_PORT for Yatse remote start command" 

while [ true ]; do
   # Wait for a packet to come in from Yatse
   LISTEN=`tcpdump "udp port $UDP_PORT" -A -c 1 2>&1 | grep -o "$START_PHRASE"`
   # Make sure that we received the right command
   if [ "$LISTEN" = "$START_PHRASE" ]; then
      echo "Starting XBMC as $RUN_XBMC_AS" 
      # Start XBMC using sudo -u to run it using the username above
      # If you need to you can replace the xbmc command below with xbmc-standalone if you are not using a window manager
      sudo --user=$RUN_XBMC_AS kodi
   fi 
   # Sleep, to be nice, for unwanted rogue processes writing to our port
   sleep 1
done   