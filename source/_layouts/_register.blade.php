<div class="container" id="register">
    <h2 class="section-header">
        Register
    </h2>
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
            <p>
                If you have a membership with the NNV and / or T.F.V. 'Professor Francken' you will receive a discount on the ticket price.
            </p>

            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="nnvMemberCheckbox" value="nnv_member" name="membership"> NNV member (&euro; 2,50 discount)
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="nnvNumber">NNV membership number (only for NNV members)</label>
                        <input type="text" class="form-control" id="nnvNumber" placeholder="NNV number" name="membership_nnv" disabled>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="franckenMemberCheckbox" value="francken_member" name="membership"> Francken member (&euro; 2,50 discount)
                        </label>
                    </div>
                </div>

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
            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="paymentMethod" id="ibanPaymentCheckbox" value="incasso" checked>
                            Pre-authorized payment
                        </label>
                    </div>

                    <div class="form-group">
                        <label class="" for="iban">Iban (in case of pre-authorized payment)</label>
                        <input type="text" class="form-control" id="iban" placeholder="iban" name="iban">
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="paymentMethod" id="cashPaymentCheckbox" value="cash">
                            Cash
                        </label>
                    </div>
                </div>
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

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <hr/>

    <a href="#top" class="h3 mb-3 d-block text-center">Go to top</a>
</div>
