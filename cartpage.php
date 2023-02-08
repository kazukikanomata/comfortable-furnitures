<?php
include_once 'header.php';
?>
<div class="container">
    <h2 class="my-2">Shopping Cart</h2>
    <form action="#" method="post">
        <div class="row">
            <div class="col-8">
                <div class="row my-3 text-center">
                    <div class="col-2">
                        <h5>Name</h5>
                    </div>
                    <div class="col-2">
                        <h5>Price</h5>
                    </div>
                    <div class="col-2">
                        <h5>Quantity</h5>
                    </div>
                    <div class="col-2">
                        <h5>Size</h5>
                    </div>
                    <div class="col-2">
                        <h5>Colors</h5>
                    </div>
                </div>
                <hr>
                <div class="row text-center">
                    <div class="col-2">
                        <h5>Chair1</h5>
                        <img src="image/gaming.chair1.jpg" alt=""class="w-75">
                    </div>
                    <div class="col-2">
                        <h5>$30</h5>
                    </div>
                    <div class="col-2">
                        <input type="number" value="1" class="for-contorl w-50 mb-4">        
                    </div>
                    <div class="col-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Size
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">1.For Children</a>
                            <a class="dropdown-item" href="#">2.For Adult</a>
                            <a class="dropdown-item" href="#">3.For Women</a>
                        </div>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Colors
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Black</a>
                            <a class="dropdown-item" href="#">White</a>
                            <a class="dropdown-item" href="#">Pink</a>
                            <a class="dropdown-item" href="#">Yellow</a>
                        </div>
                        <button type="submit" class="btn btn-danger btn-lg mt-5" name="btn_cancel">Cancel</button>
                    </div>
                </div>
                <hr>
                <div class="row text-center">
                    <div class="col-2">
                        <h5>Discount sofa</h5>
                        <img src="image/discount.sofa1.jpg" alt=""class="w-75">
                    </div>
                    <div class="col-2">
                        <h5>$24</h5>
                    </div>
                    <div class="col-2">
                        <input type="number" value="1" class="for-contorl w-50 mb-4">
                    </div>
                    <div class="col-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Size
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">1.For Children</a>
                            <a class="dropdown-item" href="#">2.For Adult</a>
                            <a class="dropdown-item" href="#">3.For Women</a>
                        </div>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Colors
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Black</a>
                            <a class="dropdown-item" href="#">White</a>
                            <a class="dropdown-item" href="#">Pink</a>
                            <a class="dropdown-item" href="#">Yellow</a>
                        </div>
                        <button type="submit" class="btn btn-danger btn-lg mt-5" name="btn_cancel">Cancel</button>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-4">
                <h2 class="text-center">Total</h2>
                <h5>Price Details</h5>
                <div class="row my-3">
                    <div class="col-md-6">
                        <p>Chair1</p>
                    </div>
                    <div class="col-md-6">
                        <p>$30</p>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-6">
                        <p>Discount sofa</p>
                    </div>
                    <div class="col-md-6">
                        <p>$24</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <h5>Order Total</h5>
                    </div>
                    <div class="col-md-6">
                        <p>$54</p>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary w-50" name="btn_decide">PLACE OREDER</button>
                </div>
                <hr>        
            </div>
        </div>
    </form>
</div>
<?php
include_once 'footer.php';
?>