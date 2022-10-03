<?php

    class validatorForm{

        protected $erreur = [];

        public function checkNom(string $nom)
        {

            $regex="/^[a-zA-Z]{2,30}$/";
            if (empty(trim($nom))) {
                return $this->erreur[] = "Votre nom n'est pas renseigné";
            }elseif (preg_match($regex, $nom) == false) {
                return $this->erreur[] = "Votre nom doit contenir au min 2 cractères ou n'est pas au bon format";
            }
            
        }
        public function checkPrenom(string $prenom)
        {
            $regex="/^[a-zA-Z]{2,30}$/";
            if (empty(trim($prenom))) {
                return $this->erreur[] = "Votre prénom n'est pas renseigné";
            }elseif (preg_match($regex, $prenom) == false) {
                return $this->erreur[] = "Votre prénom doit contenir au min 2 cractères ou n'est pas au bon format";
            }

        }

        public function checkLogin(string $login)
        {
            if (empty(trim($login))) {
                return $this->erreur[] = "Votre login n'est pas renseigné";
            }elseif (strlen(trim($login))<8) {
                return $this->erreur[] = "Votre login doit contenir au min 8 cractères";
            }
        }
        
        public function checkMdp(string $mdp)
        {
            $regex = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";
            if (empty(trim($mdp))) {
                return $this->erreur[] = "Votre mot de passe n'est pas renseigné";
            } elseif (preg_match($regex, $mdp) == false) {
                return $this->erreur[] = "Votre mot de passe n'a pas le bon format";
            }

        }
        public function checkConfirmMdp(string $mdpConfirm, string $mdp)
        {

            if (empty(trim($mdpConfirm))) {
                return $this->erreur[] = "Vous n'avez pas confirmé votre mot de passe";
            } elseif ($mdpConfirm != $mdp) {
                return $this->erreur[] = "Vos mots de passes ne sont pas identiques";
            }

        }

        public function checkAdress(string $adresse)
        {
            $adresseExp = explode(" ", $adresse);
            $adresseValue = "";
            foreach ($adresseExp as $data) {
               $adresseValue .= $data;
            }
                
           $regex="/^[0-9]{1,3}(?:rue|av|avenue|chemin|impasse|bvd|boulevard)[A-Za-z'-]{5,30}[0-9]{5}[A-Za-z'-]{5,30}$/";
            
           if (empty(trim($adresse))) {
                return $this->erreur[] = "Votre adresse n'est pas renseignée";
            } elseif (preg_match($regex, $adresseValue) == false) {
                return $this->erreur[] = "L'adresse saisie n'est pas au bon format";
            }

        }
        
        public function checkEmail(string $email)
        {
            if (empty(trim($email))) {
                return $this->erreur[] = "Votre email n'est pas renseigné";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return $this->erreur[] = "L'email saisi n'a pas le bon format";
    
            }

        }

        public function checkTel(string $tel)
        {

           $regex = "/^[0]{1}[1-9]{1}[0-9]{8}$/";
            if (empty(trim($tel))) {
                return $this->erreur[] = "Votre numéro de téléphone n'est pas renseigné";
            } elseif (preg_match($regex, $tel) == false) {
                return $this->erreur[] = "Le numéro saisi n'a pas le bon format";
            }
  
        }
        public function checkSiret(string $siret)
        {

           $regex="/^[0-9]{14}$/";
            if (empty(trim($siret))) {
                return $this->erreur[] = "Votre n° de Siret n'est pas renseigné";
            } elseif (preg_match($regex, $siret) == false) {
                return $this->erreur[] = "Le n° de Siret saisi n'a pas le bon format";
            }
        }
        public function checkUAI(string $siret)
        {

           $regex="/^[0-9]{7}{A-Z}1$/";
            if (empty(trim($siret))) {
                return $this->erreur[] = "Votre n° UAI n'est pas renseigné";
            } elseif (preg_match($regex, $siret) == false) {
                return $this->erreur[] = "Le n° de UAI saisi n'a pas le bon format";
            }
        }

        public function checkNomEntreprise(string $entreprise)
        {

            if (empty(trim($entreprise))) {
                return $this->erreur[] = "Le nom de l'entreprise n'est pas renseigné";
            } elseif (strlen(trim($entreprise))>30) {
                return $this->erreur[] = "Le nom de l'entreprise ne peut pas dépasser plus 8 cractères";
            }

        }
        public function checkNomEcole(string $ecole)
        {

            if (empty(trim($ecole))) {
                return $this->erreur[] = "Le nom de l'ecole n'est pas renseigné";
            } elseif (strlen(trim($ecole))>30) {
                return $this->erreur[] = "Le nom de l'ecole ne peut pas dépasser plus 8 cractères";
            }

        }
        
        public function checkTabsNom(array $tabsNom)
        {
            
            $regex="/^[a-zA-Z]{2,30}$/";
            foreach ($tabsNom as $Nom) {
                if (empty(trim($Nom))) {
                    return $this->erreur[] = "Vous n'avez pas renseigné tous les noms";
                }elseif (preg_match($regex, $Nom) == false) {
                    return $this->erreur[] = "Votre nom doit contenir au min 2 cractères ou n'est pas au bon format";
                }
                
            }
        }

        public function checkTabsPrenom(array $tabsPreom)
        {

            $regex="/^[a-zA-Z]{2,30}$/";
            foreach ($tabsPreom as $Prenom) {
                if (empty(trim($Prenom))) {
                    return $this->erreur[] = "Vous n'avez pas renseigné tous les prénoms";
                }elseif (preg_match($regex, $Prenom) == false) {
                    return $this->erreur[] = "Votre nom doit contenir au min 2 cractères ou n'est pas au bon format";
                }
            }
        }

        public function checkIdFormation(string $id_formation)
        {

           $regex = "/^[[1-3]{1}$/";
            if (trim($id_formation) == "") {
                return $this->erreur[] = "Vous n'avez pas choisi de formation";
            } elseif (preg_match($regex, $id_formation) == false) {
                return $this->erreur[] = "Le numéro saisi n'a pas le bon format";
            }
  
        }
        public function checkDetails(string $details)
        {

            $regex ="/[0-9a-zA-Z àâäãçéèêëìîïòôöõùûüñ'-(),;]{10,255}/";
            if ($details == "") {
                return $this->erreur[] = "Vous n'avez pas rempli le messsage "; 
            }
            else if (preg_match($regex, $details) == false) {
                return $this->erreur[] = "Votre message doit contenir au moins 10 caractères";
            }
  
        }
        public function checkTabsDate(array $tabsDate)
        {

            $regex="/^(\d{2})-(\d{2})-(\d{4})$/";
            foreach ($tabsDate as $Date) {
                if (trim($Date) == "") {
                    return $this->erreur[] = "Vous n'avez pas renseigné toutes les dates de naissances";
                }elseif (preg_match($regex, $Date) == false) {
                    return $this->erreur[] = "L'une des dates de naissance n'est pas au bon format";
                }
            }
  
        }

    
        public function resultat()
        {
            return $this->erreur;
        } 
    }


?>