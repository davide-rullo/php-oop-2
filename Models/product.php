<?php
class product
{
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
}
