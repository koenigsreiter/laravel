
    <main class="login">
        <div class="wrapper-headline">
            <h1>Login</h1>

        </div>

        <section class="wrapper_reg">
        <form id="login" method="POST" action="{{ route('postLogin') }}" autocomplete="off">

            <div class="form-group">
                <label for="email"></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <label for="password"></label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Passwort" required>
            </div>
            <div class="button_reg">
            <button type="submit" class="btn_reg">Login</button>
            </div>
        </form>
        </section>
    </main>




