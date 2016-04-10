<?php
$db='heroku_4f0d348ad17d48a';
$link = @mysql_connect('us-cdbr-iron-east-03.cleardb.net', 'bcde438bee3fd2', '11a973c6');
if ($link) {
    mysql_select_db($db,$link);
}
else{
echo "error";
}

?>
