(function(){
  var b=document.querySelector('.burger'),n=document.getElementById('nav');
  if(b&&n)b.addEventListener('click',function(){var o=n.classList.toggle('open');b.setAttribute('aria-expanded',o?'true':'false');});
  // Stitch explorer
  var S={
    sc:['Single crochet','The shortest, densest basic stitch. It creates a firm, almost woven fabric that holds its shape well.','Firm and dense','Structured bag bodies, bases, handles'],
    dc:['Double crochet','A taller stitch that works up quickly and creates a softer, more open fabric with visible columns.','Soft and drapey','Slouchy totes, shoulder bags (with a lining)'],
    moss:['Moss stitch','Alternating single crochets and chains create a neat, woven-looking texture that lies flat.','Neat, woven look','Clutches, laptop sleeves, modern totes'],
    shell:['Shell stitch','Several tall stitches worked into one point form fan-like shells for a feminine, scalloped pattern.','Decorative, airy','Summer bags, evening pouches, trims'],
    granny:['Granny square','Small motifs worked in rounds and joined together. A beloved vintage technique with endless colour options.','Playful, patchwork','Colourful totes, statement shoulder bags'],
    tap:['Tapestry crochet','Two or more colours are carried through the stitches to create bold geometric designs in a very sturdy fabric.','Bold, very sturdy','Market bags, graphic clutches, artisan totes']
  };
  var panel=document.getElementById('st-panel');
  document.querySelectorAll('[data-st]').forEach(function(btn){btn.addEventListener('click',function(){
    document.querySelectorAll('[data-st]').forEach(function(x){x.setAttribute('aria-pressed','false');});btn.setAttribute('aria-pressed','true');
    var k=btn.dataset.st,s=S[k];panel.querySelector('.swatch').className='swatch sw-'+k;
    panel.querySelector('h3').textContent=s[0];panel.querySelector('[data-k=d]').textContent=s[1];panel.querySelector('[data-k=f]').textContent=s[2];panel.querySelector('[data-k=u]').textContent=s[3];});});
  // Style finder
  var form=document.getElementById('finder');
  function pick(){if(!form)return;var sc={tote:0,basket:0,mini:0,market:0};
    form.querySelectorAll('input:checked').forEach(function(i){i.value.split(',').forEach(function(v){sc[v]++;});});
    var best='tote',max=-1;for(var k in sc){if(sc[k]>max){max=sc[k];best=k;}}
    document.querySelectorAll('.res').forEach(function(r){r.classList.toggle('show',r.dataset.r===best);});}
  if(form){form.addEventListener('change',pick);pick();}
  // Cookie
  var c=document.getElementById('cookie'),v=null;try{v=localStorage.getItem('cb_cookie');}catch(e){}
  if(c&&!v)c.classList.add('show');
  document.querySelectorAll('[data-cookie]').forEach(function(x){x.addEventListener('click',function(){try{localStorage.setItem('cb_cookie',x.dataset.cookie);}catch(e){}c.classList.remove('show');});});
  var y=document.getElementById('year');if(y)y.textContent=new Date().getFullYear();
})();
