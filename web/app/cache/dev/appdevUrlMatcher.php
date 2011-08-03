<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // D2NitBlogBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'D2NitBlogBundle_homepage');
            }
            return array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'D2NitBlogBundle_homepage',);
        }

        // D2NitBlogBundle_article_show
        if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<category>[^/]+?)/(?P<identifier>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\ArticleController::showAction',)), array('_route' => 'D2NitBlogBundle_article_show'));
        }

        // D2NitBlogBundle_category_show
        if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<category>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\ArticleController::showByCategoryAction',)), array('_route' => 'D2NitBlogBundle_category_show'));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            // sonata_admin_retrieve_form_element
            if ($pathinfo === '/admin/core/get-form-field-element') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
            }

            // sonata_admin_append_form_element
            if ($pathinfo === '/admin/core/append-form-field-element') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
            }

            // sonata_admin_short_object_information
            if ($pathinfo === '/admin/core/get-short-object-description') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
            }

            // admin_d2nit_blog_article_list
            if ($pathinfo === '/admin/d2nit/blog/article/list') {
                return array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\ArticleAdminController::listAction',  '_sonata_admin' => 'd2nit.blog.admin.article',  '_sonata_name' => 'admin_d2nit_blog_article_list',  '_route' => 'admin_d2nit_blog_article_list',);
            }

            // admin_d2nit_blog_article_create
            if ($pathinfo === '/admin/d2nit/blog/article/create') {
                return array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\ArticleAdminController::createAction',  '_sonata_admin' => 'd2nit.blog.admin.article',  '_sonata_name' => 'admin_d2nit_blog_article_create',  '_route' => 'admin_d2nit_blog_article_create',);
            }

            // admin_d2nit_blog_article_batch
            if ($pathinfo === '/admin/d2nit/blog/article/batch') {
                return array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\ArticleAdminController::batchAction',  '_sonata_admin' => 'd2nit.blog.admin.article',  '_sonata_name' => 'admin_d2nit_blog_article_batch',  '_route' => 'admin_d2nit_blog_article_batch',);
            }

            // admin_d2nit_blog_article_edit
            if (0 === strpos($pathinfo, '/admin/d2nit/blog/article') && preg_match('#^/admin/d2nit/blog/article/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\ArticleAdminController::editAction',  '_sonata_admin' => 'd2nit.blog.admin.article',  '_sonata_name' => 'admin_d2nit_blog_article_edit',)), array('_route' => 'admin_d2nit_blog_article_edit'));
            }

            // admin_d2nit_blog_article_delete
            if (0 === strpos($pathinfo, '/admin/d2nit/blog/article') && preg_match('#^/admin/d2nit/blog/article/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\ArticleAdminController::deleteAction',  '_sonata_admin' => 'd2nit.blog.admin.article',  '_sonata_name' => 'admin_d2nit_blog_article_delete',)), array('_route' => 'admin_d2nit_blog_article_delete'));
            }

            // admin_d2nit_blog_article_view
            if (0 === strpos($pathinfo, '/admin/d2nit/blog/article') && preg_match('#^/admin/d2nit/blog/article/(?P<id>[^/]+?)/view$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\ArticleAdminController::viewAction',  '_sonata_admin' => 'd2nit.blog.admin.article',  '_sonata_name' => 'admin_d2nit_blog_article_view',)), array('_route' => 'admin_d2nit_blog_article_view'));
            }

            // admin_d2nit_blog_category_list
            if ($pathinfo === '/admin/d2nit/blog/category/list') {
                return array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CategoryAdminController::listAction',  '_sonata_admin' => 'd2nit.blog.admin.category',  '_sonata_name' => 'admin_d2nit_blog_category_list',  '_route' => 'admin_d2nit_blog_category_list',);
            }

            // admin_d2nit_blog_category_create
            if ($pathinfo === '/admin/d2nit/blog/category/create') {
                return array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CategoryAdminController::createAction',  '_sonata_admin' => 'd2nit.blog.admin.category',  '_sonata_name' => 'admin_d2nit_blog_category_create',  '_route' => 'admin_d2nit_blog_category_create',);
            }

            // admin_d2nit_blog_category_batch
            if ($pathinfo === '/admin/d2nit/blog/category/batch') {
                return array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CategoryAdminController::batchAction',  '_sonata_admin' => 'd2nit.blog.admin.category',  '_sonata_name' => 'admin_d2nit_blog_category_batch',  '_route' => 'admin_d2nit_blog_category_batch',);
            }

            // admin_d2nit_blog_category_edit
            if (0 === strpos($pathinfo, '/admin/d2nit/blog/category') && preg_match('#^/admin/d2nit/blog/category/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CategoryAdminController::editAction',  '_sonata_admin' => 'd2nit.blog.admin.category',  '_sonata_name' => 'admin_d2nit_blog_category_edit',)), array('_route' => 'admin_d2nit_blog_category_edit'));
            }

            // admin_d2nit_blog_category_delete
            if (0 === strpos($pathinfo, '/admin/d2nit/blog/category') && preg_match('#^/admin/d2nit/blog/category/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CategoryAdminController::deleteAction',  '_sonata_admin' => 'd2nit.blog.admin.category',  '_sonata_name' => 'admin_d2nit_blog_category_delete',)), array('_route' => 'admin_d2nit_blog_category_delete'));
            }

            // admin_d2nit_blog_category_view
            if (0 === strpos($pathinfo, '/admin/d2nit/blog/category') && preg_match('#^/admin/d2nit/blog/category/(?P<id>[^/]+?)/view$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CategoryAdminController::viewAction',  '_sonata_admin' => 'd2nit.blog.admin.category',  '_sonata_name' => 'admin_d2nit_blog_category_view',)), array('_route' => 'admin_d2nit_blog_category_view'));
            }

            // admin_d2nit_blog_comment_list
            if ($pathinfo === '/admin/d2nit/blog/comment/list') {
                return array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CommentAdminController::listAction',  '_sonata_admin' => 'd2nit.blog.admin.comment',  '_sonata_name' => 'admin_d2nit_blog_comment_list',  '_route' => 'admin_d2nit_blog_comment_list',);
            }

            // admin_d2nit_blog_comment_create
            if ($pathinfo === '/admin/d2nit/blog/comment/create') {
                return array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CommentAdminController::createAction',  '_sonata_admin' => 'd2nit.blog.admin.comment',  '_sonata_name' => 'admin_d2nit_blog_comment_create',  '_route' => 'admin_d2nit_blog_comment_create',);
            }

            // admin_d2nit_blog_comment_batch
            if ($pathinfo === '/admin/d2nit/blog/comment/batch') {
                return array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CommentAdminController::batchAction',  '_sonata_admin' => 'd2nit.blog.admin.comment',  '_sonata_name' => 'admin_d2nit_blog_comment_batch',  '_route' => 'admin_d2nit_blog_comment_batch',);
            }

            // admin_d2nit_blog_comment_edit
            if (0 === strpos($pathinfo, '/admin/d2nit/blog/comment') && preg_match('#^/admin/d2nit/blog/comment/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CommentAdminController::editAction',  '_sonata_admin' => 'd2nit.blog.admin.comment',  '_sonata_name' => 'admin_d2nit_blog_comment_edit',)), array('_route' => 'admin_d2nit_blog_comment_edit'));
            }

            // admin_d2nit_blog_comment_delete
            if (0 === strpos($pathinfo, '/admin/d2nit/blog/comment') && preg_match('#^/admin/d2nit/blog/comment/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CommentAdminController::deleteAction',  '_sonata_admin' => 'd2nit.blog.admin.comment',  '_sonata_name' => 'admin_d2nit_blog_comment_delete',)), array('_route' => 'admin_d2nit_blog_comment_delete'));
            }

            // admin_d2nit_blog_comment_view
            if (0 === strpos($pathinfo, '/admin/d2nit/blog/comment') && preg_match('#^/admin/d2nit/blog/comment/(?P<id>[^/]+?)/view$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'D2Nit\\BlogBundle\\Controller\\CommentAdminController::viewAction',  '_sonata_admin' => 'd2nit.blog.admin.comment',  '_sonata_name' => 'admin_d2nit_blog_comment_view',)), array('_route' => 'admin_d2nit_blog_comment_view'));
            }

        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
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

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
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
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
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
