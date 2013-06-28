<script>
  $(document).ready(function() {
      var textareaHeight = $('#text').height();
      var textareaWidth = $('#text').width();
      $('#write_page').height(textareaHeight-10);
      $('#write_page').width(textareaWidth-12);

      $(window).resize(function() {
          var textareaHeight = $('#text').height();
          var textareaWidth = $('#text').width();
          $('#write_page').height(textareaHeight-10);
          $('#write_page').width(textareaWidth-12);
      });
      //var data = $('#text').val('thml');

        tinymce.init({
        selector: "textarea",
        height: 390,
		force_br_newlines : true,
		force_p_newlines : true,
        menubar: false,
        toolbar:"undo redo",
		theme_advanced_statusbar_location : "none",
        toolbar_items_size: 'small',
        resizing :false 
        });
//      tinyMCE.setContent(data);

     // var data = $('#text').val('thml');
       // window.alert(data);
        /*
      data = data.replace(/\}/g,   "-_______-");//9
      data = data.replace(/\{/g,   "-______-");//8
      data = data.replace(/#/g,    "-_____-");//7
      data = data.replace(/\)/g,   "-____-");//6
      data = data.replace(/\(/g,   "-___-");//5
      data = data.replace(/&lt;/g, "-__-");//4
      data = data.replace(/&gt;/g, "-_-");//3
      data = data.replace(/<\/p>/g,"__");//2
      data = data.replace(/ /g,    "_");//1    
      //data = data.replace(/&nbsp;/g,"");
       //data = data.replace(/<p>/g,"");
         */  


    });
</script>

<?php
if($data != null)  
{
   print_r( $data);

?>
<script>
$(document).ready(function() {

       var data = tinyMCE.activeEditor.getDoc().body.innerHTML; 
       data = data.replace(/-_______-/g,"}");//9
       data = data.replace(/-______-/g,"{");//8
       data = data.replace(/-_____-/g,"#");//7
       data = data.replace(/-____-/g,")");//6
       data = data.replace(/-___-/g,"(");//5
       data = data.replace(/-__-/g,"<");//4
       data = data.replace(/-_-/g,"> ");//3
       data = data.replace(/__/g,"");//2
       data = data.replace(/_/g," ");//1    
       //$('#write_page').html("data");
       tinyMCE.activeEditor.setContent( data );

        
});
</script>
<form method="post" action="somepage">
<textarea id="write_page" name="content" style="resize:none;" ></textarea>
</form>
<?php
}
else
{
?>
 <form method="post" action="somepage">
<textarea id="write_page" name="content" style="resize:none;" ></textarea>
</form>
<?php
}
?>

