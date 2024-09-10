<title>E L S O N Y</title>

<?php

$number = $_GET['number'];
$gre = rand(1,9).rand(1,9).rand(1,1000);
$ig = md5($gre);
$id = substr($ig, 16);
$url="https://account-asia-south1.truecaller.com/v3/sendOnboardingOtp";
$data = '{"countryCode":"EG","dialingCode":20,"installationDetails":{"app":{"buildVersion":8,"majorVersion":12,"minorVersion":34,"store":"GOOGLE_PLAY"},"device":{"deviceId":"'.$id.'","language":"ar","manufacturer":"Xiaomi","mobileServices":["GMS"],"model":"Redmi Note 8A Prime","osName":"Android","osVersion":"7.1.2","simSerials":["8920022021714943876f","8920022022805258505f"]},"language":"ar","sims":[{"imsi":"602022207634386","mcc":"602","mnc":"2","operator":"vodafone"},{"imsi":"602023133590849","mcc":"602","mnc":"2","operator":"vodafone"}],"storeVersion":{"buildVersion":8,"majorVersion":12,"minorVersion":34}},"phoneNumber":"'.$number.'","region":"region-2","sequenceNo":1}';
$headers[]='Host: account-asia-south1.truecaller.com';
$headers[]='content-type: application/json; charsetu003dUTF-8';
$headers[]='user-agent: Truecaller/12.34.8 (Android;8.1.2)';
$headers[]='clientsecret: lvc22mp3l1sfv6ujg83rd17btt';
$headers[]='Content-Length: 680';
$start = curl_init();
curl_setopt($start,CURLOPT_URL, $url);
curl_setopt($start,CURLOPT_POST, true);
curl_setopt($start,CURLOPT_POSTFIELDS, $data);
curl_setopt($start,CURLOPT_RETURNTRANSFER, true);
curl_setopt($start, CURLOPT_HTTPHEADER,$headers);

$output666= curl_exec ($start);
echo$output666;
echo 'Done by Elsony';
