<?php if ($buttons = $page->buttons()->toStructure()): ?>
  <div class="flex gap-4 mt-6">
    <?php foreach ($buttons as $button): ?>
      <?php 
        $styleClasses = [
          'primary' => 'btn btn-primary',
          'secondary' => 'btn btn-secondary',
          'outline' => 'btn btn-outline'
        ];
        $class = $styleClasses[$button->style()->value()] ?? 'btn btn-primary';
      ?>
      <a href="<?= $button->link()->toUrl() ?>" 
         class="<?= $class ?>">
        <?= $button->text() ?>
      </a>
    <?php endforeach ?>
  </div>
<?php endif ?>
