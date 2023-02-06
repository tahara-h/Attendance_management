<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>@yield("title")</title>
<meta name="description" content="ディスクリプションを入力">
<!-- bootstrapを読み込むためのコード -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
 <header>
        <div class=system_title>Web日報登録</div>
        <div class=user_name>社員名を表示</div>
        <a href="" class=login>ログアウト<a>
 </header>
</body>
<body>
 <main>
@yield("left_menu")
    <div class=content_list>
        <div class=content_box>
            <div class=content_name>申請管理</div>
            <div class=content_box_small>
                <button type="button" class="btn btn-primary w-h radies">申請一覧</button>
            </div>
            <div class=content_box_small>
                <button type="button" class="btn btn-primary w-h">休日設定</button>
            </div>
        </div>
        <div class=content_box>
            <div class=content_name>社員管理</div>
            <div class=content_box_small>
                <button type="button" class="btn btn-primary w-h radies">社員一覧</button>
            </div>
            <div class=content_box_small>
                <button type="button" class="btn btn-primary w-h">社員登録</button>
            </div>
        </div>
        <div class=content_box>
            <div class=content_name>休日設定</div>
            <div class=content_box_small>
                <button type="button" class="btn btn-primary w-h radies">休日一覧</button>
            </div>
            <div class=content_box_small>
                <button type="button" class="btn btn-primary w-h">休日登録</button>
            </div>
        </div>
        <div class=content_box>
            <div class=content_name>勤怠管理</div>
            <div class=content_box_small>
                <button type="button" class="btn btn-primary w-h radies">勤怠一覧</button>
            </div>
            <div class=content_box_small>
                <button type="button" class="btn btn-primary w-h">勤怠登録</button>
            </div>
        </div>
        <div class=content_box>
            <div class=content_name>各種申請</div>
                <div class=content_box_small>
                    <button type="button" class="btn btn-primary w-h">休日申請</button>
                </div>
                <div class=content_box_small>
                    <button type="button" class="btn btn-primary w-h">交通費申請</button>
                </div>
                <div class=content_box_small>
                    <button type="button" class="btn btn-primary w-h">備品申請</button>
                </div>
        </div>
     </div>
 </main>
 </body>
</html>