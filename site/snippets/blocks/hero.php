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
<div class="relative hero w-screen bg-gray-600">
  <?php if ($block->video()->toBool() === true): ?>
    <div class="absolute top-0 left-0 w-full h-full bg-transparent"></div>
    <video class="hero-video w-full h-full object-cover" preload="none" src="<?php echo $site->url() ?>/assets/videos/<?php echo $block->videofile() ?>"
          poster="<?php echo $block->image()->toFile()->url() ?>"
          autoplay muted loop playsinline>
    </video>
  <?php else: ?>
<?php
    $sizes = "(min-width: 1200px) 25vw,
    (min-width: 900px) 33vw,
    (min-width: 600px) 50vw,
    100vw";
?>
<?php if ($image = $block->image()->toFile()): ?>
      <img class="w-full h-full object-cover" src="<?php echo $image->thumb(['format' => 'webp', 'quality' => 60])->url() ?>" alt="<?php echo $image->alt()->esc() ?>">
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
