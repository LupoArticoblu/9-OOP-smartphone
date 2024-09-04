<?php

class Spec{
  public $os;
  public $display;
  public $ram;
  public $cpu;

  /**
   * @param String $_os
   * @param String $_display
   * @param Int $_ram
   * @param String $_cpu
   */
  public function __construct($_os, $_display, $_ram, $_cpu) {
    $this->cpu = $_cpu;
    $this->os = $_os;
    $this->display = $_display;
    $this->ram = $_ram;
  }
}