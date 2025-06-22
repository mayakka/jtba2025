<?php global $sect_title; ?>
 <dl class="menu-mokuji" data-smooth-scroll>
  <dt class="sidenav-mokuji-title">目次</dt>
  <?php
  $n=1;
  foreach($sect_title as $value){
    echo "<dd><a href=\"#sect-".$n."\">".$value."</a></dd>";
    $n++;
  }
  ?>
</dl>
