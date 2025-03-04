<img
      class="js-image-wrapper-img w-full h-full object-cover"
      src="<?php echo $image->thumb(['width' => 1600])->url() ?>"
      alt="<?php echo $image->alt()->esc() ?>"
      srcset="
        <?php echo $image->thumb(['width' => 900])->url() ?> 300w,
        <?php echo $image->thumb(['width' => 1800])->url() ?> 600w,
        <?php echo $image->thumb(['width' => 2400])->url() ?> 1200w"
      sizes="(max-width: 600px) 300px, (max-width: 1200px) 600px, 1200px"
      alt="<?php echo $image->alt() ?>"
      loading="lazy" />