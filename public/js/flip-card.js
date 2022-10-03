
const cards = document.querySelectorAll(".card-inner")

cards.forEach(card => {

    card.addEventListener('click', ()=>{
        if (card.classList.contains("flipped")) {
            card.classList.remove("flipped")
        }
        else{
            card.classList.add("flipped")
        }
    })

})

