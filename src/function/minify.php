<?php
function minify($content, $path = '')
{
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

function sanitize_output($buffer)
{
  $search = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s', '/<!--(.|\s)*?-->/');
  $replace = array('>', '<', '\\1', '');
  $buffer = preg_replace($search, $replace, $buffer);
  return $buffer;
}
