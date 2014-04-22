<?php

namespace Pnpc\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;


class UserController extends Controller
{
    public function loginAction()
    {
		// Si le visiteur est déjà identifié, on le redirige vers l'accueil
    if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      //$choice = $_POST['choix'];
      return $this->redirect($this->generateUrl('pnpc_scops_homepage'));
    }
 
    $request = $this->getRequest();

    $session = $request->getSession();
 
    // On vérifie s'il y a des erreurs d'une précédente soumission du formulaire
    if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
      $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    } else {
      $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
      $session->remove(SecurityContext::AUTHENTICATION_ERROR);
    }
    // return $this->redirect($this->generateUrl('fos_user_security_login'));
    
    $csrfToken = $this->container->has('form.csrf_provider')
            ? $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate')
            : null;

    return $this->render('PnpcUserBundle:User:login.html.twig', array(
      // Valeur du précédent nom d'utilisateur entré par l'internaute
      'last_username' => $session->get(SecurityContext::LAST_USERNAME),
      'error'         => $error,
      'csrf_token' => $csrfToken,
      
    ));
  }
  
	public function logoutAction()
    {
		return $this->redirect($this->generateUrl('pnpc_scops_homepage'));
	}
}
