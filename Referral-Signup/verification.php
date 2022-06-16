<?php include '../include/header.php'; ?>
<?php include '../include/top-bar.php'; ?>
    <div class="form-div">
        <div class="container">
            <div class="form-div-inner">
                <div class="form-div-main-upper">
                    <div class="col-md-8">
                        <div class="form-div-main mb-0">
                            <form action="#">
                                <div class="form-box text-center">
                                    <div class="form-title pb-3">
                                        <h2>Email Verification</h2>
                                    </div>
                                    <div class="form-sub-title">
                                        <p class="mb-3">We have just sent you a verification code on
                                            <b>xyz@gmail.com.</b>
                                            Please enter your verification code to activate your account.
                                        </p>
                                    </div>
                                    <div class="form-field mb-4">
                                        <input type="email" class="form-field-input form-control" placeholder="Enter one time code" required>
                                    </div>
                                    <div class="form-action-button"> 
                                        <button class="custom-black-btn mr-3">Submit</button>
                                        <button class="custom-black-btn mr-3">Resend Code</button>
                                        <!-- <a href="javascript:void(0)" class='form-link'>Update Email?</a> -->
                                        <!-- <button class="custom-black-btn">Update Email</button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="form-div-main mb-0">
                            <form action="#">
                                <div class="form-box text-center">
                                    <div class="form-title pb-3">
                                        <h2>SMS Verification</h2>
                                    </div>
                                    <div class="form-sub-title">
                                        <p class="mb-3">We have just sent you an SMS on
                                            <b>+123456789</b>
                                            Please check your inbox, copy the code and paste below.
                                        </p>
                                    </div>
                                    <div class="form-field mb-4">
                                        <input type="email" class="form-field-input form-control" placeholder="Enter one time code" required>
                                    </div>
                                    <div class="form-action-button"> 
                                        <button class="custom-black-btn mr-3">Resend Code</button>
                                        <button class="custom-black-btn">Update Number</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-12">
                        <div class="bottom-submit-div text-center mt-4">
                            <button class="custom-black-btn">Submit</button>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <?php include '../include/popup.php'; ?>
</body>
</html>