# Faker-FontAwesome

Faker extension for randomly picking a [FontAwesome](https://fontawesome.com/) (5.11.0 / 2019-11-15) icon.

The library contains all of [FontAwesome's Library](https://fontawesome.com/cheatsheet).

## Installation

```sh
composer require imsidz/fontawesome-generator
```

Alternatively, add to your composer.json file with:

```sh
"require": {
        "imsidz/fontawesome-generator": "dev-master"
    }
```

## Usage

Use the `FontAwesomeGeneratorProvider` class in combination with [Faker](https://github.com/fzaninotto/Faker) to produce the random font name:

```php
    <?php
    require __DIR__ .'/vendor/autoload.php';

    use faker\provider\FontAwesomeGeneratorProvider;

    $faker = Faker\Factory::create();
    $faker->addProvider(new FontAwesomeGeneratorProvider($faker));
    $colour = $faker->fontAwesomeIcon();
    ?>
    <i style="font-size:200px" class="fa <?php echo $icon; ?>" aria-hidden="true"></i>
```

This will generate an i tag with a random fontawesome icon.

## Example index file

Within the `vendor/imsidz/fontawesomegenerator/` folder you will find an `index.php` file which can be moved
to your root directory and will provide an example of both functions.

![Example inde file](fontawesome_test.png)
*Sample output*

## Tests

There are two PHPUnit tests that will check that the library will return a correct FontAwesome name value and that it is contained
within the 5.9.0 library.
