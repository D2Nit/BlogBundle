<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'D2NitBlogBundle_homepage' => true,
       'D2NitBlogBundle_article_show' => true,
       'D2NitBlogBundle_category_show' => true,
       'sonata_admin_dashboard' => true,
       'sonata_admin_retrieve_form_element' => true,
       'sonata_admin_append_form_element' => true,
       'sonata_admin_short_object_information' => true,
       'admin_d2nit_blog_article_list' => true,
       'admin_d2nit_blog_article_create' => true,
       'admin_d2nit_blog_article_batch' => true,
       'admin_d2nit_blog_article_edit' => true,
       'admin_d2nit_blog_article_delete' => true,
       'admin_d2nit_blog_article_view' => true,
       'admin_d2nit_blog_category_list' => true,
       'admin_d2nit_blog_category_create' => true,
       'admin_d2nit_blog_category_batch' => true,
       'admin_d2nit_blog_category_edit' => true,
       'admin_d2nit_blog_category_delete' => true,
       'admin_d2nit_blog_category_view' => true,
       'admin_d2nit_blog_comment_list' => true,
       'admin_d2nit_blog_comment_create' => true,
       'admin_d2nit_blog_comment_batch' => true,
       'admin_d2nit_blog_comment_edit' => true,
       'admin_d2nit_blog_comment_delete' => true,
       'admin_d2nit_blog_comment_view' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_edit' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getD2NitBlogBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getD2NitBlogBundle_article_showRouteInfo()
    {
        return array(array (  0 => 'category',  1 => 'identifier',), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\ArticleController::showAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'identifier',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'category',  ),  2 =>   array (    0 => 'text',    1 => '/article',  ),));
    }

    private function getD2NitBlogBundle_category_showRouteInfo()
    {
        return array(array (  0 => 'category',), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\ArticleController::showByCategoryAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'category',  ),  1 =>   array (    0 => 'text',    1 => '/article',  ),));
    }

    private function getsonata_admin_dashboardRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/dashboard',  ),));
    }

    private function getsonata_admin_retrieve_form_elementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::retrieveFormFieldElementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/get-form-field-element',  ),));
    }

    private function getsonata_admin_append_form_elementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::appendFormFieldElementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/append-form-field-element',  ),));
    }

    private function getsonata_admin_short_object_informationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::getShortObjectDescriptionAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/get-short-object-description',  ),));
    }

    private function getadmin_d2nit_blog_article_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\ArticleAdminController::listAction',  '_sonata_admin' => 'd2nit.blog.admin.article',  '_sonata_name' => 'admin_d2nit_blog_article_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/article/list',  ),));
    }

    private function getadmin_d2nit_blog_article_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\ArticleAdminController::createAction',  '_sonata_admin' => 'd2nit.blog.admin.article',  '_sonata_name' => 'admin_d2nit_blog_article_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/article/create',  ),));
    }

    private function getadmin_d2nit_blog_article_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\ArticleAdminController::batchAction',  '_sonata_admin' => 'd2nit.blog.admin.article',  '_sonata_name' => 'admin_d2nit_blog_article_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/article/batch',  ),));
    }

    private function getadmin_d2nit_blog_article_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\ArticleAdminController::editAction',  '_sonata_admin' => 'd2nit.blog.admin.article',  '_sonata_name' => 'admin_d2nit_blog_article_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/article',  ),));
    }

    private function getadmin_d2nit_blog_article_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\ArticleAdminController::deleteAction',  '_sonata_admin' => 'd2nit.blog.admin.article',  '_sonata_name' => 'admin_d2nit_blog_article_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/article',  ),));
    }

    private function getadmin_d2nit_blog_article_viewRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\ArticleAdminController::viewAction',  '_sonata_admin' => 'd2nit.blog.admin.article',  '_sonata_name' => 'admin_d2nit_blog_article_view',), array (), array (  0 =>   array (    0 => 'text',    1 => '/view',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/article',  ),));
    }

    private function getadmin_d2nit_blog_category_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CategoryAdminController::listAction',  '_sonata_admin' => 'd2nit.blog.admin.category',  '_sonata_name' => 'admin_d2nit_blog_category_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/category/list',  ),));
    }

    private function getadmin_d2nit_blog_category_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CategoryAdminController::createAction',  '_sonata_admin' => 'd2nit.blog.admin.category',  '_sonata_name' => 'admin_d2nit_blog_category_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/category/create',  ),));
    }

    private function getadmin_d2nit_blog_category_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CategoryAdminController::batchAction',  '_sonata_admin' => 'd2nit.blog.admin.category',  '_sonata_name' => 'admin_d2nit_blog_category_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/category/batch',  ),));
    }

    private function getadmin_d2nit_blog_category_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CategoryAdminController::editAction',  '_sonata_admin' => 'd2nit.blog.admin.category',  '_sonata_name' => 'admin_d2nit_blog_category_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/category',  ),));
    }

    private function getadmin_d2nit_blog_category_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CategoryAdminController::deleteAction',  '_sonata_admin' => 'd2nit.blog.admin.category',  '_sonata_name' => 'admin_d2nit_blog_category_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/category',  ),));
    }

    private function getadmin_d2nit_blog_category_viewRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CategoryAdminController::viewAction',  '_sonata_admin' => 'd2nit.blog.admin.category',  '_sonata_name' => 'admin_d2nit_blog_category_view',), array (), array (  0 =>   array (    0 => 'text',    1 => '/view',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/category',  ),));
    }

    private function getadmin_d2nit_blog_comment_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CommentAdminController::listAction',  '_sonata_admin' => 'd2nit.blog.admin.comment',  '_sonata_name' => 'admin_d2nit_blog_comment_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/comment/list',  ),));
    }

    private function getadmin_d2nit_blog_comment_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CommentAdminController::createAction',  '_sonata_admin' => 'd2nit.blog.admin.comment',  '_sonata_name' => 'admin_d2nit_blog_comment_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/comment/create',  ),));
    }

    private function getadmin_d2nit_blog_comment_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CommentAdminController::batchAction',  '_sonata_admin' => 'd2nit.blog.admin.comment',  '_sonata_name' => 'admin_d2nit_blog_comment_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/comment/batch',  ),));
    }

    private function getadmin_d2nit_blog_comment_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CommentAdminController::editAction',  '_sonata_admin' => 'd2nit.blog.admin.comment',  '_sonata_name' => 'admin_d2nit_blog_comment_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/comment',  ),));
    }

    private function getadmin_d2nit_blog_comment_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CommentAdminController::deleteAction',  '_sonata_admin' => 'd2nit.blog.admin.comment',  '_sonata_name' => 'admin_d2nit_blog_comment_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/comment',  ),));
    }

    private function getadmin_d2nit_blog_comment_viewRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CommentAdminController::viewAction',  '_sonata_admin' => 'd2nit.blog.admin.comment',  '_sonata_name' => 'admin_d2nit_blog_comment_view',), array (), array (  0 =>   array (    0 => 'text',    1 => '/view',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/d2nit/blog/comment',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/profile/',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/confirmed',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/resetting/reset',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/change-password/change-password',  ),));
    }
}
