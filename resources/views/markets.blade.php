<!DOCTYPE html>
<html>

    <head>

        @include('meta2')

    </head>

    <body style="margin-left: 0px;" class="home page-template-default page page-id-2 custom-background theme-fooddy frontpage woocommerce-no-js body_tag scheme_default blog_mode_home body_style_wide  is_stream blog_style_excerpt sidebar_hide expand_content remove_margins header_style_header-custom-21 header_position_default menu_style_top no_layout wpb-js-composer js-comp-ver-6.0.5 vc_responsive">

    @php

        $list  =  [

            ["img" => 'images/online.png', "map" => "http" ,"adr" => "Navoiy Ko'chasi", "title" => "Online Ro'zg'or", "type" => "Oziq Ovqat", "num" => "+998 91 346 44 44"],
            ["img" => 'images/dost.png', "map" => "http" ,"adr" => "Chorsu Bozori", "title" => "Do'st Market", "type" => "Oziq Ovqat", "num" => "+998 69 237 28 88"],
            ["img" => 'images/asl.png', "map" => "http" ,"adr" => "Sardoba Bozori", "title" => "Asl Savdo", "type" => "Oziq Ovqat", "num" => "+998 91 340 00 20"],
            ["img" => 'images/mega.png', "map" => "http" ,"adr" => "Yangi Bozor", "title" => "Mega Savdo", "type" => "Oziq Ovqat", "num" => "+998 93 914 34 31"],
            ["img" => 'images/bozor.png', "map" => "http" ,"adr" => "Temir Yo'l Vokzali", "title" => "Online Bozorlik", "type" => "Oziq Ovqat", "num" => "+998 91 369 22 20"]

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

                                            @include('card' , ["list" => $list])

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
