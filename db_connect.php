<?php
$db='webscyb_star';
$link = @mysql_connect('localhost', 'webscyb_star', 'Hacked@#78');
if ($link) {
    mysql_select_db($db,$link);
}
else{
echo "error";
}

?>