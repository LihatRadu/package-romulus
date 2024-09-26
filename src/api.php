<?php

namespace Lenovo\PackageRomulus;


class API{

  public function json(): array{
    $json = file_get_contents('');
    return json_decode($json, true);
  }
}

?>
