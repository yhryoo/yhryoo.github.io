<?php snippet('header') ?>

<main class="textPage">
	<?php snippet('title') ?>

	<div class="blockerWrapper">
		<?php $imageSlides = $page->coverImageSlide()->toStructure();
			if($imageSlides->count()): ?>
			<div class="slideshow">
				<?php foreach($imageSlides as $imageFile): ?>
					<img src="<?php echo $imageFile->coverImage()->toFile()->url() ?>">
				<?php endforeach ?>
			</div>
			<div class="divider"></div>
		<?php endif ?>
		<div class="title mouseLabel"></div>

		<?php if($page->japanese()=='1'):
					$lang = "jpn";
				elseif ($page->korean()=='1'):
					$lang = "kor";
				elseif ($page->chinese()=='1'):
					$lang = "chn";
				endif?>
		
		<div class="blocker">
			<div class="title eng">
				<?php echo $page->englishTitle() ?>
			</div>
			<div class='<?php echo "title ".$lang." singleRow" ?>'>
				<?php echo $page->cjkTitle() ?>
			</div>

			<?php if(!$page->englishText()->empty()): ?>

				<div class="text eng">
					<?php echo $page->englishText()->kirbytext() ?>
				</div>
				<div class='<?php echo "text ".$lang ?>'>
					<?php echo $page->japaneseText()->kirbytext() ?>
				</div>
				
			<?php endif ?>

			<?php $interview = $page->interviewEnglish()->toStructure(); 
				if($interview->count()): ?>
					<div class="text eng">
						<?php foreach($interview as $part): ?>
							<div class="question">
								<?php echo $part -> question() -> kirbytext() ?>
							</div>
							<div class="answer">
								<?php echo $part -> answer() -> kirbytext() ?>
							</div>
							<?php if($part -> insertImage() -> toFile() != null): ?>
								<img src="<?php echo $part->insertImage()->toFile()->url() ?>"/>
							<?php endif ?>
						<?php endforeach ?>
					</div>
				<?php endif ?>

			<?php $interview = $page->interviewCJK()->toStructure(); 
				if($interview->count()): ?>
					<div class="<?php echo 'text '.$lang ?>">
						<?php foreach($interview as $part): ?>
							<div class="question">
								<?php echo $part -> question() -> kirbytext() ?>
							</div>
							<div class="answer">
								<?php echo $part -> answer() -> kirbytext() ?>
							</div>
						<?php endforeach ?>
					</div>
				<?php endif ?>

		</div>

	</div>

	<?php snippet('menu') ?>
</main>

<?php snippet('footer') ?>