<?php
namespace PHPpeste;

use PHPUnit\Framework\TestCase;
use PHPpeste\Log;
use PHPpeste\LogInterface;

/**
 *
 */
class LogTest extends TestCase
{
  private $log;
  public function setUp(){
    $adapter = $this->getMockBuilder(LogInterface::class)
                    ->getMock();
    $adapter->expects($this->once())
            ->method('store');
    $this->log = new Log($adapter);
  }
  public function testItCanStoreLogs(){
    $this->log->store(LogInterface::INFO, 'message');
  }

  public function testeItCanCallOneParamMethod()
  {
    $this->log->info('message');
  }
}

 ?>
