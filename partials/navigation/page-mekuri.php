<?php
$args = array(
'before' => '<div class="page-mekuri">',
'after' => '</div>',
'next_or_number'   => 'next',
'nextpagelink'     => __( '<span class="next-page">次ページ＞</span>' ),
'previouspagelink' => __( '<span class="prev-page">＜前ページ</span>' ),
);
wp_link_pages($args); ?>