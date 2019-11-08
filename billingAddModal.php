<!-- Start billingAddModal.php -->

<!-- Edit Billing Record Modal -->
<!-- Creates modal & form-->
<div class="modal fade" id="billingAddModal" tabindex="-1" role="dialog" aria-labelledby="billingAddModal" aria-hidden="true">
    <form action="doBillingAdd.php" method="post">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="billingAddModal">Billing Information</h5> <!--Title-->
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
                                                <input type="number" name="cardNumber" id="cardNumber" class="form-control" required>
                                            </div>
                                        </div>

                                        <!--Creates Card type field-->
                                        <!--Selects the card type-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cardType">Card Type</label>
                                                <select name="cardType" id="cardType" class="form-control">
                                                    <option value="Visa">Visa</option>
                                                    <option value="Mastercard">Mastercard</option>
                                                    <option value="American Express">American Express</option>
                                                    <option value="Discover">Discover</option>
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
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Creates card expiration year field-->
                                        <!--Selects the card expiration year-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cardExpirationYear">Year</label>
                                                <select name="cardExpirationYear" id="cardExpirationYear" class="form-control">
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cardCVV">CVV</label>
                                                <input type="number" name="cardCVV" id="cardCVV" class="form-control" required>
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
                                        <input type="text" name="billingFirstName" id="billingFirstName" class="form-control" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="billingLastName">Last Name</label>
                                        <input type="text" name="billingLastName" id="billingLastName" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="billingStreet">Street Address</label>
                                        <input type="text" name="billingStreet" id="billingStreet" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="billingCity">City</label>
                                        <input type="text" name="billingCity" id="billingCity" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="billingState">State</label>
                                        <select name="billingState" id="billingState" class="form-control">
                                            <option value="AL">AL</option>
                                            <option value="AK">AK</option>
                                            <option value="AR">AR</option>
                                            <option value="AZ">AZ</option>
                                            <option value="CA">CA</option>
                                            <option value="CO">CO</option>
                                            <option value="CT">CT</option>
                                            <option value="DC">DC</option>
                                            <option value="DE">DE</option>
                                            <option value="FL">FL</option>
                                            <option value="GA">GA</option>
                                            <option value="HI">HI</option>
                                            <option value="IA">IA</option>
                                            <option value="ID">ID</option>
                                            <option value="IL">IL</option>
                                            <option value="IN">IN</option>
                                            <option value="KS">KS</option>
                                            <option value="KY">KY</option>
                                            <option value="LA">LA</option>
                                            <option value="MA">MA</option>
                                            <option value="MD">MD</option>
                                            <option value="ME">ME</option>
                                            <option value="MI">MI</option>
                                            <option value="MN">MN</option>
                                            <option value="MO">MO</option>
                                            <option value="MS">MS</option>
                                            <option value="MT">MT</option>
                                            <option value="NC">NC</option>
                                            <option value="NE">NE</option>
                                            <option value="NH">NH</option>
                                            <option value="NJ">NJ</option>
                                            <option value="NM">NM</option>
                                            <option value="NV">NV</option>
                                            <option value="NY">NY</option>
                                            <option value="ND">ND</option>
                                            <option value="OH">OH</option>
                                            <option value="OK">OK</option>
                                            <option value="OR">OR</option>
                                            <option value="PA">PA</option>
                                            <option value="RI">RI</option>
                                            <option value="SC">SC</option>
                                            <option value="SD">SD</option>
                                            <option value="TN">TN</option>
                                            <option value="TX">TX</option>
                                            <option value="UT">UT</option>
                                            <option value="VT">VT</option>
                                            <option value="VA">VA</option>
                                            <option value="WA">WA</option>
                                            <option value="WI">WI</option>
                                            <option value="WV">WV</option>
                                            <option value="WY">WY</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="billingZip">Zip Code</label>
                                        <input type="number" name="billingZip" id="billingZip" class="form-control">
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

<!-- End billingAddModal.php -->