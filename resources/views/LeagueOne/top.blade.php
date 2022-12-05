@extends('layout.layout')
<html>
    <head>
        @section('title', 'Make Team by League-One')
        <link href="css/top.css" rel="stylesheet">
    </head>
    <body>
        @section('content')
        <img class="main-img" src="img/olga-guryanova-ft7vJxwl2RY-unsplash.jpg">
        <h1 class="headline">選出</h1>
        <div class="select">
            <div class="japan" >
                <a href="/japan" id="box">
                    <h1>日本代表</h1>
                    <p>あなただけの「日本代表」を23名、選出してください。<br>
                        対称選手は、リーグワンに登録されているカテゴリーAの選手のみです。
                    </p>
                    <img src="">
                </a>
            </div>
            <div class="beat15">
                <a href="" id="box">
                    <h1>リーグワンベスト15</h1>
                    <p>あなたの思う「リーグワンベスト15」を選出してください。<br>
                        対称選手は、リーグワンに登録されている全ての選手です。
                    </p>
                    <img src="">
                </a>
            </div>  
        </div>
        
        <div class="team">
            <h1 class="headline">チーム一覧</h1>
            <h2>DIBISON 1</h2>
            <p>CONFERENCE A</p>
        </div>
        <div class="CONFERENCE">
            <ul>

                <form action="/pana" method="get">
                    <button id="blue" type="submit">埼玉パナソニックワイルドナイツ</button>
                </form> 
                <form action="/" method="get">
                    <button id="blue" type="submit">静岡ブルーレヴズ</button>
                </form> 
                <form action="/" method="get">
                    <button id="red" type="submit">東芝ブレイブルーパス東京</button>
                </form> 
                <form action="/" method="get">
                    <button id="green" type="submit">トヨタヴェルブリッツ</button>
                </form> 
                <form action="/" method="get">
                    <button id="green" type="submit">三菱重工相模原ダイナボアーズ</button>
                </form> 
                <form action="/" method="get">
                    <button id="black" type="submit">リコーブラックラムズ東京</button>
                </form>   
            </ul>
        </div>

        <div class="team">
            <p>CONFERENCE B</p>
        </div>
        <div class="CONFERENCE">
            <ul>
                <form action="/" method="get">
                    <button id="green" type="submit">NECグリーンロケッツ東葛</button>
                </form> 
                <form action="/" method="get">
                    <button id="orange" type="submit">クボタスピアーズ船橋・東京ベイ</button>
                </form> 
                <form action="/" method="get">
                    <button id="red" type="submit">コベルコ神戸スティーラーズ</button>
                </form> 
                <form action="/" method="get">
                    <button id="yellow" type="submit">東京サントリーサンゴリアス</button>
                </form> 
                <form action="/" method="get">
                    <button id="red" type="submit">花園近鉄ライナーズ</button>
                </form> 
                <form action="/" method="get">
                    <button id="red" type="submit">横浜キャノンイーグルス</button>
                </form> 
            </ul>
        </div>
    </div>
@endsection
    </body>
</html>