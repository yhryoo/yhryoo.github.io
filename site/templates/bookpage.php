<?php snippet('header') ?>

	<main class="bookpage">
		<?php snippet('title') ?>
		<div class="blockerWrapper">
		<!--	<div class="blocker top"></div>
			<div class="blocker left"></div>-->


			
			<div class="slideshowWrapper">
				<div class="gridWrapper">
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
					<div class="vgrid"></div>
				</div>

				<div class="gridWrapper">
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
					<div class="hgrid"></div>
				</div>

				<div class="slideshow">
					<?php $imageslide = $page->bookimages()->toStructure(); ?>
					<?php if($imageslide->count()):
						foreach($imageslide as $singleImage): ?>
							<div class="imageWrapper">
								<img src="<?php echo $singleImage->bookimage()->toFile()->url() ?>"/>
							</div>
						<?php endforeach ?>
					<?php endif ?>
				</div>

				<div class="fullScreen"></div>
				

				<div class="fullscreenPanel">
					<div class="gridWrapper horizontal"></div>
					<div class="gridWrapper vertical"></div>
					<div class="slideshow">
						<?php $imageslide = $page->bookimages()->toStructure(); ?>
						<?php if($imageslide->count()):
							foreach($imageslide as $singleImage): ?>
								<div class="imageWrapper">
									<img src="<?php echo $singleImage->bookimage()->toFile()->url() ?>"/>
								</div>
							<?php endforeach ?>
						<?php endif ?>
					</div>	
				</div>

			</div>

			<div class="title mouseLabel"></div>
			<!--<div class="blocker right"></div>-->
			<div class="blocker bottom">
				<div class="blocker">
					<div class="title eng">
						<?php echo $page->englishTitle(); ?>
						</br>
						<?php echo $page->englishArtist(); ?>
					</div>
				</div>
				<div class="title jpn">
					<?php echo $page->japaneseTitle(); ?>
					</br>
					<?php echo $page->japaneseArtist(); ?>
				</div>

				<div class="footnote">
					Awards</br>
					<?php echo $page->awards()->kirbytext(); ?>
					</br>Credit</br>
					<?php echo $page->credit()->kirbytext(); ?>
					</br>Specs</br>
					<?php echo $page->specs()->kirbytext(); ?>
				</div>

				<div class="text eng">
					<?php echo $page->fromSessionPressEnglish()->kirbytext(); ?>
				</div>

				<div class="text jpn">
					<?php echo $page->fromSessionPressJapanese()->kirbytext(); ?>
				</div>

				<div class="divider"></div>

				<div class="blocker">
					<div class="title eng">
						<?php echo $page->englishArtist(); ?>
					</div>
					<div class="title jpn singleRow">
						<?php echo $page->japaneseArtist(); ?>
					</div>
				</div>

				<div class="footnote">
					<?php echo $page->artistCV()->kirbytext(); ?>
				</div>
				<div class="text eng">
					<?php echo $page->artistBioEnglish()->kirbytext(); ?>
				</div>
				<div class="text jpn">
					<?php echo $page->artistBioJapanese()->kirbytext(); ?>
				</div>


			</div>
		</div>

		<?php snippet('menu') ?>

	</main>

<?php snippet('footer') ?>
