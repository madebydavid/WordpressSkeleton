# WordpressSkeleton

## Wordpress Skeleton for composer create-project use.


```bash
$ curl -sS https://getcomposer.org/installer | php
```

```bash
$ php composer.phar create-project --prefer-dist madebydavid/wordpress-skeleton my-wordpress-directory
```

```bash
$ mv my-wordpress-directory/local-config-sample.php my-wordpress-directory/local-config.php
```

change these settings in the my-wordpress-directory/local-config.php file:

```php
define('DB_NAME', 'my-wordpress-database');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost'); 
define('WP_HOME', 'http://my-wordpress-site/');
define('WP_SITEURL', 'http://my-wordpress-site/wordpress');
```
