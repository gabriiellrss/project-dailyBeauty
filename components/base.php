<iframe
        <?php echo 'style="width: 560px; max-height: 315px; aspect-ratio: 16/9; border-radius: 15px; height: 100%;' . ($index === count($Video) - 1 ? ' margin-right: 2em;' : '') . '"'; ?>
        width="560" height="315" 
        src="<?php echo $video['link']; ?>"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen>
      </iframe>


      <?php
          if($index === count($produtos) - 1){
          echo "style='width:18rem; '";
        }
        ?>