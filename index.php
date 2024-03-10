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
        <li>Home</li>
        <li>Archive</li>
       
      </ul>
      <a href="<?php echo site_url('/new-blog')?>">
        <span>
          Write Blog
        </span>
      </a>
      
    </nav>



    <div class="carousel-container">
      <input type="radio" id="item-1" name="position" checked />
      <input type="radio" id="item-2" name="position" />
      <input type="radio" id="item-3" name="position" />
      <input type="radio" id="item-4" name="position" />

      <main id="carousel">
        <?php
        $postCount = 1;

          while(have_posts() AND $postCount < 5 ){
            the_post();
          
        ?>
        <label class="card item" for="item-<?php echo $postCount; ?>" id="song-<?php echo $postCount; ?>">
          <img src="<?php echo get_field('post_image') ?>" alt="song">
          <div class="card-title">
            <h1><?php the_title(); ?></h1>
            <a href="<?php the_permalink(); ?>"><span>Read More</span></a>
          </div>
        </label>

        <?php $postCount++; } ?>

      <main>
    </div>



    <h1 class="heading">Recent Posts</h1>


      <?php
        $currentDate;
        $pastDate = null;

        while(have_posts()) {
          the_post();
          $currentDate = get_the_date();
          $post_id = get_the_ID();
          $author_id = get_post_field( 'post_author', $post_id );
          $author_name = get_the_author_meta( 'display_name', $author_id );


          if( $currentDate != $pastDate){?>
            </div>
            <div class="date">
              <span>
                <p class="month"><?php the_time('M')?></p>
                <p><?php the_time('d')?></p>
              </span>
              <hr>
            </div>
            <div class="cards">

        <?php }
          
          ?>

        <a href="<?php the_permalink(); ?>">
          <div class="card card-container">
            <div class="card-img">
              <img src="<?php echo get_field('post_image') ?>" alt="illustration-article">
            </div>
            <div class="card-info">

              <div class="tag"><?php echo get_field('post_tag') ?></div>

              <span class="date-publised">Published <?php the_time('d')?> <?php the_time('M')?> <?php the_time('Y')?></span>

              <h1 class="title"><?php the_title(); ?></h1>

              <p class="excerpt">
                <?php echo wp_trim_words(get_the_content(), 18)?>
              </p>

              <div class="author">
                <div class="avatar">
                  <img src="<?php  echo get_avatar_url( $author_id); ?>" alt="avatar">
                </div>
                <div class="author-name">
                  <?php echo $author_name ?>
                </div>
              </div>
            </div>
          </div>
        </a>




          <?php
        $pastDate = $currentDate;
      }
        ?>

    <?php wp_footer();?>
  </body>

</html>
