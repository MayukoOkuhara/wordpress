<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/colorbox/colorbox.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/colorbox/jquery.colorbox-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/blog.js"></script>
<?php wp_head(); ?>
</head>
<body>
<div id="container">
  <header>
    <div id="logo">
      <p><?php bloginfo("description"); ?></p>
      <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    </div>
    <nav>
      <ul>
        <li class="menu-item"><a href="index.html">top</a></li>
        <li class="menu-item current-menu-item current_page_item"><a href="blog.html">blog</a></li>
        <li class="menu-item"><a href="gallery.html">gallery</a></li>
        <li class="menu-item"><a href="profile.html">profile</a></li>
      </ul>
    </nav>
  </header>
  <main>

	<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>
        <article class="post">
          <p class="date"><?php echo get_the_date("n/j"); ?></p>
          <h2><?php the_title(); ?></h2>
          <div class="entry"><?php the_content(); ?></div>
        </article><!-- post -->
	<?php endwhile; ?>
	<?php endif; ?>

    <div id="link">
      <?php previous_posts_link(); ?>
      <?php next_posts_link(); ?>
    </div>
  </main>
  <footer>
    <p>Copyright &copy; Taro Yamada. All rights reserved.</p>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
