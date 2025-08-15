
<nav id="nav_pannel" role="navigation">
    <div id="menuToggle">
        <input type="checkbox" id="menu_checkbox" />
        <span></span>
        <span></span>
        <span></span>

        <ul class="menu_body_float" id="menu">
            <li id="profile_details">
                <div class="profile_pic">
                    <div class="row">
                        <div class="col-4 offset-1">
                            <img class="profile_image" src="<?php echo $IP_SITE; ?>/Menu/Profile.png" alt="" srcset="">
                        </div>
                        <div class="col-6">
                            Name
                        </div>
                    </div>
                </div>
            </li>


            <li class="menu_page_list">
                <a href="#" onclick="fetch_page('home', 1)" class="menu_page_list_link"><img id="menu_page_listimg"
                        src="Menu/home.png" alt="" srcset="">Home</a>
            </li>
            <li class="menu_page_list"><a href="#" onclick="fetch_page('place_order', 1)" class="menu_page_list_link"><img
                        id="menu_page_listimg" src="Menu/order.png">Order</a></li>
            <li class="menu_page_list"><a href="#" onclick="fetch_page('order_status', 1)"
                    class="menu_page_list_link"><img id="menu_page_listimg" src="Menu/Status.png">Status</a></li>
            <li class="menu_page_list"><a href="#" onclick="fetch_page('bill', 1)" class="menu_page_list_link"><img id="menu_page_listimg"
                        src="Menu/Billing.png">Bills</a></li>
            <li class="menu_page_list"><a href="#" class="menu_page_list_link"><img id="menu_page_listimg"
                        src="Menu/About.png">About Us</a></li>
            <li class="menu_page_list"><a href="#" class="menu_page_list_link"><img id="menu_page_listimg"
                        src="Menu/ContactUs.png">Contact Us</a></li>
            <li class="menu_page_list"><a href="#" onclick="logout()" class="menu_page_list_link"><img id="menu_page_listimg" src="Menu/ContactUs.png">Log Out</a></li>
        </ul>

    </div>
</nav>