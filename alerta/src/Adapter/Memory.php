<?php
namespace PHPpeste\Adapter;

use PHPpeste\LogInterface;

/**
 *
 */
class Memory implements LogInterface
{
  private $logs = [];

  public function store($level, $message)
  {
    $this->logs[$level][] = $message;
  }

  public function getLogs()
  {
    return $this->logs;
  }
}

 ?>
