<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="">Coffee<small>Blend</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="http://localhost/Assignment2/Home" class="nav-link">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-4">Admin</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 pr-md-5">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addnew">ADD NEW</a>
            </div>
            <div class="col-md-6 pr-md-5">
                <div class="heading-section text-md-right ftco-animate">
                    <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search">
                </div>
            </div>
            <table class="table table-striped table-dark" id="myTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>RoomName</th>
                        <th>Price</th>
                        <th>Img</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['rooms'] as $room): ?>
                        <tr>
                            <td>
                                <?php echo $room['id']; ?>
                            </td>
                            <td>
                                <?php echo $room['roomName']; ?>
                            </td>
                            <td>
                                <?php echo $room['price']; ?>
                            </td>
                            <td>
                                <?php echo $room['image']; ?>
                            </td>
                            <td>
                                <a href="http://localhost/Assignment2/Admin/viewDetail/<?php echo $room['id']; ?>"
                                    class="btn btn-primary">View</a>

                                <a href="#edit_<?php echo $room['id']; ?>" class="btn btn-success btn-sm"
                                    data-toggle="modal"> Edit</a>

                                <a href="#delete_<?php echo $room['id']; ?>" class="btn btn-danger btn-sm"
                                    data-toggle="modal"> Delete</a>
                            </td>
                            <!-- Edit Modal -->
                            <div class="modal fade" id="edit_<?php echo $room['id']; ?>" tabindex="-1"
                                aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-dark" id="ModalLabel">Edit room</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST"
                                                action="http://localhost/Assignment2/Admin/EditRoom/<?php echo $room['id']; ?>">
                                                <div class="mb-3 row">
                                                    <label class="col-sm-2 col-form-label">Room</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control-plaintext" name="roomname"
                                                            value="<?php echo $room['roomName']; ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-2 col-form-label">Price</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control-plaintext" name="price"
                                                            value="<?php echo $room['price']; ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-2 col-form-label">Img</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control-plaintext" name="img"
                                                            value="<?php echo $room['image']; ?>">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" name="edit" class="btn btn-primary"> Update</a>
                                                </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Delete Modal -->
                            <div class="modal fade" id="delete_<?php echo $room['id']; ?>" tabindex="-1"
                                aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-dark" id="ModalLabel">Delete room</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-center">Are you sure you want to Delete</p>
                                            <h2 class="text-center text-dark">
                                                <?php echo $room['roomName'] . ' ' . $room['price']; ?>
                                            </h2>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <a href="http://localhost/Assignment2/Admin/deleteRoom/<?php echo $room['id']; ?>"
                                                class="btn btn-danger">
                                                Yes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Add New Modal -->
            <div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title text-dark">Add New</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="http://localhost/Assignment2/Admin/addRoom">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Room</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control-plaintext" name="roomname">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control-plaintext" name="price">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Img</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control-plaintext" name="img">
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="add" class="btn btn-primary"><span
                                    class="glyphicon glyphicon-floppy-disk"></span> Save</a>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    function myFunction() {
        // Declare variables 
        var input = document.getElementById("myInput");
        var filter = input.value.toUpperCase();
        var table = document.getElementById("myTable");
        var trs = table.tBodies[0].getElementsByTagName("tr");

        // Loop through first tbody's rows
        for (var i = 0; i < trs.length; i++) {
            // define the row's cells
            var tds = trs[i].getElementsByTagName("td");
            // hide the row
            trs[i].style.display = "none";
            // loop through row cells
            for (var i2 = 0; i2 < tds.length; i2++) {
                // if there's a match
                if (tds[i2].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    // show the row
                    trs[i].style.display = "";
                    // skip to the next row
                    continue;
                }
            }
        }
    }
</script>