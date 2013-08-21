<script>
$(document).ready(function() {

    tinymce.init({
        selector: "#textEditor",
        menubar: false,
        //resizing: true,
        statusbar : false,
        theme: "modern",
        plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor "
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
        ]
    });

    $('#previewBtn').click(function() {
        var ed = tinyMCE.get('textEditor');
        ed.setProgressState(1); // Show progress
        window.setTimeout(function() {
            ed.setProgressState(0); // Hide progress
            $(".modal-body").html(ed.getContent());
            $("#myModal").modal("show");
            }, 1000);
    });
    /*
    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
                                    lineNumbers: true,
                                    matchBrackets: true,
                                    mode: "text/x-csrc"
                                });
                                */

/*    
function ajaxLoad() {
    var ed = tinyMCE.get('content');

    // Do you ajax call here, window.setTimeout fakes ajax call
    ed.setProgressState(1); // Show progress
    window.setTimeout(function() {
            ed.setProgressState(0); // Hide progress
            ed.setContent('HTML content that got passed from server.');
            }, 3000);
}
*/
});

</script>
<div id="document_write" class="col-lg-9" style="margin-top:30px;">
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content"  style="width:850px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="row">
<?php
	$board=$this->uri->segment(3);
	$page=$this->uri->segment(4);
	$srl=$this->uri->segment(5);
?>
    <form action="<?=base_url()?>index.php/board/saveReplyDoc/<?=$board?>/<?=$page?>/<?=$srl?>" method="POST">
            <div class="col-lg-12 well">
            <input type="text" id="docTitle" name="docTitle" value="Re <?=$reply_srl?> : <?=$title?>" class="form-control" placeholder="제목"/>
            </div>
        </div>
    <div class="row">
        <div class="col-lg-12 well">
            <textarea id="textEditor" name="textEditor" style="min-height:300px;"></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 well text-right">
            <button type="button" id="previewBtn" class="btn btn-info">미리보기</button>
            <button type="submit" id="saveBtn" class="btn btn-success">작성하기</button>
        </div>
    </div> 
    </form>
</div>
