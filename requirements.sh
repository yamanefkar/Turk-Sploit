#!/bin/bash
apt update && apt upgrade -y
pkg install termux-api -y
apt install curl -y
apt install wget -y
apt install python -y
apt install python2 -y
apt install php -y
apt install cat
chmod 777 *
rm -rf /data/data/com.termux/files/usr/bin/ngrok
mv -v ngrok /data/data/com.termux/files/usr/bin
cd  Site/Instagram/Instagram-bruteforce/
pip install -r requirements.txt
python2 install.py install
termux-open-url https://www.instagram.com/yamanefkarr/
echo -e '\033[31;40;1m 			Kurulum Bitti!!!'
sleep 1
