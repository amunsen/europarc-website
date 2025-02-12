<div class="w-full py-8 lg:py-12 xl:py-16 bg-cararra-100">
  <?php snippet('container', slots: true)?>
    <div class="grid grid-cols-6 sm:grid-cols-6 lg:grid-cols-6 gap-4 md:gap-6 lg:gap-16 xl:gap-24">
      <?php foreach ($block->logos()->toFiles() as $logo): ?>
        <div class="col-span-2 sm:col-span-2 lg:col-span-2">
          <img class="px-4 sm:px-6 lg:px-12 w-full h-full object-contain" src="<?php echo $logo->url() ?>" alt="Logo">
        </div>
      <?php endforeach?>
    </div>
  <?php endsnippet()?>
</div>