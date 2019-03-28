wrdTabs('.wrd-tabs');


(function(){
    const hamburger = document.querySelector('.header__hamburger');
    const menu = document.querySelector('.header__list');
    const nav = document.querySelector('.header__nav');
    const main = document.querySelector('.main');
    hamburger.addEventListener('click', function(e){
      hamburger.classList.toggle('active')
      menu.classList.toggle('active')
      nav.classList.toggle('active')
      main.classList.toggle('bg-menu')
      document.addEventListener('click',function(e){
        if(e.target.classList.contains('header__nav')  ){
          hamburger.classList.remove('active')
          menu.classList.remove('active')
          main.classList.remove('bg-menu')
          nav.classList.remove('active')
            console.log(e.target)
        }


      })
    })


})()
