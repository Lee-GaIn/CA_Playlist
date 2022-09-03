<?php
  require 'php-sdk.phar';
  session_start();

  $ssm_client = new Aws\Ssm\SsmClient([
    'region' => 'us-east-1',
    'version' => 'latest'
  ]);

  $result = $ssm_client->GetParametersByPath(['Path' => '/MyPlaylist/', 'WithDecryption' => true]);

  foreach($result['Parameters'] as $p) {
      $values[$p['Name']] = $p['Value'];
  }

  $_SESSION['endPoint'] = $values['/MyPlaylist/endPoint'];
  $_SESSION['userName'] = $values['/MyPlaylist/userName'];
  $_SESSION['pwd'] = $values['/MyPlaylist/pwd'];
  $_SESSION['dbName'] = $values['/MyPlaylist/dbName'];
?>
