<?php
class path {
  public static function get($name, $path = null) {
    $path = ($path) ? '/' . $path : '';
    return option('path_' . $name) . $path;
  }
}