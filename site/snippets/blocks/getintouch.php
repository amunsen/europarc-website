<div class="mt-4 sm:mt-8 lg:mt-12">
  <?php snippet('container', slots: true)?>
      <!-- Title Section -->
      <div class="flex flex-col gap-6 md:gap-8 py-6 pb-12 sm:py-8 sm:pb-16 items-center">
        <div class="flex flex-col gap-6 md:gap-8">
          <h2 class="text-cararra-950">
            <?php echo $block->headline() ?>
          </h2>
          <div class="flex flex-col gap-4 py-6 pt-0 sm:py-8 sm:pt-0 lg:max-w-[72vh]">
            <p class="h4 font-medium text-cararra-950">
              <?php echo $block->description() ?>
            </p>
            <p class="underline font-medium">
              <a target="_top" href="mailto:<?php echo $block->email() ?><?php echo $block->emaildetail() ?>" alt="<?php echo $block->emailcta() ?>"><?php echo $block->emailcta() ?></a>
            </p>
          </div>
        </div>
      </div>
  <?php endsnippet()?>
</div>