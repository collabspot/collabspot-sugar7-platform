<?php
require_once 'include/SugarOAuth2/SugarOAuth2StorageBase.php';

class SugarOAuth2StorageCollabspot extends SugarOAuth2StorageBase {
  public $numSessions = 10;
}
