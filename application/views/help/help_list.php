<!--
<form class="form-search">
  <input type="text" class="input-medium search-query">
  <button type="submit" class="btn">Search</button>

</form>
-->
<script>
$(document).ready(function() {

        $('td > a').click(function(){
            var name = $(this).attr("class");
            var srl = $(this).attr("data-in");
            $('.tapDecript').load("/index.php/help/help/get/"+name);
               var footer = $('#footer').offset().top; 
               var bRight = $('#body_right').offset().top; 
               var rightHeight = footer-bRight; 
               $('#body_right').height(rightHeight);
 
                SKP.commentsPlugin({
                target_id: 'comment_plugin',
                op_app_key: '5a7ac85d-2cbb-3ddb-95cc-ce7cf48f3598',
                page_id: srl,
                page_title: 'SKPOP Open Platform - 네이트온 이용가이드',
                lang: 'ko',
                is_mobile: false,
                theme: 'default',
                is_responsive: false
                });

            });
        $('#help_pagination > li').click(function(){
            var pagination = $(this).attr('value');
            $('.tapDecript').load("/index.php/help/help/helpList/"+pagination);
            });

                });
</script>

<table id="help_list" class="table table-hover" style="margin-left:20px;margin-right:20px;width:90%;">
<thead>
    <tr>
        <th style="text-align:center;">#</th>
        <th style="">함 수 명</th>
    </tr>
</thead>
<tbody>
<?php
foreach($help['helpList'] as $entry){
?>
      <tr>
          <td style="text-align:center;">
              <a class="<?=$entry->name?>" data-in="<?=$entry->srl?>" href="#" style="color:#898989;font-weight:bold;"><?=$entry->srl?></a>
          </td>
          <td style="">
              <a class="<?=$entry->name?>" data-in="<?=$entry->srl?>" href="#" style="color:#898989;font-weight:bold;"><?=$entry->name?></a>
          </td>
      </tr>
<?php
}
?>
</tbody>
</table>

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
