<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<?php wp_body_open(); ?>
<body <?php body_class(); ?>>
    <div id="container">
        <header id="site-header">
            <?php if ( is_home() ): ?>
                <h1 id="site-title"><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php else: ?>
                <p id="site-title"><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a></p>
            <?php endif; ?>
        </header>
        <?php wp_nav_menu([
            'theme_location' => 'primary-navigation',
            'container_id'   => 'primary-navigation',
            'container'      => 'nav',
            // If menus removed then set fallback_cb
            'fallback_cb'    => '__return_false',
            // Prevent menu depth more than 1
            'depth'          => 1
        ]); ?>
        <main id="site-content">
            <?php if ( have_posts() ): ?>
                <?php while ( have_posts() ): the_post(); ?>
                <article <?php post_class(); ?>>
                    <?php if ( is_singular() ): ?>
                        <?php the_title( '<h1>', '</h1>' ); ?>
                        <?php the_content(); ?>
                        <?php wp_link_pages(); ?>
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