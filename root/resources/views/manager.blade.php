@extends("header")
<body>
 <main>
    <div class=left_menu>
        <button type="button" class="btn btn-outline-secondary w-h radius">トップページ</button>
        <button type="button" class="btn btn-outline-secondary w-h radius">申請管理</button>
        <button type="button" class="btn btn-outline-secondary w-h radius">社員管理</button>
        <button type="button" class="btn btn-outline-secondary w-h radius">休日管理</button>
        <button type="button" class="btn btn-outline-secondary w-h radius">勤怠管理</button>
        <button type="button" class="btn btn-outline-secondary w-h radius">交通費申請</button>
        <button type="button" class="btn btn-outline-secondary w-h radius">備品申請</button>
    </div>
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