<?php 
get_header();

while(have_posts()){
    the_post();

    ?>
<!-- Page Title
        ============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1><?php the_title(); ?></h1>
        <!-- <span>Page Subtitle</span> -->
    </div>
</section><!-- #page-title end -->
<?php
}
rewind_posts();
?>
<!-- Content
  ============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <!-- Post Content
        ============================================= -->
            <div class="postcontent nobottommargin clearfix">
                <?php if(have_posts( )){
                    while(have_posts()){
                    the_post();
                    global $post;
                    $author_ID = $post->post_author;
                    $author_URL = get_author_posts_url( $author_ID );
                ?>
                <div class="single-post nobottommargin">
                    <!-- Single Post
                    ============================================= -->
                    <div class="entry clearfix">
                        <!-- Entry Content
                         ============================================= -->
                        <div class="entry-content notopmargin">
                            <?php the_content();
                                $defaults = array(
                                    'before'           => '<p class="text-center">' . __( 'Pages:', 'udemy' ),
                                    'after'            => '</p>'
                                );
                                wp_link_pages( $defaults );
                            ?>
                            <!-- Post Single - Content End -->
                            <div class="clear"></div>
                        </div>
                    </div><!-- .entry end -->
                    <div class="line"></div>
                    <div class="line"></div>
                </div>

            </div>
            <?php
          }
      }

      ?>
            <?php get_sidebar()?>
        </div>
        <!-- .postcontent end -->
    </div>
    </div>
</section>
<!-- #content end -->
<?php get_footer()?>