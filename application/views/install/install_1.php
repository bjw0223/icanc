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
                                <td>USER FOLDER Permission</td>
                                <td><?=$checklist['user_permission']?></td>
                                <td><?=$checklist['user_permission_check']?'ok..':'false';?></td>
                            </tr>

                            <tr>
                                <td>Database.php Permission</td>
                                <td><?=$checklist['database_permission']?></td>
                                <td><?=$checklist['database_permission_check']?'ok..':'false';?></td>
                            </tr>

                            <tr>
                                <td>Autoload.php Permission</td>
                                <td><?=$checklist['autoload_permission']?></td>
                                <td><?=$checklist['autoload_permission_check']?'ok..':'false';?></td>
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
    if( $checklist['phpversion_check'] == true && $checklist['user_permission_check'] == true && $checklist['database_permission_check'] == true && $checklist['autoload_permission_check'] == true )
    {
?>
        <a  class="btn btn-default" href="<?=base_url();?>index.php/install/install_2">next</a>
<?php
    }
	else
	{
?>
        <a class="btn btn-default" href="<?=base_url();?>index.php/install/">reCheck</a>
<?php
	}
?>


	</div>
