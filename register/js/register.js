const header = document.querySelector('.main-header');
    
    window.addEventListener('scroll', () => {
      const scrollPos = window.scrollY;
      if(scrollPos > 10){
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    })
    $(document).ready(function(){
      $('#content').load('./content/log.php');
      $('#step .row button').click(function(){
          var page=$(this).attr('data-target');
          $('#content').load('./content/'+page+'.php');
          return false;
      });
  });
