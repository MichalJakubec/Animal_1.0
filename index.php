<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="" method="get">
    Number_of_mice: <input type="text" name="mice" /><br />
    <input type="submit" name="submit" value="Hunt mice!" />
</form>

<?php
class Animal
{
    public $species;
    private $fullness = 0;
    
    public function __construct($species)
    {
        $this->species = $species;
    }
    
    public function hunt($number_of_mice)
    {
        if ($this->fullness + $number_of_mice <= 100){
                    $this->fullness += $number_of_mice;
       } else {
                    echo('The wild animal is fullness!');
                    }
    }
}

$cat = new Animal('Cat');

$cat->hunt($_GET['mice']);

?>
</body>
</html>