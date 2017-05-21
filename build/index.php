<?php get_header() ?>

        <?php if( have_posts()) : ?>
          <div class="feed">
            <div class="pure-g">
              <?php while(have_posts()) : the_post(); ?>
                <div class="pure-u-1-1 pure-u-md-1-3 feed__item">
                  <div class="fi__inner">

                    <a href="<?php echo get_post_meta($post->ID, 'rwlg_external_link',true); ?>" target="_blank">
                      <?php if(has_post_thumbnail()) :?>
                        <?php the_post_thumbnail(); ?>
                      <?php else: ?>
                        <img src="http://lorempixel/400/300/cats" />
                      <?php endif; ?>
                      <div class="fi__title">
                        <h2><?php the_title(); ?></h2>
                      </div>
                    </a>
                    <?php $platform = get_post_meta($post->ID, 'rwlg_platform', true); ?>
                    <i class="fa fa-<?php echo $platform; ?> fi__icon"></i>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        <?php endif; ?>



  <?php get_footer(); ?>
