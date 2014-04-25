		<table class='main-top' cellpadding=0 cellspacing=0 width='100%'>
			<tr valign='top'>
				<td>
					<?	if(  file_exists(x::path_file('banner')) ) {?>
						<div class='banner'>
							<img src="<?=x::url_file('banner')?>">
							<div class='banner_content'><div class='inner'><?=strip_tags(string::cutstr(x::meta('banner_content'),100,'...'))?></div></div>
							<a href="<?=x::meta('banner_url')?>" class="banner_url"></a>
						</div>
					<?}
						else {?>
							<div class='no-image-banner'>
								<img src='<?=x::url_theme()?>/img/no_main_banner.png' />
							</div>
						<?}
					?>
				</td>
			</tr>
		</table>
		<table cellpadding=0 cellspacing=0 width='100%'>
			<tr valign='top'>
			<?for( $latest_count = 1; $latest_count <= 3; $latest_count ++ ){?>
				<td width='33%' class='latest_<?=$latest_count?>'>
				<?
					include widget(
						array(
							'code'		=> 'x-latest-community-2-'.$latest_count,
							'name'		=> 'x-latest-community-2',
							'default_forum_id' => bo_table($latest_count),
							'git'		=> 'https://github.com/x-widget/x-latest-community-2',
						)
					);
				?>
				</td>
			<?}?>
			</tr>
		</table>
		<div class='bottom-banner'>
			<?if( file_exists(x::path_file('banner_bottom')) ) {?>
				<div class='bottom_banner'>
					<img src="<?=x::url_file('banner_bottom')?>" />
					<a href="<?=x::meta('bottom_banner_url')?>" class='banner_url'></a>
				</div>
			<?} else {?>
					<div class='no-image-banner bottom-no-image-banner'>
						<img src='<?=x::url_theme()?>/img/no_bottom_banner.png' />
					</div>
			<?}?>
		</div>
		
		<table cellpadding=0 cellspacing=0 width='100%'>
			<tr valign='top'>
				<?for( $latest_count = 4; $latest_count <= 6; $latest_count ++ ){?>
				<td width='33%' class='latest_<?=$latest_count?>'>
				<?
					include widget(
						array(
							'code'		=> 'x-latest-community-2-'.$latest_count,
							'name'		=> 'x-latest-community-2',
							'default_forum_id' => bo_table($latest_count),
							'git'		=> 'https://github.com/x-widget/x-latest-community-2',
						)
					);
				?>
				</td>
			<?}?>
			</tr>
		</table>		
			<div class='latest_4'>
				<? 				
					include widget(
						array(
							'code'		=> 'x-community-2-bottom-latest',
							'name'		=> 'x-community-2-bottom-latest',
							'default_forum_id' => bo_table($latest_count),
							'git'		=> 'https://github.com/x-widget/x-community-2-bottom-latest',
						)
					);
				?>
			</div>		