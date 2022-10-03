const stars = document.querySelectorAll(".fa-star")
const input = document.querySelector("#note")

stars.forEach(star => {
    star.addEventListener("mouseover", ()=>{
        reset()
        star.classList.add("active")

        let prevStars = star.previousElementSibling
        while (prevStars) {
            prevStars.classList.add("active")
            prevStars = prevStars.previousElementSibling
        }
    })
    star.addEventListener("click", ()=>{
        note.value = star.getAttribute("data-star")
        console.log(note.value);
    })
    star.addEventListener("mouseout", ()=>{
        reset(note.value)
    })
})

function reset(nb = 0){
    stars.forEach(star => {
    if(star.getAttribute("data-star") > nb){

        star.classList.remove("active")
    }else{
        star.classList.add("active")

    }
    })
}