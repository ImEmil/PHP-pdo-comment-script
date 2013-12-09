<?php
class C_Handler {
  
  private $s;
  
  public function __construct($pdo) {
    $this->s = $pdo;
  }
  
  public function insertComment($username, $email, $comment) {
    $values = array( $username, $email, $comment );
    $exc = $this->s->prepare("INSERT INTO `comments` (`username`, `email`, `comment`, `timestamp`) VALUES (?, ?, ?, NOW()")->execute($values);
    return true;
    }
    
 }
