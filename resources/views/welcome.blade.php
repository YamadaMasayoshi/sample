<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Matching</title>

</head>

<body>


        <!--style-->

        
        <style>
           body {
           padding-top: 130px; 
           padding-bottom: 130px;
           }

            header {
            Width: 100%;
            height: 10%;
            padding: 0px 20px;
            top: 0;
            left: 0;
            box-sizing: border-box;
            position: fixed;
            background-color: #ffff66;
            display: flex;
            align-items: center;
            }   
        
            header .gnav .menu {
             display: flex; 
             }
            
             header .gnav .menu li {
            list-style: none; 
            }

            header .gnav .menu li + li {
            margin-left: 100px; 
            }

        </style>

<header>
       <!--アプリ名-->
       <h1>Matching</h1>     
        <nav class="gnav">
            <ul class="menu">
                <!--ユーザー名-->
                <li><a href="">ユーザー名</a></li>
                 <!--ログインボタン-->   
                <li>
                    <a href="">ログイン</a>
                </li>    
                <!--新規作成ボタン--> 
                <li>
                    <a href="">新規作成</a>
                </li>
                <!--設定ボタン-->
                <li>
                    <a href="">設定</a>
                </li>
            </ul>
        </nav>  
</header>

<main>

    <style>

        main {
            Width: 100%;
            display:flex; 
            justify-content: space-around;
        }

        main .List .menu li {
            
                display:flex;
                margin-top: 20%;       
                list-style: none; ß
                }
        main .talk-btn{
            display:flex;
            margin-top: 0%; 
        }

        main .List-2 .menu li{
            display:flex;
            margin-top: 20%; 
            list-style: none; 
            flex-direction: column;
            }

        main .List-3 .menu li{
            margin-top: 20%; 
            list-style: none; 
            flex-direction: column;
        }

    </style>

        <div class="List">
            <ul class="menu">
                <!--チャットボタン-->
                <li style="background: #fff; border: 1px #ccc solid; box-shadow: 0 2px 3px 0 #ddd; font-size: 100%; padding: 20px;">
                    <a href="">チャット</a>
                </li>
                <!--処理1ボタン-->
                <li style="background: #fff; border: 1px #ccc solid; box-shadow: 0 2px 3px 0 #ddd; font-size: 100%; padding: 20px;">
                    <a href="">処理1</a>
                </li>
                <!--処理2ボタン-->
                <li style="background: #fff; border: 1px #ccc solid; box-shadow: 0 2px 3px 0 #ddd; font-size: 100%; padding: 20px;">
                    <a href="">処理2</a>
                </li>
            </ul>
        </div>

        <!--トークボタン-->
        <div style="background: #fff; border: 1px #ccc solid; box-shadow: 0 2px 3px 0 #ddd; font-size: 100%; width: 30%;  padding: 20px;">
            <div class="talk-btn">
                トーク
            </div>
        </div>

        <div class="List-2">
            <ul class="menu">
                <!--新規チャットボタン-->
                <li class="newChat-btn" style="background: #fff; border: 1px #ccc solid; box-shadow: 0 2px 3px 0 #ddd; font-size: 100%; padding: 20px;">
                    <a href="">新規チャット</a>
                </li>
                <!--今すぐマッチボタン-->
                <li class="matchingNow-btn" style="background: #fff; border: 1px #ccc solid; box-shadow: 0 2px 3px 0 #ddd; font-size: 100%; padding: 20px;">
                    <a href="">今すぐマッチ</a>
                </li>
            </ul>
        </div>

        <div class="List-3">
            <ul class="menu">
                <!--新規通話ボタン-->
                <li class="newCommunication-btn" style="background: #fff; border: 1px #ccc solid; box-shadow: 0 2px 3px 0 #ddd; height:20%; font-size: 100%; padding: 20px;">
                    <a href="">新規通話</a>
                </li> 
                <!--ラジオボタン-->
                <li class="radio-btn" style="background: #fff; border: 1px #ccc solid; box-shadow: 0 2px 3px 0 #ddd; height: 20%; font-size: 100%; padding: 20px;">
                    <a href="">ラジオ</a>
                </li>
            </ul>
        </div>     

    <!--条件設定ボタン-->
        <div class="conditionSetting-btn" style="background: #fff; border: 1px #ccc solid; box-shadow: 0 2px 3px 0 #ddd; width:20%; font-size: 100%; padding: 20px;">
            <a href="">条件設定</a>
        </div>

    
     </main>  

     <sub>
        <style>
            sub {
                display: flex;
                justify-content: center;
                height: 50%;
                width: 100%;
                font-size: 20px;

                }


            sub .community-btn{
                margin-top: 5%; 
                
            }
        
        </style>

    
        <!--コミュニティボタン-->
        <div class="community-btn" style="background: #fff; border: 1px #ccc solid; box-shadow: 0 2px 3px 0 #ddd; width:100%;  font-size: 100%; padding: 20px;">
            <a href="">コミュニティ</a>
        </div>

    </sub>

   
    <style>
        footer {
        Width: 100%;
        height: 10%;
        padding: 30px 50px;
        position: absolute;
        bottom: 0;
        left: 0;
        box-sizing: border-box;
        position: fixed;
        background-color: #ffff66;
        display: flex;
        align-items: center;
        justify-content: space-between;
        }


        footer .gnav .menu {
            display: flex; 
            }
        
            footer .gnav .menu li {
                
        list-style: none; 
        }

        footer .gnav .menu li + li {
        margin-left: 100px; 
        }
    </style>

    <footer>

            <nav class="gnav">
            <ul class="menu">
            <!--会社概要-->
                <li><a href="">会社概要</a></li>
            <!--お問い合わせ--> 
                <li><a href="">お問い合わせ</a></li>    
            <!--利用規約-->
                <li><a href="">利用規約</a></li>
        
            </ul>
        </nav>  



    </footer>


</body>

</html>
