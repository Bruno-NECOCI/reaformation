import validatorForm from './classes/validatorform.js'

let verif = new validatorForm();

const nom = document.getElementById('nom')
const msgErrorNom = document.getElementById('msgErrorNom')

const prenom = document.getElementById('prenom')
const msgErrorPrenom = document.getElementById('msgErrorPrenom')

const identifiant = document.getElementById('identifiant')
const msgErrorIdentifiant = document.getElementById('msgErrorIdentifiant')

const mdp = document.getElementById('mdp')
const msgErrorMdp = document.getElementById('msgErrorMdp')

const mdpConfirm = document.getElementById('mdpConfirm')
const msgErrorMdpConfirm = document.getElementById('msgErrorMdpConfirm')

const mail = document.getElementById('mail')
const msgErrorMail = document.getElementById('msgErrorMail')

const tel = document.getElementById('tel')
const msgErrorTel = document.getElementById('msgErrorTel')

const adresse = document.getElementById('adresse')
const msgErrorAdresse = document.getElementById('msgErrorAdresse')

const siret = document.getElementById('siret')
const msgErrorSiret = document.getElementById('msgErrorSiret')

const nom_entreprise = document.getElementById('nom_entreprise')
const msgErrorNomEntr = document.getElementById('msgErrorNomEntr')

verif.verifNom(nom, msgErrorNom)
verif.verifPrenom(prenom, msgErrorPrenom)
verif.verifLogin(identifiant, msgErrorIdentifiant)
verif.verifMdp(mdp, msgErrorMdp)
verif.verifMdpConfirm(mdpConfirm, msgErrorMdpConfirm)
verif.verifMail(mail, msgErrorMail)
verif.verifTel(tel, msgErrorTel)
verif.verifAdresse(adresse, msgErrorAdresse)
verif.verifSiret(siret, msgErrorSiret)
verif.verifNomEntr(nom_entreprise, msgErrorNomEntr)