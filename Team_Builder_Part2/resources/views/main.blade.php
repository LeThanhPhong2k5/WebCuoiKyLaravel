<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    @vite([
        'resources/css/webmain.css', 
        'resources/js/MainProblem/main.js'
    ])
    <style type="text/css">
        body{
            margin:0px;
        }
        #container{
            width:1000px;
            border:1px solid gray;
            margin-left:auto;
            margin-right:auto;
        }

        #content{
            margin:15px;
        }
    </style>
     <style>
        .slideshow-container {
            width: 980px;
            height: 350px;
            position: relative;
            margin: auto;
        }
        .slideshow {
            padding-top: 10px;
            display: flex;
            overflow: hidden;
        }
        .slide {
            flex: 0 0 25%; /* Hiển thị 4 hình mỗi lần */
        }
        .slide img {
            width: 100%;
            vertical-align: top;
        }
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: rgb(237, 0, 0);
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }
        .prev {
            left: 0;
            border-radius: 3px 0 0 3px;
        }
        .next {
            right: 0;
            border-radius: 3px 3px 3px 3px;
        }
        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="container">
        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="{{ route('main') }}"><img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjKeSLQ8sN8zGv2zVND4QiV5N8QgRie8bueWpm8okeFdLCgCFycoUS807_b5q1C3MUltt_cG91QSpgmBaGh_hsC0biOsCO0NFmk7pWnKxDi-ePqvRB_YfpadN404yQVxXC1JfLddfnzC_2GUkWH3xICgxKxXqqPsWM1HtbRqMLQ9CUvPm7VF2QhrlXchA9Q/s775/Logo_VKU.png"></a>
                </div>
                <div class="widget_search">
                    <form method="GET" id="form-search" action="tim-kiem/">
                        <div><input type="text" name="keyword" placeholder="Tìm: tên anime ... " value="" onkeyup="onSearch(this.value)" id="searchkeyword" autocomplete="off"></div>
                    </form>

                </div>
                <div class="widget_user_header">
                    @if (auth()->check())
                        <ul>
                            <li><a href="#">Xin chào, {{ auth()->user()->name }} ▾</a>
                                <ul class="dropdown">
                                    <li>
                                        <form method="post" action="{{ route('account.logout') }}">
                                            @csrf
                                            <button type="submit"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>   
                    @else
                        <a class="button-login" rel="nofollow" href="{{ route('account.login') }}"></a>
                    @endif
                </div> 
            </div>
            <div class="gif-center">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi5NE9P0E7Uuz56LL9qO91xo-mF-gMkL5n9mGeeixPJ9g0XDCGU1nQQKG7JzrYGKqm8bu7MPXDzLQFCFKkQIhEd2YYVqmaDuSzFsrVW-5u7pAta1odG4zXW5-cXrpXwYy3-CEAteE4RyyQQjY5WhWqwf774G-el2VyJGBBbjFojMyol3T8eXja2zyU8fFqF/s1280/202405191846-_9_.gif" style="height: 150px; width: 1000px; text-align: center; display: block;">
            </div>
          <div id="box_menu">
            <ul>
                <li class="home mn">
                    <a href="{{ route('account.main') }}" title="Trang chủ"><span class="icon icon_home"></span></a>
                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="?" title="Thể loại">THỂ LOẠI</a>
                    <div class="sub_mn">
                        <div class="col_sub">
                            <ul>
                                <li><a title="Đời Thường" href="{{ route('capnhatweb') }}">Đời Thường</a></li>
                                <li><a title="Harem" href="{{ route('capnhatweb') }}">Harem</a></li>
                                <li><a title="Shounen" href="{{ route('capnhatweb') }}">Shounen</a></li>
                                <li><a title="Học Đường" href="{{ route('capnhatweb') }}">Học Đường</a></li>
                                <li><a title="Thể Thao" href="{{ route('capnhatweb') }}">Thể Thao</a></li>
                                <li><a title="Drama" href="{{ route('capnhatweb') }}">Drama</a></li>
                                <li><a title="Trinh Thám" href="{{ route('capnhatweb') }}">Trinh Thám</a></li>
                                <li><a title="Kinh Dị" href="{{ route('capnhatweb') }}">Kinh Dị</a></li>
                                <li><a title="Mecha" href="{{ route('capnhatweb') }}">Mecha</a></li>
                                <li><a title="Phép Thuật" href="{{ route('capnhatweb') }}">Phép Thuật</a></li>
                                <li><a title="Phiêu Lưu" href="{{ route('capnhatweb') }}">Phiêu Lưu</a></li>
                                <li><a title="Ecchi" href="{{ route('capnhatweb') }}">Ecchi</a></li>
                                <li><a title="Hài Hước" href="{{ route('capnhatweb') }}">Hài Hước</a></li>

                            </ul>
                        </div>
                        <div class="col_sub">
                            <ul>
                                <li><a title="Hành Động" href="{{ route('capnhatweb') }}">Hành Động</a></li>
                                <li><a title="Romance" href="{{ route('capnhatweb') }}">Romance</a></li>
                                <li><a title="Lịch Sử" href="{{ route('capnhatweb') }}">Lịch Sử</a></li>
                                <li><a title="Âm Nhạc" href="{{ route('capnhatweb') }}">Âm Nhạc</a></li>
                                <li><a title="Tokusatsu" href="{{ route('capnhatweb') }}">Tokusatsu</a></li>
                                <li><a title="Viễn Tưởng" href="{{ route('capnhatweb') }}">Viễn Tưởng</a></li>
                                <li><a title="Fantasy" href="{{ route('capnhatweb') }}">Fantasy</a></li>
                                <li><a title="Blu-ray" href="{{ route('capnhatweb') }}">Blu-ray</a></li>
                                <li><a title="Game" href="{{ route('capnhatweb') }}">Game</a></li>
                                <li><a title="Shoujo" href="{{ route('capnhatweb') }}">Shoujo</a></li>
                                <li><a title="Seinen" href="{{ route('capnhatweb') }}">Seinen</a></li>
                                <li><a title="Super Power" href="{{ route('capnhatweb') }}">Super Power</a></li>
                                <li><a title="Space" href="{{ route('capnhatweb') }}">Space</a></li>

                            </ul>
                        </div>
                        <div class="col_sub">
                            <ul>
                                <li><a title="Martial Arts" href="{{ route('capnhatweb') }}">Martial Arts</a></li>
                                <li><a title="Siêu Nhiên" href="{{ route('capnhatweb') }}">Siêu Nhiên</a></li>
                                <li><a title="Vampire" href="{{ route('capnhatweb') }}">Vampire</a></li>
                                <li><a title="Mystery" href="{{ route('capnhatweb') }}">Mystery</a></li>
                                <li><a title="Psychological" href="{{ route('capnhatweb') }}">Psychological</a></li>
                                <li><a title="Yuri" href="{{ route('capnhatweb') }}">Yuri</a></li>
                                <li><a title="Shounen Ai" href="{{ route('capnhatweb') }}">Shounen Ai</a></li>
                                <li><a title="Shoujo Ai" href="{{ route('capnhatweb') }}">Shoujo Ai</a></li>
                                <li><a title="Josei" href="{{ route('capnhatweb') }}">Josei</a></li>
                                <li><a title="Parody" href="{{ route('capnhatweb') }}">Parody</a></li>
                                <li><a title="Kid" href="{{ route('capnhatweb') }}">Kid</a></li>
                                <li><a title="Tragedy" href="{{ route('capnhatweb') }}">Tragedy</a></li>
                                <li><a title="Military" href="{{ route('capnhatweb') }}">Military</a></li>
                                <li><a title="Hoạt hình Trung Quốc" href="{{ route('capnhatweb') }}">Hoạt hình Trung Quốc</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="?" title="Trạng thái">TRẠNG THÁI</a>
                    <div class="sub_mn">
                        <div class="col_sub">
                            <ul>
                                <li><a href="{{ route('capnhatweb') }}" title="Đã hoàn thành">Đã hoàn thành</a></li>
                            </ul>
                        </div>
                        <div class="col_sub">
                            <ul>
                                <li><a href="{{ route('capnhatweb') }}" title="Đang tiến hành">Đang tiến hành</a></li>

                            </ul>
                        </div>
                    </div>
                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="{{ route('capnhatweb') }}" title="PHIM LẺ">PHIM LẺ</a>

                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="?" title="NĂM SẢN XUẤT">NĂM SẢN XUẤT</a>
                    <div class="sub_mn">
                        <div class="col_sub ">
                            <ul>
                                <li><a title="2015" href="{{ route('capnhatweb') }}">2015</a></li>
                                <li><a title="2017" href="{{ route('capnhatweb') }}">2017</a></li>
                                <li><a title="2019" href="{{ route('capnhatweb') }}">2019</a></li>
                                <li><a title="2021" href="{{ route('capnhatweb') }}">2021</a></li>
                                <li><a title="2023" href="{{ route('capnhatweb') }}">2023</a></li>

                            </ul>
                        </div>
                        <div class="col_sub ">
                            <ul>
                                <li><a title="2015" href="{{ route('capnhatweb') }}">2016</a></li>
                                <li><a title="2017" href="{{ route('capnhatweb') }}">2018</a></li>
                                <li><a title="2019" href="{{ route('capnhatweb') }}">2020</a></li>
                                <li><a title="2021" href="{{ route('capnhatweb') }}">2022</a></li>
                                <li><a title="2023" href="{{ route('capnhatweb') }}">2024</a></li>

                            </ul>
                        </div>
                    </div>
                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="{{ route('capnhatweb') }}" title="Top lượt xem">TOP LƯỢT XEM</a>

                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="?" title="Forum">FORUM</a>
                    <div class="sub_mn">
                        <div class="col_sub">
                            <ul>
                                <li><a title="Fanpage" href="https://www.facebook.com/conghuy.nguyen.9699523/">Fanpage</a></li>
                                <li><a title="Discord" href="{{ route('capnhatweb') }}">Discord</a></li>

                            </ul>
                        </div>
                    </div>
                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="{{ route('capnhatweb') }}" title="Trợ giúp">TRỢ GIÚP</a>

                </li>
                <li class="mn" title="">
                    <a class="cankhungmenu" href="{{ route('capnhatweb') }}">GIỚI THIỆU</a>

                </li>

            </ul>
        </div>

        </div>
        <div class="khungdecu">
            <div style="font-family: 'Times New Roman', Times, serif; color: bisque; height: 40px; background-color: #524b44; padding-top: 12px; padding-left: 5px;">
                <h1>PHIM ĐỀ CỬ</h1>
            </div>
            <div class="slideshow-container">
                <div class="slideshow">
                    <div class="slide">
                        <a href="{{ route('THE_NEW_GATE') }}"><div class="grid-item">
                            <div class="item">
                                <img src="https://cdn.myanimelist.net/images/anime/1898/141857l.jpg" alt="Doraemon">
                            </div>
                            <div class="khungtenanime">
                                <p>THE NEW GATE</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="slide">
                        <a href="{{ route('KAGE_NO_JITSURYOKUSHA_NI_NARITAKUTE') }}"><div class="grid-item">
                            <div class="item">
                                <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/mJG2AJV.jpg" alt="Doraemon">
                            </div>
                            <div class="khungtenanime">
                                <p>KAGE NO JITSURYOKUSHA NI NARITAKUTE!</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="slide">
                        <a href="{{ route('KAGE_NO_JITSURYOKUSHA_NI_NARITAKUTE_2ND_SEASON') }}"><div class="grid-item">
                            <div class="item">
                                    <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/nZu9ClH.jpg" alt="Doraemon">

                            </div>
                            <div class="khungtenanime">
                                <p>KAGE NO JITSURYOKUSHA NI NARITAKUTE! 2ND SEASON</p>

                            </div>
                        </div></a>
                    </div>
                    <div class="slide">
                        <a href="{{ route('eighty-six') }}"> <div class="grid-item">
                            <div class="item">
                                    <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/teWVo70.jpg" alt="Doraemon">

                            </div>
                            <div class="khungtenanime">
                                <p>86 (Eighty Six)</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="slide">
                        <a href="{{ route('KNY') }}"><div class="grid-item">
                            <div class="item">
                                    <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/6JvQ615.jpg" alt="Doraemon">

                            </div>
                            <div class="khungtenanime">
                                <p>KIMETSU NO YAIBA</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="slide">
                        <a href="{{ route('TSUKI-GA-MICHIBIKU-ISEKAI-DOUCHUU')}}"><div class="grid-item">
                            <div class="item">
                                <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/xDbPCM6.jpg" alt="Doraemon">
                            </div>
                            <div class="khungtenanime">
                                <p>TSUKI GA MICHIBIKU ISEKAI DOUCHUU</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="slide">
                        <a href="{{ route('GENJITSU-SHUGI-YUUSHA-NO-OUKOKU-SAIKENKI') }}"><div class="grid-item">
                            <div class="item">
                                <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/dYVKaNv.jpg" alt="Doraemon">
                            </div>
                            <div class="khungtenanime">
                                <p>GENJITSU SHUGI YUUSHA NO OUKOKU SAIKENKI</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="slide">
                        <a href="{{ route('OTONARI-NO-TENSHI-SAMA-NI-ITSUNOMANIKA-DAME-NINGEN-NI-SARETEITA-KEN') }}"><div class="grid-item">
                            <div class="item">
                                    <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/K6o8TEC.jpg" alt="Doraemon">

                            </div>
                            <div class="khungtenanime">
                                <p>OTONARI NO TENSHI-SAMA NI ITSUNOMANIKA DAME NINGEN NI SARETEITA KEN</p>
                            </div>
                        </div></a>
                    </div>
                </div>
                <span id="prev" class="prev" onclick="plusSlides(-1)">❮</span>
                <span id="next" class="next" onclick="plusSlides(1)">❯</span>
            </div>
        </div>
        <div style="font-family: 'Times New Roman', Times, serif; padding-top: 15px; padding-left: 10px; font-size: 30px; font-weight: bold; color: bisque;"><p >PHIM MỚI</p></div>

        <div id="content">
            <div class="grid-container">
                <a href="{{ route('THE_NEW_GATE') }}"><div class="grid-item">
                    <div class="item">
                            <img src="https://cdn.myanimelist.net/images/anime/1898/141857l.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>THE NEW GATE</p>
                    </div>
                </div></a>
                <a href="{{ route('KAGE_NO_JITSURYOKUSHA_NI_NARITAKUTE') }}"><div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/mJG2AJV.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>KAGE NO JITSURYOKUSHA NI NARITAKUTE!</p>
                    </div>
                </div></a>
                <a href="route('KAGE_NO_JITSURYOKUSHA_NI_NARITAKUTE_2ND_SEASON')"><div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/nZu9ClH.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>KAGE NO JITSURYOKUSHA NI NARITAKUTE! 2ND SEASON</p>

                    </div>
                </div></a>
                <a href="{{ route('eighty-six') }}"> <div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/teWVo70.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>86 (Eight Six)</p>
                    </div>
                </div></a>
                <a href="{{ route('KNY') }}"><div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/6JvQ615.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>KIMETSU NO YAIBA</p>
                    </div>
                </div></a>
                <a href="{{ route('TSUKI-GA-MICHIBIKU-ISEKAI-DOUCHUU')}}"><div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/xDbPCM6.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>TSUKI GA MICHIBIKU ISEKAI DOUCHUU</p>
                    </div>
                </div></a>
                <a href="{{ route('GENJITSU-SHUGI-YUUSHA-NO-OUKOKU-SAIKENKI') }}"><div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/dYVKaNv.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>GENJITSU SHUGI YUUSHA NO OUKOKU SAIKENKI</p>
                    </div>
                </div></a>
                <a href="{{ route('OTONARI-NO-TENSHI-SAMA-NI-ITSUNOMANIKA-DAME-NINGEN-NI-SARETEITA-KEN') }}"><div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/K6o8TEC.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>OTONARI NO TENSHI-SAMA NI ITSUNOMANIKA DAME NINGEN NI SARETEITA KEN</p>
                    </div>
                </div></a>
                <a href="{{ route('KNY-HASHIRA-GEIKO-HEN') }}"><div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/32UiIy7.jpeg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>KIMETSU NO YAIBA: HASHIRA GEIKO-HEN</p>
                    </div>
                </div></a>
                <a href="{{ route('TSUKI-GA-MICHIBIKU-ISEKAI-DOUCHUU-2ND-SEASON') }}"><div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/XjraE9Q.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>TSUKI GA MICHIBIKU ISEKAI DOUCHUU 2ND SEASON</p>
                    </div>
                </div></a>
                <a href="{{ route('tensei-kizoku-kantei-sukiru-de-nariagaru') }}"><div class="grid-item">
                    <div class="item">
                            <img src="https://cdn.myanimelist.net/images/manga/3/236898.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>TENSEI KIZOKU KANTEI SUKIRU DE NARIAGARU</p>
                    </div>
                </div></a>
                <a href="{{ route('BLUE-ARCHIVE-THE-ANIMATION') }}"><div class="grid-item">
                    <div class="item">
                            <img src="https://cdn.myanimelist.net/images/anime/1739/140995l.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>BLUE ARCHIVE THE ANIMATION</p>
                    </div>
                </div></a>
            </div>
        </div>



        </div>

</body>
</html>