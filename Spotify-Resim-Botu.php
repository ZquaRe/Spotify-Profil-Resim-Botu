<?php


@preg_match_all('@ <style>(.*?)  </style>@si',$site,$Resim);
@$Resim = explode ("//",$Resim[1][0]);
@$Resim = explode (") center",$Resim[1]);

?>
<img src="http://<?php echo $Resim[0]?>">
