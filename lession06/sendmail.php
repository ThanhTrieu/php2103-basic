<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send mail php</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center my-3"> Send Mail</h1>
                <form class="border p-3" action="server/handle-send-mail.php" method="post">
                    <div class="mb-3">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Email"/>
                    </div>
                    <div class="mb-3">
                        <label>Subject</label>
                        <input class="form-control" type="text" name="subject" placeholder="Subject"/>
                    </div>
                    <div class="mb-3">
                        <label>Content</label>
                        <textarea class="form-control" name="content"></textarea>
                    </div>
                    <button class="btn btn-primary" name="btnSend" type="submit"> Send </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>