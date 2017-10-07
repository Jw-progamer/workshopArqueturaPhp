<?php
namespace PHPpesteTest\Adapter;

use PHPUnit\Framework\TestCase;
use PHPpeste\Adapter\Memory;
use PHPpeste\LogInterface;

/**
 *
 */
class MemoryTest extends TestCase
{

  public function testItCanStoreLogs()
  {
    $message = 'message';
    $memory = new Memory;

    $memory->store(LogInterface::INFO, $message);
    self::assertEquals($message, $memory->getLogs()[LogInterface::INFO][0]);
  }
}

 ?>
