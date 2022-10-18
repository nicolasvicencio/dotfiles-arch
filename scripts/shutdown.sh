#!/bin/bash


if date +"%R" == "20:40"  
then
 notify-send -u critical "this is a notification test"
fi

if date +"%R" == "23:50" 
then
  notify-send -u critical "This pc is gonna shutdown in ten minutes, make sure to save your work done babe"
fi
fireup()
{  
  while :; do
   currenttime=$(date +%H:%M)
   if [[ "$currenttime" > "00:01" ]] || [[ "$currenttime" < "06:30" ]]; then
     shutdown now
   fi
   test "$?" -gt 128 && break
  done &
}

fireup()

shutdown -h 00:00 "The system is shuting down, save your work right now dude, or you just gonna lose everything"


