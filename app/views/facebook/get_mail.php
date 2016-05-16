<!DOCTYPE html>
<html>
<head>
<title>Facebook Login JavaScript Example</title>
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$(function(){
	$(document).on('click', '.uniqueid_view', function(){
		var uniqueid = $('.uniqueid').val();
		location.href = 'http://fanswoo.com/facebook/get_mail/?uniqueid=' + uniqueid;
	});
});
</script>
<style>
</style>
</head>
<body>
<div style="margin-bottom:10px;">
	識別ID：<input type="text" class="uniqueid" value="<?=$uniqueid?>">
	<input type="submit" class="uniqueid_view" value="變更識別ID">
</div>
<div style="margin-bottom:100px;">
	<select>
		<option>按讚1次以上，共有100人</option>
		<option>按讚2次以上，共有100人</option>
		<option>按讚3次以上，共有100人</option>
		<option>按讚4次以上，共有100人</option>
		<option>按讚5次以上，共有100人</option>
		<option>按讚6次以上，共有100人</option>
		<option>按讚7次以上，共有100人</option>
		<option>按讚8次以上，共有100人</option>
		<option>按讚9次以上，共有100人</option>
		<option>按讚10次以上，共有100人</option>
	</select>
	<input type="submit" class="get_mail" value="取得mail">
	<p>本識別碼將於產生的7天後自動刪除</p>
</div>
<div>
	<p>mail清單：</p>
	<textarea class="mail_list" style="width:300px;height:400px;">
test@facebook.com
test2@facebook.com
test3@facebook.com
</textarea>
</div>

</body>
</html>