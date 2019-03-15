function wrdTabs(container){
  let containerLinks = document.querySelector(container)
  let tabsLinks = containerLinks.getElementsByClassName('wrd-tabs__link');

  for(let i = 0, max = tabsLinks.length; i < max; i += 1){

    tabsLinks[i].addEventListener('click', function(e){
      e.preventDefault();

      // remove class active all links and tabs
      for(let i = 0, max = tabsLinks.length; i < max; i += 1){
        tabsLinks[i].classList.remove('active');
        let id = tabsLinks[i].getAttribute('href').slice(1);
        document.getElementById(id).classList.remove('active');
      }

      // add click link active class
      this.classList.add('active');

      let id = this.getAttribute('href').slice(1);
      document.getElementById(id).classList.add('active');

    })

  }
}
