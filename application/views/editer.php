<div id="C_editer" style="margin-top:50px;">
    <div class="container" style="background-color:silver;">
        <div class="row-fluid">
            <div class="span3" style="background-color:red;">
            </div>
            <div class="span9" style="background-color:blue;">
                
                <div class="row-fluid">
                    <form  action="<?=base_url();?>index.php/compiler/compile" method="post">
                    <textarea id="code" name="code" class="span12" style="resize:none;height:300px;"></textarea>
                    <a class="btn" onclick="submit();">compile</a>
                    </form>
                </div>
                <div class="row-fluid" style="background-color:yellow;height:100px;">
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

