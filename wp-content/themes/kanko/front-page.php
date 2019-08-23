<?php get_header(); ?>
			<section class="information mainContents clearfix">
				<h2>イベント情報</h2>
				<div class="eventBox clearfix"> <a href="#"> <img src="images/event01.png" alt="お祭り">
					<h3><img src="images/event_title01.png" alt="お祭り" /></h3>
					<p>神田祭、山王祭、深川祭の江戸三大祭りや地域のお祭り、花火大会などの季節行事もご紹介</p>
					</a> </div>
				<div class="eventBox clearfix"> <a href="#"> <img src="images/event02.png" alt="展覧会">
					<h3 class="subTitle"><img src="images/event_title02.png" alt="展覧会" /></h3>
					<p>地域や会期ごとの展覧会スケジュールと当社イチオシの最新情報まで、美術館はエキサイティング！</p>
					</a> </div>
			</section>
			<section class="chiiki mainContents clearfix">
				<h2>地域の特色</h2>
				<img src="images/chiiki.png" alt="銀座" />
				<h3><img src="images/chiiki_title.png" alt="地域の特色" /></h3>
				<p>東京には浅草など古くからの文化が残る街、銀座や六本木などハイセンスな街、代官山や原宿のイマドキのおしゃれスポットなど、東京ならではの喧騒と共存してますます魅力一杯の街並みがたくさんあります。季節や時の流れに応じた街並みの移り変わりを感じながらその魅力をたっぷりお届けしたいと思っています。</p>
			</section>
			<section class="news mainContents clearfix">
				<h2>新着情報</h2>
				<?php
$args = array(
'post_type' => 'news',
'post_status' => 'publish',
'posts_per_page' => 7
);
$customPosts = get_posts($args);
?>
<?php if ($customPosts): ?>
<?php foreach ($customPosts as $post): setup_postdata($post); ?>
<dt><?php echo get_the_date('Y 年 m 月 d 日'); ?></dt>
<dd>
<?php if(get_the_content()): ?>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<?php else: ?>
<?php the_title(); ?>
<?php endif; ?>
</dd>
<?php endforeach; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
			</section>
<?php wp_footer(); ?>