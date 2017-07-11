<?php

    class Partie implements ISavable
    {

        //public $plateauDeJeu = new Kase();

        function getGame()
        {
            // TODO: Implement getGame() method.
        }

        public function addAction()
        {

        }

        public function getAction()
        {

        }

        public function getActions()
        {

        }

        public function play($x, $x, $marque)
        {

        }

    }

    interface ISavable
    {
        public function getGame();
    }

    class DataAccess
    {

        //public $dbh = new PDO('mysql:host=localhost;dbname=rattrapage', 'root', '');

        public function saveMove($nom, $game)
        {

        }

    }

    class Kase
    {

        public $contenu;

    }

    abstract class Marque
    {

        public $character;

        public function getImages()
        {

        }
    }

    class Rond extends Marque
    {

    }

    class Croix extends Marque
    {

    }

    class Joueur
    {

        public $Nom;
        public $Score;

    }

    class TicTacToe
    {

        public $fenetreDeJeu;

    }

    class ControleurDeJeu
    {

        public function checkVictoire()
        {

        }

        public function ajouterMarque($j, $x, $y)
        {

        }

        private function ajouterPoint()
        {

        }

        public function play()
        {

        }

    }

    class Fenetre
    {

        public function lancerPartie()
        {

        }

        public function creerJoueur()
        {

        }

        public function rejouerPartie()
        {

        }

    }

    class PanneauGrille
    {

    }

    class PanneauScore
    {

    }


?>