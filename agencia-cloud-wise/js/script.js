
function adicionarOuRemoverId() {
  var larguraTela = window.innerWidth || document.documentElement.clientWidth;

  // Seleciona o contêiner pelo seletor
  var container = document.querySelector(".cards");

  if (larguraTela === 769) {
    // Adiciona o ID ao contêiner
    if (!container.id) {
      container.id = "cards__tab";
    }
  } else {
    // Remove o ID do contêiner
    if (container.id === "cards__tab") {
      container.removeAttribute("id");
    }
  }
}

// Adiciona um ouvinte de evento 'resize' à janela
window.addEventListener('resize', adicionarOuRemoverId);

// Executa a função inicialmente para verificar a largura da tela quando a página é carregada
adicionarOuRemoverId();
// -----------------------------------------------------------------

$("#cards__tab").slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  infinite: false,
  speed: 300,
});
