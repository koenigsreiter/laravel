

<main>
    <div class="wrapper-headline">
        <h1>Registrieren</h1>

    </div>

    <section class="wrapper_reg">

        <form method="POST" action="{{ route('postRegister') }}" autocomplete="off">

            @csrf

            <div class="form-group">

                <input type="text" class="form-control" id="fname" name="vorname" placeholder="Vorname" required>


            </div>


            <div class="form-group">
                <label for="lname"></label>
                <input type="text" class="form-control" id="lname" name="nachname" placeholder="Nachname" required>

            </div>

            <div class="form-group">
                <label for="email"></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>

            </div>
            <div class="form-group">
                <label for="password"></label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Passwort" required>

            </div>

            <div class="form-group_adress">

                <div class="form-group">
                    <label for="adresse"></label>
                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" required>

                </div>
                <div class="form-group">
                    <label for="ort"></label>
                    <input type="text" class="form-control" id="ort" name="ort" placeholder="Ort" required>

                </div>

                <div class="form-group">
                    <label for="plz"></label>
                    <input type="text" class="form-control" id="plz" name="plz" placeholder="PLZ" required>

                </div>

            </div>

            <div class="form-group">
                <label for="beschwerden"></label>
                <input type="text" name="beschwerden" id="beschwerden" class="form-control" placeholder="Beschwerde1" required>
                <input type="text" name="beschwerden" id="beschwerden" class="form-control" placeholder="Beschwerde2" required>
                <input type="text" name="beschwerden" id="beschwerden" class="form-control" placeholder="Beschwerde3" >
                <input type="text" name="beschwerden" id="beschwerden" class="form-control" placeholder="Beschwerde4" >
                <input type="text" name="beschwerden" id="beschwerden" class="form-control" placeholder="Beschwerde5" >
            </div>

            <div class="button_reg">

            <button type="submit" class="btn_reg">Registrieren</button>
            </div>
        </form>


    </section>





</main>




