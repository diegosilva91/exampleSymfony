<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
     /**
     * @Route("/main", name="home")
     */
    public function index()
    {
//        return $this->json(['message'=>'Message Json']);
//        return new Response('<h1>Welcome</h1>');
        return $this->render('home/index.html.twig');
    }
      /**
     * @Route("/number/{max}", name="number")
     */
    public function number($max){
        $number=random_int(0,$max);
        return new Response('<h1>Number: </h1>'.$number);
    }
    /**
     * @Route("/custom/{name?}", name="custom")
     * @param Request $request
     * @return Response
     */
    public function custom(Request $request){
//       dump($request->get('name'));
        $name=$request->get('name');
//        return new Response('<h1>Name: '.$name.'</h1>');
        return $this->render('home/custom.html.twig',['name'=>$name]);
    }
}
