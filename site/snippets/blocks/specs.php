<div class="my-4 sm:my-8 lg:my-12">
  <?php snippet('container', slots: true)?>
<?php snippet('grid', slots: true)?>
      <!-- Title Section -->
      <div class="col-span-1 sm:col-span-1 lg:col-span-2">
        <div class="w-full flex flex-col gap-6 md:gap-8 pt-10 pb-0 sm:py-8 sm:pb-16">
          <h2 class="text-cararra-950">
            <?php echo $block->headlinei() ?>
            <br/>
            <?php echo $block->headlineii() ?>
          </h2>
          <div>
            <p class="h4 text-cararra-950">
              <?php echo $block->description() ?>
            </p>
          </div>
        </div>
      </div>
      <div class="flex items-center col-span-1 sm:col-span-1 lg:col-span-2">
        <div class="flex flex-col gap-4 w-full">
          <div class="flex flex-col lg:flex-row justify-between gap-4">
            <?php foreach ($block->specsHeadline()->toStructure() as $spec): ?>
<?php snippet('blocks/spec', ['spec' => $spec])?>
<?php endforeach?>
          </div>
            <div class="flex-1 mt-4">
              <hr class="w-full h-[1px] bg-cararra-100" />
              <div class="flex flex-col lg:flex-row justify-between gap-4 mt-4">
                <?php $index = 0?>
<?php foreach ($block->specs()->toStructure() as $spec): ?>
<?php snippet('blocks/spec', ['spec' => $spec])?>
<?php $index++?>
<?php endforeach?>
              </div>
            </div>
        </div>
      </div>
    <?php endsnippet()?>
<?php endsnippet()?>
</div>