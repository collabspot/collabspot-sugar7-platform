<?php
$manifest = array (
  'id' => 'collabspot-platform',
  'name' => 'Collabspot Platform Registration',
  'description' => 'Registers Collabspot\'s platforms for REST API usage.',
  'version' => '1.2.0',
  'author' => 'Collabspot',
  'is_uninstallable' => 'true',
  'published_date' => '2018-07-08 14:00:00',
  'type' => 'module',
  'acceptable_sugar_versions' =>
  array (
    'exact_matches' =>
    array (
    ),
    'regex_matches' =>
    array (
      0 => '^7.9.[\\d]+.[\\d]+$',
      1 => '^7.10.[\\d]+.[\\d]+$',
      2 => '^7.11.[\\d]+.[\\d]+$',
      3 => '^8.[\\d]+.[\\d]+$',
    ),
  ),
);
$installdefs = array (
  'copy' =>
  array (
    0 =>
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Platforms/collabspot.php',
      'to' => 'custom/Extension/application/Ext/Platforms/collabspot.php',
    ),
    1 =>
    array (
      'from' => '<basepath>/src/custom/include/SugarOAuth2/SugarOAuth2StorageCollabspot.php',
      'to' => 'custom/include/SugarOAuth2/SugarOAuth2StorageCollabspot.php',
    )
  ),
);

