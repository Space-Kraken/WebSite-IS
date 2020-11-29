<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="card col-md-7 mt-5">
            <article class="card-body">
                <h1 class="card-title mb-1 mt-1 text-center">Give us your information so we can stay in contact</h1>
                <form method="POST" action="procesoLogin.php">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="User name">
                        <small id="nameHelp" class="form-text text-muted">You can skip this but it would be useful to us.</small>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="password" class="form-control" placeholder="Enter your e-mail">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label>Ask us your questions</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <legend>You're seeking information for:</legend>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="r1" name="choose" class="custom-control-input" checked="">
                                <label class="custom-control-label" for="r1">Ask about our services</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="r2" name="choose" class="custom-control-input">
                                <label class="custom-control-label" for="r2">Ask for job advisory</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="r3" name="choose" class="custom-control-input">
                                <label class="custom-control-label" for="r3">Ask for job</label>
                            </div>
                        </div>
                        <legend>You're want to comunicate with:</legend>
                        <select class="custom-select">
                            <option selected="">Select one option</option>
                            <option value="1">Commercial department</option>
                            <option value="2">HR department</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked="">
                            <label class="custom-control-label" >I have read and agree to the website <b>&copy; terms and conditions</b></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <a id="sub-btn" href="#" class="btn btn-primary btn-block">Submit</a>
                    </div>
                    <div class="row justify-content-end mt-3">
                        <a href="#" class="btn btn-outline-danger">Cancel submit</a>
                    </div>
                </form>
            </article>
        </div>
    </div>
</div>