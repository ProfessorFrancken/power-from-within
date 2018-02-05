<div id="register" style="
                          background: linear-gradient(rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.4)),
                          var(--register-image);
                          background-size: cover;
                          background-position: center;"
     class="py-5">
    <fieldset class="card card-body mx-auto" style="max-width: 750px">
        <legend>
            <h2 class="section-header">
                Register
            </h2>
        </legend>
        <form action="https://formspree.io/symposium@professorfrancken.nl" method="POST" >
            <input type="hidden" name="_subject" value="Nieuwe registratie symposium" />

            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-12 col-sm-6">

                            <div class="form-group">
                                <label for="firstname">Name</label>
                                <input type="text" class="form-control" id="firstname" placeholder="Name" name="name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="surname">Surname</label>
                                <input type="text" class="form-control" id="surname" placeholder="Surname" name="surname">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    </div>
                </div>
            </div>

            <hr/>

            <fieldset class="form-group">
                <legend>Membership</legend>

                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="franckenMemberCheckbox" value="francken_member" name="membership"> Francken member (&euro; 2,50 discount)
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="nnvMemberCheckbox" value="nnv_member" name="membership"> NNV member (&euro; 2,50 discount)
                    </label>
                </div>

                <div class="form-group">
                    <label for="nnvNumber" class="text-muted">NNV membership number (only for NNV members)</label>
                    <input type="text" class="form-control" id="nnvNumber" placeholder="NNV number" name="membership_nnv" disabled>
                </div>

                <hr/>

                <h3>Ticket price:</h3>
                <dl class="row">
                    <dt class="col-sm-6">Normal price</dt>
                    <dd class="col-sm-6">&euro; 10,-</dd>

                    <dt class="col-sm-6">Francken membership</dt>
                    <dd class="col-sm-6">&euro; 7,50</dd>

                    <dt class="col-sm-6">NNV membership</dt>
                    <dd class="col-sm-6">&euro; 7,50</dd>

                    <dt class="col-sm-6">Francken & NNV membership</dt>
                    <dd class="col-sm-6">&euro; 5,-</dd>
                </dl>
            </fieldset>

            <hr/>

            <fieldset class="form-group">
                <legend>Payment method</legend>

                <div class="form-check">
                    <input type="radio" class="form-check-input" name="paymentMethod" id="cashPaymentCheckbox" value="cash">
                    <label class="form-check-label" for="cashPaymentCheckbox">
                        Cash
                    </label>
                </div>
                <div class="form-check">
                        <input type="radio" class="form-check-input" name="paymentMethod" id="ibanPaymentCheckbox" value="incasso" checked>
                    <label class="form-check-label" for="ibanPaymentCheckbox">
                        Pre-authorized payment
                    </label>
                </div>

                <div class="form-group mt-2">
                    <label for="iban" class="form-check-label text-muted" for="iban">Iban (in case of pre-authorized payment)</label>
                    <input type="text" class="form-control" id="iban" placeholder="iban" name="iban">
                </div>
            </fieldset>
            <hr/>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="accept_terms">
                    <p>
                        I hereby register for the Franckensymposium, "Rocket Science" May 17 2017. By clicking on "submit", I authorize the symposium committee of T.F.V. 'Professor Francken' to deduct the under "Ticket" chosen fee once from the above bank account number.
                    </p>
                    <p>
                        A confirmation will be sent to the email address that has been entered above.
                    </p>
                </label>
            </div>

            <button type="submit" class="btn btn-lg btn-block btn-primary">Submit</button>
        </form>
    </fieldset>
</div>
