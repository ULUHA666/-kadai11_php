<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登録フォーム</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/css/uikit.min.css" />
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <!-- <span uk-icon="heart"></span> -->



  <form class="aa" method="POST" action="insert.php">
    <fieldset class="uk-fieldset">
      <img src="img/bookmark.png" alt="">

      <div class="uk-margin">
        書籍名
        <input name="name" class="uk-input" type="text" placeholder="" aria-label="Input">
      </div>

      <div class="uk-margin">
        書籍URL
        <input name="email" class="uk-input" type="text" placeholder="" aria-label="Input">
      </div>
      <div class="uk-margin">
        発売日
        <input name="age" class="uk-input" type="text" placeholder="" aria-label="Input">
      </div>
      <div class="uk-margin">
        書籍コメント
        <textarea name="naiyou" class="uk-textarea"></textarea>
      </div>

      <div class="uk-margin">

        <button type="submit" class="uk-button uk-button-default">送信</button>
      </div>






      <!-- <div class="uk-margin">
        <select class="uk-select" aria-label="Select">
          <option>Option 01</option>
          <option>Option 02</option>
        </select>
      </div>

      <div class="uk-margin">
        <textarea class="uk-textarea" rows="5" placeholder="Textarea" aria-label="Textarea"></textarea>
      </div>

      <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
        <label><input class="uk-radio" type="radio" name="radio2" checked> A</label>
        <label><input class="uk-radio" type="radio" name="radio2"> B</label>
      </div>

      <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
        <label><input class="uk-checkbox" type="checkbox" checked> A</label>
        <label><input class="uk-checkbox" type="checkbox"> B</label>
      </div>

      <div class="uk-margin">
        <input class="uk-range" type="range" value="2" min="0" max="10" step="0.1" aria-label="Range">
      </div> -->

    </fieldset>
  </form>

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/js/uikit-icons.min.js"></script>
  <script src="js/app.js"></script>


  <div class="navbar-header"><a class="navbar-brand" href="select.php">登録データ一覧参照</a></div>

</body>

</html>