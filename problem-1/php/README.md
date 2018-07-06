# PHP Implementation of Project Euler Problem 1

## The Solution

The solution is implemented as a PHPUnit test case and can be seen
[here](test/Euler1Test.php).

## Run It

### Docker

If you have `make` and `docker` installed, you can run the test simply by
running

    $ make

from this directory.

### Native

If you do not have `docker`, you'll need to have
[composer](https://getcomposer.org/) installed.  Then run

    $ composer install; composer dump-autoload; ./vendor/bin/phpunit
