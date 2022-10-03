// ciblage des éléments 
const slide = document.querySelector(".slide")
const next = document.querySelector("#next")
const prev = document.querySelector("#prev")
let coms = document.querySelectorAll(".comClient")
let index = 1

// on mets un id à tous les coms du tableau
for (let i = 0; i < coms.length; i++) {
        coms[i].id =`"${i}"`
    }

// on créer les clones du 1er et du ernier com
const firstClone = coms[0].cloneNode(true)
const lastClone = coms[coms.length - 1].cloneNode(true)

// on renomme les id des clones
firstClone.id = 'first-clone'
lastClone.id = 'last-clone'

// on insere les clones dans le DOM 
slide.appendChild(firstClone) // à la fin du tableau
slide.prepend(lastClone) // au début du tableau
console.log(slide);  

// const a laquelle on assigne la longueur de la largeau du com
let comWidth = coms[index].clientWidth

// on ajout un style au slide de translation pour que l'élément à l'indes 1 apparaisse au chargement de la page
slide.style.transform = `translateX(${-comWidth*index}px)`


// création du mouvement vers la droite
const moveToNextSlide = () =>{
    index++
    slide.style.transform = `translateX(${-comWidth*index}px)`
    slide.style.transition = '0.9s'
    console.log(index);
    

}
// création du mouvement vers la gauche
const moveToPrevSlide = () =>{
    index--
    slide.style.transform = `translateX(${-comWidth*index}px)`
    slide.style.transition = '0.9s'
    console.log(index);
}
next.addEventListener('click', moveToNextSlide)
prev.addEventListener('click', moveToPrevSlide)

// Gestion des clones de la boucle infinie 
slide.addEventListener('transitionend', ()=>{
    
    coms = document.querySelectorAll(".comClient")
    if(coms[index].id === firstClone.id){
        slide.style.transition = 'none'
        //on réinitialise l'index il passe du dernier au premier
        index = 1 
        slide.style.transform = `translateX(${-comWidth*index}px)`
    }
    if(coms[index].id === lastClone.id){
        slide.style.transition = 'none';
        index = coms.length -2
        console.log(index = coms.length -2);
        slide.style.transform = `translateX(${-comWidth*index}px)`
    }
})