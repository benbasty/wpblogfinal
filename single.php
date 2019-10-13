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
                        <div class="card-meta">
                            <h6 class="text-muted">Posted by <?php the_author();?> on <?php the_time('F j, Y');?> in <a href="#"><?php echo get_the_category_list(', '); ?></a></h6>
                        </div>
                        <?php if(has_post_thumbnail()) { ?>
                            <div class="image-top">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="card-img-top" alt="...">
                            </div>
                        <?php } ?>
                        
                        <div class="card-body">
                            <?php the_content(); ?>
                        </div>
                    </div> 
                    <hr class="divider px-5">
                </div>

                <div class="d-none col-sm-3 d-md-block" id="sidebar">
                    <div class="">
                        <?php dynamic_sidebar('main_sidebar')?>
                    </div>   
                </div> 

            </div>
            <div class="row mt-5 pl-4 justify-content-center align-items-center" id="comment-section"> 
            <div>
                <?php 
                $fields =  array(

                    'author' =>
                    '<input placeholder = "Name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                    '" size="30"' . $aria_req . ' /></p>',
                
                    'email' =>
                    '<input placeholder = "Email" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30"' . $aria_req . ' /></p>'
                
                );

                $args = array(
                    'title_reply'       =>  'Share your idea',
                    'fields' => $fields,
                    'comment_field' =>  '<textarea placeholder="Your Comment" id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
                    '</textarea>',
                    'comment_notes_before' => '<p class="comment-notes">Your email address will not be published. All fields are required.</p>'

                );
                
                comment_form($args);
                    $comments_number = get_comments_number();
                    if($comments_number != 0) {
                ?>
                <div class="comments">
                    <h3>What others Say !!!</h3>
                    <ol class="all-comments">
                        <?php 
                            $comments = get_comments(array(
                                'post_id' => $post -> ID,
                                'status' => 'approve'
                            ));
                            wp_list_comments(array(
                            'per_page' => 15
                            ), $comments);
                        ?>
                    </ol>
                </div>
                <?php 
                    }
                ?>
                
            </div>
        </div> 
            
        </div>
    </section>
    <section>
         
    </section>


    

<?php get_footer() ?> 