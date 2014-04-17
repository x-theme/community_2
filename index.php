		<table class='main-top' cellpadding=0 cellspacing=0 width='100%'>
			<tr valign='top'>
				<td>
					<?	if(  file_exists(x::path_file('banner')) ) {?>
							<img src="<?=x::url_file('banner')?>">
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
				<img src="<?=x::url_file('banner_bottom')?>" />
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
							'git'		=> 'https://github.com/x-widget/x-latest-community-2',
						)
					);
				?>
				</td>
			<?}?>
			</tr>
		</table>
		<? if ( g::forum_exist($forum_1 = x::board_id ( $domain ).'_1' ) ) { ?>
			<div class='latest_4'>
				<? 
				
					$option = array('bo_table' => $forum_1);
					include x::dir().'/theme/community_2/bottom_latest.php';
				?>
			</div>
		<? }?>