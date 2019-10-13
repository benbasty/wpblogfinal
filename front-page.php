<?php get_header(); ?>

<section>
<div class="header-welcome" style="background-image: url(<?php echo get_template_directory_uri();?>/img/blog-header-bg.jpg);">
          <div class="row no-gutters">
            <div class="col-12">
              <div class="main-title text-center align-items-center">
                <h1 data-aos="fade-up">Welcome to our Blog</h1>
                <h3 data-aos="fade-left" data-aos-delay="300">Learn and Have fun with us</h3>
              </div> 
            </div>
          </div>
        </div>
</section>

<section id="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
              <div class="section-header">
                <a href="<?php echo site_url('/blog')?>"><h1>All Blogs</h1></a>
                
              </div>     
          </div>
        </div>
        <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4 
            );
            $blogposts = null;
            $blogposts = new WP_Query($args);
            if( $blogposts -> have_posts()){
                $i = 0;
                while($blogposts -> have_posts()) : $blogposts -> the_post();
                if($i % 4 == 0) { ?>


        <div class="row pt-4">
            <?php
                }
            ?>

            <div class="col-12 col-sm-6 col-md-6 pb-5">
              <div class="card shadow" data-aos="zoom-out">
                <a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <a href="<?php the_permalink();?>"><h5 class="card-title"><?php echo wp_trim_words(get_the_title(),5);?></h5></a>
                  <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(),20);?></p>
                  <a href="<?php the_permalink();?>" class="btn btn-primary">Read More</a>
                </div>
              </div> 
            </div>
            <?php $i++;
            if($i != 0 && $i % 4 == 0) { ?>
            
        </div>
        <?php
        } ?>
        <?php endwhile;
        }
        wp_reset_query();
        ?>

      </div>
        
    </section>

    <section id="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
              <div class="section-header">
                <a href="<?php echo site_url('/projects')?>"><h1>All Projects</h1></a>
                
              </div>     
          </div>
        </div>
        <?php 
            $args = array(
                'post_type' => 'projects',
                'posts_per_page' => 4 
            );
            $projects = null;
            $projects  = new WP_Query($args);
            if( $projects  -> have_posts()){
                $i = 0;
                while($projects  -> have_posts()) : $projects  -> the_post();
                if($i % 4 == 0) { ?>


        <div class="row pt-4">
            <?php
                }
            ?>

            <div class="col-12 col-sm-6 col-md-6 pb-5">
              <div class="card shadow" data-aos="zoom-in">
                <a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <a href="<?php the_permalink();?>"><h5 class="card-title"><?php echo wp_trim_words(get_the_title(),5);?></h5></a>
                  <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(),20);?></p>
                  <a href="<?php the_permalink();?>" class="btn btn-primary">Read More</a>
                </div>
              </div> 
            </div>
            <?php $i++;
            if($i != 0 && $i % 4 == 0) { ?>
            
        </div>
        <?php
        } ?>
        <?php endwhile;
        }
        wp_reset_query();
        ?>

      </div>
        
    </section>

<?php get_footer() ?>