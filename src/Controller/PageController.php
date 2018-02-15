<?php
/**
 * Created by PhpStorm.
 * User: Mawel
 * Date: 15/02/18
 * Time: 00:22
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class PageController extends Controller
{
    /**
     * @Route("/projects", name="projects")
     */
    public function projects()
    {
        return $this->render('index.html.twig', array());
    }

}