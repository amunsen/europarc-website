<div class="mt-4 sm:mt-8 lg:mt-12">
  <?php snippet('container', slots: true)?>
      <!-- Title Section -->
      <div class="flex flex-col gap-6 md:gap-8 py-6 pb-12 sm:py-8 sm:pb-16">
        <h2 class="text-cararra-950">
          <?php echo $block->headline() ?>
          <br/>
          <?php echo $block->headlineii() ?>
        </h2>
        <div class="flex flex-col gap-4 py-6 pt-0 sm:py-8 sm:pt-0 lg:max-w-[72vh]">
          <p class="h4 font-medium text-cararra-950">
            <?php echo $block->description() ?>
          </p>
          <p class="p text-cararra-950">
            <?php echo $block->detaildescription() ?>
          </p>
        </div>
      </div>
  <?php endsnippet()?>
</div>
<div id="slider">
  <div style="height: 210vh" class="js-comparision relative" >
    <div style="height: 100vh; width: 100vw" class="sticky top-0 flex flex-col-reverse lg:flex-row items-center justify-center">
      <div class="relative flex-1 w-full lg:max-w-96 h-full max-h-56 lg:max-h-full">

      <?php $index = 0?>
<?php foreach ($block->slider()->toStructure() as $slider): ?>
<?php snippet('slider/column', ['slider' => $slider, 'zIndex' => 5 - $index])?>
<?php $index++?>
<?php endforeach; ?>



      </div>
      <div class="flex-1 w-full lg:h-full bg-cararra-100 overflow-hidden">
        <div style="height: 100vh" class="relative w-full h-full bg-cararra-100 overflow-hidden">
        <?php $index = 0?>
<?php foreach ($block->slider()->toStructure() as $slider): ?>
<?php if ($i = $slider->image()->toFile()): ?>
            <div style="z-index:<?php echo 5 - $index ?>" class="js-image-wrapper absolute top-0 left-0 w-full h-full overflow-hidden">
            <?php snippet('image', ['image' => $i])?>
<?php $index++?>
            </div>
          <?php endif; ?>
<?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>