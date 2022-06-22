<<<<<<< HEAD
<?php
$files = array_filter(glob('../assets/img/upload_an/*'), 'is_file');

$response = [];

foreach ($files as $file) {
	$response[] = basename($file);
}

header('Content-Type: application/json');
echo json_encode($response);
die();
=======
<?php
$files = array_filter(glob('../assets/img/upload_an/*'), 'is_file');

$response = [];

foreach ($files as $file) {
	$response[] = basename($file);
}

header('Content-Type: application/json');
echo json_encode($response);
die();
>>>>>>> 769fcf9918192893ee456d70518fc29dabfff80c
?>