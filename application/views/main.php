<script>

$(document).ready(function(){
    $('.main-btn').click(function(){
            document.location.href = "<?=base_url()?>index.php/auth/login";
        
    });

});

</script>
<style>
#main {
    border-top: 1px solid #536166;
    padding-top:60px;
    padding-left:50px;
    padding-right:50px;
}
body{ 
}
.icanc-main {
    color:white;
}
.main-title {
    margin-top:30px;
    font-size:110px;
    font-weight:bold;
    letter-spacing:10px;
    color:#36545f;
    text-align:center;
}
.main-subtitle {
    font-size:40px;
    font-weight:bold;
    letter-spacing:10px;
    color:#36545f;
    text-align:center;
}
.main-btn { 
    border-radius:10px;
    border:3px solid #34545f;
    color:#36545f;
    cursor:pointer;
    font-weight:bold;
    font-size:35px;
    padding:15px;
    margin-top:2.5em;
    text-align:center;
    letter-spacing:10px;
}
.main-btn:hover { 
    background-color:#36545f;
    color:white;
    cursor:pointer;
    font-weight:bold;
    padding:15px;
}
</style>
<script>

</script>
<div id="main" class="">
    <div class="row icanc-main">
        <div class="main-title col-lg-12 col-sm-12">
           ICANC PROJECT 
        </div>
        <div class="main-subtitle col-lg-12 col-sm-12">
        Online C language learner support
        </div>
        <div class="col-lg-4 col-sm-4"></div>
        <div class="main-btn col-lg-4 col-sm-4">
            LOGIN
        </div>
    </div>
</div>

