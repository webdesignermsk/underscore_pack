<div class="container">
<div class="hero">
    <h1> Hello, I'm Konstantinos .</h1>
    <p>I am a frontend developer in Greece.I love crafting websites and web application and documenting the process. This is a public notebook of thoughts and experience I gained through my journey in the industry.</p>
</div>  
</div>



<section class="homepage-blog">
    <div class="container">
        <div class="row">
        <div class="homepage-blog-heading-container">

        <?php //echo do_shortcode('[ajax_filter_posts post_type="post" tax="css,react,webflow"  posts_per_page="12"]'); ?>

            <h2 class="homepage-blog-heading">Latest Blog Inputs</h2>
            <a href="#" class="homepage-blog-heading-buttl link-simple">See all articles</a>
        </div>
        <?php
                $args = array(
                    'post_type' => 'post'
                );

                $post_query = new WP_Query($args);

                if($post_query->have_posts() ) { 
                   
                    while($post_query->have_posts() ) {
                        $post_query->the_post();
                        ?>
                        <div class="single-list-item container">
                            <a class="single-list-item-link" href="<? the_permalink(); ?>">
                                <h2 class="single-list-item-title"><?php the_title(); ?></h2>
                            </a> 
                            <p class="single-list-item-date"> <?php the_time( 'F — Y' ); ?></p>
                        </div>
                        <?php
                        }
                    }
                ?>
        </div>
    </div>
</section>


