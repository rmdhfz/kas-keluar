<form class="md-float-material form-material" id="formLogin" method="post">
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign In</h3><hr/>
                                    </div>
                                </div>
                                <!-- <div class="row m-b-20">
                                    <div class="col-md-6">
                                        <button class="btn btn-facebook m-b-20 btn-block"><i class="icofont icofont-social-facebook"></i>facebook</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-twitter m-b-20 btn-block"><i class="icofont icofont-social-twitter"></i>twitter</button>
                                    </div>
                                </div>
                                <p class="text-muted text-center p-b-5">Sign in with your regular account</p> -->
                                <div class="form-group form-primary">
                                    <input type="text" name="username" class="form-control" required="on" autocomplete="off" autosave="off" maxlength="35" minlength="6" />
                                    <span class="form-bar"></span>
                                    <label class="float-label">Username</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" required="on" autocomplete="off" autosave="off" maxlength="35" minlength="8"/>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <!-- <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div> -->
                                        <div class="forgot-phone text-right float-right">
                                            <a href="javascript:void(0)" class="text-right f-w-600"> Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" id="btnlogin">LOGIN </button>
                                    </div>
                                </div>
                                <p class="text-inverse text-left">Don't have an account?
                                    <a href="auth-sign-up-social.html"> <b>Register here </b></a>!</p>
                            </div>
                        </div>
                    </form>