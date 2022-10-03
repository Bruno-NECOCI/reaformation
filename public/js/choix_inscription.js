
let part = document.querySelector('#part')
let entreprise = document.querySelector('#entreprise')
let ecole = document.querySelector('#ecole')

let form_part = document.querySelector('#form_particulier')
let form_entr = document.querySelector('#form_entreprise')
let form_ecole = document.querySelector('#form_ecole')

let error_part = document.querySelector('#error_form_part')
let error_entr = document.querySelector('#error_form_entreprise')
let error_ecole = document.querySelector('#error_form_ecole')


part.addEventListener('click', ()=>{
    part.classList.add('label-checked')
    entreprise.classList.remove('label-checked')
    ecole.classList.remove('label-checked')

    form_part.style.display='flex'
    form_entr.style.display='none'
    form_ecole.style.display='none'

    error_entr.style.display="none"
    error_ecole.style.display="none"

})

entreprise.addEventListener('click', ()=>{
    entreprise.classList.add('label-checked')
    ecole.classList.remove('label-checked')
    part.classList.remove('label-checked')

    form_entr.style.display='flex'
    form_ecole.style.display='none'
    form_part.style.display='none'

    error_part.style.display="none"
    error_ecole.style.display="none"

})

ecole.addEventListener('click', ()=>{
    ecole.classList.add('label-checked')
    entreprise.classList.remove('label-checked')
    part.classList.remove('label-checked')

    form_ecole.style.display='flex'
    form_entr.style.display='none'
    form_part.style.display='none'

    error_part.style.display="none"
    error_entr.style.display="none"

})

const tab = [part, entreprise, ecole]

