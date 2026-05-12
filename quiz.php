<?php require_once __DIR__.'/data/topics.php';
// Build quiz: 2+ questions per module
$ALL=[]; foreach($TOPICS as $id=>$t){ $i=0; foreach($t['quiz'] as $q){ if($i>=2)break; $ALL[]=['m'=>$t['title'],'q'=>$q[0],'opts'=>$q[1],'correct'=>$q[2]]; $i++; } }
?>
<!DOCTYPE html><html lang="en"><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Overall Quiz — Service Culture Hub</title>
<script src="https://cdn.tailwindcss.com"></script><script>tailwind.config={darkMode:'class'}</script>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head><body class="bg-gray-50 dark:bg-slate-900 text-gray-900 dark:text-gray-100">
<?php include 'components/navbar.php'; ?>

<section class="gradient-hero text-white py-16">
  <div class="max-w-5xl mx-auto px-4 text-center">
    <h1 class="text-4xl md:text-5xl font-bold"><i class="fa-solid fa-graduation-cap mr-2"></i> Overall Quiz</h1>
    <p class="mt-3 text-gray-200">Two questions per module — <?=count($ALL)?> total. Answer all, then check.</p>
    <div class="mt-4 text-sm">Best score: <span id="bestScore" class="font-bold">—</span></div>
  </div>
</section>

<main class="max-w-3xl mx-auto px-4 py-10 space-y-6">
  <div id="quizResult"></div>
  <?php foreach($ALL as $i=>$q): ?>
    <div data-q="<?=$i?>" class="bg-white dark:bg-slate-800 p-5 rounded-xl shadow">
      <div class="text-xs text-red-600 font-semibold uppercase mb-1"><?=$q['m']?></div>
      <p class="font-semibold mb-3"><?=$i+1?>. <?=$q['q']?></p>
      <div class="space-y-2">
        <?php foreach($q['opts'] as $oi=>$opt): ?>
          <label onclick="selectAns(<?=$i?>,<?=$oi?>)" class="block p-3 rounded-lg border border-gray-200 dark:border-slate-600 cursor-pointer hover:bg-gray-50 dark:hover:bg-slate-700"><input type="radio" name="q<?=$i?>" class="mr-2"><?=$opt?></label>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endforeach; ?>
  <div class="text-center"><button onclick="submitQuiz()" class="px-8 py-3 bg-red-600 hover:bg-red-700 text-white rounded-lg font-semibold text-lg shadow"><i class="fa-solid fa-paper-plane mr-1"></i> Submit Quiz</button></div>
</main>

<?php include 'components/footer.php'; ?>
<script>
window.QUIZ_DATA = <?=json_encode(array_map(fn($q)=>['correct'=>$q['correct']],$ALL))?>;
const best=localStorage.getItem('scl-quiz-best');
if(best) document.getElementById('bestScore').textContent=best+' / '+window.QUIZ_DATA.length;
</script>
<script src="assets/js/main.js"></script>
<script src="assets/js/quiz.js"></script>
</body></html>
