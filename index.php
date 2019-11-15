<?php

require __DIR__ .'/vendor/autoload.php';

use faker\provider\FontAwesomeGeneratorProvider;

$faker = Faker\Factory::create();
$faker->addProvider(new FontAwesomeGeneratorProvider($faker));
$icon_all = $faker->fontAwesomeIcon();
$icon_solid = $faker->fontAwesomeIcon('solid');
$icon_regular = $faker->fontAwesomeIcon('regular');
$icon_brands = $faker->fontAwesomeIcon('brands');
$style = 'all';
$iconList = $faker->fontAwesomeIcons($style);
?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    </head>
    <body>
    <h1>Testing faker</h1>
    <p><?php echo $faker->name; ?></p>
    <h2>Testing faker/font-awesome (5.9.0 / 2019-07-14)</h2>

    <h3>fontAwesomeIcon(string $style = 'all'):</h3>
    <div class="container" style="display: flex; flex-direction: row">

        <div style="padding:1em; margin:1em; border:1px solid #aaa;">
            <p>style 'all'</p>
            <i style="font-size:12em" class="<?php echo $icon_all; ?>" aria-hidden="true"></i><br/><br/>
            <?php echo $icon_all; ?>
        </div>
        <div style="padding:1em; margin:1em; border:1px solid #aaa;">
            <p>style 'regular'</p>
            <i style="font-size:12em" class="<?php echo $icon_regular; ?>" aria-hidden="true"></i><br/><br/>
            <?php echo $icon_regular; ?>
        </div>
        <div style="padding:1em; margin:1em; border:1px solid #aaa;">
            <p>style 'solid'</p>
            <i style="font-size:12em" class="<?php echo $icon_solid; ?>" aria-hidden="true"></i><br/><br/>
            <?php echo $icon_solid; ?>
        </div>
        <div style="padding:1em; margin:1em; border:1px solid #aaa;">
            <p>style 'brands'</p>
            <i style="font-size:12em" class="<?php echo $icon_brands; ?>" aria-hidden="true"></i><br/><br/>
            <?php echo $icon_brands; ?>
        </div>
    </div>

    <h3>function fontAwesomeIcons(string $style = 'all'):</h3>
    <?php
        echo '<p>style \''.$style.'\' <em>'. count($iconList).'</em> icons </p>';
        foreach ($iconList as $singleIcon){
            echo '<i style="font-size:1.2em; padding:5px;" class="'. $singleIcon . '" aria-hidden="true"></i>';
        }
    ?>

    </body>
</html>
