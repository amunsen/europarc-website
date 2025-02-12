<div class="w-full z-50">
  <div class="py-4 lg:py-8">
    <?php snippet('container', slots: true)?>
      <div class="flex">
        <div class="flex-1">
          <a href="<?=$site->url()?>" title="homepage">
            <?php snippet('logo')?>
          </a>
        </div>
        <div class="flex-1 flex items-center justify-end text-white">
          <div class="flex items-center gap-2 relative px-4 pt-1.5 pb-2 bg-black rounded-3xl backdrop-blur-lg">
            <?php if ($pages->find('current-campus')->title() === $page->title()): ?>
              <a class="flex items-center gap-2 text-white text-sm font-bold" href="<?=$pages->find('home')->url()?>"><?=$pages->find('home')->title()?>
              <?php snippet('icons/arrowUpRight')?>
            </a>
            <?php else: ?>
              <a class="flex items-center gap-2 text-white text-sm font-bold" href="<?=$pages->find('current-campus')->url()?>"><?=$pages->find('current-campus')->title()?>
                <?php snippet('icons/arrowUpRight')?>
              </a>
            <?php endif?>
          </div>
        </div>
      </div>
    <?php endsnippet()?>
  </div>
</div>
