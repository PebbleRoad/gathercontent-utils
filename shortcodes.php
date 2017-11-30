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

  function alert_func($attrs, $content){
    extract( shortcode_atts(
      array(
        'type' => ''
      ), $attrs)
    );

    return '<div class="alert '.$type.'">'.$content.'</div>';
  }

  /**
   * [img src='image.jpg' alt='alt description']
   * [img src='image.jpg' alt='alt description' /]
   * [img src='image.jpg'][/img]
   */
  add_shortcode('img', 'img_func');

  /**
   * [alert type='info']
   *  content
   * [/alert]
   */
  add_shortcode('alert', 'alert_func');
?>