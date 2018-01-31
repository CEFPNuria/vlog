<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
/**
 * Description of HomeController
 *
 * @author Toni
 */
class HomeController extends Controller{
    
   /**
    * 
    * @Route("/",name="home");
    */
    public function homeAction(){
        return $this->render('home/index.html.twig');
    }
    //put your code here
}
