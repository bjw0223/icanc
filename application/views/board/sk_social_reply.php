<script src="http://comments.skplanetx.com/script/plugin.js"></script>
<?php
	$app_key = 'i000012013093016340000A00002';
	$app_secret = '62e2d6de2780487276ba68ce876adede';
	/*$json_str =array(
		    "domain"=>"http://220.70.0.7"
			    ,"login_id"=>"admin@naver.com"
				    ,"name"=>"유진영"
					    ,"photo"=>"http://comments.skplanetx.com/f/profile/13769801564336016.jpg"
	);
	*/

	$json_str='{"domain":"http://220.70.0.7","login_id":"admin@naver.com","name":"유진영","photo":"http://comments.skplanetx.com/f/profile/13769801564336016.jpg"}';
//	var_dump($json_str);
	$base64_str = base64_encode($json_str);
	var_dump($base64_str);
	$timestamp_str = round(microtime(true)*1000);
	$org_str = "eyJsb2dpbl9pZCI6ImFkbWluQG5hdmVyLmNvbSIsIm5hbWUiOiLtmY3quLjrj5kiLCJkb21haW4iOiJodHRwOi8vMjIwLjcwLjAuNy9pY2FuYy9pbmRleC5waHAvbG9naW4iLCJwaG90byI6Imh0dHA6Ly9jb21tZW50cy5za3BsYW5ldHguY29tL2YvcHJvZmlsZS8xMzc2OTgwMTU2NDMzNjAxNi5qcGcifQ= "." ".$timestamp_str;       
	//$hmac_str = hash('sha512', $app_secret );
	$hmac_str = hash_hmac('sha512',$org_str, $app_secret );
	$sso_token = "eyJsb2dpbl9pZCI6ImFkbWluQG5hdmVyLmNvbSIsIm5hbWUiOiLtmY3quLjrj5kiLCJkb21haW4iOiJodHRwOi8vMjIwLjcwLjAuNy9pY2FuYy9pbmRleC5waHAvbG9naW4iLCJwaG90byI6Imh0dHA6Ly9jb21tZW50cy5za3BsYW5ldHguY29tL2YvcHJvZmlsZS8xMzc2OTgwMTU2NDMzNjAxNi5qcGcifQ= ".$hmac_str." ".$timestamp_str; // sso token
	$n="eyJsb2dpbl9pZCI6InRlc3RfaWQiLCJuYW1lIjoi7ZmN6ri464+ZIiwiZG9tYWluIjoiYWZmb2dhdG8uc2twbGFuZXR4LmNvbSIsInBob3RvIjoiaHR0cDovL2NvbW1lbnRzLnNrcGxhbmV0eC5jb20vZi9wcm9maWxlLzEzNzY5ODAxNTY0MzM2MDE2LmpwZyJ9 b7a73febb402e141d36c18d61d261207d07597e63274a7c245710989bdfb994e252409a727d85d35ecea94ba25ef939cd5f35c4c83ffd839662e17c00ee51b8f 1380710402089";
	$ass="eyJ1c2VyX2lkIjoiZGhrYW5nIiwibmFtZSI6InVzZXJfbmFtZSIsInBob3RvIjoiaHR0cDovL3N0YXRpYzIubWUyZGF5LmNvbS9pbWFnZXMvdXNlci9nZWVraW5zaWRlL3Byb2ZpbGUucG5nPzEyNjY5MTExMzcifQ== 20c87b006bb6c433a6171e51c8534c8a1ea35d3f1a10681289193cd4ed463fc2973575bc1713169b0dc7593d9114a1d09128269c980d8d8251adf67b4a89240e 133834059359";
	$k="eyJsb2dpbl9pZCI6ImFkbWluQG5hdmVyLmNvbSIsIm5hbWUiOiLtmY3quLjrj5kiLCJkb21haW4iOiJodHRwOi8vMjIwLjcwLjAuNy9pY2FuYy9pbmRleC5waHAvbG9naW4iLCJwaG90byI6Imh0dHA6Ly9jb21tZW50cy5za3BsYW5ldHguY29tL2YvcHJvZmlsZS8xMzc2OTgwMTU2NDMzNjAxNi5qcGcifQ== 1bab6c5e0efc468ab2c54639e79c1b493fe0998dda5dc696b6f300a9ace9eca841c4d3c1e7a5fe7b5b2008e923fb48636d2aea5eeae3bb763aff275d2a74ce7a 1380710851894";
var_dump($sso_token);	
var_dump($ass);	
var_dump($n);	
var_dump($k);	
?>
<script type="text/javascript">

	SKP.commentsPlugin({
		    target_id: 'comments_plugin1',
			op_app_key: '682abf17-0480-38ed-a76e-5a35849f19e8',
			// (Optional) 페이지 식별자입니다. 같은 page_id는 같은 댓글들을 표시하며 생략시 페이지URL이 들어갑니다.
			page_id: 'page002',
			// (Optional) 아포가토에 표시될 페이지 제목입니다. 생략 시 브라우저 타이틀이 들어갑니다.
			// (Optional) 아래는 필요에 따라 추가하며 상세한 내용은 하단 표를 참고하세요.
			//page_url: 'http://affogato.skplanetx.com',
			//page_title: 'Social Comment Plug-In - Affogato',                      // page title : 해당 댓글의 페이지 정보
			//host_favicon: 'http://affogato.skplanetx.com/favicon.ico',            // login link 에 보일 favicon (16x16)
			//host_login_url: 'http://220.70.0.7/icanc/index.php/auth/login',  // login link
			//host_login_url: 'http://affogato.skplanetx.com/login/logout.do,',     // logout link
			//host_login_url: 'http://affogato.skplanetx.com/login/220.70.0.7/icanc/index.php/auth/login,',     // logout link
			//host_logout_url: 'http://220.70.0.7/icanc/index.php/auth/logout,',     // logout link
			//sso_token: "<?=$sso_token?>",
			page_url: 'http://affogato.skplanetx.com',
			page_title: 'Social Comment Plug-In - Affogato',                      // page title : 해당 댓글의 페이지 정보
			host_favicon: 'http://affogato.skplanetx.com/favicon.ico',            // login link 에 보일 favicon (16x16)
			//host_login_url: 'http://220.70.0.7/icanc/index.php/auth/login',  // login link
			host_login_url: 'http://220.70.0.7/icanc/index.php/auth/login',     // logout link
			host_logout_url: 'http://220.70.0.7/icanc/index.php/auth/logout',  
			//sso_token:'eyJsb2dpbl9pZCI6InRlc3RfaWQiLCJuYW1lIjoi7ZmN6ri464+ZIiwiZG9tYWluIjoiYWZmb2dhdG8uc2twbGFuZXR4LmNvbSIsInBob3RvIjoiaHR0cDovL2NvbW1lbnRzLnNrcGxhbmV0eC5jb20vZi9wcm9maWxlLzEzNzY5ODAxNTY0MzM2MDE2LmpwZyJ9 b7a73febb402e141d36c18d61d261207d07597e63274a7c245710989bdfb994e252409a727d85d35ecea94ba25ef939cd5f35c4c83ffd839662e17c00ee51b8f 1380710402089'
			//sso_token:'eyJsb2dpbl9pZCI6ImFkbWluQG5hdmVyLmNvbSIsIm5hbWUiOiLtmY3quLjrj5kiLCJkb21haW4iOiJodHRwOi8vMjIwLjcwLjAuNy9pY2FuYy9pbmRleC5waHAvbG9naW4iLCJwaG90byI6Imh0dHA6Ly9jb21tZW50cy5za3BsYW5ldHguY29tL2YvcHJvZmlsZS8xMzc2OTgwMTU2NDMzNjAxNi5qcGcifQ== 1bab6c5e0efc468ab2c54639e79c1b493fe0998dda5dc696b6f300a9ace9eca841c4d3c1e7a5fe7b5b2008e923fb48636d2aea5eeae3bb763aff275d2a74ce7a 1380710851894',
			// is_responsive: false
			sso_token:'<?=$sso_token?>'
	});
</script>
<div id="comments_plugin1"></div>
