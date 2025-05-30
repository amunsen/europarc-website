<?php $fullLang = str_replace('/' . kirby()->language()->code(), '', kirby()->site()->url())?>
<section class="w-full overflow-hidden">
<div class="mt-4 sm:mt-8 lg:mt-12">
  <?php snippet('container', slots: true)?>
      <!-- Title Section -->
      <div class="flex flex-col gap-6 md:gap-8 py-6 pb-12 sm:py-8 sm:pb-16">
        <h2 class="text-cararra-950">
          <?php echo $block->headline() ?>
          <br/>
          <?php echo $block->headlineii() ?>
        </h2>
        <div class="py-6 pt-0 sm:py-8 sm:pt-0 lg:max-w-[72vh]">
          <p class="h4 text-cararra-950">
            <?php echo $block->description() ?>
          </p>
        </div>
        <?php if ($block->bullets()->isNotEmpty()): ?>
        <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3 gap-12 lg:gap-16 xl:gap-24">
            <?php foreach ($block->bullets()->toStructure() as $bullet): ?>
              <div class="cols-span-1 flex flex-col gap-6">
              <?php snippet('icons/' . $bullet->icon())?>
              <div class="flex flex-col gap-2">
                <h4 class="font-medium line-height-tight">
                  <span class="truncate"><?php echo $bullet->titlei() ?></span>
                  <br/>
                  <span class="truncate"><?php echo $bullet->titleii() ?></span>
                </h4>
                <p class="w-full max-w-sm sm:block text-sm">
                  <?php echo $bullet->description() ?>
                </p>
              </div>
              </div>
            <?php endforeach?>
        </div>
        <?php endif; ?>
      </div>
<?php endsnippet()?>
</div>
<?php if ($block->video()->toBool() === true): ?>
<?php if ($i = $block->videocover()->toFile()): ?>
    <div id="teaser-video" class="teaser-video relative">
      <div class="absolute z-40 top-0 left-0 w-full h-full bg-transparent"></div>
      <video id="teaser-video-elem" class="teaser relative z-30 object-cover" preload="none" src="<?php echo $fullLang ?>/assets/videos/<?php echo $block->videofile() ?>"
            poster="<?php echo $fullLang ?>/assets/videos/europarc_still_002.jpg"
            muted loop playsinline>
      </video>
      <img class="absolute z-10 top-0 left-0 w-full h-full object-cover" src="<?php echo $fullLang ?>/assets/videos/europarc_still_002.jpg">
    </div>
  <?php endif; ?>
<?php else: ?>
  <div class="js-slick-gallery slick relative" data-slick='{"lazyLoad": "ondemand", "slidesToShow": 1, "slidesToScroll": 1}'>
    <?php foreach ($block->image()->toStructure() as $image): ?>
      <div class="teaser">
        <?php if ($i = $image->image()->toFile()): ?>
<?php snippet('image', ['image' => $i])?>
<?php endif; ?>
      </div>
    <?php endforeach?>
  </div>
<?php endif?>
</section>
