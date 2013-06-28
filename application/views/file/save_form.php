<?php
//var_dump($data);
?>
<script>
$(document).ready(function() {

        $('#saveFileBtn').click(function(){
            var filename = $('#file_name').attr('value');
           //var data =  tinyMCE.setContent("dd");
           var data = tinyMCE.activeEditor.getDoc().body.innerHTML; 

           data = data.replace(/<p>/g,"");
           data = data.replace(/&nbsp;/g,"");
           data = data.replace(/ /g,    "_");//1    
           data = data.replace(/<\/p>/g,"__");//2
           data = data.replace(/&gt;/g, "-_-");//3
           data = data.replace(/&lt;/g, "-__-");//4
           data = data.replace(/\(/g,   "-___-");//5
           data = data.replace(/\)/g,   "-____-");//6
           data = data.replace(/#/g,    "-_____-");//7
           data = data.replace(/\{/g,   "-______-");//8
           data = data.replace(/\}/g,   "-_______-");//9
           
           $('#temp').load('/index.php/file/file/upload/?filename='+filename+'&data='+data);
           $('#saveModal').modal('hide');
            });
        });
</script>
<table class="table table-hover">
<thead>
    <tr>
        <th style="text-align:center;">파일명</th>
        <th style="text-align:center;">사이즈</th>
        <th style="text-align:center;">만든날짜</th>
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
    </tr>
    </form>
    
<?php
}
?>
</tbody>
</table>
<div id="temp"></div>
