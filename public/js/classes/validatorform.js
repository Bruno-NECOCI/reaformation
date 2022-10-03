export default class validatorForm {

    constructor(nbrInput, object) {
        this.nbrInput = nbrInput
        this.object = object
    }

verifNom(nom,msgErrorNom) {
    
    nom.addEventListener("blur", (e) =>{
        let nomValue = e.currentTarget.value.trim()
        let error = ""
        if (!/^[A-Za-z]{2,30}$/.test(nomValue)){
            this.object = {...this.object, nom: false}
            console.log(this.object);
            error = "Votre nom doit contenir au min 2 cractères (pas de chiffres et de cractères spéciaux)"
            msgErrorNom.innerHTML = error
        }else{
            this.object = {...this.object, nom: true}
            console.log(this.object)
            msgErrorNom.innerHTML = error
        }
        
        this.setSubmitBtn(btnSub)

    }) 
}

verifPrenom(prenom,msgErrorPrenom) {

    prenom.addEventListener("blur", (e) =>{
        let prenomValue = e.currentTarget.value.trim()
        let error = ""
        msgErrorPrenom.innerHTML = error
        if (!/^[A-Za-z]{2,30}$/.test(prenomValue)) {
            this.object = {...this.object, prenom: false}
            console.log(this.object);
            error = "Votre prénom doit contenir au min 2 cractères (pas de chiffres et de cractères spéciaux)"
            msgErrorPrenom.innerHTML = error
        }else{
            this.object = {...this.object, prenom: true}
            console.log(this.object);
        }
        this.setSubmitBtn(btnSub)
    })
}

verifLogin(identifiant,msgErrorIdentifiant) {

    identifiant.addEventListener("blur", (e) =>{
        let identifiantValue = e.currentTarget.value.trim()
        let error = ""
        msgErrorIdentifiant.innerHTML = error
        if (identifiantValue.length<8 || identifiantValue.length>30) {
            this.object = {...this.object, login: false}
            console.log(this.object);
            error = "Votre login doit contenir entre 8 et 30 cractères"
            msgErrorIdentifiant.innerHTML = error
        }else{
            this.object = {...this.object, login: true}
            console.log(this.object);
        }
        this.setSubmitBtn(btnSub)
    }) 
}

verifMdp(mdp,msgErrorMdp) {

    mdp.addEventListener("blur", (e) =>{
        let mdpValue = e.currentTarget.value.trim()
        let error = ""
        msgErrorMdp.innerHTML = error
        if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(mdpValue)) {
            this.object = {...this.object, mdp: false}
            console.log(this.object);
            error = "Votre mdp doit contenir au moins 8 caractère, une majuscule, un chiffre et un caractère spécial"
            msgErrorMdp.innerHTML = error
        }else{
            this.object = {...this.object, mdp: true}
            console.log(this.object);
        }
        this.setSubmitBtn(btnSub)
    }) 
}

verifMdpConfirm(mdp, mdpConfirm, msgErrorMdpConfirm ) {

    mdpConfirm.addEventListener("blur", (e) =>{
        let mdpConfirmValue = e.currentTarget.value.trim()
        let mdpValue = mdp.value
        let error = ""
        msgErrorMdpConfirm.innerHTML = error
        if (mdpValue != mdpConfirmValue) {
            this.object = {...this.object, mdpConfirm: false}
            console.log(this.object);
            error = "Vos mots de passes ne sont pas identiques"
            msgErrorMdpConfirm.innerHTML = error
        }else{
            this.object = {...this.object, mdpConfirm: true}
            console.log(this.object);
        }
        this.setSubmitBtn(btnSub)
    }) 

}

verifMail(mail,msgErrorMail) {

    mail.addEventListener("blur", (e) =>{
        let mailValue = e.currentTarget.value.trim()
        let error = ""
        msgErrorMail.innerHTML = error
        if (!/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(mailValue)){
            this.object = {...this.object, mail: false}
            console.log(this.object);
            error = "L'email saisi n'a pas le bon format"
            msgErrorMail.innerHTML = error
        }else{
            this.object = {...this.object, mail: true}
            console.log(this.object);
        }
        this.setSubmitBtn(btnSub)
    }) 
}

verifTel(tel,msgErrorTel) {

    tel.addEventListener("blur", (e) =>{
        let telValue = e.currentTarget.value.trim()
        let error = ""
        msgErrorTel.innerHTML = error
        if (!/^[0]{1}[1-9]{1}[0-9]{8}$/.test(telValue)) {
            this.object = {...this.object, tel: false}
            console.log(this.object);
            error = "Le numéro saisi n'a pas le bon format"
            msgErrorTel.innerHTML = error
        }else{
            this.object = {...this.object, tel: true}
            console.log(this.object);
        }
        this.setSubmitBtn(btnSub)
    }) 
}

 verifAdresse(adresse,msgErrorAdresse) {

    adresse.addEventListener("blur", (e) =>{
        let inputValue = e.currentTarget.value.split(" ")
        let adresseValue = ""
        inputValue.forEach(data => {
            adresseValue += data;  
        })
        let error = ""
        msgErrorAdresse.innerHTML = error
        if (!/^[0-9]{1,3}(?:rue|av|avenue|chemin|impasse|bvd|boulevard)[A-Za-z'-]{5,30}[0-9]{5}[A-Za-z'-]{5,30}$/.test(adresseValue)) {
            this.object = {...this.object, adresse: false}
            console.log(this.object)
            error = "L'adresse saisie n'a pas le bon format"
            msgErrorAdresse.innerHTML = error
        }else{
            this.object = {...this.object, adresse: true}
            console.log(this.object)
        }
        this.setSubmitBtn(btnSub)
    }) 
}

verifSiret(siret,msgErrorSiret) {

    siret.addEventListener("blur", (e) =>{
        let siretValue = e.currentTarget.value.trim()
        let error = ""
        msgErrorSiret.innerHTML = error
        if (!/^[0-9]{14}$/.test(siretValue)) {
            this.object = {...this.object, adresse: false}
            console.log(this.object);
            error = "Le numéro de Siret saisi n'a pas le bon format"
            msgErrorSiret.innerHTML = error
        }else{
            this.object = {...this.object, adresse: true}
            console.log(this.object);
        }
        this.setSubmitBtn(btnSub)
    }) 
}

verifUAI(uai,msgErrorUAI) {

    uai.addEventListener("blur", (e) =>{
        let uaiValue = e.currentTarget.value.trim()
        let error = ""
        msgErrorUAI.innerHTML = error
        if (!/^[0-9]{7}[A-Z]{1}$/.test(uaiValue)) {
            this.object = {...this.object, uai: false}
            console.log(this.object);
            error = "Le numéro de UAI saisi n'a pas le bon format"
            msgErrorUAI.innerHTML = error
        }else{
            this.object = {...this.object, uai: true}
            console.log(this.object);
        }
        this.setSubmitBtn(btnSub)
    }) 
}

verifNomEcole(nom_ecole,msgErrorNomEcole) {

    nom_ecole.addEventListener("blur", (e) =>{
        let inputValue = e.currentTarget.value.split(" ")
        let nomEcoleValue = []
        inputValue.forEach(data => {
            nomEcoleValue += data;   
        })
        let error = ""
        msgErrorNomEcole.innerHTML = error
        if (!/^[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ'-]{5,30}$/.test(nomEcoleValue)) {
            this.object = {...this.object, ecole: false}
            console.log(this.object);
            error = "Le nom de l'établissement n'a pas le bon format"
            msgErrorNomEcole.innerHTML = error
        }else{
            this.object = {...this.object, ecole: true}
            console.log(this.object);
        }
        this.setSubmitBtn(btnSub)
    }) 

}

verifNomEntr(nom_entreprise,msgErrorNomEntr) {

    nom_entreprise.addEventListener("blur", (e) =>{
        let inputValue = e.currentTarget.value.split(" ")
        let nomEntrValue = []
        inputValue.forEach(data => {
            nomEntrValue += data;   
        })
        let error = ""
        msgErrorNomEntr.innerHTML = error
        if (!/^[0-9A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ'-@]{5,30}$/.test(nomEntrValue)) {
            this.object = {...this.object, entreprise: false}
            console.log(this.object);
            error = "Le nom de l'entreprise n'a pas le bon format"
            msgErrorNomEntr.innerHTML = error
        }else{
            this.object = {...this.object, entreprise: true}
            console.log(this.object);
        }
        this.setSubmitBtn(btnSub)
    }) 

}

verifForm(){
    var result = true
    if(Object.keys(this.object).length == this.nbrInput){
   
         var result = true
        if(Object.keys(this.object).length == this.nbrInput){
  
       for (const input in this.object) {
               const value = this.object[input]
               result = result && value
               if(result == true){
                console.log(result);
                return result
            }
        } 
    }
    }
}

setSubmitBtn(btnSub) {
        if(this.verifForm()){
            btnSub.removeAttribute("disabled")
            btnSub.classList.remove("btn-form-d")
            btnSub.classList.add("btn-form")
        }
    }





}




