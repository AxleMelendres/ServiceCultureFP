<!DOCTYPE html><html lang="en"><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>About — Service Culture Hub</title>
<script src="https://cdn.tailwindcss.com"></script><script>tailwind.config={darkMode:'class'}</script>
<link rel="stylesheet" href="assets/css/style.css?v=20260514">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head><body class="bg-gray-50 dark:bg-slate-900 text-gray-900 dark:text-gray-100">
<?php include 'components/navbar.php'; ?>
<section class="max-w-4xl mx-auto px-4 py-16">
  <h1 class="text-4xl font-bold"><i class="fa-solid fa-circle-info text-red-600"></i> About this Hub</h1>
  <p class="mt-4 text-lg text-gray-700 dark:text-gray-300">The <strong>Service Culture Learning Hub</strong> is an interactive mini-LMS designed for college students preparing for careers in the IT-BPM industry. It distills 11 modules — from personal leadership to global service expectations — into engaging lessons, activities, glossaries, and quizzes.</p>

  <div class="grid md:grid-cols-3 gap-5 mt-8">
    <?php $f=[
      ['fa-graduation-cap','11 Modules','From self-awareness to global service.'],
      ['fa-puzzle-piece','Interactive','Activities, simulators, flip cards, radar.'],
      ['fa-book','Glossary','Key terms with simple definitions and tooltips.'],
      ['fa-circle-question','Quiz','Track your best score across all modules.'],
      ['fa-moon','Dark Mode','Comfortable for day or night study.'],
      ['fa-universal-access','Accessible','Semantic HTML, keyboard friendly.'],
    ]; foreach($f as $x): ?>
      <div class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow card-hover">
        <i class="fa-solid <?=$x[0]?> text-2xl text-red-600"></i>
        <h3 class="font-bold mt-2"><?=$x[1]?></h3>
        <p class="text-sm text-gray-600 dark:text-gray-300 mt-1"><?=$x[2]?></p>
      </div>
    <?php endforeach; ?>
  </div>

  <h2 class="text-3xl font-bold mt-12 mb-6 text-center"><i class="fa-solid fa-users text-red-600"></i> Our Team</h2>
  <div class="grid md:grid-cols-5 gap-6 mt-8">
    <?php $team = [
      'Aira',
      'Axle Melendres',
      'Ehrin John Galang',
      'Erll Jhanwin Catapang',
      'Jamma Moira Rodriguez',
      'Jhon Irvin Alido',
      'Neil Justine Tan',
      'Paul Lemuel Benedicto',
      'Paul Lourence',
      'Raiza Mae Austria'
    ]; for($i=0; $i<count($team); $i++): $name = $team[$i]; ?>
      <div class="p-4 bg-white dark:bg-slate-800 rounded-xl shadow card-hover text-center">
        <img src="assets/img/cat <?=$i+1?>.jpg" alt="<?=$name?>" class="w-20 h-20 rounded-full mx-auto mb-3 object-cover border-2 border-gray-200 dark:border-gray-600">
        <h3 class="font-bold text-sm"><?=$name?></h3>
      </div>
    <?php endfor; ?>
  </div>

</section>
<?php include 'components/footer.php'; ?>
<script src="assets/js/main.js?v=20260514"></script>
</body></html>
