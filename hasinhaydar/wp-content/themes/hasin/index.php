<?php get_header() ?>
<body <?php body_class() ?>>
<?php get_template_part( 'hero' ) ?>
<div class="posts">
    <?php while(have_posts()){
        the_post();

    ?>
    <div class="post <?php post_class() ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title"><a href="<?php  the_permalink() ?>"><?php the_title(); ?></a></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author() ?></strong><br/>
                        <?php echo get_the_date() ?>
                        
                    </p>
                    <?php echo get_the_tag_list('<ul \class="list-unstyled\"><li>', '</li><li>', '</li?</ul>') ?>
                </div>
                <div class="col-md-8">
                    <p>
                        <?php 
                        if(has_post_thumbnail()){
                            the_post_thumbnail('medium', "class='img-fluid'");
                        } ?>
                    </p>
                   <?php 
                    
                        if(!post_password_required()){
                            the_excerpt() ;
                        }else{
                            get_the_password_form();                        }
                     
                
                   ?>
                </div>
            </div>

        </div>
    </div>

    <?php } ?>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4"> </div>
            <div class="con-md-8">
                  <?php the_posts_pagination(array(
                      "screen_reader_text"=>''
                  )) ?>
            </div>
        </div>
    </div>
    

</div>
<?php get_footer() ?>