# Fizz Buzz Php Kata

Kata from : https://kata-log.rocks/fizz-buzz-kata

1. Write a program that prints one line for each number from 1 to 100
2. For multiples of three print Fizz instead of the number
3. For the multiples of five print Buzz instead of the number
4. For numbers which are multiples of both three and five print FizzBuzz instead of the number

## TDD Rules
1. Do not write any production code without a failing test first
2. Write only enough test code as is sufficient enough to fail
3. Only implement a minimal code that makes the failing test pass.

## Red Green Refactor cycle

### Red : 
1. Write test
2. Test fails

### Green : 
3. Write code to make test pass
4. Code passes test

### Refactor :
5. Can I improve the working code?
6. Clean code, and test must pass

7. Start again!

### Written in PHP 8.1

### Install dependencies : 
composer install

### Test execution :
./vendor/bin/phpunit --bootstrap vendor/autoload.php --colors tests

### Regenerates new classes in project :
composer dumpautoload