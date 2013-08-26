        <div class="container">

            <div class="row">
                <legend>
                    <h2>
                        <strong>Install I CAN C</strong>
                        <small>step 1</small>
                    </h2>
                </legend>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FILE permission</td>
                                <td><?=$checklist['permission']?></td>
                                <td><?=$checklist['permission_check']?'ok..':'false';?></td>
                            </tr>
                            <tr>
                                <td>php_version</td>
                                <td><?=$checklist['phpversion']?></td>
                                <td><?=$checklist['phpversion_check']?'ok..':'false';?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
<?php
    if( $checklist['phpversion_check'] == true && $checklist['permission_check'] == true )
    {
?>
        <a href="<?=base_url();?>index.php/install/nextStep/2">next</a>
<?php
    }

?>



        </div>
