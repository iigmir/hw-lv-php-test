# hw-lv-php-test

**H**ello **W**orld **L**ara**V**el **PHP** **Test**.

1. Install Docker.
2. Type `docker-compose up -d` on terminal.
3. Access `http://localhost:8000` on browser or cURL.

## Issues

### Composer

No Composer by default?

```shell
PHP Warning:  require(/app/vendor/autoload.php): Failed to open stream: No such file or directory in /app/artisan on line 18
Uncaught Error: Failed opening required '/app/vendor/autoload.php' (include_path='.:/opt/bitnami/php/lib/php')
```

* <https://stackoverflow.com/a/41209642/7162445>
* <https://www.weiyuan.com.tw/article/45>
* <https://github.com/bitnami/containers/issues/30800>
* <https://stackoverflow.com/a/46792094/7162445>
* <https://stackoverflow.com/a/54818189/7162445>
