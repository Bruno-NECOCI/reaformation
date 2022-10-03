let inscription = document.querySelector("#create")
console.log(inscription);

inscription.addEventListener('click', (e)=>{
    e.preventDefault()
    location.href="inscriptionPart"
})