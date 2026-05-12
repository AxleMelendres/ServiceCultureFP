// Overall quiz logic
let QUIZ_STATE={answers:{},submitted:false};
function selectAns(qi,ai){
  if(QUIZ_STATE.submitted)return;
  QUIZ_STATE.answers[qi]=ai;
  document.querySelectorAll(`[data-q="${qi}"] label`).forEach((l,i)=>{
    l.classList.toggle('bg-blue-100',i===ai);
    l.classList.toggle('dark:bg-blue-900',i===ai);
  });
}
function submitQuiz(){
  QUIZ_STATE.submitted=true;
  let score=0;
  window.QUIZ_DATA.forEach((q,qi)=>{
    const card=document.querySelector(`[data-q="${qi}"]`);
    const labels=card.querySelectorAll('label');
    const ans=QUIZ_STATE.answers[qi];
    if(ans===q.correct) score++;
    labels.forEach((l,i)=>{
      if(i===q.correct) l.classList.add('bg-green-100','dark:bg-green-900','border-green-500');
      if(ans===i && i!==q.correct) l.classList.add('bg-red-100','dark:bg-red-900','border-red-500');
    });
  });
  const total=window.QUIZ_DATA.length;
  const pct=Math.round(score/total*100);
  let msg='Keep going — review the modules and try again!';
  if(pct>=90) msg='Outstanding! You are quiz-ready for the workplace.';
  else if(pct>=70) msg='Great job! A little more review and you will master it.';
  else if(pct>=50) msg='Good start — revisit a few modules.';
  const best=parseInt(localStorage.getItem('scl-quiz-best')||'0');
  if(score>best) localStorage.setItem('scl-quiz-best',score);
  const r=document.getElementById('quizResult');
  r.innerHTML=`<div class="p-6 rounded-xl bg-gradient-to-r from-red-600 to-blue-900 text-white text-center fade-in">
    <div class="text-5xl font-bold">${score}/${total}</div>
    <div class="mt-2 text-lg">${msg}</div>
    <div class="mt-2 text-sm opacity-80">Best score saved: ${Math.max(score,best)}/${total}</div>
    <button onclick="retakeQuiz()" class="mt-4 px-5 py-2 bg-white text-red-700 font-semibold rounded-lg">Retake Quiz</button>
  </div>`;
  r.scrollIntoView({behavior:'smooth'});
}
function retakeQuiz(){location.reload()}
