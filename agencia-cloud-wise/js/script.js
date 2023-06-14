// criar um identificador pra tela pequena pra ativar o slick add class cards__tab
let cards = document.querySelector(".cards");

function checarTela() {
  let largura = window.innerWidth;
  if (largura <= 769) {
    document.documentElement.classList.add("cards__tab");
  } else {
    document.documentElement.classList.remove("cards__tab");
  }
}

window.addEventListener("load", checarTela);
window.addEventListener("resize", checarTela);

// -----------------------------------------------------------------

$(".cards__tab").slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  infinite: false,
  speed: 300,
});
