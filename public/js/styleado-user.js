/* script.js - small helpers */
document.addEventListener('DOMContentLoaded', ()=> {
  // Activate tab highlight on click (pure front-end)
  document.querySelectorAll('.tab').forEach(t=>{
    t.addEventListener('click', (e)=>{
      document.querySelectorAll('.tab').forEach(x=>x.classList.remove('active'));
      e.currentTarget.classList.add('active');
    });
  });

  // Smooth anchor scroll for internal nav
  document.querySelectorAll('a[href^="#"]').forEach(a=>{
    a.addEventListener('click', e=>{
      e.preventDefault();
      const id = a.getAttribute('href').slice(1);
      const el = document.getElementById(id);
      if(el) el.scrollIntoView({behavior:'smooth'});
    });
  });
});
