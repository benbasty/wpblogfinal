<?php get_header(); ?>
    <section id="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header">
                        <h1><?php the_title();?></h1>
                    </div>     
                </div>
            </div>
        
            <?php 
                while(have_posts()) {
                the_post(); 
            ?>


            <div class="row pt-4">
            <?php
            }
            ?>

                <div class="col-12 col-sm-9 col-md-9" id="post-container">
                    <div class="card border-0" data-aos="zoom-out">
                        <?php if(has_post_thumbnail()) { ?>
                            <div class="image-top">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="card-img-top" alt="...">
                            </div>
                        <?php } ?>
                        
                        <div class="card-body">
                            <?php the_content(); ?>
                        </div>
                    </div> 
                </div>

                <div class="d-none col-sm-3 d-md-block" id="sidebar">
                    <div class="">
                        <?php dynamic_sidebar('main_sidebar')?>
                    </div>   
                </div> 

            </div>
        </div>
    </section>
<?php get_footer() ?> 