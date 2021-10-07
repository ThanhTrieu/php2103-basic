<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong tin dich benh Covid 19</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center my-3"> Thong tin dich benh Covid 19</h1>
                <div id="loadingData" style="display: none !important"class="d-flex justify-content-center">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div id="result" class="mt-3"></div>
            </div>
        </div>
    </div>
    <script src="../public/js/jquery-3.6.0.js"></script>
    <script>
        $(function(){
            // call ajax lay du lieu tu backend
            $.ajax({
                url: "handle-covid.php",
                type: "post",
                data: {},
                beforeSend: function(){
                    $('#loadingData').removeAttr('style');
                },
                success: function(data) {
                    document.getElementById('loadingData').style.display = 'none !important';
                    $('#loadingData').css({display:'none !important'});
                    $('#result').html(data);
                }
            });
        });
    </script>
</body>
</html>