MenuBundle
==========

The MenuBundle provides object oriented menus for your Symfony2 project.

    use Knp\Bundle\MenuBundle\MenuItem;

    $menu = new MenuItem('My menu');
    $menu->addChild('Home', $router->generate('homepage'));
    $menu->addChild('Comments', $router->generate('comments'));
    $menu->addChild('Symfony2', 'http://symfony-reloaded.org/');
    echo $menu->render();

The above menu would render the following HTML:

    <ul>
      <li class="first">
        <a href="/">Home</a>
      </li>
      <li class="current">
        <a href="/comments">Comments</a>
      </li>
      <li class="last">
        <a href="http://symfony-reloaded.org/">Symfony2</a>
      </li>
    </ul>

This way you can finally avoid writing an ugly template to show the selected item,
the first and last items, submenus, ...

> The bulk of the documentation can be found in the `Resources/doc` directory.

## Installation

### Get the bundle

To install the bundle, place it in the `vendor/bundles/Knp/Bundle` directory of your project
(so that it lives at `vendor/bundles/Knp/Bundle/MenuBundle`). You can do this by adding
the bundle as a submodule, cloning it, or simply downloading the source.

    git submodule add https://github.com/knplabs/KnpMenuBundle.git vendor/bundles/Knp/Bundle/MenuBundle

### Add the namespace to your autoloader

If it is the first Knp bundle you install in your Symfony 2 project, you
need to add the `Knp` namespace to your autoloader:

    // app/autoload.php
    $loader->registerNamespaces(array(
        'Knp'                       => __DIR__.'/../vendor/bundles'
        // ...
    ));

### Initialize the bundle

To start using the bundle, initialize the bundle in your Kernel. This
file is usually located at `app/AppKernel`:

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
        );
    )

That's it! Other than a few templating helpers (explained next), the `MenuBundle`
is a standalone PHP 5.3 library and can be used as soon as Symfony2's
class autoloader is aware of it (this was just accomplished above).

### What now?

Now you probably want to use this bundle in your Symfony2 project.  
You will need 5 steps to get to the point where you can just type in your Twig template:

    {{ knp_menu('main') }}

* Create a Menu class
* Declare a Menu service
* Load your Menu service in the Dependency Injection Extension
* Enable the Dependency Injection for your bundle
* Render your menu with Twig

Follow the tutorial in `Resources/doc/03-Twig-Integration.markdown` to
discover how the `MenuBundle` will rock your world!

## Credits

This bundle was originally ported from [ioMenuPlugin](http://github.com/weaverryan/ioMenuPlugin),
a menu plugin for symfony1. It has since been developed by [knpLabs](http://www.knplabs.com) and
the Symfony community.

> Although this bundle was written for Symfony2 projects, the core menu objects
> can also be used outside of Symfony2!
