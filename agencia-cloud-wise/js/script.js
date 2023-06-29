//#region teste

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

//#region slick
$(".cards__tab").slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  speed: 2000,
  responsive: [
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

$(".blogs").slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  speed: 2000,
  responsive: [
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});
//#endregion slick

// #region menu mobile
let open = document.querySelector(".btn-open");
let close = document.querySelector(".btn-close");
let nav = document.querySelector("nav");

open.addEventListener("click", () => {
  nav.classList.add("ativo");
});

close.addEventListener("click", () => {
  nav.classList.remove("ativo");
});
// #endregion menu mobile

// #region AOS
AOS.init();
// #endregion AOS

// #region gaveta de duvidas

let gaveta = document.querySelector(".gaveta");

gaveta.addEventListener("click", () => {
  if (gaveta.classList.contains("gaveta")) {
    gaveta.classList.replace("gaveta", "gaveta-click");
  } else {
    gaveta.classList.replace("gaveta-click", "gaveta");
  }
});
// let texto = gaveta.textContent;
// let newTxt = texto.replace("+", "<span class='caixa-aberta'>+</span>")
// gaveta.innerHTML = newTxt;

function alterarSinal(elemento) {
  if (
    elemento.textContent ===
    '<span class="dvd-simbolo">+</span> Duvidas frequentes'
  ) {
    elemento.textContent =
      '<span class="dvd-simbolo">-</span> Duvidas frequentes';
  } else {
    elemento.textContent =
      '<span class="dvd-simbolo">+</span> Duvidas frequentes';
  }
}
// #endregion gaveta de duvidas
