<?php
    class Employe {
        
        /**
         * Protected Attributes only accessible in this class and sub-class
         */
        protected $matricule;
        protected $nom;
        protected $prenom;
        protected $datenaiss;
        protected $lieunaiss;
        protected $contacts;
        protected $email;
        protected $direction;
        protected $departement;
        protected $service;
        protected $emploi;
        protected $fonction;
        protected $grade;
        protected $dateembauche;
        protected $login;
        protected $motdepasse;


        //Constructor
        public function __construct($matricule,$nom,$prenom,$datenaiss,$lieunaiss,$contacts,$email,$direction,$departement,$service,$emploi,$fonction,$grade,$dateembauche,$login,$motdepasse)
        {
            
        }
        
        //Save an employe in the database
        public function saveAnEmploye() 
        {

        }

        //Retrieve an employe from the database using the ID
        public function findEmployeById()
        {

        }
    }
?>