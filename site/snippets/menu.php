<div class="toolbar">
	<div class="menu title" id="close">Close</div>
    <div class="menu title" id="home"><a href="<?php echo $site->find('home')->url() ?>">Books</a></div>
    <div class="menu title" id="about"><a href="<?php echo $site->find('about')->url() ?>">About</a></div>
    <div class="menu title" id="texts"><a href="<?php echo $site->find('texts')->url() ?>">Texts</a></div>
</div>

<div class="footer">
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
		<div class="vgrid"></div>
	</div>
			<div class="navWrapper active" id="home">
				<?php $books = $site->find('books')->children()->sortBy('sessionNumber','desc');;
					if($books->count()):
						foreach ($books as $book): ?>
							<div class="navRow">
								<a href="<?php echo $book->url() ?>">
									<div class="nav label">
										Session<?php echo " ".$book->sessionNumber() ?>
									</div>
									<div class="nav">
										<?php $artist = $book->englishArtist();
											$title = $book->englishTitle(); 
											echo $artist." ".$title ?>
									</div>
								</a>
							</div>
						<?php endforeach?>
					<?php endif ?>
			</div>

			

			<div class="navWrapper" id="about">
				
				<div class="nav label forText"></div>
				<div class="nav text">Session Press is dedicated to introducing contemporary and historical works by both emerging and established Japanese photographers.
				</div>

				<div class="navRow">
					<div class="nav label">Contact:</div>
					<div class="nav">info@sessionpress.com</div>
				</div>
				
			</div>


			<div class="navWrapper" id="texts">
				<?php $allTexts = $site->find('texts')->children()->filterBy('Articles','1')->sortBy('date','desc');
					$count = 0;
					if($allTexts->count()): ?>
						<?php foreach ($allTexts as $singleText): 
							if($count<3):?>
							<?php if($count == 0): ?>
								<div class="navRow firstRow">
							<?php else: ?>
								<div class="navRow">
							<?php endif ?>	
								<a href="<?php echo $singleText->url() ?>">
									<?php if($count == 0): ?>
										<div class="nav label">Articles</div>
									<?php else: ?>
										<div class="nav label"></div>
									<?php endif ?>
									<div class="nav">
										<?php echo $singleText->englishTitle(); ?>
									</div>
								</a>
							</div>
							<?php endif ?>
						<?php $count++; endforeach?>
					<?php endif ?>
					<?php $allTexts = $site->find('texts')->children()->filterBy('Writings','1')->sortBy('date','desc');
					$count = 0;
					if($allTexts->count()): ?>
						<?php foreach ($allTexts as $singleText): 
							if($count<3):?>
							<?php if($count == 0): ?>
								<div class="navRow firstRow">
							<?php else: ?>
								<div class="navRow">
							<?php endif ?>	
								<a href="<?php echo $singleText->url() ?>">
									<?php if($count == 0): ?>
										<div class="nav label">Writings</div>
									<?php else: ?>
										<div class="nav label"></div>
									<?php endif ?>
									<div class="nav">
										<?php echo $singleText->englishTitle(); ?>
									</div>
								</a>
							</div>
							<?php endif ?>
						<?php $count++; endforeach?>
					<?php endif ?>
					<?php $allTexts = $site->find('texts')->children()->filterBy('Features','1')->sortBy('date','desc');
					$count = 0;
					if($allTexts->count()): ?>
						<?php foreach ($allTexts as $singleText): 
							if($count<3):?>
							<?php if($count == 0): ?>
								<div class="navRow firstRow">
							<?php else: ?>
								<div class="navRow">
							<?php endif ?>	
								<a href="<?php echo $singleText->url() ?>">
									<?php if($count == 0): ?>
										<div class="nav label">Features</div>
									<?php else: ?>
										<div class="nav label"></div>
									<?php endif ?>
									<div class="nav">
										<?php echo $singleText->englishTitle(); ?>
									</div>
								</a>
							</div>
							<?php endif ?>
						<?php $count++; endforeach?>
					<?php endif ?>
				
				
			</div>


		</div>