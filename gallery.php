<?php require_once __DIR__.'/data/topics.php'; ?>
<!DOCTYPE html><html lang="en"><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Visual Gallery — Service Culture Hub</title>
<script src="https://cdn.tailwindcss.com"></script><script>tailwind.config={darkMode:'class'}</script>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head><body class="bg-gray-50 dark:bg-slate-900 text-gray-900 dark:text-gray-100">
<?php include 'components/navbar.php'; ?>
<section class="max-w-7xl mx-auto px-4 py-12">
  <h1 class="text-4xl font-bold text-center" data-aos="fade-up"><i class="fa-solid fa-images text-red-600"></i> Visual Learning Gallery</h1>
  <p class="text-center text-gray-600 dark:text-gray-300 mt-2 mb-10">Visuals that bring each module to life.</p>
  <div class="columns-1 sm:columns-2 lg:columns-3 gap-5 space-y-5">
    <?php
    $extra=[
      ['https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800&q=80','Leadership coaching session'],
      ['https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=800&q=80','Customer service representative smiling'],
      ['https://images.unsplash.com/photo-1531545514256-b1400bc00f31?w=800&q=80','Cultural diversity in team meeting'],
      ['https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=800&q=80','Mentor and student'],
      ['https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=800&q=80','Open communication in office'],
    ];
    foreach($TOPICS as $id=>$t): ?>
      <a href="topic.php?id=<?=$id?>" data-aos="fade-up" class="break-inside-avoid block group relative overflow-hidden rounded-xl shadow-lg">
        <img src="<?=$t['image']?>" alt="<?=htmlspecialchars($t['image_alt'])?>" class="w-full group-hover:scale-110 transition duration-700">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-4">
          <div class="text-white"><div class="text-xs uppercase">Module <?=$id?></div><div class="font-bold"><?=$t['title']?></div></div>
        </div>
      </a>
    <?php endforeach; foreach($extra as $e): ?>
      <div data-aos="fade-up" class="break-inside-avoid block rounded-xl overflow-hidden shadow-lg">
        <img src="<?=$e[0]?>" alt="<?=htmlspecialchars($e[1])?>" class="w-full">
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?php include 'components/footer.php'; ?>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script><script>AOS.init({duration:700,once:true})</script>
<script src="assets/js/main.js"></script>
</body></html>
