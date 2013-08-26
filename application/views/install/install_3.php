<script>
$(document).ready(function(){
//    $('#userBtnDiv').onload("<?=base_url();?>index.php/install/createUserTable");

});

</script>
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
        <table class="table">
            <thead>
            </thead>
            <tbody>
                <tr>
                    <td>userTable</td>
                    <td>
                        <div id="userBtnDev">
                            <a href="<?=base_url();?>index.php/install/setupTables" id="createUserTableBtn"class="btn btn-info">setup</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
