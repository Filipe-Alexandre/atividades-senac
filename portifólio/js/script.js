const html = document.querySelector('html')
const btnToggle = document.querySelector(".switch")

btnToggle.addEventListener("change", ()=> {
    html.classList.toggle('light')
})