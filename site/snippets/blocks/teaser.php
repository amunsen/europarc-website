<section class="w-screen overflow-hidden">
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
              <div class="cols-span-1 flex flex-col gap-3">
                <?php if ($bullet->meta()->isNotEmpty()): ?>
                  <h3 class="font-small font-semibold"><?php echo $bullet->meta() ?></h3>
                <?php else: ?>
                  <br class="hidden sm:block"/>
  <?php endif; ?>
                <h4 class="font-medium line-height-tight">
                  <span class="truncate"><?php echo $bullet->titlei() ?></span>
                  <br/>
                  <span class="truncate"><?php echo $bullet->titleii() ?></span>
                </h4>
                <p class="w-full max-w-sm sm:block text-sm">
                  <?php echo $bullet->description() ?>
                </p>
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
      <div class="absolute top-0 left-0 w-full h-full bg-transparent"></div>
      <video class="teaser object-cover" preload="none" src="<?php echo $site->url() ?>/assets/videos/<?php echo $block->videofile() ?>"
            poster="<?php echo $i->url() ?>"
            muted loop playsinline>
      </video>
    </div>
  <?php endif; ?>
<?php else: ?>
  <div class="slick relative" data-slick='{"lazyLoad": "ondemand", "slidesToShow": 1, "slidesToScroll": 1}'>
    <?php foreach ($block->image()->toStructure() as $image): ?>
      <div class="teaser">
        <?php if ($i = $image->image()->toFile()): ?>
          <img loading="lazy" class="w-full h-full object-cover" src="<?php echo $i->thumb(['format' => 'webp', 'quality' => 60])->url() ?>" alt="<?php echo $image->alt()->esc() ?>">
        <?php endif; ?>
      </div>
    <?php endforeach?>
  </div>
<?php endif?>
</section>
