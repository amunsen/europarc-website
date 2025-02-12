<?php
    $blocks  = $pages->find($target)->pageContent()->toBlocks(); // Get all blocks
    $myBlock = $blocks->filterBy('type', 'next')->first();       // Get first block of type "my-block-type"
?>

<?php foreach ($myBlock->link()->toStructure() as $link): ?>
<a href="<?php echo $link->href() ?>" target="_blank" class="group flex flex-col col-span-1 sm:col-span-1 lg:col-span-2">
  <div class="flex flex-col gap-3 mb-5">
    <?php if ($i = $myBlock->image()->toFile()): ?>
            <img loading="lazy" class="w-full h-[120px] lg:h-[240px] object-cover" src="<?php echo $i->thumb(['format' => 'webp', 'quality' => 60])->url() ?>" alt="<?php echo $i->alt()->esc() ?>">
    <?php endif; ?>
    <p class="h4 font-semibold group-hover:-translate-y-4 transition-transform mt-6">
      <?php echo $myBlock->headlinei() ?>&nbsp;<?php echo $myBlock->headlineii() ?>
    </p>
    <p class="font-small font-semibold group-hover:-translate-y-4 transition-transform">
      <?php echo $myBlock->description() ?>
    </p>
  </div>
  <div class="group-hover:-translate-y-8 transition-transform flex justify-center items-center text-white bg-slate-950 w-6 h-6 lg:w-8 lg:h-8 rounded-full">
    <svg class="w-3 lg:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path></svg>
  </div>
</a>
<?php endforeach; ?>