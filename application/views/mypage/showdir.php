<script>
$(document).ready(function() {

});


</script>

<style>
.search-block {
    background-color:#f5f5f5;
    padding:5px;
    border-radius:5px;
    border:1px solid #e3e3e3;
}
.list-block {
    padding:5px;
    border-radius:5px;
    border:1px solid #e3e3e3;
    margin-bottom:30px;
    color:#716b7a;
}
.write-btn-div {
    text-align:left;
}
.pagination {
    margin:0px;
}
.pagination a {
    color:#716b7a;
}
.pagination a:hover {
    font-weight:bold;
}
.pagination .active {
    color:#ffffff;
}
table > tbody > tr:hover {
    font-weight:bold;
}
table td {
    text-align:center;
}
.table tbody > tr > td {
    line-height:30px;
    padding:4px;
}
table td .btn {
    margin:0px;
}
table td > a {
    color:#716b7a;
}
table th {
    font-weight:bold;
    line-height:20px;
    font-size:16px;
}

</style>
<div id="showdir" class="col-lg-9">
<div class="row search-block">
    <div class="col-lg-12">
        <form class="form-inline">
            
            <div class="input-group col-lg-2 col-offset-5 text-right">
                <select name="search_key" class="form-control">
                    <option value="title">제목</option>
                    <option value="srl">번호</option>
                </select>
                 
            </div>
            <div class="input-group col-lg-5 text-right">
                     
                <input id="searchInput" name="search_keyword" type="text" class="form-control" placeholder="검색">
                <span class="input-group-btn">
                    <button id="refSearchBtn" class="btn btn-success" type="submit"> 검 색 </button>
                </span>
            </div><!-- /input-group -->

        </form>

    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table class="table table-hover"  style="text-align:center;">
            <thead>
                <tr>
                    <th class="col-lg-1" style="text-align:center;"><h4>번호</h4></th>
                    <th class="col-lg-5" style="text-align:center;"><h4>제목</h4></th>
                    <th class="col-lg-2" style="text-align:center;"><h4>날짜</h4></th>
                    <th class="col-lg-1" style="text-align:center;"><h4>조회수</h4></th>
                    <th class="col-lg-1" style="text-align:center;"><h4>추천수</h4></th>
                    <th class="col-lg-2" style="text-align:center;"><h4>삭제</h4></th>
                </tr>				
            </thead>
            <tbody>
            
        <?php
			if($page==0){
				$page = 1;
			}
			foreach($list as $data)
            {
                $time = date("Y-m-d", strtotime($data->modified_time));
                echo "<tr>". 
                        "<td>$data->srl</td>". 
                        "<td style='text-align:left;'>".
							"<a href='".base_url()."index.php/board/doc_view/faq/$page/$data->srl'>$data->title</a>".
						"</td>".
                        "<td>$time</td>".
                        "<td>$data->hits</td>".
                        "<td>$data->goods</td>".
                        "<td><a class='btn btn-danger btn-small' href='".base_url()."/index.php/mypage/delDoc/$data->srl'>삭제</a></td>".
                    "</tr>";
            } 
            echo "<tr><td colspan='8'></td></tr>";
        ?>		
            </tbody>
        </table>
        <div class="col-lg-12 text-center"> 
<?php
if( $page_count >= 5 )
{
    $first_page =  $page > 3  ? $page-2 : 1;
}
else
{
    $first_page = 1;
}
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
