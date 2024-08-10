<?php
    declare(strict_types=1);

    require_once 'vendor/autoload.php';

    // use the factory to create a Faker\Generator instance
    $faker = Faker\Factory::create("en_PH");

    require_once 'libraries/SQL.php';

    $sql = new SQL();
    /* MySQL INSERT query */
    for($i=1; $i<=25; $i++){
        $lname = $sql->escapestr($faker->lastname());
        $fname = $sql->escapestr($faker->firstname());
        $mname = $sql->escapestr($faker->lastname());
        $address = $sql->escapestr($faker->Address());
        $email = $faker->companyEmail();
        $reg_date = $faker->dateTimeThisYear()->format('Y-m-d');
        $status = $faker->numberBetween(0, 2);
        $query = "INSERT INTO students (lname, fname, mname, address, email, registered_date,status) 
                VALUES ('{$lname}', '{$fname}', '{$lname}','{$address}','{$email}','{$reg_date}','{$status}')";
        echo $query;
        $sql->execute($query);
        echo ' -> DONE!';
        echo '<br>';
    }
    #$sql->execute();

    #echo $faker->lastname(). ', ' . $faker->firstname().' ' .$faker->lastname();
?>