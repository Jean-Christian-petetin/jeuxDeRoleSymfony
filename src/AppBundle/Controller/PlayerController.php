<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of PlayerController
 *
 * @author jeanchristian-petetin
 */
class PlayerController extends Controller{
    
    /**
     * methode qui va ajouter des joueurs en DB
     * à la fin du traitement on est rediriger sur le controlleur de vue
     * afin de retourner la vue de creation de personnage.
     * 
     * @Route("/player/add", name="addPlayers")
     * @param \AppBundle\Controller\Request $r
     */
    public function addPlayers(Request $r) {
        return $this->redirectToRoute('createPerso');
        //nous a permit de verifie les valeurs du formulaire.
//        return new Response($r->get('j1'));
    }
}
