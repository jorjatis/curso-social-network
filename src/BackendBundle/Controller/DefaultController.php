<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
      // Carga el entityManager, para acceder a las entidades con Doctrine
      $em = $this->getDoctrine()->getManager();
      // Usamos el entityManager para sacar un repositorio, por ejemplo de User, un modelo de consultas, para sacar sus propiedades
      $user_repo = $em->getRepository("BackendBundle:User");
      // Vamos a encontrar el usuario 1
      $user = $user_repo->find(1);
      // Podemos imprimir varios de sus datos como propiedades, usando los metodos getter
      echo "Bienvenido ".$user->getEmail();

      var_dump($user);
      die();

      return $this->render('BackendBundle:Default:index.html.twig');
    }
}
