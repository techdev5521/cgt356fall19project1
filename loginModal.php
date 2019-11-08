<!-- Start loginModal.php -->

<!-- Edit Login Info Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <form action="doLoginUpdate.php" method="post">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModal">Login Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" value="<?php getSessionVariable("username") ?>" required disabled>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="currentPassword">Current Password</label>
                                <input type="password" name="currentPassword" id="currentPassword" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="newPassword">New Password</label>
                                <input type="password" name="newPassword" id="newPassword" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="newPasswordConfirm">New Password (Confirm)</label>
                                <input type="password" name="newPasswordConfirm" id="newPasswordConfirm" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times mr-2"></i>Close</button>
                    <button type="submit" class="btn btn-success"><i class="far fa-save mr-2"></i>Save Changes</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- verifies password -->
<script>
    document.getElementById("firstName").focus();

    var password = document.getElementById("newPassword"), confirm_password = document.getElementById("newPasswordConfirm");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;

</script>

<!-- End loginModal.php -->