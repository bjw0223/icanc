        <div class="container">

            <div class="row">
                <legend>
                    <h2>
                        <strong>Install I CAN C</strong>
                        <small>step 2</small>
                    </h2>
                </legend>
            </div>


            <div class="row">
                <form action="<?=base_url();?>index.php/install/setupDatabase" method="POST">
                    <table class="table">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>HOSTNAME</td>
                                <td><input type='text' name='db_hostname' id='db_hostname' placeholder='hostname'></td>
                            </tr>
                            <tr>
                                <td>USERNAME</td>
                                <td><input type='text' name='db_username' id='db_username' placeholder='username'></td>
                            </tr>
                            <tr>
                                <td>PASSWORD</td>
                                <td><input type='text' name='db_password' id='db_password' placeholder='password'></td>
                            </tr>
                            <tr>
                                <td>DATABASE</td>
                                <td><input type='text' name='db_database' id='db_database' placeholder='database'></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type='submit' class='btn btn-default'>submit</button>

                </form>
            </div>
        </div>
