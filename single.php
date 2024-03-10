<!DOCTYPE html>
<html lang="en">

  <head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">

    <link rel="stylesheet" href="style.css">

    <script src="script.js" defer></script>

    <title>Blogology</title>

    <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
    <style>
      .attribution {
        font-size: 11px;
        text-align: center;
      }

      .attribution a {
        color: hsl(228, 45%, 44%);
      }

    </style>
  </head>

  <body>
    <nav>
      <ul class="nav-options">
        <li class="logo">Blogology</li>
        <a href="<?php echo site_url('/')?>"><li>Home</li></a>
        <li>Archive</li>
       
      </ul>
      <span>
        Write Blog
      </span>
    </nav>

    <?php


        while(have_posts()) {
          the_post();
          $post_id = get_the_ID();
          $author_id = get_post_field( 'post_author', $post_id );
          $author_name = get_the_author_meta( 'display_name', $author_id );
        ?>




        <div class="post-container">
            <div class="post-hero">
                <img src="<?php echo get_field('post_image') ?>" alt="post-hero">
            </div>

            <div class="post-info">
                <h1 class="title"><?php the_title(); ?></h1>
                <div class="author">
                  <h1>Author</h1>
                  <div class="avatar">    
                    <img src="<?php  echo get_avatar_url( $author_id); ?>" alt="avatar">
                  </div>
                  <div class="author-name">
                    <?php echo $author_name ?>
                  </div>
                </div>
                <span class="date-publised">Published <?php the_time('d')?> <?php the_time('M')?> <?php the_time('Y')?></span>
                <div class="tag"><?php echo get_field('post_tag') ?></div>
            </div>

            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </div>

        <?php

          }
        ?>
        


    <?php wp_footer();?>
  </body>

</html>