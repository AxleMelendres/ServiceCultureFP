// Dark mode
function hideSiteLoader(){
  const loader=document.getElementById('siteLoader');
  if(!loader)return;
  loader.classList.add('hidden');
  setTimeout(()=>loader.remove(),500);
}
window.addEventListener('load',hideSiteLoader);
setTimeout(hideSiteLoader,2500);

function toggleDark(){
  document.documentElement.classList.toggle('dark');
  localStorage.setItem('scl-dark', document.documentElement.classList.contains('dark'));
}
if(localStorage.getItem('scl-dark')==='true') document.documentElement.classList.add('dark');

// Back to top
window.addEventListener('scroll',()=>{
  const b=document.getElementById('backToTop'); if(!b)return;
  b.classList.toggle('hidden', window.scrollY<400);
});

// Progress tracking
function getCompleted(){return JSON.parse(localStorage.getItem('scl-completed')||'[]')}
function markCompleted(id){
  const c=getCompleted(); if(!c.includes(id)) c.push(id);
  localStorage.setItem('scl-completed', JSON.stringify(c));
  updateProgressUI();
}
function unmarkCompleted(id){
  let c=getCompleted().filter(x=>x!=id);
  localStorage.setItem('scl-completed', JSON.stringify(c));
  updateProgressUI();
}
function updateProgressUI(){
  const c=getCompleted();
  const total=11;
  const pct=Math.round(c.length/total*100);
  document.querySelectorAll('[data-progress-bar]').forEach(b=>b.style.width=pct+'%');
  document.querySelectorAll('[data-progress-text]').forEach(t=>t.textContent=`${c.length} of ${total} topics completed (${pct}%)`);
  document.querySelectorAll('[data-topic-card]').forEach(card=>{
    const id=card.dataset.topicCard;
    if(c.includes(id)) card.classList.add('ring-2','ring-green-500');
  });
}
document.addEventListener('DOMContentLoaded',updateProgressUI);

// Topic search
function filterTopics(q){
  q=q.toLowerCase();
  document.querySelectorAll('[data-topic-card]').forEach(c=>{
    const t=(c.dataset.title||'').toLowerCase()+' '+(c.dataset.cat||'').toLowerCase();
    c.style.display=t.includes(q)?'':'none';
  });
}

// Glossary tooltips
function attachTooltips(){
  document.querySelectorAll('.glossary-term').forEach(el=>{
    el.addEventListener('mouseenter',e=>{
      const tip=document.createElement('div');
      tip.className='tooltip'; tip.textContent=el.dataset.def;
      document.body.appendChild(tip);
      const r=el.getBoundingClientRect();
      tip.style.left=(r.left+window.scrollX)+'px';
      tip.style.top=(r.bottom+window.scrollY+6)+'px';
      requestAnimationFrame(()=>tip.classList.add('show'));
      el._tip=tip;
    });
    el.addEventListener('mouseleave',()=>{ if(el._tip){el._tip.remove();el._tip=null} });
    el.addEventListener('focus',e=>el.dispatchEvent(new Event('mouseenter')));
    el.addEventListener('blur',e=>el.dispatchEvent(new Event('mouseleave')));
  });
}
document.addEventListener('DOMContentLoaded',attachTooltips);

// Mission/Vision builder (Module 3)
function saveMV(){
  const m=document.getElementById('mv-mission')?.value||'';
  const v=document.getElementById('mv-vision')?.value||'';
  localStorage.setItem('scl-mv',JSON.stringify({m,v}));
  document.getElementById('mv-saved').classList.remove('hidden');
  setTimeout(()=>document.getElementById('mv-saved').classList.add('hidden'),2000);
}
function loadMV(){
  const d=JSON.parse(localStorage.getItem('scl-mv')||'{}');
  if(document.getElementById('mv-mission')){document.getElementById('mv-mission').value=d.m||'';document.getElementById('mv-vision').value=d.v||''}
}
document.addEventListener('DOMContentLoaded',loadMV);

// Learning goals tracker (Module 8)
function loadGoals(){
  const list=document.getElementById('goalsList'); if(!list) return;
  const goals=JSON.parse(localStorage.getItem('scl-goals')||'[]');
  list.innerHTML=goals.map((g,i)=>`<li class="flex items-center gap-2 p-2 bg-white dark:bg-slate-800 rounded shadow"><input type="checkbox" ${g.done?'checked':''} onchange="toggleGoal(${i})"><span class="${g.done?'line-through text-gray-400':''} flex-1">${g.text}</span><button onclick="delGoal(${i})" class="text-red-600">&times;</button></li>`).join('');
}
function addGoal(){
  const inp=document.getElementById('goalInput'); if(!inp.value.trim())return;
  const g=JSON.parse(localStorage.getItem('scl-goals')||'[]');
  g.push({text:inp.value.trim(),done:false});
  localStorage.setItem('scl-goals',JSON.stringify(g));
  inp.value=''; loadGoals();
}
function toggleGoal(i){const g=JSON.parse(localStorage.getItem('scl-goals')||'[]');g[i].done=!g[i].done;localStorage.setItem('scl-goals',JSON.stringify(g));loadGoals()}
function delGoal(i){const g=JSON.parse(localStorage.getItem('scl-goals')||'[]');g.splice(i,1);localStorage.setItem('scl-goals',JSON.stringify(g));loadGoals()}
document.addEventListener('DOMContentLoaded',loadGoals);

// Mini quiz on topic page
function gradeMiniQuiz(form){
  const items=form.querySelectorAll('[data-q]');
  let score=0;
  items.forEach(item=>{
    const correct=parseInt(item.dataset.correct);
    const sel=item.querySelector('input:checked');
    const opts=item.querySelectorAll('label');
    opts.forEach((l,i)=>{
      l.classList.remove('bg-green-100','bg-red-100','dark:bg-green-900','dark:bg-red-900');
      if(i===correct) l.classList.add('bg-green-100','dark:bg-green-900');
      if(sel && parseInt(sel.value)===i && i!==correct) l.classList.add('bg-red-100','dark:bg-red-900');
    });
    if(sel && parseInt(sel.value)===correct) score++;
  });
  const out=form.querySelector('[data-result]');
  out.textContent=`You scored ${score} of ${items.length}. ${score===items.length?'Excellent!':'Review and try again.'}`;
  out.classList.remove('hidden');
  return false;
}

// Soft vs hard skills flip
function flipCard(el){el.classList.toggle('flipped')}

// Radar chart (Module 7) — simple canvas
function drawRadar(canvasId,labels,values){
  const c=document.getElementById(canvasId); if(!c)return;
  const ctx=c.getContext('2d'); const W=c.width,H=c.height; const cx=W/2,cy=H/2; const R=Math.min(W,H)/2-40;
  ctx.clearRect(0,0,W,H);
  const n=labels.length;
  ctx.strokeStyle='#cbd5e1'; ctx.fillStyle='rgba(220,38,38,.25)';
  for(let lvl=1;lvl<=5;lvl++){
    ctx.beginPath();
    for(let i=0;i<n;i++){const a=-Math.PI/2+i*2*Math.PI/n;const r=R*lvl/5;const x=cx+r*Math.cos(a),y=cy+r*Math.sin(a);i?ctx.lineTo(x,y):ctx.moveTo(x,y);}
    ctx.closePath(); ctx.stroke();
  }
  ctx.strokeStyle='#dc2626'; ctx.lineWidth=2; ctx.beginPath();
  for(let i=0;i<n;i++){const a=-Math.PI/2+i*2*Math.PI/n;const r=R*values[i]/5;const x=cx+r*Math.cos(a),y=cy+r*Math.sin(a);i?ctx.lineTo(x,y):ctx.moveTo(x,y);}
  ctx.closePath(); ctx.fill(); ctx.stroke();
  ctx.fillStyle='#1e293b'; ctx.font='12px Inter,sans-serif'; ctx.textAlign='center';
  for(let i=0;i<n;i++){const a=-Math.PI/2+i*2*Math.PI/n;const x=cx+(R+18)*Math.cos(a),y=cy+(R+18)*Math.sin(a);ctx.fillText(labels[i],x,y);}
}
function updateRadar(){
  const labels=['Cognitive','English','Computer','Speed','Comm','Learning','Courtesy','Empathy','Reliability','Responsive'];
  const vals=labels.map((_,i)=>parseInt(document.getElementById('rate'+i).value));
  drawRadar('radarCanvas',labels,vals);
}
document.addEventListener('DOMContentLoaded',()=>{ if(document.getElementById('radarCanvas')) updateRadar(); });

// Empathy/scenario picker
function pickAnswer(btn,correct){
  const parent=btn.parentElement;
  parent.querySelectorAll('button').forEach(b=>b.disabled=true);
  if(btn.dataset.i===String(correct)){btn.classList.add('bg-green-500','text-white');parent.querySelector('[data-fb]').textContent='✅ Great empathetic choice!'}
  else{btn.classList.add('bg-red-500','text-white');parent.querySelectorAll('button')[correct].classList.add('ring-2','ring-green-500');parent.querySelector('[data-fb]').textContent='❌ Try again — see the highlighted answer.'}
}
