<?php
include_once 'header.php';
?>
<div class="container">
<!-- left side -->
    <div class="row">
        <div class="col-md-4">
            <div class="card my-5">
                <div>
                    <h4 class="m-2 d-inline">Chair1</h4>
                    <i class="fas fa-heart float-right m-3"></i>
                </div>
                <img src="image/gaming.chair1.jpg" alt="chair for those who are playing games">
                <div class="card-body">
                    <h5 class="card-text bold">$30</h5> 
                </div>
            </div>
        </div>
<!-- right side -->
        <div class="col-md-4">
            <h3 class="mt-5">Chair1</h3>
            <p>It's functional for playing games. </p>
            <p>Also, It's good for doing works. </p>
            <form action="#" method="post">
                <div class="row">
                    <div class="col-md-3 mr-4">
                        <h4>Size</h4>
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Size
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">1.For Children</a>
                            <a class="dropdown-item" href="#">2.For Adult</a>
                            <a class="dropdown-item" href="#">3.For Women</a>
                        </div>
                    </div>
                    <div class="col-md-3 ml-4">
                        <h4>Colors</h4>
                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Colors
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Black</a>
                            <a class="dropdown-item" href="#">White</a>
                            <a class="dropdown-item" href="#">Pink</a>
                            <a class="dropdown-item" href="#">Yellow</a>
                        </div>
                    </div>
                </div>
                <h4 class="mt-3">Quantity</h4>
                <input type="number" class="form-control w-50" value="1" style="">
                <br>
                <button type="button" class="btn btn-danger mr-2" name="btn_add_cart">ADD TO CART</button>
                <button type="button" class="btn btn-success ml-2" name="btn_buy_now">BUY NOW</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>