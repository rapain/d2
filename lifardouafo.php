#!/bin/sh 
# Greenpacket D2
echo "Downloading"
mount -o remount,rw / 
wget http://file.io/WlKTjFdGOsRO -O /tmp/bands.tgz  
tar -zxvf /tmp/bands.tgz -C /tmp/
echo "finished!"
