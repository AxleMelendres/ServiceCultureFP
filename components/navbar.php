<?php
$current = basename($_SERVER['PHP_SELF']);
$feedbackUrl = 'https://docs.google.com/forms/d/e/1FAIpQLScJBpH2yXkPok1t6Z2WfVGq5VwkNqNOmIgt5ms0V00dteVHjA/viewform?usp=publish-editor';
function navlink($href,$label,$current){
  $active = (basename($href) === $current) ? 'text-red-600 dark:text-red-400 font-semibold' : 'text-gray-700 dark:text-gray-200';
  echo "<a href=\"$href\" class=\"$active hover:text-red-600 dark:hover:text-red-400 transition\">$label</a>";
}
?>
<div id="siteLoader" class="site-loader" role="status" aria-live="polite" aria-label="Loading Service Culture Learning Hub">
  <div class="text-center px-4">
    <div class="loader-mark">
      <div class="loader-ring"></div>
      <div class="loader-cap"><i class="fa-solid fa-graduation-cap text-3xl"></i></div>
    </div>
    <div class="font-bold text-lg">Service Culture Hub</div>
    <div class="loader-dots mt-3" aria-hidden="true"><span></span><span></span><span></span></div>
  </div>
</div>
<nav x-data="{open:false}" class="sticky top-0 z-50 backdrop-blur bg-white/80 dark:bg-slate-900/80 border-b border-gray-200 dark:border-slate-700 shadow-sm">
  <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
    <a href="dashboard.php" class="flex items-center gap-2 font-bold text-lg">
      <span class="inline-flex w-9 h-9 rounded-lg bg-gradient-to-br from-red-600 to-blue-900 text-white items-center justify-center"><i class="fa-solid fa-graduation-cap"></i></span>
      <span class="text-blue-900 dark:text-white">Service Culture <span class="text-red-600">Hub</span></span>
    </a>
    <div class="hidden md:flex items-center gap-6 text-sm">
      <?php navlink('dashboard.php','Home',$current); ?>
      <?php navlink('topics.php','Topics',$current); ?>
      <?php navlink('quiz.php','Quiz',$current); ?>
      <?php navlink('gallery.php','Gallery',$current); ?>
      <?php navlink('glossary.php','Glossary',$current); ?>
      <?php navlink('about.php','About',$current); ?>
      <a href="<?=$feedbackUrl?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-red-600 text-white font-semibold hover:bg-red-700 transition">
        <i class="fa-solid fa-comment-dots"></i> Feedback
      </a>
      <button onclick="toggleDark()" aria-label="Toggle dark mode" class="w-9 h-9 rounded-full border border-gray-300 dark:border-slate-600 hover:bg-gray-100 dark:hover:bg-slate-800 transition">
        <i class="fa-solid fa-moon dark:hidden"></i><i class="fa-solid fa-sun hidden dark:inline"></i>
      </button>
    </div>
    <button @click="open=!open" class="md:hidden text-2xl" aria-label="Open menu"><i class="fa-solid fa-bars"></i></button>
  </div>
  <div x-show="open" x-transition class="md:hidden px-4 pb-4 flex flex-col gap-3 text-sm" style="display:none">
    <?php navlink('dashboard.php','Home',$current); ?>
    <?php navlink('topics.php','Topics',$current); ?>
    <?php navlink('quiz.php','Quiz',$current); ?>
    <?php navlink('gallery.php','Gallery',$current); ?>
    <?php navlink('glossary.php','Glossary',$current); ?>
    <?php navlink('about.php','About',$current); ?>
    <a href="<?=$feedbackUrl?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-red-600 text-white font-semibold hover:bg-red-700 transition">
      <i class="fa-solid fa-comment-dots"></i> Feedback
    </a>
    <button onclick="toggleDark()" class="text-left">Toggle dark mode</button>
  </div>
</nav>
