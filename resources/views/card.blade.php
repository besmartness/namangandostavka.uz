@foreach($list as $l)

    <li class="product type-product post-214 status-publish first instock product_cat-cook-king product_cat-italian product_cat-pasta product_cat-vegetarian product_tag-pasta product_tag-vegetarian has-post-thumbnail shipping-taxable purchasable product-type-simple">
        <div class="post_item post_layout_thumbs">
            <div class="post_featured hover_shop">
                <a href="#">
                    <img width="540" height="440" src="{{asset($l['img'])}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" />
                </a>
                <div class="mask"></div>
            </div>
            <div class="post_data" style="min-height: 8.55em;border: 1px solid #d2d2d2;">
                <div class="post_header entry-header">
                    <div class="post_tags product_tags">
                        <a href="#" rel="tag">Ish Vaqti : 24/7</a>
                    </div>
                    <div class="post_tags product_tags" style="background-color: unset;padding: 6px 0px;">
                        <a href="{{$l['map']}}" target="_blank" style="text-decoration: underline;" rel="tag">
                            <i class="fas fa-map-marked-alt"></i>
                            Xaritada ko'rish
                        </a>
                    </div>
                    <h4 class="woocommerce-loop-product__title" style="font-size: 14px;">
                        <a>
                            <i class="fas fa-map-marker-alt"></i>
                            {{$l['adr']}}
                        </a>
                    </h4>
                </div>
                <div class="post_content entry-content">
                    <p style="color: green;font-weight: 600;">YETKAZISH BEPUL</p>
                </div>
                <a href="tel:{{$l['num']}}" data-quantity="1" class="button product_type_simple" data-product_id="214" data-product_sku="" aria-label="Add &ldquo;Linguine with Two-Cheese Sauce&rdquo; to your cart" rel="nofollow" style="padding: 3px 13px;FONT-SIZE: 14PX;background-color: #e8bb20;color: #000000;">{{$l['num']}} </a>
            </div>
        </div>
    </li>

@endforeach
