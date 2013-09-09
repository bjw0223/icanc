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
table td > a {
    color:#716b7a;
}
table th {
    font-weight:bold;
    line-height:20px;
    font-size:16px;
}

</style>
<div id="blist" class="col-lg-9">
<div class="row search-block">
    <div class="col-lg-2">
        <div class="row">
            <div class='col-lg-12 text-right write-btn-div'>
			<?php
				if($board!='faq')
					echo "<a class='btn btn-default' href=".base_url()."index.php/board/documentWrite/"."$board".">글쓰기</a>";
				if($board=='faq')
				{
					$nickname = $this->session->userdata('user_nickname');
					if($nickname =='admin')
						echo "<a class='btn btn-default' href=".base_url()."index.php/board/documentWrite/"."$board".">글쓰기</a>";
            	}
			?>
			</div>
        </div>
    </div>
    <div class="col-lg-10">
        <form class="form-inline">
            <div class="input-group col-lg-2 col-offset-5 text-right">
                <select name="search_key" class="form-control">
                    <option value="title">제목</option>
                    <option value="writer">작성자</option>
                    <option value="srl">번호</option>
                </select>
            </div>
            <div class="input-group col-lg-5 text-right">
                <input id="searchInput" name="search_keyword" type="text" class="form-control" placeholder="검색">
                <span class="input-group-btn">
                    <button id="refSearchBtn" class="btn btn-default" type="submit"> 검 색 </button>
                </span>
            </div><!-- /input-group -->
        </form>
    </div>
</div>
<div class="row list-block">
    <div class="col-lg-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="col-lg-1" style="text-align:center;">번호</th>
                    <th class="col-lg-5" style="text-align:center;">제목</th>
                    <th class="col-lg-2" style="text-align:center;">글쓴이</th>
                    <th class="col-lg-2" style="text-align:center;">날짜</th>
                    <th class="col-lg-1" style="text-align:center;">조회수</th>
                    <th class="col-lg-1" style="text-align:center;">추천수</th>
                </tr>				
            </thead>
            <tbody>
            
        <?php
			$uri_num=$this->uri->total_segments();
            
			if($uri_num!=4){
				$page=1;

			}else{
				$page = $this->uri->segment($uri_num);
			}

            foreach($list as $data)
            {
                $time = date("Y-m-d", strtotime($data->modified_time));
                echo "<tr>". 
                        "<td>$data->srl</td>". 
                        "<td style='text-align:left;'>".
							"<a href='".base_url()."index.php/board/doc_view/$board/$page/$data->srl'>$data->title";
								if($data->comments>0){
									echo " [".$data->comments."]";
								}
				echo		"</a>".
						"</td>".
                        "<td>$data->writer</td>".
                        "<td>$time</td>".
                        "<td>$data->hits</td>".
                        "<td>$data->goods</td>".
                    "</tr>";
            } 
            echo "<tr><td colspan='6'></td></tr>";
        ?>		
            </tbody>
        </table>

        <div class="col-lg-12 text-center pagination-block"> 

<?php

if( $page_count >= 5 )
{
    $first_page =  $page > 3  ? $page-2 : 1;
    
    $last_page =  $page > 3  ? $page+2 : 5; 
    if( $last_page > $page_count )
    {
        $last_page = $page_count;
    }
   
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
                <li><a href="<?=base_url();?>index.php/board/blist/<?=$board?>" class="btn-large">&lt&lt</a></li>
<?php
if( $page == 1)
{
?>
                <li><a href="<?=base_url();?>index.php/board/blist/<?=$board?>/<?=$page-1?>" class="btn btn-large disabled">&lt</a></li>
<?php
}
else
{
?>
                <li><a href="<?=base_url();?>index.php/board/blist/<?=$board?>/<?=$page-1?>" class="btn-large">&lt</a></li>

<?php
}
//for( $i = $first_page ; $i < $last_page + 1 ; $i++)
for( $i = $first_page ; $i < $first_page + 5 ; $i++)
{
    if( $page == $i )
    {
?>
                <li><a href="<?=base_url();?>index.php/board/blist/<?=$board?>/<?=$i?>" class="btn btn-primary btn-large active disabled"><?=$i?></a></li>
<?php
    }
    else if( $i > $page_count )
    {
?>
                <li><a href="<?=base_url();?>index.php/board/blist/<?=$board?>/<?=$i?>" class="btn btn-large disabled"><?=$i?></a></li>
<?php
    }
    else
    {
?>
                <li><a href="<?=base_url();?>index.php/board/blist/<?=$board?>/<?=$i?>" class="btn-large"><?=$i?></a></li>
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
                <li><a href="<?=base_url();?>index.php/board/blist/<?=$board?>/<?=$page-1?>" class="btn btn-large disabled">&gt</a></li>
<?php
}
else
{
?>
                <li><a href="<?=base_url();?>index.php/board/blist/<?=$board?>/<?=$page+1?>" class="btn-large">&gt</a></li>
<?php
}
?>

                <li><a href="<?=base_url();?>index.php/board/blist/<?=$board?>/<?=$page_count?>" class="btn-large">&gt&gt</a></li>
            </ul>
        </div>
    </div>
</div>


</div>

<!-- -->
</div>
</div>
<!-- -->
