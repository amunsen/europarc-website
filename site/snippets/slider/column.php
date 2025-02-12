<div style="z-index: <?=$zIndex?>" class="js-image-iso flex flex-row-reverse lg:flex-col justify-between lg:justify-around absolute top-1/2 left-0 -translate-y-1/2 w-full h-full overflow-hidden bg-cararra-100 p-2 sm:p-10 lg:p-14 gap-4 sm:gap-8 lg:gap-12">
  <div class="flex-1 lg:flex-initial flex flex-row lg:flex-col lg:justify-center gap-4 sm:gap-8 lg:gap-10">
    <div class="flex-1 sm:flex-initial flex flex-col justify-center gap-3 lg:gap-6">
      <h2><?=$slider->title()?></h2>
      <ul class="flex flex-col px-1 gap-2">
        <li class="flex items-center gap-2">
          <strong>Ceiling Height</strong>
        </li>
        <li class="flex items-center gap-2">
          <strong>Space Width</strong>
        </li>
      </ul>
      <div>
        <strong class="block md:hidden">More +</strong>
      </div>
    </div>
    <div class="flex-1 md:flex justify-end items-end font-small hidden">
      <span>
        <?=$slider->description()?>
      </span>
    </div>
  </div>
  <div class="flex items-center h-full lg:h-auto">
    <?php if ($i = $slider->thumb()->toFile()): ?>
      <img
        class="js-image-iso-img w-40 h-40 md:w-48 md:h-48 lg:w-auto lg:h-auto"
        src="<?=$i->url()?>" alt="<?=$slider->headlinei() . $slider->headlineii()?>"
      />
    <?php endif;?>
  </div>
</div>
