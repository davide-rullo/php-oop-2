<main>

    <div class="container mt-4">

        <div class="row row-cols-3 g-5">
            <?php foreach ($toys as $toy) : ?>
                <div class="col">
                    <div class="card text-capitalize">

                        <img src="<?= $toy->image ?>" class="card-img-top">

                        <div class="card-body text-center d-flex flex-column gap-1">

                            <h3><?php echo $toy->getName(); ?></h3>
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

                            <h3><?php echo $fp->getName() ?></h3>
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

                            <h3><?php echo $kennel->getName() ?></h3>
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