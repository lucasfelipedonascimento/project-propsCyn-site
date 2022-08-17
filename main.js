const links = document.querySelector("#links")
const menu = document.querySelector("#menu")
const meio = document.querySelector("#meio")
const linha = document.querySelectorAll(".linha")
const icon = document.querySelector("#icon")
var count;


menu.addEventListener("click", ()=> {
  if(count == 1){
  links.style.animation = "sair 2s ease-in-out forwards"
  meio.style.animation = "meio 2s"
  linha[0].style.animation = "voltar 2s"
  linha[2].style.animation = "voltar2 2s"
  icon.style.animation = "voltar3 2s"
  setTimeout(()=>{
      count = 0
    }, 2000)
   
  }else{
    meio.style.animation = "apagar 2s ease-in-out forwards"
    links.style.animation = "entra 2s ease-in-out forwards"
    linha[0].style.animation = "linha 2s ease-in-out forwards"
    linha[2].style.animation = "linha2 2s ease-in-out forwards"
    icon.style.animation = "icon 2s ease-in-out forwards"
    setTimeout(()=>{
      count = 1
    }, 2000)
    
  }
})
