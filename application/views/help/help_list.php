<!--
<form class="form-search">
  <input type="text" class="input-medium search-query">
  <button type="submit" class="btn">Search</button>

</form>
-->
<script>
$(document).ready(function() {

     // var footer = $('#footer').offset().top; 
     // $('#help_pagination');

     // $(window).resize(function(){
     //     var footer = $('#footer').offset().top; 
     // });
        $('#help_list > li').click(function(){
            var name = $(this).attr("class");
            $('.tapDecript').load("/index.php/help/help/get/"+name);
            });
        $('#help_pagination > li').click(function(){
            var pagination = $(this).attr('value');
            $('.tapDecript').load("/index.php/help/help/helpList/"+pagination);
            });

        });
</script>

<ul id="help_list" class="nav nav-tabs nav-stacked" style="padding-left:15px;padding-right:15px">
<?php
foreach($help['helpList'] as $entry){
?>
      <li class="<?=$entry->name?>"><a href="#" style="color:#898989;font-weight:bold;"><?=$entry->name?></a></li>
<?php
}
?>
</ul>

	<div id="help_pagination" class="pagination pagination-centered">
<?php
        $pagination = $help['pagination'];
        $search_key = $help['search_key'];
        $search_keyword = $help['search_keyword'];
		if($pagination['page_count'] >= 5){
			$first_page = $pagination['page'] > 3 ? $pagination['page'] - 2 : 1;
			$last_page = $pagination['page'] > 3 ? $pagination['page'] + 2 : 5;
			if($last_page > $pagination['page_count']){
				$last_page = $pagination['page_count'];
				if(($last_page % 5) != 0){
					$temp = 5 - ($last_page % 5);
					$first_page = $last_page - ($temp + 1);
				}else{
					$first_page = $last_page - 4;
				}
			}
		}else{
			$first_page = 1;
			$last_page = $pagination['page_count'];
		}
?>
		<ul id="help_pagination">
			<?php for($i=$first_page ; $i <$pagination['page'];$i++):?>
            <li value="<?=$i?>"><a href="#" style="color:#898989;font-weight:bold;"><?=$i?></a></li>

			<?php endfor;?>

			<li class="active"><a href="javascript:void(0)"><?=$pagination['page'];?>
			<?php for($i=$pagination['page']+1 ; $i <= $last_page;$i++):?>
            <li value="<?=$i?>"><a href="#" style="color:#898989;font-weight:bold;"><?=$i?></a></li>


			<?php endfor;?>
		</ul>
	</div>
