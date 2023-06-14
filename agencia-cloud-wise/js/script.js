// function adicionarOuRemoverId() {
//   var larguraTela = window.innerWidth || document.documentElement.clientWidth;

//   // Seleciona o elemento pelo seletor
//   var elemento = document.querySelector(".cards");

//   if (larguraTela <= 769) {
//     // Adiciona o ID ao elemento
//     if (!elemento.id) {
//       elemento.id = "cards__tab";
//     }
//   } else {
//     // Remove o ID do elemento
//     if (elemento.id === "cards__tab") {
//       elemento.removeAttribute("id");
//     }
//   }
// }

// // Adiciona um ouvinte de evento 'resize' à janela
// window.addEventListener('resize', function() {
//   // Verifica se a largura da tela corresponde à condição desejada
//   if (window.matchMedia("(max-width: 769px)").matches) {
//     adicionarOuRemoverId();
//   }
// });

// // Executa a função inicialmente para verificar a largura da tela quando a página é carregada
// adicionarOuRemoverId();

// -----------------------------------------------------------------

$("#cards__tab").slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  infinite: false,
  speed: 300,
});
