<?php require_once __DIR__.'/data/topics.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Service Culture Learning Hub</title>
<meta name="description" content="An interactive mini-LMS covering leadership, motivation, empathy, and global service culture for IT-BPM students.">
<script src="https://cdn.tailwindcss.com"></script>
<script>tailwind.config={darkMode:'class'}</script>
<link rel="stylesheet" href="assets/css/style.css?v=20260514">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 dark:bg-slate-900 text-gray-900 dark:text-gray-100">
<?php include 'components/navbar.php'; ?>

<!-- HERO -->
<section class="gradient-hero text-white">
  <div class="max-w-7xl mx-auto px-4 py-24 grid md:grid-cols-2 gap-10 items-center">
    <div data-aos="fade-right">
      <span class="inline-block px-3 py-1 rounded-full bg-white/15 text-sm mb-4">Mini-LMS for IT-BPM Students</span>
      <h1 class="text-4xl md:text-6xl font-bold leading-tight">Service Culture <span class="text-red-300">Learning Hub</span></h1>
      <p class="mt-5 text-lg text-gray-200 max-w-xl">11 interactive modules on personal leadership, empathy, coaching, and global service expectations — built to spark reflection and real workplace skill.</p>
      <div class="mt-8 flex flex-wrap gap-3">
        <a href="topics.php" class="px-6 py-3 bg-red-600 hover:bg-red-700 rounded-lg font-semibold shadow-lg">Start Learning <i class="fa-solid fa-arrow-right ml-1"></i></a>
        <a href="quiz.php" class="px-6 py-3 bg-white/10 hover:bg-white/20 rounded-lg font-semibold border border-white/30">Take the Quiz</a>
      </div>
      <div class="mt-8 bg-white/10 rounded-xl p-4 backdrop-blur">
        <div class="flex justify-between text-sm mb-2"><span data-progress-text>0 of 11 topics completed (0%)</span><span><i class="fa-solid fa-trophy text-yellow-300"></i></span></div>
        <div class="w-full bg-white/20 rounded-full h-2"><div data-progress-bar class="progress-bar" style="width:0%"></div></div>
      </div>
    </div>
    <div data-aos="fade-left" class="relative">
      <img src="https://images.unsplash.com/photo-1552581234-26160f608093?w=900&q=80" alt="Diverse IT-BPM team learning together" class="rounded-2xl shadow-2xl">
      <div class="absolute -bottom-6 -left-6 bg-white text-blue-900 p-4 rounded-xl shadow-xl hidden md:block">
        <div class="text-3xl font-bold">11</div><div class="text-xs uppercase tracking-wide">Modules</div>
      </div>
    </div>
  </div>
</section>

<!-- HIGHLIGHTS -->
<section class="max-w-7xl mx-auto px-4 py-16">
  <h2 class="text-3xl font-bold text-center mb-3" data-aos="fade-up">What you'll explore</h2>
  <p class="text-center text-gray-600 dark:text-gray-300 mb-10" data-aos="fade-up">From self-awareness to global customer expectations</p>
  <div class="grid md:grid-cols-3 gap-6">
    <?php
    $highlights=[
      ['fa-brain','Personal Leadership','Self-awareness, regulation, motivation, vision.','from-red-500 to-rose-600'],
      ['fa-hand-holding-heart','Social Competence','Empathy, social skills, coaching conversations.','from-blue-700 to-indigo-700'],
      ['fa-globe','Global Service Culture','American, European, and Asian expectations.','from-amber-500 to-red-600'],
    ];
    foreach($highlights as $h){ ?>
      <div data-aos="zoom-in" class="card-hover bg-white dark:bg-slate-800 rounded-2xl p-6 shadow">
        <div class="w-14 h-14 rounded-xl bg-gradient-to-br <?=$h[3]?> text-white flex items-center justify-center text-2xl mb-4"><i class="fa-solid <?=$h[0]?>"></i></div>
        <h3 class="font-bold text-lg"><?=$h[1]?></h3>
        <p class="text-sm text-gray-600 dark:text-gray-300 mt-2"><?=$h[2]?></p>
      </div>
    <?php } ?>
  </div>
</section>

<!-- TOPIC PREVIEW GRID -->
<section class="max-w-7xl mx-auto px-4 pb-16">
  <div class="flex items-center justify-between mb-6">
    <h2 class="text-2xl font-bold">All 11 Modules</h2>
    <a href="topics.php" class="text-red-600 font-semibold hover:underline">View all <i class="fa-solid fa-arrow-right"></i></a>
  </div>
  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
    <?php foreach($TOPICS as $id=>$t): ?>
      <a href="topic.php?id=<?=$id?>" data-topic-card="<?=$id?>" data-title="<?=htmlspecialchars($t['title'])?>" data-cat="<?=$t['category']?>" data-aos="fade-up" class="card-hover block bg-white dark:bg-slate-800 rounded-xl overflow-hidden shadow group">
        <div class="h-32 overflow-hidden"><img loading="lazy" src="<?=$t['image']?>" alt="<?=htmlspecialchars($t['image_alt'])?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-500"></div>
        <div class="p-4">
          <div class="text-xs text-red-600 font-semibold uppercase"><?=$t['category']?></div>
          <div class="font-bold mt-1 text-sm"><i class="fa-solid <?=$t['icon']?> mr-1 text-blue-900 dark:text-blue-300"></i> <?=$t['title']?></div>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
</section>

<?php include 'components/footer.php'; ?>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init({duration:700,once:true})</script>
<script src="assets/js/main.js?v=20260514"></script>
</body></html>
