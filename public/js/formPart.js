
import validatorForm from './classes/validatorform.js'

let nbrInput = 8

let check = {}

let verif = new validatorForm(nbrInput, check)

const btnSub = document.getElementById('btnSub')

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

verif.verifNom(nom, msgErrorNom, btnSub)
verif.verifPrenom(prenom, msgErrorPrenom, btnSub)
verif.verifLogin(identifiant, msgErrorIdentifiant, btnSub)
verif.verifMdp(mdp, msgErrorMdp, btnSub)
verif.verifMdpConfirm(mdp, mdpConfirm, msgErrorMdpConfirm, btnSub)
verif.verifMail(mail, msgErrorMail, btnSub)
verif.verifTel(tel, msgErrorTel, btnSub)
verif.verifAdresse(adresse, msgErrorAdresse, btnSub)


