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
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | forecolor backcolor emoticons",
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
            $(".modal-head").html($("#docTitle").val());
            $("#myModal").modal("show");
            }, 500);
    });
});

</script>
<style>
#document_write {
    background-color:#f5f5f5;
    padding:5px;
    border-radius:5px;
    border:1px solid #e3e3e3;
    margin-bottom:30px;
    margin-top:30px;
}
.title-block, .editor-block, .btn-block {
    margin-bottom:10px;
}
.modal {
    top:50px;
}
.modal-dialog {
    width:70%;
}
.modal-header {
    font-size:15px;
    font-weight:bold;
    color:#716b7a;
          line-height:15px;
}
</style>

<div id="document_write" class="col-lg-9 col-sm-9">
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <span class="modal-head">
                    </span>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<?php
	$board=$this->uri->segment(3);
?>
    <form action="<?=base_url()?>index.php/board/saveDoc/<?=$board?>" method="POST">
    <div class="row title-block">
        <div class="col-lg-12 col-sm-12">
            <input type="text" id="docTitle" name="docTitle" class="form-control" placeholder="제목"/>
        </div>
    </div>
    <div class="row editor-block">
        <div class="col-lg-12 col-sm-12">
            <textarea id="textEditor" name="textEditor" style="min-height:300px;"></textarea>
        </div>
    </div>

    <div class="btn-block">
        <div class="text-right">
            <button type="button" id="previewBtn" class="btn btn-info">미리보기</button>
            <button type="submit" id="saveBtn" class="btn btn-success">작성하기</button>
        </div>
    </div> 
    </form>
</div>
