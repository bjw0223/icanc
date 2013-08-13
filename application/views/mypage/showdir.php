<script>
$(document).ready(function() {

});


</script>
<div id="showdir" class="col-lg-9">
<div class="row well">
    <div class="col-lg-12" style="background-color:white;padding:3px 0px 3px 0px;">
        <form class="form-inline">
            
            <div class="input-group col-lg-2 col-offset-5 text-right" style="padding-right:0px;">
                <select name="search_key" class="form-control">
                    <option value="title">제목</option>
                    <option value="srl">번호</option>
                </select>
                 
            </div>
            <div class="input-group col-lg-5 text-right" style="padding-right:0px;">
                     
                <input id="searchInput" name="search_keyword" type="text" class="form-control" placeholder="검색">
                <span class="input-group-btn">
                    <button id="refSearchBtn" class="btn btn-success" type="submit"> 검 색 </button>
                </span>
            </div><!-- /input-group -->

        </form>

    </div>
</div>
<div class="row well" style="margin-bottom:0px;padding:8px;">
    <div class="col-lg-12" style="background-color:white;">
        <table class="table table-hover"  style="text-align:center;">
            <thead>
                <tr>
                    <th class="col-lg-1" style="text-align:center;"><h4>번호</h4></th>
                    <th class="col-lg-5" style="text-align:center;"><h4>제목</h4></th>
                    <th class="col-lg-2" style="text-align:center;"><h4>날짜</h4></th>
                    <th class="col-lg-1" style="text-align:center;"><h4>조회수</h4></th>
                    <th class="col-lg-1" style="text-align:center;"><h4>추천수</h4></th>
                    <th class="col-lg-1" style="text-align:center;"><h4>수정</h4></th>
                    <th class="col-lg-1" style="text-align:center;"><h4>삭제</h4></th>
                </tr>				
            </thead>
            <tbody>
            
        <?php
			if($page==0){
				$page = 1;
			}
			foreach($list as $data)
            {
                echo "<tr>
                        <td>$data->srl</td>
                        <td><a href='".base_url()."index.php/board/doc_view/faq/$page/$data->srl'>$data->title</a></td>
                        <td>$data->modified_time</td>
                        <td>$data->hits</td>
                        <td>$data->goods</td>
                        <td><a class='btn btn-info' data-in='$data->srl'>수정</a></td>
                        <td><a class='btn btn-danger deleteBtn' data-in='$data->srl'>삭제</a></td>
                    </tr>";
                
            } 
        ?>		
            </tbody>
        </table>
        <div class="col-lg-12 text-center"> 
<?php
if( $page_count >= 5 )
{
    $first_page =  $page > 3  ? $page-2 : 1;
    /*
    $last_page =  $page > 3  ? $page+2 : 5; 
    if( $last_page > $page_count )
    {
        $last_page = $page_count;
    }
    */
}
else
{
    $first_page = 1;
    //$last_page = $page_count + 1;
}
/*
echo "first_page = ".$first_page."<br/>";
echo "last_page = ".$last_page."<br/>";
echo "total_rows = ".$total_rows."<br/>";
echo "list_count = ".$list_count."<br/>";
echo "page = ".$page."<br/>";
echo "page_count = ".$page_count."<br/>";
*/
?>
            <ul class="pagination">
                <li><a href="<?=base_url();?>index.php/mypage/showdir/" class="btn-large">&lt&lt</a></li>
<?php
if( $page == 1)
{
?>
                <li><a href="<?=base_url();?>index.php/mypage/showdir/<?=$page-1?>" class="btn btn-large disabled">&lt</a></li>
<?php
}
else
{
?>
                <li><a href="<?=base_url();?>index.php/mypage/showdir/<?=$page-1?>" class="btn-large">&lt</a></li>

<?php
}
//for( $i = $first_page ; $i < $last_page + 1 ; $i++)
for( $i = $first_page ; $i < $first_page + 5 ; $i++)
{
    if( $page == $i )
    {
?>
                <li><a href="<?=base_url();?>index.php/mypage/showdir/<?=$i?>" class="btn btn-primary btn-large active disabled"><?=$i?></a></li>
<?php
    }
    else if( $i > $page_count )
    {
?>
                <li><a href="<?=base_url();?>index.php/mypage/showdir/<?=$i?>" class="btn btn-large disabled"><?=$i?></a></li>
<?php
    }
    else
    {
?>
                <li><a href="<?=base_url();?>index.php/mypage/showdir/<?=$i?>" class="btn-large"><?=$i?></a></li>
<?php
    }
}
?>
            <!--
                <li><a href="#" class="btn-large">&laquo;</a></li>
                <li><a href="#" class="btn-large">1</a></li>
                <li><a href="#" class="btn-large">2</a></li>
                <li><a href="#" class="btn-large">3</a></li>
                <li><a href="#" class="btn-large">4</a></li>
                <li><a href="#" class="btn-large">5</a></li>
                <li><a href="#" class="btn-large">&raquo;</a></li>
            -->
<?php
if( $page >= $page_count)
{
?>
                <li><a href="<?=base_url();?>index.php/mypage/showdir/<?=$page-1?>" class="btn btn-large disabled">&gt</a></li>
<?php
}
else
{
?>
                <li><a href="<?=base_url();?>index.php/mypage/showdir/<?=$page+1?>" class="btn-large">&gt</a></li>
<?php
}
?>

                <li><a href="<?=base_url();?>index.php/mypage/showdir/<?=$page_count?>" class="btn-large">&gt&gt</a></li>
            </ul>
        </div>
    </div>
</div>


</div>

<!-- -->
</div>
</div>
<!-- -->
