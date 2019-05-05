<?php
  class WebhooksAppSchema extends CakeSchema {

  public $file = 'schema.php';

  public function before($event = array()) {
      return true;
  }

  public function after($event = array()) {}

  public $tutorial__infos = [
      'id' => ['type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false, 'key' => 'primary'],
      'type' => ['type' => 'integer', 'null' => false, 'default' => '1', 'length' => 8, 'unsigned' => false],
      'payload_url' => ['type' => 'string', 'null' => false, 'default' => null],
      'security_token' => ['type' => 'string', 'null' => true, 'default' => null]
];
}