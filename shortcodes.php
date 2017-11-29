<?php
  /**
   * Add your short codes here
   */

  /**
   * Image
   */

  function img_func($attrs, $content){
    extract( shortcode_atts(
      array(
        'src' => '',
        'alt' => '',
        'link' =>''
      ), $attrs)
    );

    return '<img src="'.$src.'" alt="'.$alt.'" />';
  }


  add_shortcode('img', 'img_func');
?>