<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong bao sinh nhat</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css" />
</head>
<body>
    <?php
        $state = $_GET['state'] ?? '';
        $message = $_GET['mess'] ?? '';
        $yourBirthday = $_GET['d'] ?? '';
        $time = $_GET['time'] ?? '';
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center my-2"> Thong bao thoi gian toi ngay sinh nhat</h2>

                <?php if($state === 'empty' || $state === 'error'): ?>
                    <p class="text-danger my-4"> vui long nhap lai du lieu - dinh dang mm/dd/yyyy</p>
                <?php endif; ?>

                <?php if($state === 'success' && $message === 'over'): ?>
                    <p class="text-info my-4"> Sinh nhat ban da qua roi !</p>
                <?php endif; ?>

                <?php if($state === 'success' && $message === 'happy'): ?>
                    <p class="text-success my-4"> chuc mung sinh nhat ban !</p>
                <?php endif; ?>

                <?php if($state === 'success' && $message === 'wait'): ?>
                    <p class="text-warning my-4"> Sinh nhat sap toi roi, chi con <?php echo $time; ?> ngay la se toi.</p>
                <?php endif; ?>


                <form action="controller/handle-birthday.php" method="post" class="border p-3">
                    <div class="mb-3">
                        <label>Ngay sinh cua ban :</label>
                        <input value="<?php echo $yourBirthday; ?>" type="date" class="form-control" name="yourBirthday" />
                    </div>
                    <button class="btn btn-primary" name="btnCheck" type="submit"> kiem tra</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>