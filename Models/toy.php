<?php
class toy extends product
{
    public $size;
    public function __construct($name, $price, $image, $category, $size, $productType)

    {
        parent::__construct($name, $price, $image, $category, $productType);

        $this->size = $size;
    }
}
