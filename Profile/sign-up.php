<?php include '../include/header.php'; ?>
<?php include '../include/top-bar.php'; ?>
<link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <div class="form-div">
        <div class="container">
            <div class="form-div-inner">
                <div class="form-div-main-upper">
                    <div class="col-md-9">
                        <div class="form-div-main">
                            <form action="#">
                                <input type="file" id="choose-pic-input" class='d-none'>
                                <div class="form-box text-center">
                                    <div class="form-sub-title">
                                        <p class="mb-3"><b>Profile Picture</b></p>
                                    </div>
                                    <div class="upload-profile-div">
                                        <div class="upload-profile-div-inner">
                                            <div class="upload-profile-image-div">
                                                <img src="../assets/images/icons/user.png" alt="">
                                                <div class="camera-icon" id="choose-pic-trigger">
                                                    <img src="../assets/images/icons/camera.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-field-grid">
                                        <div class="single-field">
                                            <div class="form-field">
                                                <input type="text" class="form-field-input form-control" placeholder='Email Address' name="name">
                                            </div>
                                        </div>
                                        <div class="single-field">
                                            <div class="phone-number-field">
                                                <!-- <div class="flage-div">
                                                    <img src="../assets/images/icons/flage.png" alt=""> <span class="country-code">+1</span>
                                                </div> -->
                                                <div class="input">
                                                    <input type="text" class="form-field-input form-control w-100" id="phone" placeholder='Mobile Number'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-field">
                                            <div class="form-field">
                                                <input type="text" class="form-field-input form-control" placeholder='First Name'>
                                            </div>
                                        </div>
                                        <div class="single-field">
                                            <div class="form-field">
                                                <input type="text" class="form-field-input form-control" placeholder='Last Name'>
                                            </div>
                                        </div>
                                        <div class="single-field">
                                            <div class="form-field">
                                                <input type="text" class="form-field-input form-control" placeholder='User Name'>
                                            </div>
                                        </div>
                                        <div class="single-field">
                                            <div class="form-field">
                                                <select name="" id="" class='form-field-input form-control'>
                                                    <option value="" hidden>Gender</option>
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="single-field">
                                            <div class="form-field">
                                                <input type="password" class="form-field-input form-control" placeholder='Password'>
                                            </div>
                                        </div>
                                        <div class="single-field">
                                            <div class="form-field">
                                                <input type="password" class="form-field-input form-control" placeholder='Password'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-info-text mt-2">
                                        <div class="small-text text-left">
                                            <i>*Password must be at least 6 characters long.</i>
                                        </div>
                                    </div>
                                    <div class="form-action-button justify-content-start"> 
                                        <button class="custom-black-btn">Sign Up</button>
                                    </div>
                                    <div class="form-bottom-link text-left mt-2 small-text">
                                        <i>Already have an account?</i> <a href="javascript:void(0)">Log In</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script>
        $('#choose-pic-trigger').click(function(){
            $("#choose-pic-input").trigger('click');
        });
        var input = document.querySelector("#phone");
window.intlTelInput(input, {
  separateDialCode: true
});
        </script>
    <?php include '../include/popup.php'; ?>
</body>
</html>