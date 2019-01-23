<?php snippet('header') ?>

  <main class="home" role="main">
    
    <div class="blockerWrapper">

      <div class="header notScrolled">
            <div class="title eng">Session</br>Press</div>
            <div class="title jpn">セッション</br>プレス</div>
        </div>

      <div class="slideshow">
        <?php $panels = $page->news()->toStructure(); ?>
        <?php if($panels -> count()): ?>
          
            <?php foreach ($panels as $panel): ?>
              <div class="panelWrapper">
              <img src="<?php echo $panel->coverImage()->toFile()->url() ?>" />
            
              <div class="newsContent title"><?php echo $panel->newsShortContent()->kirbytext() ?></div>
              <div class="blocker">
                
              
                <div class="title">
                  <div class="eng"><?php echo $panel->newsBookTitle() ?></div>
                  <div class="jpn"><?php echo $panel->newsBookTitleJapanese() ?></div>
                  <div class="eng"><?php echo $panel->newsBookArtist() ?></div> 
                  <div class="jpn"><?php echo $panel->newsBookArtistJapanese() ?></div>
                </div>

                <div class="text">
                  <?php echo $panel->newsLongContent()->kirbyText() ?>
                </div>
              </div>
              </div>
            <?php endforeach ?>
          
        <?php endif ?>
      </div>

      <div class="divider"></div>
      <div class="divider container">
        
      </div>


      <div class="blocker">
        <?php $bookPages = $site->find('books')->children()->sortBy('sessionNumber','desc'); 
        if($bookPages->count()):
          foreach ($bookPages as $session): ?>
            <div class="sessionContainer">
              <div class="sessionNumber title">
                Session
                <?php echo " ".$session->sessionNumber() ?>
              </div>
              <a href="<?php echo $session->url() ?>"><img src = "<?php echo $session->coverImage()->toFile()->url() ?>" /></a>
              <div class="sessionTitle title">
                <div class="eng"><?php echo $session->englishTitle() ?></div>
                <div class="jpn"><?php echo $session->japaneseTitle() ?></div>
                <div class="eng"><?php echo $session->englishArtist() ?></div>
                <div class="jpn"><?php echo $session->japaneseArtist() ?></div>
              </div>
             
            </div>
            <div class="divider"></div>
            <div class="divider"></div>
            <div class="divider"></div>
            <div class="divider"></div>
          <?php endforeach ?>
        <?php endif?>
        <div class="divider"></div>
      </div>

      </div>


    </div>
    
    <?php snippet('menu') ?>
  </main>

<?php snippet('footer') ?>