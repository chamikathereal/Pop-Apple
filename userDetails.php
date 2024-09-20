<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop Apple - User Details</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="img/images/favicon.png" />
</head>

<body class="index-body">

    <?php include "navbar.php"; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5 mb-2 d-flex justify-content-center">
                <div class="col-8">
                    <a href="" class="shop-name-anchor headers-font ">
                        <h4>Enter Details For Make Your Order!</h4>
                    </a>
                    <p class="p-tags-font blockquote-footer">It’s Here!</p>
                </div>
            </div>
            <div class="col-12 mt-3 mb-5 d-flex justify-content-center">
                <div class="col-12 col-md-8">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">First Name</label>
                                <input type="text" class="form-control apple-form-input" id="formGroupExampleInput" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Last Name</label>
                                <input type="text" class="form-control apple-form-input" id="formGroupExampleInput" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control apple-form-input" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Mobile Number</label>
                                <input type="text" class="form-control apple-form-input" id="inputPassword4" placeholder="Mobile Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control apple-form-input" id="inputAddress" placeholder="1234 Main St">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Province</label>
                                <select class="form-control form-control-lg apple-form-input">
                                    <option>Select Province</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <select class="form-control form-control-lg apple-form-input">
                                    <option>Select City</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Postal Code</label>
                                <input type="text" class="form-control apple-form-input" id="formGroupExampleInput" placeholder="Postal Code">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Country</label>
                                <select class="form-control form-control-lg apple-form-input">
                                    <option>Select Country</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress">Location Link</label>
                            <input type="text" class="form-control apple-form-input" id="inputAddress" placeholder="https://goo.gl/maps/indea">
                        </div>

                        <div class="form-group mb-5">
                            <label for="exampleFormControlTextarea1">Add Note You If You want Mention About Your Address:</label>
                            <textarea class="form-control apple-form-input" id="exampleFormControlTextarea1" placeholder="Write any question you have in here." rows="3"></textarea>
                        </div>

                        <button type="button" class="btn btn-primary btn-block product-item-button" data-toggle="modal" data-target="#exampleModal">
                            Buy Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enter Your Card Detals !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Card Name</label>
                                <input type="text" class="form-control apple-form-input" id="formGroupExampleInput" placeholder="Card Name :">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Card Number</label>
                                <input type="text" class="form-control apple-form-input" id="inputPassword4" placeholder="Card Number">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Expire</label>
                                <input type="text" class="form-control apple-form-input" id="inputPassword4" placeholder="Expire">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">CVC</label>
                                <input type="email" class="form-control apple-form-input" id="inputEmail4" placeholder="CVC">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="invoice.php" class="btn btn-primary">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>

    <script src="script.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>