<?php snippet('header') ?>

  <main class="about">
      <?php snippet('title') ?>
      <div class="blockerWrapper">

        <div class="blocker">
          <img src="<?php echo $page->coverImage()->toFile()->url() ?>"/>
        </div>

        <div class="blocker">
          <div class="footnote"></div>
          <div class="text eng">
            <?php echo $page->englishText()->kirbytext() ?>
          </div>
          <div class="text jpn">
            <?php echo $page->japaneseText()->kirbytext() ?>
          </div>
        </div>


      </div>
      <?php snippet('menu') ?>
  </main>

<?php snippet('footer') ?>
