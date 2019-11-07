<!-- Start shippingModal.php -->

<!-- Edit Shipping Record Modal -->
<div class="modal fade" id="shippingModal" tabindex="-1" role="dialog" aria-labelledby="shippingModal" aria-hidden="true">
    <form action="#" method="post">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="shippingModal">Shipping Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shippingFirstName">First Name</label>
                                        <input type="text" name="shippingFirstName" id="shippingFirstName" class="form-control" value="<?php getSessionVariable("shippingFirstName"); ?>" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shippingLastName">Last Name</label>
                                        <input type="text" name="shippingLastName" id="shippingLastName" class="form-control" value="<?php getSessionVariable("shippingLastName"); ?>" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="shippingStreet">Street Address</label>
                                        <input type="text" name="shippingStreet" id="shippingStreet" class="form-control" value="<?php getSessionVariable("shippingStreet"); ?>" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shippingCity">City</label>
                                        <input type="text" name="shippingCity" id="shippingCity" class="form-control" value="<?php getSessionVariable("shippingCity"); ?>" >
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="shippingState">State</label>
                                        <select name="shippingState" id="shippingState" class="form-control">
                                            <option <?php if(returnSessionVariable("shippingState") == "AL") { echo("selected"); } ?> value="AL">AL</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "AK") { echo("selected"); } ?> value="AK">AK</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "AR") { echo("selected"); } ?> value="AR">AR</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "AZ") { echo("selected"); } ?> value="AZ">AZ</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "CA") { echo("selected"); } ?> value="CA">CA</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "CO") { echo("selected"); } ?> value="CO">CO</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "CT") { echo("selected"); } ?> value="CT">CT</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "DC") { echo("selected"); } ?> value="DC">DC</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "DE") { echo("selected"); } ?> value="DE">DE</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "FL") { echo("selected"); } ?> value="FL">FL</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "GA") { echo("selected"); } ?> value="GA">GA</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "HI") { echo("selected"); } ?> value="HI">HI</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "IA") { echo("selected"); } ?> value="IA">IA</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "ID") { echo("selected"); } ?> value="ID">ID</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "IL") { echo("selected"); } ?> value="IL">IL</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "IN") { echo("selected"); } ?> value="IN">IN</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "KS") { echo("selected"); } ?> value="KS">KS</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "KY") { echo("selected"); } ?> value="KY">KY</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "LA") { echo("selected"); } ?> value="LA">LA</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "MA") { echo("selected"); } ?> value="MA">MA</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "MD") { echo("selected"); } ?> value="MD">MD</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "ME") { echo("selected"); } ?> value="ME">ME</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "MI") { echo("selected"); } ?> value="MI">MI</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "MN") { echo("selected"); } ?> value="MN">MN</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "MO") { echo("selected"); } ?> value="MO">MO</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "MS") { echo("selected"); } ?> value="MS">MS</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "MT") { echo("selected"); } ?> value="MT">MT</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "NC") { echo("selected"); } ?> value="NC">NC</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "NE") { echo("selected"); } ?> value="NE">NE</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "NH") { echo("selected"); } ?> value="NH">NH</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "NJ") { echo("selected"); } ?> value="NJ">NJ</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "NM") { echo("selected"); } ?> value="NM">NM</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "NV") { echo("selected"); } ?> value="NV">NV</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "NY") { echo("selected"); } ?> value="NY">NY</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "ND") { echo("selected"); } ?> value="ND">ND</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "OH") { echo("selected"); } ?> value="OH">OH</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "OK") { echo("selected"); } ?> value="OK">OK</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "OR") { echo("selected"); } ?> value="OR">OR</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "PA") { echo("selected"); } ?> value="PA">PA</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "RI") { echo("selected"); } ?> value="RI">RI</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "SC") { echo("selected"); } ?> value="SC">SC</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "SD") { echo("selected"); } ?> value="SD">SD</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "TN") { echo("selected"); } ?> value="TN">TN</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "TX") { echo("selected"); } ?> value="TX">TX</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "UT") { echo("selected"); } ?> value="UT">UT</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "VT") { echo("selected"); } ?> value="VT">VT</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "VA") { echo("selected"); } ?> value="VA">VA</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "WA") { echo("selected"); } ?> value="WA">WA</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "WI") { echo("selected"); } ?> value="WI">WI</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "WV") { echo("selected"); } ?> value="WV">WV</option>
                                            <option <?php if(returnSessionVariable("shippingState") == "WY") { echo("selected"); } ?> value="WY">WY</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="shippingZip">Zip Code</label>
                                        <input type="number" name="shippingZip" id="shippingZip" class="form-control" value="<?php getSessionVariable("shippingZip"); ?>" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- End shippingModal.php -->