<?php 
    $title = "Strings";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1> 
    <?php
       $phrase1 ="Students who came late";
       $phrase2 ="in class, stand with Rock";
       $name = "omar reid";
     //  echo $phrase1;
     //  echo $phrase2;

    echo $phrase1 . ", named Tiffany, " . $phrase2;
    echo '<br/>';
    echo '<hr/>';
    //string transformation
    echo 'Uppercase first letter: ' . ucfirst($name). '<br/>';
    echo 'Uppercase first letter of each word: ' . ucwords($name). '<br/>';
    echo 'Upper case: ' . strtoupper($name).'<br/>';
    echo 'Lower case: ' . strtolower("THIS WAS ALL UPPERCASE").'<br/>';
    echo '<hr/>';
    echo 'Repeat String: ' . str_repeat('a',10) . '<br/>';
    echo 'Repeat String: ' . strtoupper(str_repeat('a',10)) . '<br/>';
    echo 'Get a Substring: ' . substr($name,5,10) . '<br/>';
    
    echo 'Get position of string: ' . strpos($name, 'm') . '<br/>';

    echo 'Find Character "o": ' . strchr($name, 'o') . '<br/>';
    echo 'Find Character "m": ' . strchr($name, 'm') . '<br/>';
    echo 'Find Character "i": ' . strchr($name, 'i') . '<br/>';
    echo 'Find Character "e": ' . strchr($name, 'e') . '<br/>';

    echo 'Find Length of String: ' . strlen($name) . '<br/>';

    echo 'Without Trim: ' . "A" . "BCD" . "E" . '<br/>';

    echo 'Trim Spaces on Both Sides: ' . "A" . trim(" B C D ") . "E" . '<br/>';
    echo 'Trim Spaces to the left: ' . "A" . ltrim(" B C D ") . "E" . '<br/>';
    echo 'Trim Spaces to the right: ' . "A" . rtrim(" B C D ") . "E" . '<br/>';

    echo 'Replace string with another: ' . str_replace("stand", "sit", $phrase2) . '<br/>';


?>

<?php require 'includes/footer.php'?>