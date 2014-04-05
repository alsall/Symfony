<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'pnpc_cistude_europe_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Pnpc\\Bundle\\CistudeEuropeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pnpc_tortue_hermann_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Pnpc\\Bundle\\TortueHermannBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pnpc_scops_homepag' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pnpc_scops_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/stage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pnpc_scops_voir' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/stage/liste/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pnpc_scops_voirplus' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::voirplusAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/stage/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pnpc_scops_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/stage/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pnpc_scops_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::modifierAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/stage/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pnpc_scops_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::supprimerAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/stage/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pnpc_scops_supprimerdoc' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::supprimerdocAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/stage/supprimerdoc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pnpc_scops_diapo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::photoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/stage/photos/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pnpc_scops_doc' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::docAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/stage/documents/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pnpc_scops_upload' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::uploadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/stage/documents/upload',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pnpc_scops_uploadImage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::uploadImageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/stage/photos/upload',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pnpc_scops_request_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::searchformAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/stage/liste/request_form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pnpc_scops_request_result' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pnpc\\Bundle\\ScopsBundle\\Controller\\ScopsController::requeteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/stage/liste/request_result',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avro_csv_import_upload' => array (  0 =>   array (    0 => 'alias',  ),  1 =>   array (    '_controller' => 'Avro\\CsvBundle\\Controller\\ImportController::uploadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'alias',    ),    1 =>     array (      0 => 'text',      1 => '/import/upload',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avro_csv_import_mapping' => array (  0 =>   array (    0 => 'alias',  ),  1 =>   array (    '_controller' => 'Avro\\CsvBundle\\Controller\\ImportController::mappingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'alias',    ),    1 =>     array (      0 => 'text',      1 => '/import/mapping',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avro_csv_import_process' => array (  0 =>   array (    0 => 'alias',  ),  1 =>   array (    '_controller' => 'Avro\\CsvBundle\\Controller\\ImportController::processAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'alias',    ),    1 =>     array (      0 => 'text',      1 => '/import/process',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avro_csv_export_export' => array (  0 =>   array (    0 => 'alias',  ),  1 =>   array (    '_controller' => 'Avro\\CsvBundle\\Controller\\ExportController::exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'alias',    ),    1 =>     array (      0 => 'text',      1 => '/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
