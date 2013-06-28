<?php
//var_dump($data);
?>
<script>
$(document).ready(function() {

        $('td > .save_btn').click(function(){
            var path = $(this).attr("data-id");
            var name = $(this).attr("name");
            $('#openfooter').load("/index.php/file/file/download/?name="+name+"&path="+path);
             $('#saveModal').modal('hide');

            });
         $('td > .open_btn').click(function(){
               var data = $(this).attr("data-in");
               $('#write_page').load(data);
             $('#openModal').modal('hide');
            });
         $('td > .delete_btn').click(function(){
             var data = $(this).attr("data-in");
             $('#deleted').load(data);
             $('#openbody').load("/index.php/file/file/openfile"); 
             $('#openModal').modal('hide');
        });
        });
        
</script>

<table class="table table-hover">
<thead>
    <tr>
        <th style="text-align:center;">파일명</th>
        <th style="text-align:center;">사이즈</th>
        <th style="text-align:center;">만든날짜</th>
        <th style="text-align:center;">열기</th>
        <th style="text-align:center;">다운로드</th>
        <th style="text-align:center;">삭제</th>
    </tr>
</thead>
</tbody>
<?php
foreach($filename as $name){
    $stamp = $data[$name]['date'];
    $today = date("Y-m-d H:i:s", $stamp);
    $download_path = $data[$name]['relative_path'].$data[$name]['name'];
    $name = $data[$name]['name'];
?>
    <form>
    <tr>
        <td style="text-align:center;"><span><?=$data[$name]['name']?></span></td>
        <td style="text-align:center;"><span><?=$data[$name]['size']?></span></td>
        <td style="text-align:center;"><span><?=$today?></span></td>
        <td style="text-align:center;"><a id="openContent" class="btn open_btn" data-in="/index.php/file/file/openContent/?path=<?=$download_path?>">열기</a></span></td>
        <td style="text-align:center;"><a class="btn save_btn" href="/index.php/file/file/download/?name=<?=$name?>&path=<?=$download_path?>" >다운</a></td>
        <td style="text-align:center;"><a class="btn delete_btn" data-in="/index.php/file/file/deletefile/?path=<?=$download_path?>" >삭제</a></td>
    </tr>
    </form>
    
<?php
}
?>
</tbody>
</table>
<div id="deleted"></div>
