<?php
  include 'lib/shortcodes.api.php';
  include 'lib/gathercontent.api.php';
  include 'shortcodes.php';


  $gatherContent = new GatherContent();

  /**
   * Get a list of all pages
   */
  $pages = $gatherContent->get('/items');
  
  
?>