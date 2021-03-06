<script src="<?=base_url();?>asset/lib/js/hmac-sha512.js"></script>
<script src="//comments.skplanetx.com/script/plugin.js"></script>
<script>
	var user_email = '<?=$this->session->userdata('user_email');?>';
	var user_nickname = '<?=$this->session->userdata('user_email');?>';
	//var user_nickname = '<?=$this->session->userdata('user_nickname');?>';
// btoa, atob for IE
;(function () {

		var
		object = typeof window != 'undefined' ? window : exports,
		chars =
		'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=',
		INVALID_CHARACTER_ERR = (function () {
			// fabricate a suitable error object
			try { document.createElement('$'); }
			catch (error) { return error; }}());

		// encoder
		// [https://gist.github.com/999166] by [https://github.com/nignag]
		object.btoa || (
			object.btoa = function (input) {
			for (
				// initialize result and counter
				var block, charCode, idx = 0, map = chars, output = '';
				// if the next input index does not exist:
				//   change the mapping table to "="
				//   check if d has no fractional digits
				input.charAt(idx | 0) || (map = '=', idx % 1);
				// "8 - idx % 1 * 8" generates the sequence 2, 4, 6, 8
				output += map.charAt(63 & block >> 8 - idx % 1 * 8)
				) {
			charCode = input.charCodeAt(idx += 3/4);
			if (charCode > 0xFF) throw INVALID_CHARACTER_ERR;
			block = block << 8 | charCode;
			}
			return output;
			});

		// decoder
		// [https://gist.github.com/1020396] by [https://github.com/atk]
		object.atob || (
				object.atob = function (input) {
				input = input.replace(/=+$/, '')
				if (input.length % 4 == 1) throw INVALID_CHARACTER_ERR;
				for (
					// initialize result and counters
					var bc = 0, bs, buffer, idx = 0, output = '';
					// get next character
					buffer = input.charAt(idx++);
					// character found in table? initialize bit storage and add its ascii
					// value;
					~buffer && (bs = bc % 4 ? bs * 64 + buffer : buffer,
						// and if not first of each 4 characters,
						// convert the first 8 bits to one ascii character
						bc++ % 4) ? output += String.fromCharCode(255 & bs >> (-2 * bc & 6)) :
					0
					) {
				// try to find character in table (0-63, not found => -1)
				buffer = chars.indexOf(buffer);
				}
				return output;
				});

}());

	var org = {
		domain: "http://220.70.0.7",
		login_id: user_email,
		name: user_nickname
	};
	var org_str = JSON.stringify(org);
	var base64_str = window.btoa(org_str);
	var timestamp = (new Date()).getTime();
	var app_secret = '62e2d6de2780487276ba68ce876adede'; // (상단 Step3]hmac hashing string 생성 참고)
	var hmac_str = CryptoJS.HmacSHA512(base64_str + " " + timestamp, app_secret);
	var token = base64_str + " " + hmac_str + " " + timestamp;

	var op_app_key = '682abf17-0480-38ed-a76e-5a35849f19e8';
	var page_url = '<?=current_url();?>';
	var options = {
		target_id: 'comments_plugin1',
		page_id: page_url,
		op_app_key: op_app_key,
		sso_token: token
	};

	SKP.commentsPlugin(options);
</script>

<div class="row">
	<div class="col-lg-9 col-sm-9 col-offset-3">
		<div id="comments_plugin1"></div>
	</div>
</div>
