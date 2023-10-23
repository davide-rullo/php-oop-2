<?php
require_once __DIR__ . '/../Traits/Namable.php';
class product
{
    use Namable;

    public $name;
    public $price;
    public $image;
    public $category;
    public $productType;



    public function __construct($name, $price, $image, $category, $productType)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->productType = $productType;
    }

    public function insertPrice($addedPrice)
    {

        if (!is_numeric($addedPrice)) {



            throw new InvalidArgumentException('It\'s not a number. The function needs a number to work.', 1);
        } elseif ($addedPrice > 1000) {
            //throw new Exception('Invalid price range!');
            throw new RangeException('Invalid price range!');
        }
        return $addedPrice;
    }
}

/* 
$exampleProduct = new Product('Osso', 20, 'image', 'categ', 'pt');

try {
    $newPrice = $exampleProduct->insertPrice('1200');
    echo $newPrice;
} catch (Exception $error) {
    echo $error->getMessage();
    echo '<br>';
    echo $error->getFile();
    echo '<br>';
    echo $error->getTraceAsString();
}
*/
