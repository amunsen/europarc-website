<div style="z-index:<?php echo $zIndex ?>" class="js-image-iso slider-column flex flex-row-reverse lg:flex-col justify-between lg:justify-around absolute top-1/2 left-0 -translate-y-1/2 w-full h-full overflow-hidden bg-cararra-100 p-2 sm:p-10 lg:p-14 gap-4 sm:gap-8 lg:gap-12">
  <div class="flex-1 lg:flex-initial flex flex-col lg:flex-col lg:justify-center gap-2 sm:gap-8 lg:gap-10">
    <div class="flex-1 sm:flex-initial flex flex-col justify-center gap-3 lg:gap-6">
      <h2><?php echo $slider->title() ?></h2>
      <p class="font-small">
        <?php echo $slider->description() ?>
      </p>
    </div>
  </div>
  <div class="flex items-center h-full lg:h-auto">
    <?php if ($i = $slider->thumb()->toFile()): ?>
      <img
        class="js-image-iso-img w-28 h-28 sm:w-32 sm:h-32 md:w-48 md:h-48 lg:w-auto lg:h-auto"
        src="<?php echo $i->url() ?>" alt="<?php echo $slider->headlinei() . $slider->headlineii() ?>"
      />
    <?php endif; ?>
  </div>
</div>
