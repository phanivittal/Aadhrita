const header = document.querySelector('.main-header');

    window.addEventListener('scroll', () => {
      const scrollPos = window.scrollY;
      if(scrollPos > 10){
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    })



var vid = document.getElementById("myvideo");
	if (window.innerWidth <= 800 ){
            vid.src = "../static/images/about/P1.mp4";
        }
	else{
            vid.src="../static/images/about/liked.mp4";
        }
vid.load();
