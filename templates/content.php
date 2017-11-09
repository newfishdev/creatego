<?php
    // Gebruikt voor niet bestaande post types.
    // Maak het bestand 'content-[post type].php' aan als je een afwijkende template wil gebruiken.
    // Laat dit bestand zoals het is.
?>

<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>