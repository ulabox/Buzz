<?php

namespace Buzz\Service\RightScale\Request;

class ServerStop extends AbstractServerRequest
{
  public function __construct($serverId)
  {
    parent::__construct($serverId, 'stop');
  }
}
