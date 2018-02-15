<?php
/**
 * Created by PhpStorm.
 * User: Mawel
 * Date: 13/02/18
 * Time: 00:59
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index(){

        $navigation = [['caption' => 'home', 'href' => '/']];

        return $this->render('index.html.twig', array(
            'navigation' => $navigation,
        ));
    }

}