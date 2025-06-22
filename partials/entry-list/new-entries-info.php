<div class="info-wrapper">
  <div class="info-thumbnail-container">
    <a href="<?php echo get_permalink(); ?>">
      <?php the_post_thumbnail('info-thumb'); ?>
    </a>
  </div>
  <div class="info-content-container">
    <div class="info-labels">
      <p class="info-date"><?php echo get_the_date(); ?></p>
      <?php the_category(); ?>
    </div>
    <h3 class="info-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p class="info-subtitle">
      <a href="<?php echo get_permalink(); ?>">
        <?php //サブタイトルがある場合のみ出力
        if(get_post_meta($post->ID,'subtitle',true)):
        echo get_post_meta($post->ID,'subtitle',true); ?>
        <?php endif; ?>
      </a>
    </p>
    <p class="info-summary">
      <?php the_excerpt(); ?>
    </p>
  </div>
</div>
