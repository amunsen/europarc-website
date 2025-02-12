<section class="w-screen overflow-hidden">
<div class="mt-4 sm:mt-8 lg:mt-12">
  <?php snippet('container', slots: true)?>
      <!-- Title Section -->
      <div class="flex flex-col gap-6 md:gap-8 py-6 pb-12 sm:py-8 sm:pb-16">
        <h2 class="text-cararra-950">
          <?=$block->headline()?>
          <br/>
          <?=$block->headlineii()?>
        </h2>
        <div class="py-6 pt-0 sm:py-8 sm:pt-0 lg:max-w-[72vh]">
          <p class="h3 text-cararra-950">
            <?=$block->description()?>
          </p>
        </div>
      </div>
  <?php endsnippet()?>
</div>
<?php if ($block->video()->toBool() === true): ?>
  <?php if ($i = $block->videocover()->toFile()): ?>
    <div id="teaser-video" class="teaser-video relative">
      <div class="absolute top-0 left-0 w-full h-full bg-transparent"></div>
      <video class="teaser object-cover" preload="none" src="<?=$site->url()?>/assets/videos/<?=$block->videofile()?>"
            poster="<?=$i->url()?>"
            muted loop playsinline>
      </video>
    </div>
  <?php endif;?>
<?php else: ?>
  <div class="slick relative" data-slick='{"lazyLoad": "ondemand", "slidesToShow": 1, "slidesToScroll": 1}'>
    <?php foreach ($block->image()->toStructure() as $image): ?>
      <div class="teaser">
        <?php if ($i = $image->image()->toFile()): ?>
          <img loading="lazy" class="w-full h-full object-cover" src="<?=$i->thumb(['format' => 'webp', 'quality' => 60])->url()?>" alt="">
        <?php endif;?>
      </div>
    <?php endforeach?>
  </div>
<?php endif?>
</section>
