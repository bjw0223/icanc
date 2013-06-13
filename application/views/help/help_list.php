<!--
<form class="form-search">
  <input type="text" class="input-medium search-query">
  <button type="submit" class="btn">Search</button>

</form>
-->
<script>

$(document).ready(function() {
        $('#help_list > li').click(function(){
            // var id = $(this).attr('id');
            // $('.tapDecript').load("/index.php/"+id+"/"+id);
            var name = $(this).attr("class");
            $('.tapDecript').load("/index.php/help/help/get/"+name);
            //window.alert(name);
            });
        });
</script>

<span>help_list</span>
<ul id="help_list">
<?php
foreach($help as $entry){
?>
      <!--<li><a><?=$entry->name?></a></li>-->
      <li class="<?=$entry->name?>"><a href="#"><?=$entry->name?></a></li>
<?php
}
?>
</ul>

