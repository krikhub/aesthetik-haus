<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page->title() ?> | <?= $site->title() ?></title>
  <link rel="stylesheet" href="<?= url('assets/css/style.css') ?>">
</head>
<body class="bg-gray-50">
  <header class="bg-transparent border-b border-gray-200">
    <nav class="max-w-7xl mx-auto px-4 py-4">
      <div class="flex justify-between items-center">
        <!-- Logo -->
        <a href="<?= $site->url() ?>" class="flex items-center gap-3">
          <img src="<?= url('assets/css/images/logo.jpg') ?>" alt="<?= $site->title() ?>" class="h-12">
        </a>
        
        <!-- Navigation -->
        <ul class="flex gap-8 items-center">
          <li><a href="#" class="text-black hover:border-b-2 hover:border-gray-400 transition font-medium pb-1">Referenzen</a></li>
          <li><a href="#" class="text-black hover:border-b-2 hover:border-gray-400 transition font-medium pb-1">Baufinanzierung</a></li>
          <li><a href="#" class="text-black hover:border-b-2 hover:border-gray-400 transition font-medium pb-1">Leistungen & Infos</a></li>
          <li><a href="#" class="text-black hover:border-b-2 hover:border-gray-400 transition font-medium pb-1">Impressionen</a></li>
          <li><a href="#" class="text-black hover:border-b-2 hover:border-gray-400 transition font-medium pb-1">Ratgeber</a></li>
          <li><a href="#" class="text-black hover:border-b-2 hover:border-gray-400 transition font-medium pb-1">Über uns</a></li>
        </ul>
        
        <!-- Kontakt Button -->
        <a href="#" class="btn btn-outline">Kontakt</a>
      </div>
    </nav>
  </header>
  <main>
