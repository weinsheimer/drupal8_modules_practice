<?php

namespace Drupal\hello_world1\Controller;

class HelloWorld1Controller {

  public function hello() {
    return  array(
      '#title' => ' hello world2！',
      '#markup' => '<p><b>Saying Hello World in Drupal 8 is cool! 这是你的第一个Drupal模块，是不是有点小兴奋？</b></p>'
    );

  }
}
