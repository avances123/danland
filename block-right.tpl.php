<?php
// $Id$
?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block <?php print $block_classes; ?>">
  <div class="block-inner">

    <?php if ($block->subject): ?>
      <h2 class="block-title"><?php print $block->subject; ?></h2>
    <?php endif; ?>

    <div class="block-content">
      <div class="block-content-inner">
        <?php print $block->content; ?>
      </div>
    </div>

  </div>
</div> <!-- /block -->
