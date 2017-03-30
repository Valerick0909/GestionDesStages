<?php
  require 'database.php';

  if(isset($_POST['login']) && isset($_POST['password']))
  {
    $login=$_POST['login'];
    $password=$_POST['password'];
    $query = $bdd->prepare('SELECT * FROM utilisateur where login = '.$login.' AND mdp = '.$password.'');
    $query->execute(array($_POST['login'],  $_POST['password']));
    $result = $query->fetchAll();
  }

  $connexion =[];
  $connexion["erreur"] =[];
  $connexion["reussi"] =[];
  if (isset($_POST['connexion']))
   {
      if(empty($_POST['login']))
      {
       array_push($connexion['erreur'], 'Veuillez indiquer un login!');
      }
        // si mdp vide
      elseif(empty($_POST['password']))
      {
       array_push($connexion['erreur'], 'Veuillez indiquer votre mot de passe');
      }
        // verif du login
        elseif(empty($result))
      {
        array_push($connexion['erreur'], 'Votre identifiant est incorect !');
      }
        // verif du mdp
        elseif(empty($result))
      {
       array_push($connexion['erreur'], 'Votre mot de passe est incorect !');
      }
        else
      {
      $id = $_POST["login"];

      // sauvegarde des id de l'utilisateur
      $_SESSION['login'] = $_POST['login'];
      $_SESSION['mdp'] = $_POST['password'];
      }

  }
  ?>
