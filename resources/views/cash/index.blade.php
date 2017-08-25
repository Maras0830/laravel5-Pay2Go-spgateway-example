<html>
<head>
    <title>Test Cash</title>
</head>
<body>
<h1>智付寶 - 訂單測試</h1>
<form name='Pay2go' method='post' action='{{ url('/cash/create') }}'>
    {!! csrf_field() !!}
    商店訂單編號：<input type="text" name="MerchantOrderNo" value="<?php echo "20160825" . random_int(1000,9999) ?>"/> <br/>
    訂單金額：<input type="text" name="Amt" value="<?php echo random_int(0,9999) ?>"> <br/>
    商品資訊：<input type="text" name="ItemDesc" value="測試商品資訊敘述"> <br/>
    Email：<input type="text" name="Email" value="Maras0830@gmail.com"> <br/>

    <input type='submit' value='Submit'>
</form>
</body>
</html>