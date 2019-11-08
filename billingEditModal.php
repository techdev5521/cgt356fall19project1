<!-- Start billingEditModal<?php echo $i; ?>.php -->

<!-- Edit Billing Record Modal -->
<!-- Creates modal & form-->
<div class="modal fade" id="billingEditModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="billingEditModal<?php echo $i; ?>" aria-hidden="true">
    <form action="doBillingUpdate.php" method="post">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="billingEditModal<?php echo $i; ?>">Billing Information</h5> <!--Title-->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <!--Exit button-->
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!--Modal content-->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Card Information</h5>
                                </div>

                                <!--Creates card information card-->
                                <div class="card-body">
                                    <div class="row">

                                        <!--Creates card number field-->
                                        <!--fills field with credit card information -->
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="cardNumber">Card Number</label>
                                                <input type="number" name="cardNumber" id="cardNumber" class="form-control" value="<?php echo $_SESSION['billing'][$i]['cardNumber']; ?>" required disabled>
                                                <input type="hidden" name="cardNumber" id="cardNumber" class="form-control" value="<?php echo $_SESSION['billing'][$i]['cardNumber']; ?>" required>
                                            </div>
                                        </div>

                                        <!--Creates Card type field-->
                                        <!--Selects the card type-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cardType">Card Type</label>
                                                <select name="cardType" id="cardType" class="form-control">
                                                    <option <?php if($_SESSION['billing'][$i]['cardType'] == "Visa") { echo("selected"); } ?> value="Visa">Visa</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardType'] == "Mastercard") { echo("selected"); } ?> value="Mastercard">Mastercard</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardType'] == "American Express") { echo("selected"); } ?> value="American Express">American Express</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardType'] == "Discover") { echo("selected"); } ?> value="Discover">Discover</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Creates card expiration month field-->
                                    <!--Selects the card expiration month-->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cardExpirationMonth">Month</label>
                                                <select name="cardExpirationMonth" id="cardExpirationMonth" class="form-control">
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationMonth'] == "01") { echo("selected"); } ?> value="01">01</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationMonth'] == "02") { echo("selected"); } ?> value="02">02</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationMonth'] == "03") { echo("selected"); } ?> value="03">03</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationMonth'] == "04") { echo("selected"); } ?> value="04">04</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationMonth'] == "05") { echo("selected"); } ?> value="05">05</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationMonth'] == "06") { echo("selected"); } ?> value="06">06</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationMonth'] == "07") { echo("selected"); } ?> value="07">07</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationMonth'] == "08") { echo("selected"); } ?> value="08">08</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationMonth'] == "09") { echo("selected"); } ?> value="09">09</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationMonth'] == "10") { echo("selected"); } ?> value="10">10</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationMonth'] == "11") { echo("selected"); } ?> value="11">11</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationMonth'] == "12") { echo("selected"); } ?> value="12">12</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Creates card expiration year field-->
                                        <!--Selects the card expiration year-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cardExpirationYear">Year</label>
                                                <select name="cardExpirationYear" id="cardExpirationYear" class="form-control">
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationYear'] == "19") { echo("selected"); } ?> value="19">19</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationYear'] == "20") { echo("selected"); } ?> value="20">20</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationYear'] == "21") { echo("selected"); } ?> value="21">21</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationYear'] == "22") { echo("selected"); } ?> value="22">22</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationYear'] == "23") { echo("selected"); } ?> value="23">23</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationYear'] == "24") { echo("selected"); } ?> value="24">24</option>
                                                    <option <?php if($_SESSION['billing'][$i]['cardExpirationYear'] == "25") { echo("selected"); } ?> value="25">25</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cardCVV">CVV</label>
                                                <input type="number" name="cardCVV" id="cardCVV" class="form-control" value="<?php echo $_SESSION['billing'][$i]['cardCVV']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="billingFirstName">First Name</label>
                                        <input type="text" name="billingFirstName" id="billingFirstName" class="form-control" value="<?php echo $_SESSION['billing'][$i]['billingFirstName']; ?>" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="billingLastName">Last Name</label>
                                        <input type="text" name="billingLastName" id="billingLastName" class="form-control" value="<?php echo $_SESSION['billing'][$i]['billingLastName']; ?>" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="billingStreet">Street Address</label>
                                        <input type="text" name="billingStreet" id="billingStreet" class="form-control" value="<?php echo $_SESSION['billing'][$i]['billingStreet']; ?>" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="billingCity">City</label>
                                        <input type="text" name="billingCity" id="billingCity" class="form-control" value="<?php echo $_SESSION['billing'][$i]['billingCity']; ?>" >
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="billingState">State</label>
                                        <select name="billingState" id="billingState" class="form-control">
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "AL") { echo("selected"); } ?> value="AL">AL</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "AK") { echo("selected"); } ?> value="AK">AK</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "AR") { echo("selected"); } ?> value="AR">AR</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "AZ") { echo("selected"); } ?> value="AZ">AZ</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "CA") { echo("selected"); } ?> value="CA">CA</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "CO") { echo("selected"); } ?> value="CO">CO</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "CT") { echo("selected"); } ?> value="CT">CT</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "DC") { echo("selected"); } ?> value="DC">DC</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "DE") { echo("selected"); } ?> value="DE">DE</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "FL") { echo("selected"); } ?> value="FL">FL</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "GA") { echo("selected"); } ?> value="GA">GA</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "HI") { echo("selected"); } ?> value="HI">HI</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "IA") { echo("selected"); } ?> value="IA">IA</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "ID") { echo("selected"); } ?> value="ID">ID</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "IL") { echo("selected"); } ?> value="IL">IL</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "IN") { echo("selected"); } ?> value="IN">IN</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "KS") { echo("selected"); } ?> value="KS">KS</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "KY") { echo("selected"); } ?> value="KY">KY</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "LA") { echo("selected"); } ?> value="LA">LA</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "MA") { echo("selected"); } ?> value="MA">MA</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "MD") { echo("selected"); } ?> value="MD">MD</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "ME") { echo("selected"); } ?> value="ME">ME</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "MI") { echo("selected"); } ?> value="MI">MI</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "MN") { echo("selected"); } ?> value="MN">MN</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "MO") { echo("selected"); } ?> value="MO">MO</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "MS") { echo("selected"); } ?> value="MS">MS</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "MT") { echo("selected"); } ?> value="MT">MT</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "NC") { echo("selected"); } ?> value="NC">NC</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "NE") { echo("selected"); } ?> value="NE">NE</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "NH") { echo("selected"); } ?> value="NH">NH</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "NJ") { echo("selected"); } ?> value="NJ">NJ</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "NM") { echo("selected"); } ?> value="NM">NM</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "NV") { echo("selected"); } ?> value="NV">NV</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "NY") { echo("selected"); } ?> value="NY">NY</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "ND") { echo("selected"); } ?> value="ND">ND</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "OH") { echo("selected"); } ?> value="OH">OH</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "OK") { echo("selected"); } ?> value="OK">OK</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "OR") { echo("selected"); } ?> value="OR">OR</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "PA") { echo("selected"); } ?> value="PA">PA</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "RI") { echo("selected"); } ?> value="RI">RI</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "SC") { echo("selected"); } ?> value="SC">SC</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "SD") { echo("selected"); } ?> value="SD">SD</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "TN") { echo("selected"); } ?> value="TN">TN</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "TX") { echo("selected"); } ?> value="TX">TX</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "UT") { echo("selected"); } ?> value="UT">UT</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "VT") { echo("selected"); } ?> value="VT">VT</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "VA") { echo("selected"); } ?> value="VA">VA</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "WA") { echo("selected"); } ?> value="WA">WA</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "WI") { echo("selected"); } ?> value="WI">WI</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "WV") { echo("selected"); } ?> value="WV">WV</option>
                                            <option <?php if($_SESSION['billing'][$i]['billingState'] == "WY") { echo("selected"); } ?> value="WY">WY</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="billingZip">Zip Code</label>
                                        <input type="number" name="billingZip" id="billingZip" class="form-control" value="<?php echo $_SESSION['billing'][$i]['billingZip']; ?>" >
                                    </div>
                                </div>
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

<!-- End billingEditModal<?php echo $i; ?>.php -->