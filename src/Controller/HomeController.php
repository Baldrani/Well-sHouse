<?php
/**
 * Created by PhpStorm.
 * User: Mawel
 * Date: 13/02/18
 * Time: 00:59
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function index(){
        $number = mt_rand(0, 100);

        $navigation = [['caption' => 'home', 'href' => '/']];

        return $this->render('index.html.twig', array(
            'number' => $number,
            'navigation' => $navigation,
        ));
    }

}