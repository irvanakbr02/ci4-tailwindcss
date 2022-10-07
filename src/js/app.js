window.onscroll = function () {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;
    const toTop = document.querySelector('#to-top');
  
    if (window.pageYOffset > fixedNav) {
      header.classList.add('navbar-fixed');
      toTop.classList.remove('hidden');
      toTop.classList.add('flex');
    } else {
      header.classList.remove('navbar-fixed');
      toTop.classList.remove('flex');
      toTop.classList.add('hidden');
    }
  };
  
  // Hamburger
  const hamburger = document.querySelector('#hamburger');
  const navMenu = document.querySelector('#nav-menu');
  
  hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
  });
  
  // Klik di luar hamburger
  window.addEventListener('click', function (e) {
    if (e.target != hamburger && e.target != navMenu) {
      hamburger.classList.remove('hamburger-active');
      navMenu.classList.add('hidden');
    }
  });
  
  //form submit spreeetsheet
  const scriptURL = 'https://script.google.com/macros/s/AKfycbyObVLDM9ZDuEvxS44axTvKSDNJOF5-cmJSvo4Tgvj8rDrgdnMxG45h9lBeVrsa784/exec'
  const form = document.forms['submit-to-google-sheet']
  const btnkirim = document.querySelector('.btn-kirim')
  const btnload = document.querySelector('.btn-load')
  const alertkirim = document.querySelector('.alert-kirim')

  form.addEventListener('submit', e => {
    e.preventDefault()
    btnload.classList.toggle('hidden')
    btnkirim.classList.toggle('hidden')
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {
        btnload.classList.toggle('hidden')
        btnkirim.classList.toggle('hidden')
        alertkirim.classList.toggle('hidden')
        form.reset();
        console.log('Success!', response)
      })
      .catch(error => console.error('Error!', error.message))
  })