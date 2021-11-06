<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thực tập</title>
</head>
<body>
    <button id="btnToken">Lấy phiên làm việc</button>
    <script src="./asset/jquery-3.6.0.min.js"></script>
    <script>
        $("#btnToken").click(function(){
            
            
            $.ajax({
                type: "POST",
                url: "./exe_thuctap.php",
				dataType: 'tex',
                 data: {
                     _host: host,
                     _user: user,
                     _pass: pass,
                     _db: db,
                     _table: table,
                     _connect: connect
                 },
                success: function(data) {
					console.log(data);
                     var maCode = data.maCode;
                     console.log(maCode);
                     if(maCode == 0){
					 window.open(`./${data.ketQua}`);
                     }else
                     {
                        alert(data.ketQua);
                     }
                },
            });
        });
        
    </script>
</body>
</html>