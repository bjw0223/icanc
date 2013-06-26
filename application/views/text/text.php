<script>
//tinymce.init({
//selector: "textarea",
//menubar: false,
//toolbar:"undo redo bold",
//plugins: "autoresize"
//toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
//});

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

  });
</script>





<form method="post" action="somepage">
<textarea id="write_page" name="content" style="resize:none;" ></textarea>
</form>
