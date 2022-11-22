<?php 
function minify($content, $path = '') {
  $output = preg_replace(
        array(
          '/ {2,}/',
          '/<!--.*?-->|\t|(?:\r?\n[ \t]*)+/s'
        ), 
        array(
          ' ',
          ''
        ), 
        $content
      );
  return $output;
}