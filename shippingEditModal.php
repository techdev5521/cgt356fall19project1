<!-- Start shippingEditModal<?php echo $row['ID']; ?>.php -->

<!-- Edit Shipping Record Modal -->
<div class="modal fade" id="shippingEditModal<?php echo $row['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="shippingEditModal<?php echo $row['ID']; ?>" aria-hidden="true">
    <form action="doShippingUpdate.php" method="post">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="shippingEditModal<?php echo $row['ID']; ?>">Shipping Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">

                                <input type="hidden" name="ID" id="ID" class="form-control" value="<?php echo $row['ID']; ?>" >

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shippingFirstName">First Name</label>
                                        <input type="text" name="shippingFirstName" id="shippingFirstName" class="form-control" value="<?php echo $_SESSION['shipping'][$row['ID']]['shippingFirstName']; ?>" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shippingLastName">Last Name</label>
                                        <input type="text" name="shippingLastName" id="shippingLastName" class="form-control" value="<?php echo $_SESSION['shipping'][$row['ID']]['shippingLastName']; ?>" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="shippingStreet">Street Address</label>
                                        <input type="text" name="shippingStreet" id="shippingStreet" class="form-control" value="<?php echo $_SESSION['shipping'][$row['ID']]['shippingStreet']; ?>" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shippingCity">City</label>
                                        <input type="text" name="shippingCity" id="shippingCity" class="form-control" value="<?php echo $_SESSION['shipping'][$row['ID']]['shippingCity']; ?>" >
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="shippingState">State</label>
                                        <select name="shippingState" id="shippingState" class="form-control">
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "AL") { echo("selected"); } ?> value="AL">AL</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "AK") { echo("selected"); } ?> value="AK">AK</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "AR") { echo("selected"); } ?> value="AR">AR</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "AZ") { echo("selected"); } ?> value="AZ">AZ</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "CA") { echo("selected"); } ?> value="CA">CA</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "CO") { echo("selected"); } ?> value="CO">CO</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "CT") { echo("selected"); } ?> value="CT">CT</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "DC") { echo("selected"); } ?> value="DC">DC</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "DE") { echo("selected"); } ?> value="DE">DE</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "FL") { echo("selected"); } ?> value="FL">FL</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "GA") { echo("selected"); } ?> value="GA">GA</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "HI") { echo("selected"); } ?> value="HI">HI</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "IA") { echo("selected"); } ?> value="IA">IA</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "ID") { echo("selected"); } ?> value="ID">ID</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "IL") { echo("selected"); } ?> value="IL">IL</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "IN") { echo("selected"); } ?> value="IN">IN</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "KS") { echo("selected"); } ?> value="KS">KS</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "KY") { echo("selected"); } ?> value="KY">KY</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "LA") { echo("selected"); } ?> value="LA">LA</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "MA") { echo("selected"); } ?> value="MA">MA</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "MD") { echo("selected"); } ?> value="MD">MD</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "ME") { echo("selected"); } ?> value="ME">ME</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "MI") { echo("selected"); } ?> value="MI">MI</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "MN") { echo("selected"); } ?> value="MN">MN</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "MO") { echo("selected"); } ?> value="MO">MO</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "MS") { echo("selected"); } ?> value="MS">MS</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "MT") { echo("selected"); } ?> value="MT">MT</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "NC") { echo("selected"); } ?> value="NC">NC</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "NE") { echo("selected"); } ?> value="NE">NE</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "NH") { echo("selected"); } ?> value="NH">NH</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "NJ") { echo("selected"); } ?> value="NJ">NJ</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "NM") { echo("selected"); } ?> value="NM">NM</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "NV") { echo("selected"); } ?> value="NV">NV</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "NY") { echo("selected"); } ?> value="NY">NY</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "ND") { echo("selected"); } ?> value="ND">ND</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "OH") { echo("selected"); } ?> value="OH">OH</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "OK") { echo("selected"); } ?> value="OK">OK</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "OR") { echo("selected"); } ?> value="OR">OR</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "PA") { echo("selected"); } ?> value="PA">PA</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "RI") { echo("selected"); } ?> value="RI">RI</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "SC") { echo("selected"); } ?> value="SC">SC</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "SD") { echo("selected"); } ?> value="SD">SD</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "TN") { echo("selected"); } ?> value="TN">TN</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "TX") { echo("selected"); } ?> value="TX">TX</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "UT") { echo("selected"); } ?> value="UT">UT</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "VT") { echo("selected"); } ?> value="VT">VT</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "VA") { echo("selected"); } ?> value="VA">VA</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "WA") { echo("selected"); } ?> value="WA">WA</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "WI") { echo("selected"); } ?> value="WI">WI</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "WV") { echo("selected"); } ?> value="WV">WV</option>
                                            <option <?php if($_SESSION['shipping'][$row['ID']]['shippingState'] == "WY") { echo("selected"); } ?> value="WY">WY</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="shippingZip">Zip Code</label>
                                        <input type="number" name="shippingZip" id="shippingZip" class="form-control" value="<?php echo $_SESSION['shipping'][$row['ID']]['shippingZip'] ?>" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times mr-2"></i>Close</button>
                    <button type="submit" class="btn btn-success"><i class="far fa-save mr-2"></i>Save Changes</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- End shippingEditModal<?php echo $row['ID']; ?>.php -->