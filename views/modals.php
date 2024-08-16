<!-- edit address -->

    <div class="modal fade" id="editaddress" tabindex="-1" aria-labelledby="editaddressLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editaddressLabel">Edit Address</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="addressbook.php" method="post" role="form">

                    <div class="modal-body" id="edit_addr_modal">
                        <!-- <input type="text" name="dataid" id="dataid" value="" /> -->




                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        <button type="submit" name="delete_address_book"
                            class="btn  align-items-center text-center align-middle delete"><i
                                class="bi bi-gear-fill align-middle"></i> Delete</button>
                        <button type="submit" name="edit_address_book"
                            class="btn  align-items-center text-center align-middle save"><i
                                class="bi bi-gear-fill align-middle"></i> Save Changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

<!-- add address -->
<div class="modal fade" id="addaddress" tabindex="-1" aria-labelledby="addaddressLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addaddressLabel">Add Address</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="addressbook.php" method="post" role="form">

                <div class="modal-body">

                    <input type="hidden" name="user_id" class="form-control"
                        value="<?php echo $_SESSION['user_details']['id'] ?>">

                    Address :
                    <input type="text" name="address" class="form-control" required>
                    Name :
                    <input type="text" name="name" class="form-control" required>
                    State :
                    <input type="text" name="state" class="form-control" required>
                    City :
                    <input type="text" name="city" class="form-control" required>
                    Post Code :
                    <input type="text" name="postcode" class="form-control" required>
                    Phone Number :
                    <input type="text" name="phone" class="form-control" required>
                    <br>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="default_address" role="switch"
                            id="flexSwitchCheckChecked">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Set As Default Address</label>
                    </div>
                    <?php


                    //   header('location: index.php');
                    
                    ?>


                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    <!-- <button type="submit" name="delete_address_book"
                        class="btn  align-items-center text-center align-middle delete"><i
                            class="bi bi-gear-fill align-middle"></i> Delete</button> -->
                    <button type="submit" name="add_address_book"
                        class="btn  align-items-center text-center align-middle save"><i
                            class="bi bi-gear-fill align-middle"></i> Add</button>
                </div>
            </form>

        </div>
    </div>
</div>