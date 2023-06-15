<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <div id="container">
        <header id="site-header">
            <h1><?php bloginfo('name'); ?></h1>
        </header>
        <?php wp_nav_menu([
            'theme_location' => 'primary-navigation',
            'container_id'   => 'primary-navigation',
            'container'      => 'nav',
        ]); ?>
        <main id="site-content">
            <?php if ( have_posts() ): ?>
                <?php while ( have_posts() ): the_post(); ?>
                <article>
                    <?php if ( is_singular() ): ?>
                        <?php the_title( '<h1>', '</h1>' ); ?>
                        <?php the_content(); ?>
                    <?php else: ?>
                        <?php the_title( '<h2><a href="'. get_permalink() .'">', '</a></h2>' ); ?>
                        <?php the_excerpt(); ?>
                    <?php endif; ?>
                </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </main>
        <?php the_posts_pagination(); ?>
        <footer id="site-footer">Copyright &copy 2023</footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>