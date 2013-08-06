<div id="faq" class="col-lg-9" style="margin-top:30px;background-color:gray;">

<table class="table" >
	<thead>
		<tr>
			<th>번호</th>
			<th>제목</th>
			<th>글쓴이</th>
			<th>날짜</th>
			<th>조회수</th>
			<th>추천수</th>
		</tr>				
	</thead>
	<tbody>
	
<?php
	foreach($list as $data)
	{
		echo "<tr>
				<td>$data->srl</td>
				<td><a href='".base_url()."index.php/board/show/$data->srl'>$data->title</a></td>
				<td>$data->writer</td>
				<td>임시날짜</td>
				<td>$data->hits</td>
				<td>$data->goods</td>
			</tr>";
		
	} 
?>		
	</tbody>
</table>


</div>

<!-- -->
</div>
</div>
<!-- -->
