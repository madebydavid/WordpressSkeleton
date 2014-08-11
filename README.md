# WordpressSkeleton

## Wordpress Skeleton for composer create-project use.

Install composer if required:
```bash
$ curl -sS https://getcomposer.org/installer | php
```

Use composer to install this project:
```bash
$ php composer.phar create-project --prefer-dist madebydavid/wordpress-skeleton my-wordpress-directory
$ cd my-wordpress-directory
```

Move the local config sample to become the real local config file
```bash
$ mv local-config-sample.php local-config.php
```

Change these settings in the local-config.php file:
```php
define('DB_NAME', 'my-wordpress-database');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost'); 
define('WP_HOME', 'http://my-wordpress-site/');
define('WP_SITEURL', 'http://my-wordpress-site/wordpress');
```

Create the db:
```bash
$ mysqladmin -uroot create my-wordpress-database
```

Initialize:
```bash
$ cd vendor/wp-cli/wp-cli/bin/
$ ./wp --path=../../../../wordpress/ --url="http://my-wordpress-site/" db reset
$ ./wp --path=../../../../wordpress/ --url="http://my-wordpress-site/" core install \
    --admin_user=root 
    --admin_password=password
    --admin_email=my@email.goes.here.com
    --title="My Site Title"
```

