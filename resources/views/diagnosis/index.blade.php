<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>性格診断APIテスト</title>
        <style>
            /* スタイルの定義 */
            textarea {
                width: 100%;
                height: 200px;
                padding: 10px;
                border: 1px solid #ccc;
                box-sizing: border-box;
                font-size: 16px;
                resize: vertical;
            }

            button {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
                border-radius: 3px;
            }
        </style>
    </head>
    <body>
        @error('text')
            <li>{{$message}}</li>
        @enderror
        <form method="POST" action="/diagnosis">
            @csrf
            <textarea name="text" placeholder="テキストを入力"></textarea>
            <br>
            <p>例）</p>
            <p>私は数学が好きです。理由はある問題に対してのアプローチ方法が複数あり、より美しい回答の手順を考えることが好きだからです。<br>
                料理も数学と類似性があると考えており、にくじゃがを作る素材や手順によって味が異なるため、答えにたどり着くまでの手順を試行錯誤することが好きです。
            </p>
            <br>
            <button type="submit">送信</button>
        </form>
    </body>
</html>
