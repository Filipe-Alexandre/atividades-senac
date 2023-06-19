// // tentar fazer função de reconhecer a tela DE NOVO

// let cards = document.querySelectorAll('.texto1');
// let largura = window.innerWidth

// function teste () {
//   if(largura <= 600) {
//     cards.innerHtml = '<p> gaiufdjaifnsojdnf </p>'

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
  speed: 3000,
  responsive: [
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
  ]
});

//-----------------------------------------------------------------

let open = document.querySelector(".btn-open")
let close = document.querySelector(".btn-close")
let nav = document.querySelector("nav")

open.addEventListener('click', () => {
  nav.classList.add("ativo")
})

close.addEventListener('click', () => {
  nav.classList.remove("ativo")
})