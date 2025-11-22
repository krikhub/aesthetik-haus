<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page->title() ?></title>
  <link rel="stylesheet" href="<?= url('assets/css/style.css') ?>">
</head>
<body>
  <div class="min-h-screen flex items-center justify-center bg-gray-50">
    <div class="max-w-4xl mx-auto px-6 py-12 text-center">
      <?php if ($page->headline()->isNotEmpty()): ?>
        <h1 class="text-5xl font-bold text-gray-900 mb-6">
          <?= $page->headline() ?>
        </h1>
      <?php endif ?>
      
      <?php if ($page->text()->isNotEmpty()): ?>
        <div class="text-xl text-gray-600 mb-8">
          <?= $page->text()->kirbytext() ?>
        </div>
      <?php endif ?>
      
      <?php snippet('buttons') ?>
    </div>
  </div>
</body>
</html>
