<!-- Loging Start -->
<section id="loging">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="loging_content">
                    <form>
                        <div class="email">
                            <label for="email">E-mail</label>
                            <input id="email" placeholder="User Email" class="form-control" type="email"/>
                        </div>

                        <div class="password mt-3">
                            <label for="password">Password</label>
                            <input id="password" placeholder="User Password" class="form-control" type="password"/>
                        </div>

                        <div class="loging_btn mt-3">
                            <button type="button" onclick="SubmitLogin()">Sign in</button>
                        </div>
                        <div class="loging_gmail mt-3">
                            <button> <img src="{{asset('front-end/assets/icon/Group 22.svg')}}" alt="" class="me-2"> Sign in with Google</button>
                        </div>
                        <div class="loging_github mt-3">
                            <button><img src="{{asset('front-end/assets/icon/394187_github_icon.svg')}}" class="me-2 github_image" alt="">Sign in with GitHub</button>
                        </div>
                        <div class="forget_password">
                            <h5>Don’t have any account?<a href="#">Forget password</a></h5>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
<!-- Loging End -->

<script>
    async function SubmitLogin() {
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;

        if (email.length === 0) {
            errorToast("Email is required");
        } else if (password.length === 0) {
            errorToast("Password is required");
        } else {
            showLoader();
            let res = await axios.post("/employer-login", { email: email, password: password });
            hideLoader();
            if (res.status === 200 && res.data['status'] === 'success') {
                window.location.href = "/userProfile";
            } else {
                errorToast(res.data['message']);
            }
        }
    }
</script>
