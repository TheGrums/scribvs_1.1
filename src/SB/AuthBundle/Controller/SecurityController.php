<?php
namespace SB\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SB\UserBundle\Entity\User;

class SecurityController extends Controller
{
    public function loginAction(Request $req)
    {

      // Si le visiteur est déjà identifié, on le redirige vers l'accueil
      if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
        return $this->redirectToRoute('sb_post_default');
      }
      $authenticationUtils = $this->get('security.authentication_utils');
      return $this->render('SBAuthBundle:Default:login.html.twig', array(
        'last_username' => $authenticationUtils->getLastUsername(),
        'error'         => $authenticationUtils->getLastAuthenticationError(),
      ));
    }
}
