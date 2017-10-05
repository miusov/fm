
<div class="container">
    <h2 class="text-center">Registration</h2>
    <div class="row">
        <div class="col-md-6 offset-3">
            <form method="post" action="/user/signup">
                <div class="form-group">
                    <label for="login">Login:</label>
                    <input type="text" class="form-control" id="login" name="login" value="<?=isset($_SESSION['form_data']['login']) ? h($_SESSION['form_data']['login']) : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="login">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?=isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email"  value="<?=isset($_SESSION['form_data']['email']) ? h($_SESSION['form_data']['email']) : ''; ?>">
                </div>
                <button type="submit" class="btn btn-default">Register</button>
            </form>
            <?php if (isset($_SESSION['form_data'])) unset($_SESSION['form_data']) ?>
        </div>
    </div>
</div>