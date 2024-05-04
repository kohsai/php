<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <?php // sanitize.css, common.css, index.css を適用 ↓  ?>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">

</head>

<body>
<?php // ヘッダー部分の作成  ↓  //  ?>
  <header class="header">
    <div class="header__inner">
        <a class="header__logo" href="/php03/index.php">
            World Clock
        </a>
    </div>
  </header>  

  <main>
    <div class="search-form__content">
        <div class="search-form__heading">
            <h2>日本と世界の時間を比較</h2>
        </div>
        <?php /* result.phpファイルへデータ送信
        　   「get」はサーバーから情報を取り出す */  ?>
        <form class="search-form" action="result.php" method="get">
            <div class="search-form__item">
                <?php //セレクトボックスの作成　↓　// ?>
                <select class="search-form__item-select" name="city">
                    <option value="シドニー">シドニー</option>
                    <option value="上海">上海</option>
                    <option value="モスクワ">モスクワ</option>
                    <option value="ロンドン">ロンドン</option>
                    <option value="ヨハネスブルク">ヨハネスブルク</option>
                    <option value="ニューヨーク">ニューヨーク</option>
                </select>
            </div>
        <?php // ラジオボタン(選択肢からひとつだけ選ぶ)の作成  ↓  //  ?>
        
            <div class="search-form__button">
                <button class="search-form__button-submit" type="submit">検索                    
                </button>
            </div>
        </form>
    </div>
  </main>
</body>

</html>