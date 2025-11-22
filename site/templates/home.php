<?php snippet('header') ?>

<div class="min-h-screen flex items-center justify-center">
  <div class="max-w-4xl mx-auto px-6 py-12 text-center">
    <?php if ($page->headline()->isNotEmpty()): ?>
      <h1 class="text-5xl font-bold text-gray-900 mb-6">
        <?= $page->headline() ?>
      </h1>
    <?php endif ?>
    
    <?php if ($page->text()->isNotEmpty()): ?>
      <div class="text-xl text-text mb-8">
        <?= $page->text()->kirbytext() ?>
      </div>
    <?php endif ?>
    
    <?php snippet('buttons') ?>
  </div>
</div>

<?php snippet('footer') ?>
