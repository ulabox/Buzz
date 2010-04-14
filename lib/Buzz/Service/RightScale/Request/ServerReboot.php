<?php

namespace Buzz\Service\RightScale\Request;

class ServerReboot extends AbstractServerRequest
{
  public function __construct($serverId)
  {
    parent::__construct($serverId, 'reboot');
  }
}
