import validatorForm from './classes/validatorform.js'

let check = {} 

const verif = new validatorForm(10, check);

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

const uai = document.getElementById('uai')
const msgErrorUAI = document.getElementById('msgErrorUAI')

const nom_ecole = document.getElementById('nom_ecole')
const msgErrorNomEcole = document.getElementById('msgErrorNomEcole')

verif.verifNom(nom, msgErrorNom)
verif.verifPrenom(prenom, msgErrorPrenom)
verif.verifLogin(identifiant, msgErrorIdentifiant)
verif.verifMdp(mdp, msgErrorMdp)
verif.verifMdpConfirm(mdpConfirm, msgErrorMdpConfirm)
verif.verifMail(mail, msgErrorMail)
verif.verifTel(tel, msgErrorTel)
verif.verifAdresse(adresse, msgErrorAdresse)
verif.verifUAI(uai, msgErrorUAI)
verif.verifNomEcole(nom_ecole, msgErrorNomEcole)