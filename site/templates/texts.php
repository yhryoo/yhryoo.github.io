<?php snippet('header') ?>

	<main class="texts">
		<?php snippet('title') ?>
		<div class="blockerWrapper">
			<div class="blocker">
				<div class="title eng">
					Articles
				</div>
				<div class="title jpn singleRow">
					記事
				</div>
				<div class="content">
					<?php $alltexts = $page->children()->filterBy('Articles','1');
						if($alltexts -> count()):
							foreach ($alltexts as $textStuff): ?>
							<a href="<?php echo $textStuff->url() ?>">
								<div class="title eng"><?php 
									$title = $textStuff->englishTitle(); 
									$prevDate = $textStuff->date();
									$formattedDate = date("F j, Y",strtotime($prevDate));
									echo $title.", ".$formattedDate;
								?></div>
								</br>
								<div class="title jpn singleRow"><?php echo $textStuff->japaneseTitle() ?></div>
							</a>
			
						<?php endforeach ?>
					<?php endif ?>
					<div class="viewMore">
						View More
					</div>
					<div class="hide">
						Hide
					</div>
				</div>
				
			</div>

			<div class="divider"></div>

			<div class="blocker">
				<div class="title eng">
					Writings
				</div>
				<div class="title jpn singleRow">
					随筆
				</div>
				<div class="content">
					<?php $alltexts = $page->children()->filterBy('Writings','1');
						if($alltexts -> count()):
							foreach ($alltexts as $textStuff): ?>
							<a href="<?php echo $textStuff->url() ?>">
								<div class="title eng"><?php 
									$title = $textStuff->englishTitle(); 
									$prevDate = $textStuff->date();
									$formattedDate = date("F j, Y",strtotime($prevDate));
									echo $title.", ".$formattedDate;
								?></div>
								</br>
								<div class="title jpn singleRow"><?php echo $textStuff->japaneseTitle() ?></div>
							</a>
						<?php endforeach ?>
					<?php endif ?>

					<div class="viewMore">
						View More</br>展望 尚
					</div>
					<div class="hide">
						Hide</br>隠す
					</div>
				</div>
			</div>

			<div class="divider"></div>

			<div class="blocker">
				<div class="title eng">
					Features
				</div>
				<div class="title jpn singleRow">
					面談
				</div>
				<div class="content">
					<?php $alltexts = $page->children()->filterBy('Features','1');
						if($alltexts -> count()):
							foreach ($alltexts as $textStuff): ?>
							<a href="<?php echo $textStuff->url() ?>">
								<img src="<?php echo $textStuff->coverImage()->toFile()->url()?>"/>
								<div class="title eng"><?php 
									$title = $textStuff->englishTitle(); 
									$prevDate = $textStuff->date();
									$formattedDate = date("F j, Y",strtotime($prevDate));
									echo $title.", ".$formattedDate;
								?></div>
								</br>
								<div class="title jpn singleRow"><?php echo $textStuff->japaneseTitle() ?></div>
							</a>
						<?php endforeach ?>
					<?php endif ?>

					<div class="viewMore">
						View More</br>展望 尚
					</div>
					<div class="hide">
						Hide</br>隠す
					</div>
				</div>
				
			</div>

		</div>
		<?php snippet('menu') ?>
	</main>

<?php snippet('footer') ?>