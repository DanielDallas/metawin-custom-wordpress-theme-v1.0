<?php get_header(); ?>

<main id="main" class="site-main" role="main">

  <?php while (have_posts()):
      the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>

      <div class="entry-content">
        <div class="casino-logo">

          <?php echo wp_get_attachment_image(
              get_field("casino_logo"),
              "full"
          ); ?>
        </div>
        <div class="casino-address">
          <p><b>Casino Hotel Address:</b> <?php echo get_field(
              "casino_address",
          ); ?></p>
        </div>
        <div class="casino-star-rating">
          <p><b>Star Rating:</b> <?php echo get_field(
              "casino_star_rating",
          ); ?></p>
        </div>
        <div class="casino-score">
          <p><b>Score:</b> <?php echo get_field("casino_score"); ?>
</p>
        </div>
        <div class="casino-url">
          <a href="<?php echo get_field(
              "casino_url",
          ); ?>" target="_blank">Visit Site</a>
        </div>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>

      </div>

    </article>

  <?php
  endwhile; ?>

</main>

<?php get_footer(); ?>
