let destaque__swiper = new Swiper(".destaque__swiper", {
    spaceBetween: 30,
    centeredSlides: true,
    effect: "fade",
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


let atividades__swiper = new Swiper(".atividades__swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });


  var swiper = new Swiper(".pgPousada__mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });

  var swiper2 = new Swiper(".pgPousada__mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });

  var swiper = new Swiper(".pgClube__mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });

  var swiper2 = new Swiper(".pgClube__mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });

  var pgAtividades_swiper = new Swiper(".pgAtividades_swiper", {
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


const efeitoClubeDesconto = () => {
  let btn = document.querySelectorAll(".pgDesconto__menu li");
  let pgDescontoEmpresas = document.querySelectorAll(".pgDesconto__empresas");

  
  btn.forEach(element => {
    element.addEventListener('click', ()=>{
      addDisplayNone()
      let divClasse = element.dataset.value;
      div = document.querySelector("#"+ divClasse);
      div.style.display = 'block';
    })
  });

  let addDisplayNone = () => {
    pgDescontoEmpresas.forEach(element => {
      element.style.display = 'none';
    });
  }

}

efeitoClubeDesconto();