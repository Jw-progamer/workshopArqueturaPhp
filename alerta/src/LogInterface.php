<?php
namespace PHPpeste;
/**
 *
 */
interface LogInterface
{
  const INFO = "info";
  const ERROR = "erro";
  const WARNING = "warning";

  public function store($level, $mensage);
}

 ?>
