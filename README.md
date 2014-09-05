# WordpressSkeleton [![Dependency Status](http://www.versioneye.com/php/madebydavid:wordpress-skeleton/1.0.0/badge.svg)](http://www.versioneye.com/php/madebydavid:wordpress-skeleton/1.0.0)

## This is version 1.0.0, using Wordpress 3.9.2

## Wordpress Skeleton using composer. Add plugins and themes from [WordPress Packagist](http://wpackagist.org/).

#### 1. Install composer if required:
```bash
$ curl -sS https://getcomposer.org/installer | php
```

#### 2. Use composer to install this project:
```bash
$ php composer.phar create-project --prefer-dist madebydavid/wordpress-skeleton my-wordpress-directory
$ cd my-wordpress-directory
```

#### 3. Move the local config sample to become the real local config file
```bash
$ mv local-config-sample.php local-config.php
```

#### 4. Change these settings in the local-config.php file:
```php
define('DB_NAME', 'my-wordpress-database');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost'); 
define('WP_HOME', 'http://my-wordpress-site/');
define('WP_SITEURL', 'http://my-wordpress-site/wordpress');
```

#### 5. Create the db:
```bash
$ mysqladmin -uroot create my-wordpress-database
```

#### 6. Initialize using the included [WP-CLI](http://wp-cli.org/) and you're ready to go.
```bash
$ cd vendor/wp-cli/wp-cli/bin/
$ ./wp --path=../../../../wordpress/ --url="http://my-wordpress-site/" db reset
$ ./wp --path=../../../../wordpress/ --url="http://my-wordpress-site/" core install \
    --admin_user=root --admin_password=password \
    --admin_email=my@email.goes.here.com \
    --title="My Site Title" 
```

