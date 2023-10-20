<?php
class kennel extends product
{
    public $size;
    public function __construct($name, $price, $image, $category, $size, $productType)

    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->size = $size;
        $this->productType = $productType;
    }
}
