<div style="z-index:70" class="w-full relative bg-white">
  <div class="py-4 lg:py-8">
    <?php snippet('container', slots: true)?>
      <div class="flex">
        <div class="flex-1">
          <a href="<?php echo $site->url() ?>" title="homepage">
            <?php snippet('logo')?>
          </a>
        </div>
        <div class="flex-1 flex items-center justify-end text-carrary-950 gap-4" >
        <nav class="languages">
                      <ul>
                        <?php foreach ($kirby->languages() as $language): ?>
<?php if ($kirby->language() != $language->code()): ?>
                            <li<?php e($kirby->language() == $language, ' class="active"')?>>
                              <a class="font-semibold uppercase" href="<?php echo $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
                                <?php echo html($language->code()) ?>
                              </a>
                            </li>
                          <?php endif?>
<?php endforeach?>
                      </ul>
                    </nav>
          <button class="js-menu w-12 h-12 flex items-center justify-center rounded-full bg-cararra-100 hover:bg-cararra-200 transition-all" aria-haspopup="true" aria-expanded="false" aria-controls="menu">
            <div class="w-6 h-6">
              <svg class="menu-open block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path></svg>
              <svg class="menu-close hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M11.9997 10.5865L16.9495 5.63672L18.3637 7.05093L13.4139 12.0007L18.3637 16.9504L16.9495 18.3646L11.9997 13.4149L7.04996 18.3646L5.63574 16.9504L10.5855 12.0007L5.63574 7.05093L7.04996 5.63672L11.9997 10.5865Z"></path></svg>
            </div>
          </button>
        </div>
      </div>
    <?php endsnippet()?>
  </div>
</div>

<div style="transform:translateY(-100%); z-index: 60" id="js-menu-panel" class="absolute top-0 left-0 bg-cararra-100 pt-24 sm:pt-32 lg:pt-40 py-12 sm:py-16 lg:py-24 w-dvw transition-transform duration-[0.72s]">
<?php snippet('container', slots: true)?>
<div class="flex flex-col md:flex-row justify-center gap-8">
<?php if (! $page->is('home')): ?>
<?php snippet('nav-item', ['target' => 'current-campus'])?>
<?php endif?>
<?php if (! $page->is('current-campus')): ?>
<?php snippet('nav-item', ['target' => 'home'])?>
<?php endif?>
</div>

<?php endsnippet()?>
</div>
