<?php get_header() ?>

        <?php if( have_posts()) : ?>

              <?php while(have_posts()) : the_post(); ?>
                <?php $pilot = get_post_meta($post->ID, 'pilot',true); ?>
                <div class="post pilot--<?php echo $pilot; ?>">
                      <div class="post__content">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <p class="post__extlink"><a href="<?php echo get_post_meta($post->ID, 'rwlg_external_link',true); ?>" target="_blank">View Source Post</a></p>
                      </div>
                    </a>
                    <?php $platform = get_post_meta($post->ID, 'rwlg_platform', true); ?>
                    <div class="post__nav">
                      <?php previous_post_link(); ?>
                      <?php next_post_link(); ?>
                    </div>
                </div>
              <?php endwhile; ?>
        <?php endif; ?>

  <?php get_footer(); ?>
