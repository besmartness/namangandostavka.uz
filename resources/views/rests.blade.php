<!DOCTYPE html>
<html>

    <head>
        @include('meta2')
    </head>

    <body style="margin-left: 0px;" class="home page-template-default page page-id-2 custom-background theme-fooddy frontpage woocommerce-no-js body_tag scheme_default blog_mode_home body_style_wide  is_stream blog_style_excerpt sidebar_hide expand_content remove_margins header_style_header-custom-21 header_position_default menu_style_top no_layout wpb-js-composer js-comp-ver-6.0.5 vc_responsive">

    @php

        $list  =  [
            ["img" => 'images/shashlik-haus.jpg', "map" => "http"  ,"adr" => "1-MIK. OLMAZOR KO‘CHASI" , "title" => "Shashlik Haus", "type" => "Milliy Taomlar", "num" => "+998 91 360 88 88", "sort" => [1]],
            ["img" => 'images/sevim.jpg', "map" => "http"  ,"adr" => "Sardoba Bozori" , "title" => "Sevimli Lavash", "type" => "Burger", "num" => "+998 97 217 22 22", "sort" => [3]],
            ["img" => 'images/evos.jpg', "map" => "http"  ,"adr" => "4-Mikrorayon" , "title" => "Evos", "type" => "Burger", "num" => "+998 97 445 44 40", "sort" => [3]],
            ["img" => 'images/calcio.jpg', "map" => "http"  ,"adr" => "5-A Mikrorayon" , "title" => "La Calcio", "type" => "Yevro Taomlar", "num" => "+998 69 232 80 80", "sort" => [2]],
            ["img" => 'images/guliston.jpg', "map" => "http"  ,"adr" => "Avto Vokzal" , "title" => "Guliston Oshxonasi", "type" => "Milliy Taomlar", "num" => "+998 91 280 30 30", "sort" => [1]],
            ["img" => 'images/shodiyona.jpg', "map" => "http"  ,"adr" => "Vokzal" , "title" => "Shodiyona Majmuasi", "type" => "Milliy Taomlar", "num" => "+998 95 301 22 22", "sort" => [1]],
            ["img" => 'images/istabul.jpg', "map" => "http"  ,"adr" => "Politexnika Instituti" , "title" => "Istanbul Restorani", "type" => "Yevro Taomlar", "num" => "+998 95 307 08 88", "sort" => [2]],
            ["img" => 'images/soxil.jpg', "map" => "http"  ,"adr" => "Go'zal proezd" , "title" => "Soxil Oshxonasi", "type" => "Milliy Taomlar", "num" => "+998 91 347 00 70", "sort" => [1]],
            ["img" => 'images/sarbast.jpg', "map" => "http"  ,"adr" => "1-Axsikent" , "title" => "Sarbast Oshxonasi", "type" => "Yevro Taomlar", "num" => "+998 90 279 23 53", "sort" => [2]],
            ["img" => 'images/lazzat.jpg', "map" => "http"  ,"adr" => "Sardoba Bozori" , "title" => "Lazzat Oshxonasi", "type" => "Milliy Taomlar", "num" => "+998 90 218 66 66", "sort" => [1]],
            ["img" => 'images/yangishorsu.jpg', "map" => "http"  ,"adr" => "Chorsu Bozori" , "title" => "Yangi Charsu Oshxonasi", "type" => "Milliy Taomlar", "num" => "+998 91 355 70 08", "sort" => [1]],
            ["img" => 'images/zamazam.jpg', "map" => "http"  ,"adr" => "2-Axsikent" , "title" => "Zam Zam Oshxonasi", "type" => "Milliy Taomlar", "num" => "+998 90 219 22 22", "sort" => [1]],
            ["img" => 'images/solim.jpg', "map" => "http"  ,"adr" => "Yangi Bozor" , "title" => "So'lim Oshxonasi", "type" => "Milliy Taomlar", "num" => "+998 95 302 30 00", "sort" => [1]],
            ["img" => 'images/zohida.jpg', "map" => "http"  ,"adr" => "Yangi Bozor" , "title" => "Zohida Bonu Oshxonasi", "type" => "Milliy Taomlar", "num" => "+998 99 979 19 91", "sort" => [1]],
            ["img" => 'images/grill.jpg', "map" => "http"  ,"adr" => "Navoiy ko'cha" , "title" => "Grill Markazi", "type" => "Grill &Tabaka", "num" => "+998 91 349 15 11", "sort" => [7]],
            ["img" => 'images/azbuka.jpg', "map" => "http"  ,"adr" => "Zarkent Ko'prigi" , "title" => "Azbuka Oshxonasi", "type" => "Milliy va Yevro", "num" => "+998 69 233 06 60", "sort" => [1,2]],
            ["img" => 'images/tosh-grill.jpg', "map" => "http"  ,"adr" => "5-Mikrorayon" , "title" => "Toshkent Grillari", "type" => "Grill &Tabaka", "num" => "+998 99 861 88 81", "sort" => [7]],
            ["img" => 'images/zeytun.jpg', "map" => "http"  ,"adr" => "Yoshlar Markazi" , "title" => "Zeytun Restorani", "type" => "Yevro Taomlar", "num" => "+998 97 572 05 05", "sort" => [2]],
            ["img" => 'images/broiler.jpg', "map" => "http"  ,"adr" => "Go'zal daxasi" , "title" => "Oydin Broiler", "type" => "Grill &Tabaka", "num" => "+998 95 301 70 30", "sort" => [7]],
            ["img" => 'images/torro.jpg', "map" => "http"  ,"adr" => "5-Mikrorayon" , "title" => "Torro Grill", "type" => "Grill &Tabaka", "num" => "+998 95 300 22 27", "sort" => [7]],
            ["img" => 'images/gff.jpg', "map" => "http"  ,"adr" => "6-Mikrorayon" , "title" => "Gold Fast Food", "type" => "Burger", "num" => "+998 94 555 00 55", "sort" => [3]],
            ["img" => 'images/saba.jpg', "map" => "http"  ,"adr" => "6-Mikrorayon" , "title" => "Saba Burger", "type" => "Burger", "num" => "+998 90 214 50 50", "sort" => [3]],
            ["img" => 'images/yoqimli.jpg', "map" => "http"  ,"adr" => "Oromgox daxasi" , "title" => "Yoqimli Lavash", "type" => "Burger", "num" => "+998 90 753 17 17", "sort" => [3]],
            ["img" => 'images/kavsar.jpg', "map" => "http"  ,"adr" => "Promzona" , "title" => "Kavsar Oshaxonasi", "type" => "Milliy va Yevro", "num" => "+998 90 555 12 22", "sort" => [1,2]],
            ["img" => 'images/aynur.jpg', "map" => "http"  ,"adr" => "6-Mikrorayon" , "title" => "Aynur Oshxonasi", "type" => "Milliy va Yevro", "num" => "+998 97 255 23 23", "sort" => [1,2]],
            ["img" => 'images/lola.jpg', "map" => "http"  ,"adr" => "Lola daxasi" , "title" => "Lola Milliy Taomlari", "type" => "Milliy Taomlar", "num" => "+998 95 302 50 00", "sort" => [1]],
            ["img" => 'images/fayz.jpg', "map" => "http"  ,"adr" => "6-Mikrorayon" , "title" => "Fayz Burger", "type" => "Burger", "num" => "+998 90 752 20 20", "sort" => [3]],
            ["img" => 'images/fayz.jpg', "map" => "http"  ,"adr" => "6-Mikrorayon" , "title" => "Fayz Burger", "type" => "Burger", "num" => "+998 90 752 20 20", "sort" => [3]],
            ["img" => 'images/nihol.jpg', "map" => "http"  ,"adr" => "Qo'qon ko'cha" , "title" => "Nihol Tabakalari", "type" => "Grill &Tabaka", "num" => "+998 90 551 12 22", "sort" => [7]],
            ["img" => 'images/amur.jpg', "map" => "http"  ,"adr" => "Sanoat ko'cha" , "title" => "Amur Oshxonasi", "type" => "Milliy va Yevro", "num" => "+998 69 237 20 05", "sort" => [1,2]],
            ["img" => 'images/sharshara.jpg', "map" => "http"  ,"adr" => "Bobur Bog'i " , "title" => "Sharshara Oshxonasi", "type" => "Milliy va Yevro", "num" => "+998 91 366 40 00", "sort" => [1,2]],
            ["img" => 'images/durum.jpg', "map" => "http"  ,"adr" => "5-Mikrorayon" , "title" => "Durum Kebab", "type" => "Milliy Taomlar", "num" => "+998 95 308 80 88", "sort" => [1]],
            ["img" => 'images/afsona.jpg', "map" => "http"  ,"adr" => "Afsonalar Vodiysi" , "title" => "Afsona Food", "type" => "Milliy Taomlar", "num" => "+998 97 207 01 01", "sort" => [1]],
            ["img" => 'images/laz-burger.jpg', "map" => "http"  ,"adr" => "Islom" , "title" => "Lazzat Burger", "type" => "Burger", "num" => "+998 97 141 21 00", "sort" => [3]],
            ["img" => 'images/zarbdor.jpg', "map" => "http"  ,"adr" => "Marg'ilon ko'chasi" , "title" => "Zarbdor Oshxonasi", "type" => "Milliy Taomlar", "num" => "+998 91 348 10 21", "sort" => [1]],
            ["img" => 'images/grill-haus.jpg', "map" => "http"  ,"adr" => "Go'zal & 5-Mikrorayon" , "title" => "Grill Haus", "type" => "Grill &Tabaka", "num" => "+998 69 232 12 34", "sort" => [7]],
            ["img" => 'images/swh.png', "map" => "http"  ,"adr" => "Namangan Prokurotura" , "title" => "Sweet Home", "type" => "Shirinliklar", "num" => "+998 90 218 19 20", "sort" => [5]],
	        ["img" => 'images/superg.png', "map" => "http"  ,"adr" => "Bobur Bog'i" , "title" => "Super Gold", "type" => "Shirinliklar", "num" => "+998 93 404 44 44", "sort" => [5]],
	        ["img" => 'images/nyz.png', "map" => "http"  ,"adr" => "6-Mikrorayon" , "title" => "New York Pizza", "type" => "Pitsa", "num" => "+998 91 354 91 97", "sort" => [4]]
        ];

    @endphp

        <div class="body_wrap" style="margin-left: 0px;">

            <div class="page_wrap" style="margin-left: 0px;">

                @include('header')

                <div class="menu_mobile_overlay"></div>
                <div class="page_content_wrap scheme_default" style="margin-left: 0px;">
                    <div class="content_wrap">
                        <div class="content">
                            <article id="post-2" class="post_item_single post_type_page post-2 page type-page status-publish hentry">
                                <div class="post_content entry-content" style="padding-top: 25px;">
                                    <div class="woocommerce columns-4 ">
                                        <ul class="products columns-4" style="display: flex;flex-wrap: wrap;justify-content: center;">
                                            @include('card2')
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                </div>
            </div>
        </div>

        @include('footer')

        @include('script')

    </body>

</html>
