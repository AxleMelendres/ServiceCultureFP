<?php require_once __DIR__.'/data/topics.php';
$all=[]; foreach($TOPICS as $id=>$t){ foreach($t['terms'] as $tr){ $all[]=['term'=>$tr[0],'def'=>$tr[1],'icon'=>$tr[2],'mod'=>$id,'modTitle'=>$t['title']]; } }
usort($all,fn($a,$b)=>strcasecmp($a['term'],$b['term']));
$letters=[]; foreach($all as $a){ $l=strtoupper($a['term'][0]); $letters[$l][]=$a; }
?>
<!DOCTYPE html><html lang="en"><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Glossary — Service Culture Hub</title>
<script src="https://cdn.tailwindcss.com"></script><script>tailwind.config={darkMode:'class'}</script>
<link rel="stylesheet" href="assets/css/style.css?v=20260514">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head><body class="bg-gray-50 dark:bg-slate-900 text-gray-900 dark:text-gray-100">
<?php include 'components/navbar.php'; ?>
<section class="max-w-6xl mx-auto px-4 py-12">
  <h1 class="text-4xl font-bold text-center"><i class="fa-solid fa-book text-red-600"></i> Glossary</h1>
  <p class="text-center text-gray-600 dark:text-gray-300 mt-2">All key terms across the 11 modules.</p>
  <input oninput="filterGloss(this.value)" placeholder="Search a term..." class="mt-6 w-full p-3 rounded-lg border dark:bg-slate-800 dark:border-slate-600">
  <div class="flex flex-wrap gap-2 mt-4 justify-center">
    <?php foreach(array_keys($letters) as $L): ?><a href="#L<?=$L?>" class="w-9 h-9 inline-flex items-center justify-center rounded-full bg-red-600 text-white font-bold text-sm hover:bg-red-700"><?=$L?></a><?php endforeach; ?>
  </div>
  <?php foreach($letters as $L=>$items): ?>
    <h2 id="L<?=$L?>" class="text-2xl font-bold mt-10 mb-4 text-blue-900 dark:text-blue-300"><?=$L?></h2>
    <div class="grid md:grid-cols-2 gap-4">
      <?php foreach($items as $it): ?>
        <div data-term="<?=strtolower($it['term'])?>" class="p-5 bg-white dark:bg-slate-800 rounded-xl shadow card-hover">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-red-600 to-blue-900 text-white flex items-center justify-center"><i class="fa-solid <?=$it['icon']?>"></i></div>
            <div>
              <div class="font-bold"><?=$it['term']?></div>
              <div class="text-xs text-red-600">Module <?=$it['mod']?> — <?=$it['modTitle']?></div>
            </div>
          </div>
          <p class="mt-3 text-sm text-gray-700 dark:text-gray-300"><?=$it['def']?></p>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
</section>
<?php include 'components/footer.php'; ?>
<script>
function filterGloss(q){q=q.toLowerCase();document.querySelectorAll('[data-term]').forEach(el=>{el.style.display=el.dataset.term.includes(q)?'':'none'})}
</script>
<script src="assets/js/main.js?v=20260514"></script>
</body></html>
