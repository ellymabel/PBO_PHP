<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class mobil{
    public $merk ;
    public $warna;

    public function setMerk($merk){
        $this->merk = $merk;
    }
    public function getMerk(){
        return $this ->merk;
    }
    public function setWarna($warna){
        $this->warna=$warna;
    }
    public function getWarna(){
        return $this ->warna;
    }     
}
?>

<h1>
<?php

$mobilSaya = new Mobil();
$mobilSaya->setMerk('Rubicon');

echo $mobilSaya -> getMerk();
?>
</h1>
<h1>
<?php

$mobilSaya = new Mobil();
$mobilSaya->setWarna('pink');

echo $mobilSaya -> getWarna();

?>

</h1>

</body>
</html>
</tr>
