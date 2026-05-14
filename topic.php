<?php
require_once __DIR__.'/data/topics.php';
$id=max(1,min(11,(int)($_GET['id']??1)));
$t=$TOPICS[$id];
$prev=$id>1?$id-1:null; $next=$id<11?$id+1:null;
// Build a regex for highlighting glossary terms in concept text
$termsMap=[]; foreach($t['terms'] as $tr){ $termsMap[$tr[0]]=$tr[1]; }
function highlightTerms($text,$termsMap){
  foreach($termsMap as $term=>$def){
    $pattern='/\b('.preg_quote($term,'/').')\b/i';
    $text=preg_replace_callback($pattern,function($m) use($def){
      return '<span class="glossary-term" tabindex="0" data-def="'.htmlspecialchars($def,ENT_QUOTES).'">'.$m[1].'</span>';
    },$text,1); // only first occurrence per term
  }
  return $text;
}
?>
<!DOCTYPE html><html lang="en"><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Module <?=$id?>: <?=$t['title']?> — Service Culture Hub</title>
<meta name="description" content="<?=htmlspecialchars($t['intro'])?>">
<script src="https://cdn.tailwindcss.com"></script><script>tailwind.config={darkMode:'class'}</script>
<link rel="stylesheet" href="assets/css/style.css?v=20260514">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head><body class="bg-gray-50 dark:bg-slate-900 text-gray-900 dark:text-gray-100">
<?php include 'components/navbar.php'; ?>

<!-- HERO -->
<section class="relative">
  <div class="h-72 md:h-96 overflow-hidden">
    <img src="<?=$t['image']?>" alt="<?=htmlspecialchars($t['image_alt'])?>" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-red-700/60"></div>
  </div>
  <div class="absolute inset-0 flex items-center">
    <div class="max-w-7xl mx-auto px-4 text-white" data-aos="fade-up">
      <span class="text-sm bg-white/20 px-3 py-1 rounded-full">Module <?=$id?> · <?=$t['category']?></span>
      <h1 class="text-3xl md:text-5xl font-bold mt-3"><i class="fa-solid <?=$t['icon']?> mr-2"></i><?=$t['title']?></h1>
    </div>
  </div>
</section>

<div class="max-w-7xl mx-auto px-4 py-12 grid lg:grid-cols-[1fr_300px] gap-10">
<main class="space-y-10">

  <!-- INTRO -->
  <section data-aos="fade-up" class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow">
    <h2 class="text-xl font-bold mb-3 text-red-600"><i class="fa-solid fa-book-open mr-1"></i> Introduction</h2>
    <p class="leading-relaxed"><?=highlightTerms($t['intro'],$termsMap)?></p>
  </section>

  <!-- OBJECTIVES -->
  <section data-aos="fade-up" class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow">
    <h2 class="text-xl font-bold mb-4 text-blue-900 dark:text-blue-300"><i class="fa-solid fa-bullseye mr-1"></i> Learning Objectives</h2>
    <ul class="space-y-2">
      <?php foreach($t['objectives'] as $o): ?>
        <li class="flex gap-3"><i class="fa-solid fa-circle-check text-green-600 mt-1"></i><span><?=$o?></span></li>
      <?php endforeach; ?>
    </ul>
  </section>

  <!-- KEY CONCEPTS -->
  <section data-aos="fade-up" class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow">
    <h2 class="text-xl font-bold mb-4 text-red-600"><i class="fa-solid fa-lightbulb mr-1"></i> Key Concepts</h2>
    <div class="grid md:grid-cols-2 gap-4">
      <?php foreach($t['concepts'] as $i=>$c): ?>
        <div class="p-4 rounded-xl bg-gradient-to-br from-gray-50 to-gray-100 dark:from-slate-700 dark:to-slate-800 border-l-4 border-red-600">
          <div class="text-2xl font-bold text-red-600/40">0<?=$i+1?></div>
          <p class="mt-1 text-sm"><?=highlightTerms($c,$termsMap)?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- VISUAL -->
  <section data-aos="fade-up" class="bg-gradient-to-r from-red-600 to-blue-900 text-white rounded-2xl p-8 shadow">
    <h2 class="text-xl font-bold mb-2"><i class="fa-solid fa-eye mr-1"></i> Visual Insight</h2>
    <p class="text-lg leading-relaxed">"<?=$t['visual']?>"</p>
  </section>

  <!-- EXAMPLE -->
  <section data-aos="fade-up" class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow">
    <h2 class="text-xl font-bold mb-3 text-blue-900 dark:text-blue-300"><i class="fa-solid fa-headset mr-1"></i> Real-World IT-BPM Example</h2>
    <p class="leading-relaxed"><?=$t['example']?></p>
  </section>

  <!-- INTERACTIVE ACTIVITY -->
  <section data-aos="fade-up" class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow">
    <h2 class="text-xl font-bold mb-3 text-red-600"><i class="fa-solid fa-puzzle-piece mr-1"></i> Activity: <?=$t['activity']['title']?></h2>
    <p class="text-sm text-gray-600 dark:text-gray-300 mb-4"><?=$t['activity']['prompt']?></p>

    <?php if($id===3): ?>
      <div class="space-y-3">
        <input id="mv-mission" placeholder="My mission is..." class="w-full p-3 rounded-lg border dark:bg-slate-900 dark:border-slate-600">
        <input id="mv-vision" placeholder="My vision is..." class="w-full p-3 rounded-lg border dark:bg-slate-900 dark:border-slate-600">
        <button onclick="saveMV()" class="px-5 py-2 bg-red-600 text-white rounded-lg">Save</button>
        <span id="mv-saved" class="hidden text-green-600 ml-2">✓ Saved to your browser</span>
      </div>
    <?php elseif($id===5): ?>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <?php $sk=[['Communication','SOFT'],['Python','HARD'],['Empathy','SOFT'],['Excel','HARD'],['Teamwork','SOFT'],['Typing Speed','HARD']]; foreach($sk as $s): ?>
          <div onclick="flipCard(this)" class="flip-card h-28 cursor-pointer">
            <div class="flip-card-inner h-full">
              <div class="flip-face flex items-center justify-center bg-blue-900 text-white rounded-xl font-semibold"><?=$s[0]?></div>
              <div class="flip-face flip-back flex items-center justify-center bg-red-600 text-white rounded-xl text-xl font-bold"><?=$s[1]?></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php elseif($id===7): ?>
      <div class="grid md:grid-cols-2 gap-4 items-center">
        <div class="space-y-2 text-sm">
          <?php $labs=['Cognitive','English','Computer','Speed','Comm','Learning','Courtesy','Empathy','Reliability','Responsive']; foreach($labs as $i=>$l): ?>
            <label class="flex items-center gap-2"><span class="w-24 text-xs"><?=$l?></span><input id="rate<?=$i?>" type="range" min="1" max="5" value="3" oninput="updateRadar()" class="flex-1"></label>
          <?php endforeach; ?>
        </div>
        <canvas id="radarCanvas" width="380" height="380" class="mx-auto bg-gray-50 dark:bg-slate-900 rounded-xl"></canvas>
      </div>
    <?php elseif($id===8): ?>
      <div class="flex gap-2 mb-3"><input id="goalInput" placeholder="New learning goal..." class="flex-1 p-2 rounded-lg border dark:bg-slate-900 dark:border-slate-600"><button onclick="addGoal()" class="px-4 bg-red-600 text-white rounded-lg">Add</button></div>
      <ul id="goalsList" class="space-y-2"></ul>
    <?php else: ?>
      <?php
      $scenarios=[
        1=>[['A coworker snaps at you. You...',['Snap back','Pause, breathe, ask if they\'re okay','Ignore them forever'],1]],
        2=>[['You finish a task early. The intrinsically motivated choice:',['Hide and relax','Help a teammate learn','Demand a bonus'],1]],
        4=>[['Customer says "Nobody listens to me!" Best reply:',['"Calm down."','"I hear you. Tell me what happened."','"That\'s not my problem."'],1]],
        6=>[['A teammate keeps missing targets. Best coaching opener:',['"Why are you so slow?"','"What\'s getting in the way? Let\'s solve it together."','"You should already know this."'],1]],
        9=>[['US customer wants a refund. Best response:',['"Let me transfer you to 5 departments."','"Confirmed. Refund processed in 24 hours, email sent."','"Maybe later."'],1]],
        10=>[['EU customer asks how data is used. Best reply:',['"Don\'t worry about it."','"Here is exactly what we collect, why, and how to opt out."','"Trust us."'],1]],
        11=>[['Asian customer hints at a small concern. Best reply:',['"That\'s not a real problem."','"Thank you for sharing. May I ask a bit more so we can help fully?"','"Stop complaining."'],1]],
      ];
      $list=$scenarios[$id]??[['Pick the most respectful response.',['Be rude','Listen and respond kindly','Stay silent'],1]];
      foreach($list as $sc): ?>
        <div class="p-4 bg-gray-50 dark:bg-slate-900 rounded-xl">
          <p class="font-semibold mb-3"><?=$sc[0]?></p>
          <div class="flex flex-col gap-2">
            <?php foreach($sc[1] as $i=>$opt): ?>
              <button data-i="<?=$i?>" onclick="pickAnswer(this,<?=$sc[2]?>)" class="text-left px-4 py-2 rounded-lg border border-gray-300 dark:border-slate-600 hover:bg-red-50 dark:hover:bg-slate-700"><?=$opt?></button>
            <?php endforeach; ?>
            <div data-fb class="text-sm mt-2 font-semibold"></div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </section>

  <!-- KEY TERMS GLOSSARY -->
  <section data-aos="fade-up" class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow">
    <h2 class="text-xl font-bold mb-4 text-blue-900 dark:text-blue-300"><i class="fa-solid fa-book-bookmark mr-1"></i> Key Terms and Meanings</h2>
    <div class="grid md:grid-cols-2 gap-4">
      <?php foreach($t['terms'] as $tr): ?>
        <div class="p-4 rounded-xl bg-gradient-to-br from-red-50 to-blue-50 dark:from-slate-700 dark:to-slate-900 border border-gray-100 dark:border-slate-700 fade-in card-hover">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-red-600 text-white flex items-center justify-center"><i class="fa-solid <?=$tr[2]?>"></i></div>
            <div>
              <div class="font-bold"><?=$tr[0]?></div>
              <div class="text-sm text-gray-600 dark:text-gray-300"><?=$tr[1]?></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- MINI QUIZ -->
  <section data-aos="fade-up" class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow">
    <h2 class="text-xl font-bold mb-4 text-red-600"><i class="fa-solid fa-circle-question mr-1"></i> Mini Quiz</h2>
    <form onsubmit="event.preventDefault();gradeMiniQuiz(this)" class="space-y-5">
      <?php foreach($t['quiz'] as $qi=>$q): ?>
        <div data-q="<?=$qi?>" data-correct="<?=$q[2]?>" class="p-4 rounded-xl bg-gray-50 dark:bg-slate-900">
          <p class="font-semibold mb-3"><?=$qi+1?>. <?=$q[0]?></p>
          <div class="space-y-2">
            <?php foreach($q[1] as $oi=>$opt): ?>
              <label class="block p-2 rounded-lg border border-gray-200 dark:border-slate-700 cursor-pointer hover:bg-white dark:hover:bg-slate-800"><input type="radio" name="q<?=$qi?>" value="<?=$oi?>" class="mr-2"><?=$opt?></label>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
      <button class="px-6 py-2 bg-red-600 text-white rounded-lg font-semibold">Check Answers</button>
      <p data-result class="mt-2 hidden font-semibold text-blue-900 dark:text-blue-300"></p>
    </form>
  </section>

  <!-- REFLECTION -->
  <section data-aos="fade-up" class="bg-blue-900 text-white rounded-2xl p-6 shadow">
    <h2 class="text-xl font-bold mb-3"><i class="fa-solid fa-pen-to-square mr-1"></i> Reflection</h2>
    <p class="mb-4 italic">"<?=$t['reflection']?>"</p>
    <textarea oninput="localStorage.setItem('reflect-<?=$id?>',this.value)" id="reflect" placeholder="Write your reflection here..." class="w-full p-3 rounded-lg text-gray-900"></textarea>
    <script>document.getElementById('reflect').value=localStorage.getItem('reflect-<?=$id?>')||''</script>
  </section>

  <!-- COMPLETE / NAV -->
  <section class="flex flex-col md:flex-row items-center justify-between gap-4 bg-white dark:bg-slate-800 p-6 rounded-2xl shadow">
    <button onclick="markCompleted(<?=$id?>);this.innerHTML='<i class=\'fa-solid fa-check\'></i> Marked as Completed!';this.classList.add('bg-green-600')" class="px-6 py-3 bg-red-600 hover:bg-red-700 text-white rounded-lg font-semibold transition"><i class="fa-solid fa-flag-checkered mr-1"></i> Mark as Completed</button>
    <div class="flex gap-3">
      <?php if($prev): ?><a href="topic.php?id=<?=$prev?>" class="px-4 py-2 border border-gray-300 dark:border-slate-600 rounded-lg hover:bg-gray-100 dark:hover:bg-slate-700"><i class="fa-solid fa-arrow-left"></i> Module <?=$prev?></a><?php endif; ?>
      <?php if($next): ?><a href="topic.php?id=<?=$next?>" class="px-4 py-2 bg-blue-900 text-white rounded-lg hover:bg-blue-800">Module <?=$next?> <i class="fa-solid fa-arrow-right"></i></a><?php endif; ?>
    </div>
  </section>
</main>

<!-- SIDEBAR GLOSSARY -->
<aside class="hidden lg:block">
  <div class="sticky top-24 bg-white dark:bg-slate-800 rounded-2xl p-5 shadow">
    <h3 class="font-bold mb-3 text-red-600"><i class="fa-solid fa-bookmark mr-1"></i> On this page</h3>
    <ul class="text-sm space-y-2">
      <?php foreach($t['terms'] as $tr): ?>
        <li class="flex gap-2 items-start"><i class="fa-solid <?=$tr[2]?> text-blue-700 dark:text-blue-300 mt-1"></i><span><strong><?=$tr[0]?></strong> — <span class="text-gray-600 dark:text-gray-300"><?=$tr[1]?></span></span></li>
      <?php endforeach; ?>
    </ul>
    <a href="glossary.php" class="block mt-4 text-center text-sm text-red-600 font-semibold hover:underline">Open full glossary →</a>
  </div>
</aside>
</div>

<?php include 'components/footer.php'; ?>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script><script>AOS.init({duration:600,once:true})</script>
<script src="assets/js/main.js?v=20260514"></script>
</body></html>
