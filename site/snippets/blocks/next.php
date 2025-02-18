<?php foreach ($block->link()->toStructure() as $link): ?>
  <a
  href="<?php echo $link->href() ?>"
      class="group bg-cararra-100 block w-full relative"
    >
    <div class="relative z-30">
      <?php snippet('container', slots: true)?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4 md:gap-12 lg:gap-16 xl:gap-24">
          <header class="col-span-1 md:col-span-1 lg:col-span-2 flex h-full">
            <div class="flex flex-col justify-center gap-6 pb-4 md:pb-14 lg:pb-0">
              <h2 class="group-hover:-translate-y-4 transition-transform pt-14 lg:pt-0">
                <?php echo $block->headlinei() ?>
                <br/>
                <?php echo $block->headlineii() ?>
              </h2>
              <p class="group-hover:-translate-y-6 transition-transform"><?php echo $block->description() ?></p>
              <div class="group-hover:-translate-y-8 transition-transform flex justify-center items-center text-white bg-slate-950 w-8 h-8 lg:w-12 lg:h-12 rounded-full">
                <svg class="w-5 lg:w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path></svg>
              </div>
            </div>
          </header>
          <?php if ($i = $block->image()->toFile()): ?>
            <div class="col-span-1 md:col-span-1 lg:col-span-3 w-full h-[240px] md:h-[320px] lg:h-[608px] mb-8 md:my-8 object-cover">
              <?php snippet('image', ['image' => $i])?>
          </div>
          <?php endif; ?>
        </div>
<?php endsnippet()?>
    </div>
  </a>
<?php endforeach; ?>