<?php snippet('container', slots: true)?>
  <div class="py-6 sm:py-12 lg:py-24">
    <?php snippet('grid', slots: true)?>
<?php foreach ($block->bullets()->toStructure() as $bullet): ?>
        <div class="col-span-1 flex flex-col gap-6">
          <?php snippet('icons/' . $bullet->icon())?>
          <div class="flex flex-col gap-2">
            <h4 class="font-medium line-height-tight">
              <span class="truncate"><?php echo $bullet->titlei() ?></span>
              <br/>
              <span class="truncate"><?php echo $bullet->titleii() ?></span>
            </h4>
            <?php if ($bullet->descriptionshown()): ?>
              <p
                class="w-full max-w-sm sm:block text-sm"
              >
                <?php echo $bullet->description() ?>
              </p>
            <?php endif?>
          </div>
        </div>
      <?php endforeach?>
<?php endsnippet()?>
  </div>
<?php endsnippet()?>
