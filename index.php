<?php
include('dbconnection.php');
$connection = new PdoConnect();
$query = "SELECT tea_name,tea_id FROM `teacher_registration`";
$execute = $connection->dbc->query($query);
$result = $execute->fetchAll();
for ($i = 0; $i < sizeof($result); $i++) {
    header('content-type:image/jpeg');
    $name = $result[$i]['tea_name'];
    $font = "BRUSHSCI.ttf";
    $tea_id = $result[$i]['tea_id'];
    $image = imagecreatefromjpeg("cirtifcate.jpg");
    $color = imagecolorallocate($image, 19, 21, 22);
    imagettftext($image, 80, 0, 380, 930, $color, $font, $name);
    $cirticate_name = $name . "_" . $tea_id;
    imagejpeg($image, "cirtificatejpg/" . $cirticate_name . ".jpg");
    imagedestroy($image);
}
echo "All Cirtificate Saved Successfully";
