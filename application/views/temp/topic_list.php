<div class="span2">
<ul>
<?php
foreach($topic as $entry){
?>
      <li><a href='/index.php/topic/get/<?=$entry->id?>'><?=$entry->title?></a></li>
<?php
}
?>
</ul>
</div>
