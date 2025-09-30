<?php
    $loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. At, perspiciatis delectus commodi nobis molestiae fugiat aut impedit magnam, ullam reprehenderit quod porro pariatur labore rem iure cum consectetur facere accusantium!";

    echo "<p> {$loremIpsum} </p>";
    echo "Panjang Karakter: " . strlen($loremIpsum) ." <br>";
    echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
    echo "<p>" . strtoupper($loremIpsum) . "</p>";
    echo "<p>" . strtolower($loremIpsum) . "</p>";
?>