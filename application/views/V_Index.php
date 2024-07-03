    <div class="container">
        <div class="mt-3 mb-3 text-center row">
            <h1>Checkout Form</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, minus.</p>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h4>Billing Address</h4>
                <form action="#" id="checkout-form" method="POST">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6 col-sm-6">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" name="fname" id="fname" class="form-control" required>
                            </div>
                            <div class="col-6 col-sm-6">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" name="lname" id="lname" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="text" class="form-control" placeholder="username" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-muted">(optional)</span></label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="you@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="1234 Main St." required>
                    </div>
                    <div class="mb-3">
                        <label for="address2" class="form-label">Address 2 <span class="text-muted">(optional)</span></label>
                        <input type="text" name="address2" id="address2" class="form-control" placeholder="123456 Main St." required>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label for="regency" class="form-label">Regency</label>
                            <select name="regency" id="regency" class="form-select" required>
                                <option value="">Choose regency</option>
                                <option value="Sleman">Sleman</option>
                                <option value="Klaten">Klaten</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="subdistrict" class="form-label">Subdistrict</label>
                            <select name="subdistrict" id="subdistrict" class="form-select" required>
                                <option value="">Choose subdistrict</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="zip" class="form-label">Zip Code</label>
                            <input type="number" name="zip" id="zip" class="form-control" placeholder="55..." required>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <input type="checkbox" class="form-check-input" id="btncheck1" autocomplete="off">
                        <label class="form-check-label" for="btncheck1">Save this for next transaction</label>
                    </div>
                    <div class="mb-3">
                        <input type="checkbox" class="form-check-input" id="btncheck2" autocomplete="off">
                        <label class="form-check-label" for="btncheck2">Address for billing same with my home address</label>
                    </div>
                    <hr>
                    <h4 class="mb-3">Payment</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="bri">
                        <label class="form-check-label" for="bri">
                            BRI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="bni">
                        <label class="form-check-label" for="bni">
                            BNI
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="bca">
                        <label class="form-check-label" for="bca">
                            BCA
                        </label>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6 col-sm-6">
                            <label for="cardname" class="form-label">Name on card</label>
                            <input type="text" name="cardname" id="cardname" class="form-control" required>
                            <div class="text-muted">Full name as displayed on card</div>
                        </div>
                        <div class="mb-3 col-6 col-sm-6">
                            <label for="cardnum" class="form-label">Credit card number</label>
                            <input type="number" name="cardnum" id="cardnum" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6 col-md-3">
                            <label for="expiration" class="form-label">Expiration</label>
                            <input type="date" name="expiration" id="expiration" class="form-control" required>
                        </div>
                        <div class="mb-3 col-6 col-md-3">
                            <label for="cvv" class="form-label">CVV number</label>
                            <input type="number" name="cvv" id="cvv" class="form-control" required>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 d-grid">
                        <button type="submit" class="btn btn-primary">Continue to checkout</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <h4 class="mb-3 d-flex justify-content-between align-items-center">
                    <span>Your cart</span>
                    <span class="badge bg-secondary rounded-pill">3</span>
                </h4>
                <ul class="mb-3 list-group">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted price">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted price">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Third product</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted price">$20</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm text-success">
                        <div>
                            <h6 class="my-0">Promo code</h6>
                            <small class="text-muted">EXAMPLECODE</small>
                        </div>
                        <span class="text-muted price">$5</span>
                    </li>
                    <li class="mb-3 list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Total (USD)</h6>
                        </div>
                        <span class="text-muted price">$45</span>
                    </li>
                </ul>
                <form action="#" id="redeem-form" method="POST">
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="redeem-code" placeholder="Promo code" aria-label="Promo code" aria-describedby="basic-addon2">
                            <button type="submit" class="btn btn-outline-secondary">Redeem</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>