<div id="get-in-touch" class="mt-4 sm:mt-8 lg:mt-12">
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
            <p class="font-medium mt-8">
              <a class="inline-flex gap-2 bg-cararra-950 px-4 py-2 text-white rounded-full" target="_top" href="mailto:<?php echo $block->email() ?><?php echo $block->emaildetail() ?>" alt="<?php echo $block->emailcta() ?>">
                <?php echo $block->emailcta() ?>
                <svg class="w-3 lg:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path></svg>
              </a>
            </p>
          </div>
        </div>
      </div>
  <?php endsnippet()?>
</div>