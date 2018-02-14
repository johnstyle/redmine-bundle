# RedmineBundle for Symfony 3

Implement Redmine client https://github.com/kbsali/php-redmine-api to Symfony service.

## Configuration

Enable the bundle in `app/AppKernel.php` file:

    $bundles = [
        // existing bundles
        new Johnstyle\RedmineBundle\JohnstyleRedmineBundle(),
    ]


Add the following minimal configuration in `app/config/config.yml`

    johnstyle_redmine:
        url: '%redmine.url%'
        token: '%redmine.token%'

## Usage

    $client = $this->container->get('johnstyle.redmine_client')->client();
    $client->user->listing();

View kbsali/php-redmine-api documentation for more example.
