<div class="registration-block">
    <form>
        <h2 class="text-center">Registraion</h3>

        <div class="form-group">
            <input class="form-control item" type="text" name="username" maxlength="15" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" id="username" placeholder="Username" required>
        </div>

        <div class="form-group">
            <input class="form-control item" type="password" name="Пароль" minlength="6" id="password" placeholder="Password" required>
        </div>

        <div class="form-group">
            <input class="form-control item" type="email" name="email" id="email" placeholder="Email" required>
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block create-account" type="submit">Create</button>
        </div>

        <p class="account-existed-check">
            Already have an account?
        </p>

        <a href="login_page.html">Log in</a>
    </form>
</div>