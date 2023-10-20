<?php
class food extends product
{
    public $category;
    public $type;
    public function __construct($name, $price, $image, $category, $type, $productType)

    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->type = $type;
        $this->productType = $productType;
    }
}
