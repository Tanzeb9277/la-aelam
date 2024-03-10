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



    <div class="generic-content">
        <?php the_content(); ?>
      </div>

    <?php wp_footer();?>
  </body>

</html>
