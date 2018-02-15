<?php
/**
 * Created by PhpStorm.
 * User: Mawel
 * Date: 16/02/18
 * Time: 00:08
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', array());
    }

}