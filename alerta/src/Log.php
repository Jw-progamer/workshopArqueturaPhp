<?php
namespace PHPpeste;

final class Log implements LogInterface
{
  public function __construct(LogInterface $adapter){
    $this->adapter = $adapter;
  }
  public function store($level, $message)
  {
    $this->adapter->store($level, $message);
  }

  public function info($message)
  {
    $this->store(LogInterface::INFO, $message);
  }
}

 ?>
