// tentar fazer função de reconhecer a tela DE NOVO
// let cards = document.querySelectorAll('.cards');
// let largura = window.innerWidth

// function teste () {
//   if(largura <= 769) {
//     document.documentElement.classList.add('cards cards__tab');
//   } else {
//     document.documentElement.classList.remove('cards cards__tab');
//   }

//   // verificação

//   window.addEventListener('load', teste());
//   window.addEventListener('resize', teste());

//   teste();
// }

//-----------------------------------------------------------------

$(".cards__tab").slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  speed: 3000,
});

$(".blogs").slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  speed: 0,
  responsive: [
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
  ]
});