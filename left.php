<?=outlogin('x-outlogin-community-2')?>
<div class='company-banner'>
	<a href='http://www.philgo.com' target='_blank'><img src='<?=x::url_theme()?>/img/company_banner.png' /></a>
</div>
<?php
//include 'popular.posts.php';
include widget(
	array(
		'code'		=> 'x-community-2-popular-posts',
		'name'		=> 'x-community-2-popular-posts',
		'git'		=> 'https://github.com/x-widget/x-community-2-popular-posts',
	)
);
//include 'new.posts.php';
include widget(
	array(
		'code'		=> 'x-community-2-new-posts',
		'name'		=> 'x-community-2-new-posts',
		'git'		=> 'https://github.com/x-widget/x-community-2-new-posts',
	)
);
//echo visit('x-visit-community-1');
include widget(
	array(
		'code'		=> 'x-community-2-visits',
		'name'		=> 'x-community-2-visits',
		'git'		=> 'https://github.com/x-widget/x-community-2-visits',
	)
);
