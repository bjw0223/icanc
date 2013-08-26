<script>
    $(document).ready(function(){

    });
</script>
<style>
.my-navbar {
    height:50px;
    background-color:rgb(34, 27, 83);
    position:fixed;
    width:100%;
    top:0px;
}
.my-nav-logo
{
    height:50px;
    line-height:50px;
    font-size:30px;
    font-weight:bold;
    text-align:center;
}
.my-nav-logo > a {
    color:white;
}
.my-nav-logo > a:hover {
    text-decoration:none;
    color:yellow;
    text-shadow:white 0px 0px 15px; 
    font-size:35px;
}
.my-nav-auth
{
    height:50px;
    line-height:46px;
}
.my-nav-auth > div > div {
    height:50px;
    line-height:50px;
    font-size:18px;
    border-left:1px solid #222222;
    text-align:center
    color:white;
}
.my-nav-auth > div > div:hover {
    background-color:white;
    color:green;
    font-weight:bold;
}
</style>

<div class="my-navbar">
    <div class="row">
        <div class="col-lg-2 my-nav-logo">
            <a href="<?=base_url();?>index.php/main">I CAN C</a>
        </div>
        <div class="col-lg-3 col-offset-7 my-nav-auth">
            <div class="row">
                <div class="col-lg-4 col-offset-4">로그인</div>
                <div class="col-lg-4">회원가입</div>
            </div>
        </div>
    </div>
<div>
