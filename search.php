<?php get_header(); ?>


<section id="blog-section">
    <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section-header">
            <h1>Search results for: <?php echo get_search_query();?></h1>
            
            </div>     
        </div>
    </div>
    <?php 
       
        if( have_posts()){
            $i = 0;
            while(have_posts()) : the_post();
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
                <p><small class="text-muted">Posted by <?php the_author();?> on <?php the_time('F j, Y');?> 
                <?php if(get_post_type()=='post') {?>
                in <a href="#"><?php echo get_the_category_list(', ');?></a>
                <?php } ?>
                </small></p>
                
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
      else { ?>
       
       <div class="row">
           <div class="no-results">
                <h2 class="text-center pt-5">What you are looking for is not here. Please search something else again :(</h2>
                <h3 class="text-center">Don&#39;t worry</h3>
                <h3 class="text-center">Or you can also check out the following links</h3>
                <ul class="list-unstyled">
                    <li><a class="nav-link" href="<?php echo site_url('')?>" >Home</a></li>
                    <li><a class="nav-link" href="<?php echo site_url('/blog')?>" >Blog</a></li>
                    <li><a class="nav-link" href="<?php echo site_url('/projects')?>" >Projects</a></li>
                    <li><a class="nav-link" href="<?php echo site_url('/about')?>" >About me</a></li> 
                </ul>
           </div>
            
        </div>
       
        <?php } ?>
        <?php   
    wp_reset_query();
    ?>
    

    </div>
    
</section>

<div class="container">
    <div class="row justify-content-center pb-2">
        <?php bittersweet_pagination(); ?> 
    </div>
     
</div>



<?php get_footer() ?> 

