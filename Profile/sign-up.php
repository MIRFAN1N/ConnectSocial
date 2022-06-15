<?php include '../include/header.php'; ?>
<?php include '../include/top-bar.php'; ?>
    <div class="form-div">
        <div class="container">
            <div class="form-div-inner">
                <div class="form-div-main-upper">
                    <div class="col-md-9">
                        <div class="form-div-main">
                            <form action="#">
                                <div class="form-box text-center">
                                    <div class="form-sub-title">
                                        <p class="mb-3"><b>Profile Picture</b></p>
                                    </div>
                                    <div class="upload-profile-div">
                                        <div class="upload-profile-div-inner">
                                            <div class="upload-profile-image-div">
                                                <img src="../assets/images/icons/user.png" alt="">
                                                <div class="camera-icon"><img src="../assets/images/icons/camera.png" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-field-grid">
                                        <div class="single-field">
                                            <div class="form-field">
                                                <input type="text" class="form-field-input form-control" placeholder='Email Address'>
                                            </div>
                                        </div>
                                        <div class="single-field">
                                            <div class="phone-number-field">
                                                <div class="flage-div">
                                                    <img src="../assets/images/icons/flage.png" alt=""> <span class="country-code">+1</span>
                                                </div>
                                                <div class="input">
                                                    <input type="text" class="form-field-input form-control" placeholder='Mobile Number'>
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
    <?php include '../include/popup.php'; ?>
</body>
</html>