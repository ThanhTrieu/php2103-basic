<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file server</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css" />
</head>
<body>
    <?php
        $state = $_GET['state'] ?? '';
        $nameFile = $_GET['name'] ?? '';
        $pathFile = 'server/uploads/';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center"> Upload File Server</h1>
                <form class="border p-3" action="server/handle-upload.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="file" class="form-control" name="file" />
                    </div>
                    <button class="btn btn-primary" name="btnUpload" type="submit"> upload </button>
                </form>
                <?php if($state === 'success' && $nameFile !== ''): ?>
                    <div class="mt-3">
                        <p class="text-success">Upload thanh cong</p>
                        <img class="img-responsive" src="<?php echo $pathFile.$nameFile; ?>" />
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>