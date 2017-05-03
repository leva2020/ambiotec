<?php
class DefaultMailSystem__HTMLMailSystem implements MailSystemInterface {
  protected $formatClass;
  protected $mailClass;
  public function __construct() {
    if (drupal_autoload_class('DefaultMailSystem')) {
      $this->formatClass = new DefaultMailSystem;
    }
    else {
      $this->formatClass = new DefaultMailSystem;
    }
    if (drupal_autoload_class('HTMLMailSystem')) {
      $this->mailClass = new HTMLMailSystem;
    }
    else {
      $this->mailClass = new DefaultMailSystem;
    }
  }
  public function format(array $message) {
    return $this->formatClass->format($message);
  }
  public function mail(array $message) {
    return $this->mailClass->mail($message);
  }
}
