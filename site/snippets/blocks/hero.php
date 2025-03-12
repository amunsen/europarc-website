<?php $fullLang = str_replace('/' . kirby()->language()->code(), '', kirby()->site()->url())?>
<div class="mt-4 sm:mt-8 lg:mt-12">
  <?php snippet('container', slots: true)?>
      <!-- Title Section -->
      <div class="flex flex-col gap-y-3 py-6 pb-12 sm:py-8 sm:pb-16">
        <h3 class="font-small font-semibold"><?php echo $page->title() ?></h3>
        <h1 class="text-cararra-950">
          <?php echo $block->headlinei() ?>
          <br/>
          <?php echo $block->headlineii() ?>
        </h1>
      </div>
  <?php endsnippet()?>
</div>
<!-- Image Section -->
<div class="relative w-screen hero bg-white overflow-hidden">
<?php if ($block->video()->toBool() === true): ?>
  <div class="absolute z-40 top-0 left-0 w-full h-full bg-transparent"></div>
    <div class="video-container">
      <video style="width: 100%" id="video-hero" poster="<?php echo $fullLang ?>/assets/videos/europarc_still_001.jpg" autoplay muted loop playsinline>
          <source src="<?php echo $fullLang ?>/assets/videos/<?php echo $block->videofile() ?>" type="video/mp4">
          Your browser does not support the video tag.
      </video>
    </div>
  <?php else: ?>
<?php if ($image = $block->image()->toFile()): ?>
<?php snippet('image', ['image' => $image])?>
<?php endif; ?>
<?php endif; ?>
</div>
<div class="max-w-screen-xl mx-auto mt-4 sm:mt-8 lg:mt-12">
  <?php snippet('container', slots: true)?>
    <!-- Text Section -->
    <div class="py-6 pt-12 sm:py-8 sm:pt-16 lg:max-w-[72vh]">
      <h2>
        <?php echo $block->description() ?>
      </h2>
    </div>
    <?php endsnippet()?>
</div>
