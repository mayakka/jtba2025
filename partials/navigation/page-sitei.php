<?php
$args = array(
  'before'           => '<div class="page-sitei">',
  'after'            => '</div>',
  'link_before'      => '<span class="pagesprit-numbers">',
  'link_after'       => '</span>',
  'next_or_number'   => 'number',
  'separator'        => ' ',
  'nextpagelink'     => __( 'Next page' ),
  'previouspagelink' => __( 'Previous page' ),
  'pagelink'         => '%',
  'echo'             => 1,
);
wp_link_pages($args); ?>