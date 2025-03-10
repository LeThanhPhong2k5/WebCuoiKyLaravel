<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    @vite(['resources/css/ANIME/webmain.css'])
    @vite(['resources/css/ANIME/noidunganime.css'])
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
        
        }
    </style>
    <title>{{ $title }}</title>
</head>
<body>
    <div id="container">
        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="{{ route('logo_main') }}"><img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjKeSLQ8sN8zGv2zVND4QiV5N8QgRie8bueWpm8okeFdLCgCFycoUS807_b5q1C3MUltt_cG91QSpgmBaGh_hsC0biOsCO0NFmk7pWnKxDi-ePqvRB_YfpadN404yQVxXC1JfLddfnzC_2GUkWH3xICgxKxXqqPsWM1HtbRqMLQ9CUvPm7VF2QhrlXchA9Q/s775/Logo_VKU.png"></a>
                </div>
                <div class="widget_search">
                    <form method="GET" id="form-search" action="tim-kiem/">
                        <div><input type="text" name="keyword" placeholder="Tìm: tên anime ... " value="" onkeyup="onSearch(this.value)" id="searchkeyword" autocomplete="off"></div>
                    </form>
        
                </div>
                <div class="widget_user_header">
                    <a class="button-login" rel="nofollow" href="{{ route('login') }}"></a>
                </div>
            <div class="gif-center">

                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi5NE9P0E7Uuz56LL9qO91xo-mF-gMkL5n9mGeeixPJ9g0XDCGU1nQQKG7JzrYGKqm8bu7MPXDzLQFCFKkQIhEd2YYVqmaDuSzFsrVW-5u7pAta1odG4zXW5-cXrpXwYy3-CEAteE4RyyQQjY5WhWqwf774G-el2VyJGBBbjFojMyol3T8eXja2zyU8fFqF/s1280/202405191846-_9_.gif" style="height: 150px; width: 1000px; text-align: center; display: block;">
                
          
            
          </div>
          <div id="box_menu">
            <ul>
                <li class="home mn">
                    <a href="{{ route('logo_main') }}" title="Trang chủ"><span class="icon icon_home"></span></a>
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
                        <div class="col_sub ">
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

        <div id="content">
            <div class="block-wrapper page-single " itemscope="" itemtype="https://schema.org/Movie">
                <div class="movie-info">
                    <div class="block-movie-info">
                        <div class="row">
                            <div class="col-6 movie-detail">
                                <h1 class="movie-title"><span class="title-1" itemprop="name">KAGE NO JITSURYOKUSHA NI NARITAKUTE! 2ND SEASON</span><span class="title-2" itemprop="name">Shadow Garden 2nd Season | 陰の実力者になりたくて！ 2nd Season | The Eminence in Shadow Season 2</span><span class="title-year"> (2023)</span></h1>
                                <div class="movie-meta-info">
                                    <dl class="movie-dl">
                                        <dt class="movie-dt">Trạng thái: </dt>
                                        <dd class="movie-dd imdb">12/12</dd><br>
                                        <dt class="movie-dt">Thể loại: </dt>
                                        <dd class="movie-dd dd-cat"><a href="?">Hành động</a>, <a href="?">Hài hước</a>, <a href="?">Fantasy</a>, <a href="?">Xuyên Không - Chuyển Kiếp</a></dd><br>
                                        <dt class="movie-dt">Dạng Anime: </dt>
                                        <dd class="movie-dd"><a href="danh-sach/tv-series/1.html">TV Series</a></dd><br>
                                        <dt class="movie-dt">Season: </dt>
                                        <dd class="movie-dd"><a href="?"> Mùa Thu Năm 2023</a></dd><br>
                                        <dt class="movie-dt">Năm: </dt>
                                        <dd class="movie-dd"><a href="/tim-nang-cao/?status=&amp;season=&amp;year=2024&amp;sort=popular">2023</a>
                                        </dd><br>
                                        <dt class="movie-dt">Lượt Xem: </dt>
                                        <dd class="movie-dd">N/A</dd><br>
                                    </dl>
                                    <div class="clear"></div>
                                </div>
                                <div class="box-rating">
                                    <h2 class="movie-detail-h2">Nội dung</h2>
          
                                    <div class="content" id="film-content" itemscope="" itemtype="http://schema.org/Review" itemprop="review">
                                        <div class="news-article">
                                            <p></p>
                                            <p>Mọi thứ đều diễn ra theo đúng kế hoạch, nhưng giờ thức tỉnh đang đến gần. Cid Kagenou và Shadow Garden điều tra Thành phố vô luật pháp, một hầm chứa nơi mặt trăng đỏ treo thấp trên bầu trời và ba vị vua quyền lực cai trị đường phố. Tuy nhiên, điểm thu hút thực sự đối với Cid là người có thể hút máu – Blood Queen, một ma cà rồng đã ngủ trong quan tài của cô ấy hàng thiên niên kỷ. Sự thức tỉnh của cô ấy đến gần và Cid cuối cùng cũng có thể phải đối mặt với một ngày phải trả giá. (Nguồn: HIDIVE)</p>
                                            <p></p>
                                        </div>
                                        <p>Chúc các bạn <a href="?" title="">xem anime vietsub</a> vui vẻ tại VKU</p>
                                     
                                    </div>
                                </div>

                            </div>
                            <div class="col-6 movie-image">
                                <div class="movie-l-img"><img itemprop="image" alt="" src="https://imgur-com.cdn.ampproject.org/i/imgur.com/nZu9ClH.jpg" id="style-lOE6n" class="style-lOE6n">
                                    <h2 class="hidden">Xem phim</h2>

                                </div>
                                <div class="tools-box">
                                    <div class="fb-save fb_iframe_widget" data-uri="https://anime47.cam/phim/chuyen-sinh-thanh-quy-toc-co-kha-nang-tham-dinh-nang-luc-nguoi-khac/m9334.html" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=907721805949566&amp;container_width=0&amp;locale=vi_VN&amp;sdk=joey&amp;uri=https%3A%2F%2Fanime47.lol%2Fphim%2Fchuyen-sinh-thanh-quy-toc-co-kha-nang-tham-dinh-nang-luc-nguoi-khac%2Fm9334.html"><span id="style-1aGZ6" class="style-1aGZ6"><iframe name="f08919de71ad65a59" width="1000px" height="1000px" data-testid="fb:save Facebook Social Plugin" title="fb:save Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v12.0/plugins/save.php?app_id=907721805949566&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfa2865e2d0bf5e9a0%26domain%3Danime47.lol%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fanime47.lol%252Ffd9703b2caa4b6cbb%26relation%3Dparent.parent&amp;container_width=0&amp;locale=vi_VN&amp;sdk=joey&amp;uri=https%3A%2F%2Fanime47.lol%2Fphim%2Fchuyen-sinh-thanh-quy-toc-co-kha-nang-tham-dinh-nang-luc-nguoi-khac%2Fm9334.html" id="style-qZvto" class="style-qZvto"></iframe></span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <blockquote class="block-movie-content">
                        <div>
                        <b>Xem phim tại: </b><div class="block2 servers">
                            <div>
                                <p></p>
                                <h4>Anime47: </h4>
                                <p></p>
                                <a href="https://anime47.cam/xem-phim-kage-no-jitsuryokusha-ni-naritakute-2nd-season-ep-01/200788.html"><div class="logo-anime47"></div></a>

                            </div>
                            <div>
                                <p></p>
                                <h4>Animehay:</h4>
                                <p></p>
                                <a href="https://animehay.ink/xem-phim/kage-no-jitsuryokusha-ni-naritakute-2nd-season-tap-1-59319.html"><div class="chinh-logo">        
                                <img src="https://animehay.ink/themes/img/logo.png" alt="">
                            </div></a>
                            <div>
                                <p></p>
                                <h4>Vuighe: </h4>
                              
                                <a href="https://vuighe4.com/kage-no-jitsuryokusha-ni-naritakute/tap-21-thanh-pho-vo-luat"><div class="chinh-logo">
                                    <img src="https://vuighe4.com/assets/img/logo_v8.png" alt="">
                                </div>
                                <p></p></a>
                            </div>
                            
                            
                    </div>
                    </blockquote>
       
                    <div class="clear"></div>
                </div>
            </div>
            
            

        
        </div>

</body>
</html>