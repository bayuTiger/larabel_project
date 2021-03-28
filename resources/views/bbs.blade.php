<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.
min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9J
voRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset(`/css/bbs.css`) }}">
  <title>ひとこと掲示板</title>
</head>
<body>
    <h1>TECH I.S. 掲示板</h1>
    <form method="post" action="">
      <div class="usernameWrapper">
        <div class="form-group">
            <label for="name">表示名</label>
            <input type="text" id="name" name="name" class="form-control username">
        </div>
      </div>
      <div class="messageWrapper">
          <div class="form-group">
              <label for="message">ひとことメッセージ</label>
              <textarea for="message" id="message" class="form-control"></textarea>
          </div>
      </div>
      <div class="btnWrapper">
          <button type="submit" class="btn btn-primary">書き込む</button>
      </div>
    </form>

</body>

</html>
