<?php
$url = array(
"https://i.imgur.com/kOyh8bT.gif",
"https://i.imgur.com/e6GhqrP.gif",
"https://i.imgur.com/TQk7AqJ.gif",
"https://i.imgur.com/DwIVtW6.gif",
"https://i.imgur.com/GA2d9xe.gif",
"https://i.imgur.com/zialOB1.gif",
"https://i.imgur.com/4fyktjd.gif",
"https://i.imgur.com/fVG9ewU.gif",
"https://i.imgur.com/BMNPsaX.gif",
"https://i.imgur.com/PYuPpcJ.gif",
"https://i.imgur.com/yK0V1F0.gif",
"https://i.imgur.com/JMB7QMH.gif",
"https://i.imgur.com/SOVC4zh.gif",
"https://i.imgur.com/B6TwFAc.gif",
"https://i.imgur.com/18Q0MoE.gif",
"https://i.imgur.com/Y9UMoLK.gif",
"https://i.imgur.com/b1y1xoV.gif",
"https://i.imgur.com/cepD7Fz.gif",
"https://i.imgur.com/Oopn43j.gif"
);
$rd = array_rand($url);
$cc = $url [$rd];
$kiss = array(
"data" => $cc,
"author" => "Trần khương",
"success" => "true",
);
$rdimg = json_encode($kiss);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Trần khương'];
$j = str_replace($i, $t, $rdimg);
echo $j;
