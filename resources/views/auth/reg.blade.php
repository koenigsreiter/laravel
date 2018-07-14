

<main>
    <div class="wrapper-headline">
        <h1>Registrieren</h1>

    </div>

    <section class="wrapper_reg">

        <form method="POST" action="{{ route('postRegister') }}" autocomplete="off">

            {{ csrf_field() }}

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
                <select  id="beschwerden" name="beschwerden" multiple>
                    <option value="" disabled selected hidden>Beschwerden</option>
                    <option value="">Beschwerde1</option>
                    <option value="">Beschwerde2</option>
                    <option value="">Beschwerde3</option>
                    <option value="">Beschwerde4</option>
                    <option value="">Beschwerde5</option>

                </select>

            </div>

            <div class="button_reg">

            <button type="submit" class="btn_reg">Registrieren</button>
            </div>
        </form>


    </section>





</main>




