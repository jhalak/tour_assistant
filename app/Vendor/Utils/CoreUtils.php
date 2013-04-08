<?php
App::uses('CakeRoute', 'Routing/Router');

class CoreUtils{
  public static function getTourUrl($tid, $url) {
    return '/tours/view/' . $tid . '/' . Router::url($url);
  }
  public static function dumpAndExit($data){
    echo '<pre>'; print_r($data);exit;
  } 
}