<div class="site-navigation-mobile palm--show">
    <?php $this->view('templates/ua/_parts/social-media',array()); ?>
    <div class="site-navigation-search spacer">
        <form id="search_top" action="/search" method="get">
            <div class="combo full">
                <div class="combo-first"><i class="icon icon-search"></i></div>
                <div class="combo-last">
                    <input type="text" name="q" placeholder="Search for an adventure..." class="tour-query">
                    <input id="search-top-submit" type="submit" style="display:none;">
                </div>
            </div>
        </form>
    </div>
    <ul class="site-navigation-links">
        <li class="navigation-link"><a href="#" class="link large">Destinations</a>
            <ul class="nested-link-group">
                <li class="nested-link">
                    <a href="/country?cn=Albania&amp;s-country=514" class="link">Albania</a>
                    <a href="/country?cn=Argentina&amp;s-country=282" class="link">Argentina</a>
                    <a href="/country?cn=Australia&amp;s-country=236" class="link">Australia</a>
                    <a href="/country?cn=Austria&amp;s-country=533" class="link">Austria</a>
                    <a href="/country?cn=Bangladesh&amp;s-country=528" class="link">Bangladesh</a>
                    <a href="/country?cn=Bolivia&amp;s-country=502" class="link">Bolivia</a>

                </li>
            </ul>
        </li>
        <li class="navigation-link"><a href="#" class="link large">Featured Tours</a>
            <ul class="nested-link-group">
                <li class="nested-link"><a href="/food" class="link">Food tours</a><a href="/active" class="link">Active tours</a><a href="/beer" class="link">Beer tours</a><a href="/wine-and-drink" class="link">Drink tours</a><a href="/private-tours" class="link">Private tours</a><a href="/new-tours" class="link">New tours</a><a href="/staff-picks" class="link">Staff picks</a><a href="/best-sellers" class="link">Best sellers</a><a href="/pop-up-tours" class="link">Pop-Up tours</a><a href="/in-focus" class="link">In Focus</a><a href="/localsontap" class="link">Locals on Tap</a></li>
            </ul>
        </li>
        <li class="navigation-link"><a href="/giftcert" class="link large">Gift Certificates</a></li>
        <li class="navigation-link"><a href="/about-us" class="link large">About Us</a></li>
        <li class="navigation-link"><a href="/contact-us" class="link large">Contact Us</a></li>
        <li class="navigation-link"><a href="/blog/" class="link large">Blog</a></li>
    </ul>
</div>