<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>勤怠管理システム</title>
<meta name="description" content="ディスクリプションを入力">
<!-- bootstrapを読み込むためのコード -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        @include("header")
    </header>
    <main>
        <div class=left_menu>
            @include("user_left_menu")
        </div>
        <div class=content_list>
            @yield("left_menu")
        </div>
    </main>
</body>
</html>