<footer>
	     <p> Created by Tyler Pache

    <?php

      if (file_exists($filename)) {
          echo "<br>Last modified: " . date ("l, F d Y h:ia", filemtime($filename));
          echo "<p>&nbsp;</p>";
      }
    ?>
</footer>