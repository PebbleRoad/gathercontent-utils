<?php
  include 'lib/shortcodes.api.php';
  include 'lib/gathercontent.api.php';
  include 'shortcodes.php';


  $gatherContent = new GatherContent();

  /**
   * 1. Get a list of all pages
   */
  $pages = $gatherContent->get('/items');

  /**
   * 2. Loop through all pages
   */


  /**
   * 3. Run short code parser in body field
   */

  /**
  * 4. Save the pages as json
  */
  
?>