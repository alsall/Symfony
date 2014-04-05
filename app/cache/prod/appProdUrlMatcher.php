<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/hello')) {
            // pnpc_cistude_europe_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pnpc_cistude_europe_homepage')), array (  '_controller' => 'Pnpc\\Bundle\\CistudeEuropeBundle\\Controller\\DefaultController::indexAction',));
            }

            // pnpc_tortue_hermann_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pnpc_tortue_hermann_homepage')), array (  '_controller' => 'Pnpc\\Bundle\\TortueHermannBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // pnpc_scops_homepag
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pnpc_scops_homepag');
            }

            return array (  '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::indexAction',  '_route' => 'pnpc_scops_homepag',);
        }

        if (0 === strpos($pathinfo, '/stage')) {
            // pnpc_scops_homepage
            if ($pathinfo === '/stage') {
                return array (  '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::indexAction',  '_route' => 'pnpc_scops_homepage',);
            }

            if (0 === strpos($pathinfo, '/stage/liste')) {
                // pnpc_scops_voir
                if (rtrim($pathinfo, '/') === '/stage/liste') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pnpc_scops_voir');
                    }

                    return array (  '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::voirAction',  '_route' => 'pnpc_scops_voir',);
                }

                // pnpc_scops_voirplus
                if (preg_match('#^/stage/liste/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pnpc_scops_voirplus')), array (  '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::voirplusAction',));
                }

            }

            // pnpc_scops_ajouter
            if ($pathinfo === '/stage/ajouter') {
                return array (  '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::ajouterAction',  '_route' => 'pnpc_scops_ajouter',);
            }

            // pnpc_scops_modifier
            if (0 === strpos($pathinfo, '/stage/modifier') && preg_match('#^/stage/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pnpc_scops_modifier')), array (  '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::modifierAction',));
            }

            if (0 === strpos($pathinfo, '/stage/supprimer')) {
                // pnpc_scops_supprimer
                if (preg_match('#^/stage/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pnpc_scops_supprimer')), array (  '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::supprimerAction',));
                }

                // pnpc_scops_supprimerdoc
                if (0 === strpos($pathinfo, '/stage/supprimerdoc') && preg_match('#^/stage/supprimerdoc/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pnpc_scops_supprimerdoc')), array (  '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::supprimerdocAction',));
                }

            }

            // pnpc_scops_diapo
            if (rtrim($pathinfo, '/') === '/stage/photos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pnpc_scops_diapo');
                }

                return array (  '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::photoAction',  '_route' => 'pnpc_scops_diapo',);
            }

            if (0 === strpos($pathinfo, '/stage/documents')) {
                // pnpc_scops_doc
                if (rtrim($pathinfo, '/') === '/stage/documents') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pnpc_scops_doc');
                    }

                    return array (  '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::docAction',  '_route' => 'pnpc_scops_doc',);
                }

                // pnpc_scops_upload
                if ($pathinfo === '/stage/documents/upload') {
                    return array (  '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::uploadAction',  '_route' => 'pnpc_scops_upload',);
                }

            }

            // pnpc_scops_uploadImage
            if ($pathinfo === '/stage/photos/upload') {
                return array (  '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::uploadImageAction',  '_route' => 'pnpc_scops_uploadImage',);
            }

            if (0 === strpos($pathinfo, '/stage/liste/request_')) {
                // pnpc_scops_request_form
                if ($pathinfo === '/stage/liste/request_form') {
                    return array (  '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::searchformAction',  '_route' => 'pnpc_scops_request_form',);
                }

                // pnpc_scops_request_result
                if ($pathinfo === '/stage/liste/request_result') {
                    return array (  '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::requeteAction',  '_route' => 'pnpc_scops_request_result',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/import')) {
            // avro_csv_import_upload
            if (0 === strpos($pathinfo, '/import/upload') && preg_match('#^/import/upload/(?P<alias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'avro_csv_import_upload')), array (  '_controller' => 'Avro\\CsvBundle\\Controller\\ImportController::uploadAction',));
            }

            // avro_csv_import_mapping
            if (0 === strpos($pathinfo, '/import/mapping') && preg_match('#^/import/mapping/(?P<alias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'avro_csv_import_mapping')), array (  '_controller' => 'Avro\\CsvBundle\\Controller\\ImportController::mappingAction',));
            }

            // avro_csv_import_process
            if (0 === strpos($pathinfo, '/import/process') && preg_match('#^/import/process/(?P<alias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'avro_csv_import_process')), array (  '_controller' => 'Avro\\CsvBundle\\Controller\\ImportController::processAction',));
            }

        }

        // avro_csv_export_export
        if (0 === strpos($pathinfo, '/export') && preg_match('#^/export/(?P<alias>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'avro_csv_export_export')), array (  '_controller' => 'Avro\\CsvBundle\\Controller\\ExportController::exportAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
