<script>
    $(document).ready(function(){
        $('.tipview').click( function() {
            var i = $(this).attr('i');
            var str ="";
            for(var j = 1 ; j <= i ; j++ )
            {
               str+=$(this).attr('var'+j) + "<br>"; 
            }
            $('.tipdesc').html( str );
        });
    });
</script>
<div>
    <p> a = 10 , b = 20 </p>
    <p class="tipview" i="3" var1="temp = 10" var2="a = 10" var3="b = 20">temp = a;</p>
    <p class="tipview" i=3 var1="temp = 10" var2="a = 20" var3="b = 20">a = b;</p>
    <p class="tipview" i=3 var1="temp = 10" var2="a = 20" var3="b = 10">b = temp;</p>
</div>
<div class="tipdesc">
</div>
