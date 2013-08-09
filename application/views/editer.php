<script>
$(document).ready(function(){
    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-csrc"
    });
});
</script>
<div id="C_editer" style="margin-top:50px;backgrouno-color:silver;">
    <div class="container" style="background-color:silver;">
        <div class="row">
            <div class="col-lg-3" style="margin:0px;padding:0;">
                <div class="row well" style="padding:8px;margin:0px;">
                    <div class="col-lg-12" style="background-color:white;min-height:450px;">
                    d
                    </div>
                </div>
            </div>
            <div class="col-lg-9" style="padding:0px;">
                
                <div class="row well" style="padding:8px;margin:0px;">
                    <div class="col-lg-12" style="background-color:white;min-height:350px;">
                        <form  action="<?=base_url();?>index.php/compiler/compile" method="post">
                            <textarea id="code" name="code" class="span12" style="resize:none;height:300px;"></textarea>
                            <a class="btn btn-default" onclick="submit();">compile</a>
                        </form>
                    </div>
                </div>
                <div class="row well" style="padding:8px;margin:0px;min-height:100px;">
                    <div class="col-lg-12" style="background-color:white;">
                    <?php 
                        if(!($result === null))
                        {
                            foreach($result as $line)
                            {         
                                echo $line;
                                echo '<br>';
                            }
                        }
                        else
                        {
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

