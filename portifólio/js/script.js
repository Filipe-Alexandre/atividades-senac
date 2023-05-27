const html = document.querySelector('html')
const btnToggle = document.querySelector(".switch")

var git = document.querySelector(".img-git")
var gitHover = document.querySelector(".img-git-hover")
var gitPreto = document.querySelector(".img-git-preto")
var gitHoverPreto = document.querySelector(".img-git-hover-preto")


var link = document.querySelector(".img-link")
var linkHover = document.querySelector(".img-link-hover")
var insta = document.querySelector(".img-insta")
var instaHover = document.querySelector(".img-insta-hover")

btnToggle.addEventListener("change", ()=> {
    html.classList.toggle('light')
})

