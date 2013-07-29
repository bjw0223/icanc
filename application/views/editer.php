<script type="text/javascript">
    $(document).ready(function() {
        var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-csrc",
        theme: "lesser-dark"
        });
    });
</script>

<div id="C_editer" style="margin-top:50px;">
    <div class="container" style="background-color:silver;">
        <div class="row-fluid">
            <div class="span3" style="background-color:;border:;padding-left:20px;">
                <div class="row-fluid navbar" style="text-align:center;">
                    <div class="navbar-inner">
                        <div class="nav-inner">
                            <ul class="nav">
                                <li><a onclick="formSubmit();">save</a></li>
                                <li><a onclick="formSubmit();">compile</a></li>
                                <li><a onclick="formSubmit();">run</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row-fluid" style="background-color:white;height:100px;">
                </div>
            </div>
            <div class="span9" style="background-color:;">
                <div class="row-fluid">
                    <form id="editor_form"action="#" method="post">
                    <textarea  id="code" name="code" class="span12" style="resize:none;height:300px;"></textarea>
                    </form>
                </div>
                <div class="row-fluid" style="background-color:black;height:100px;">
                </div>
            </div>
        </div>
    </div>
</div>

