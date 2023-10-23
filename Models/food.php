<?php
class food extends product
{

    public $type;
    public function __construct($name, $price, $image, $category, $type, $productType)

    {
        parent::__construct($name, $price, $image, $category, $productType);
        $this->type = $type;
    }
}
