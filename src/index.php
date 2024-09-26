<?php

use Lenovo\PackageRomulus\API;

require __DIR__ . '/vendor/autoload.php';

$response = new API();
echo json_encode($response->json());

?>





