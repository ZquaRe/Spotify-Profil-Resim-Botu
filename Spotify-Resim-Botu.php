<?php

$site=@file_get_contents("https://open.spotify.com/user/11100041149");
@preg_match_all('@ <style>(.*?)  </style>@si',$site,$Resim);
@$Resim = explode ("//",$Resim[1][0]);
@$Resim = explode (") center",$Resim[1]);

?>
<img src="http://<?php echo $Resim[0]?>">
