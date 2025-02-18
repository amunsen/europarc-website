<div class="py-8 pb-16 sm:py-16 sm:pt-8 lg:py-16 lg:pt-10 bg-cararra-100">
  <div>
    <?php snippet('container', slots: true)?>
        <!-- Title Section -->
        <div class="flex flex-col gap-y-3 py-6 pb-12 sm:py-8 sm:pb-16">
          <h2 class="text-cararra-950">
            <?php echo $block->headline() ?>
            <br/>
            <?php echo $block->headlineii() ?>
          </h2>
        </div>
    <?php endsnippet()?>
  </div>
  <!-- Image Section -->
  <div class="relative hero w-screen bg-gray-600">

  <?php
      $sizes = "(min-width: 1200px) 25vw,
      (min-width: 900px) 33vw,
      (min-width: 600px) 50vw,
      100vw";
  ?>
<?php if ($image = $block->image()->toFile()): ?>
<?php snippet('image', ['image' => $image])?>
<?php endif; ?>
  </div>
  <div class="max-w-screen-xl mx-auto mt-4">
    <?php snippet('container', slots: true)?>
      <!-- Text Section -->
      <div class="pt-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-12 lg:gap-16 xl:gap-24">
          <p class="col-span-1">
            <?php echo $block->description() ?>
          </p>
          <p class="col-span-1">
            <?php echo $block->descriptionII() ?>
          </p>
        </div>
      </div>
      <?php endsnippet()?>
  </div>
</div>
