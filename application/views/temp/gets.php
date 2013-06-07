<div class="span10">
<ul>
<?php
foreach($topic as $entry){
?>
      <li><a href='/index.php/topic/get/<?=$entry->id?>'/><?=$entry->title?></li>
<?php
}
?>
</ul>
</div>