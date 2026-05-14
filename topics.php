<?php require_once __DIR__.'/data/topics.php'; ?>
<!DOCTYPE html><html lang="en"><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>All Topics — Service Culture Learning Hub</title>
<script src="https://cdn.tailwindcss.com"></script><script>tailwind.config={darkMode:'class'}</script>
<link rel="stylesheet" href="assets/css/style.css?v=20260514">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head><body class="bg-gray-50 dark:bg-slate-900 text-gray-900 dark:text-gray-100">
<?php include 'components/navbar.php'; ?>
<section class="max-w-7xl mx-auto px-4 py-12">
  <div class="text-center mb-10" data-aos="fade-up">
    <h1 class="text-4xl font-bold">Explore All <span class="text-red-600">11 Modules</span></h1>
    <p class="mt-3 text-gray-600 dark:text-gray-300">Search, filter, and track your progress.</p>
  </div>

  <div class="bg-white dark:bg-slate-800 rounded-xl p-5 shadow mb-8 flex flex-col md:flex-row gap-4 items-center justify-between" data-aos="fade-up">
    <div class="flex-1 w-full">
      <div class="flex justify-between text-sm mb-2"><span data-progress-text>0 of 11 topics completed</span></div>
      <div class="w-full bg-gray-200 dark:bg-slate-700 rounded-full h-2"><div data-progress-bar class="progress-bar" style="width:0%"></div></div>
    </div>
    <input oninput="filterTopics(this.value)" placeholder="Search topics..." class="px-4 py-2 rounded-lg border border-gray-300 dark:border-slate-600 dark:bg-slate-900 w-full md:w-64" aria-label="Search topics">
  </div>

  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php foreach($TOPICS as $id=>$t): ?>
      <a href="topic.php?id=<?=$id?>" data-topic-card="<?=$id?>" data-title="<?=htmlspecialchars($t['title'])?>" data-cat="<?=$t['category']?>" data-aos="zoom-in" class="card-hover bg-white dark:bg-slate-800 rounded-2xl overflow-hidden shadow group block">
        <div class="h-40 relative overflow-hidden">
          <img loading="lazy" src="<?=$t['image']?>" alt="<?=htmlspecialchars($t['image_alt'])?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
          <span class="absolute top-3 left-3 bg-red-600 text-white text-xs px-2 py-1 rounded-full">Module <?=$id?></span>
        </div>
        <div class="p-5">
          <div class="text-xs text-blue-700 dark:text-blue-300 font-semibold uppercase"><?=$t['category']?></div>
          <h3 class="font-bold text-lg mt-1"><i class="fa-solid <?=$t['icon']?> mr-1 text-red-600"></i> <?=$t['title']?></h3>
          <p class="text-sm text-gray-600 dark:text-gray-300 mt-2 line-clamp-3"><?=$t['intro']?></p>
          <div class="mt-3 text-red-600 text-sm font-semibold">Open module <i class="fa-solid fa-arrow-right"></i></div>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
</section>
<?php include 'components/footer.php'; ?>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script><script>AOS.init({duration:700,once:true})</script>
<script src="assets/js/main.js?v=20260514"></script>
</body></html>
