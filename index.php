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

class toy extends product
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


$toy1 = new Toy('palla', '4 €', "https://picsum.photos/200/300", 'dog', 'small', 'toy');
$toy2 = new Toy('peluche', '8 €', "https://picsum.photos/200/300", 'dog', 'medium', 'toy');

$food1 = new Food('meat', '10 €', "https://picsum.photos/200/300", 'cat', 'wet', 'food');
$food2 = new Food('vegetables', '9 €', "https://picsum.photos/200/300", 'dog', 'dry', 'food');

$kennel1 = new kennel('dog bed', '54.9 €', "https://picsum.photos/200/300", 'dog', 'big', 'kennel');
$kennel2 = new kennel('cat house', '45.9 €', "https://picsum.photos/200/300", 'cat', 'big', 'kennel');


$toys = [$toy1, $toy2];
$food_products = [$food1, $food2];
$kennels = [$kennel1, $kennel2];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand" href="#">
                    Animal Store
                </a>
            </div>
        </nav>
    </header>

    <main>

        <div class="container mt-4">






            <div class="row row-cols-3 g-5">
                <?php foreach ($toys as $toy) : ?>
                    <div class="col">
                        <div class="card text-capitalize">

                            <img src="<?= $toy->image ?>" class="card-img-top">

                            <div class="card-body text-center d-flex flex-column gap-1">

                                <h3><?php echo $toy->name ?></h3>
                                <h5><?php echo $toy->price ?></h5>
                                <p>Category: <?php echo "$toy->category, $toy->productType" ?></p>
                                <p>Size: <?php echo $toy->size ?></p>
                            </div>

                        </div>
                    </div>
                <?php endforeach ?>


                <?php foreach ($food_products as $fp) : ?>
                    <div class="col">
                        <div class="card text-capitalize">

                            <img src="<?= $fp->image ?>" class="card-img-top">

                            <div class="card-body text-center d-flex flex-column gap-1">

                                <h3><?php echo $fp->name ?></h3>
                                <h5><?php echo $fp->price ?></h5>
                                <p>Category: <?php echo "$fp->category, $fp->productType" ?></p>
                                <p>Type: <?php echo $fp->type ?></p>
                            </div>

                        </div>
                    </div>
                <?php endforeach ?>




                <?php foreach ($kennels as $kennel) : ?>
                    <div class="col">
                        <div class="card text-capitalize">

                            <img src="<?= $kennel->image ?>" class="card-img-top">

                            <div class="card-body text-center d-flex flex-column gap-1">

                                <h3><?php echo $kennel->name ?></h3>
                                <h5><?php echo $kennel->price ?></h5>
                                <p>Category: <?php echo "$kennel->category, $kennel->productType" ?></p>
                                <p>Size: <?php echo $kennel->size ?></p>
                            </div>

                        </div>
                    </div>
                <?php endforeach ?>




            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>