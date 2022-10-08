<div class="registration-block">
    <form>
        <h2 class="text-center">Log in</h3>

        <div class="form-group">
            <input class="form-control item" type="text" name="username" maxlength="15" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" id="username" placeholder="Your nickname" required>
        </div>

        <div class="form-group">
            <input class="form-control item" type="password" name="Пароль" minlength="6" id="password" placeholder="Password" required>
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block log-in" type="submit">Go!</button>
        </div>

        <p class="account-existed-check">
            Don't have an account?
        </p>

        <a href="register_page.html">Create!</a>
    </form>
</div>