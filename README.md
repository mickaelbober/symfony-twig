Symfony Twig Application
============

The "Symfony Twig Application" is a simple application to show how to response a 
request with a template twig following the [Symfony Best Practices][1].

Requirements
------------

Require the [usual Symfony application requirements][2].

  * PHP 7.2.9 or higher
  * Some PHP extensions
  * Composer
  * Symfony CLI

Installation
------------

Clone the [repository][3] on your computer:

```bash
$ git clone https://github.com/mickaelbober/symfony-twig.git symfony-twig
```

Composer
------------

[Download Composer][4] to install the `composer` binary on your computer and install
dependencies to the `./vendor` directory.

```bash
$ cd symfony-twig/
$ composer install
```

Symfony CLI
------------

[Download Symfony][5] to install the `symfony` binary on your computer. 

```bash
$ wget https://get.symfony.com/cli/installer -O - | bash
```

Run this command and access the application in your
browser at the given URL (<https://localhost:8000> by default):

```bash
$ cd symfony-twig/
$ symfony server:start
```

If you don't have the Symfony binary installed, run `php -S localhost:8000 -t public/`
to use the built-in PHP web server or [configure a web server][6] like Nginx or
Apache to run the application.

References
------------

 * [Twig : Documentation][7]
 * [Twig : Functions][8] 
 * [Twig : Filters][9]
 * [Twig : Extensions][10] 
 * [Openclassrooms : Tutorial][11]
 
[1]: https://symfony.com/doc/current/best_practices.html
[2]: https://symfony.com/doc/current/setup.html
[3]: https://github.com/mickaelbober/symfony-twig
[4]: https://getcomposer.org/download/
[5]: https://symfony.com/download
[6]: https://symfony.com/doc/current/setup/web_server_configuration.html
[7]: https://twig.symfony.com/
[8]: https://twig.symfony.com/doc/3.x/functions/index.html
[9]: https://twig.symfony.com/doc/3.x/filters/index.html
[10]: https://symfony.com/doc/current/templating/twig_extension.html#create-the-extension-class
[11]: https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-4/5517021-dynamisez-vos-vues-a-l-aide-de-twig
