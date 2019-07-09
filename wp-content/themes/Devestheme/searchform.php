
 <a class="header__search-trigger" href="#0"></a>

<div class="header__search">

    <form role="search" method="get" class="header__search-form" action="<?php echo home_url( '/' ); ?>">
        <label>
            <span class="hide-content">جستجو برای  :</span>
            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('  مثال: موبایل', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="جستجو برای:" autocomplete="off">
        </label>
        <input type="submit" class="search-submit" value="جستجو">
    </form>

    <a href="#0" title="Close Search" class="header__overlay-close">بستن</a>

</div>  <!-- end header__search -->