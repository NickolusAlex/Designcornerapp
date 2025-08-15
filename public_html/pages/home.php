<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/boot.css">
<link rel="stylesheet" href="css/slider.css">

<!-- 
    <link rel="stylesheet" href="<?php echo $IP_SITE; ?>/css/menu.css">
    <link rel="stylesheet" href="<?php echo $IP_SITE; ?>/css/boot.css">
    <link rel="stylesheet" href="<?php echo $IP_SITE; ?>/css/slider.css"> 
-->

<script>
    //menu js
    $('.slide-toggle').on("click", function() {
        $('#menu_checkbox').prop('checked', false);
    });

    $(document).ready(function() {
        // var slide_main = document.getElementById('slide_main');
        var slide_main = document.getElementById('sub_slide_main');
        // var slide_main = $('#slide_main :not(.owl-carousel)');
        var open_slide = new Hammer(slide_main);
        open_slide.on("panright", function(ev) {
            // console.log(ev.type);
            $('#menu_checkbox').prop('checked', true);
        });


        var nav_pannel = document.getElementById('app');
        var close_slide = new Hammer(nav_pannel);
        close_slide.on("panleft", function(ev) {
            // console.log(ev.type);
            $('#menu_checkbox').prop('checked', false);
        });
    });


    $(function() {
        $('.slide-toggle #page .owl-carousel.testimonial-carousel').owlCarousel({
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            nav: false,
            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
            dots: false,
            items: 1,
            loop: true,
        });
    });
</script>

<?php include("menu.php"); ?>


<div id="slide_main" class="slide-toggle">

    <div id="page">

        <div class="owl-carousel testimonial-carousel">
            <!--   Start Testimonials -->

            <?php
            $sql_slider = " SELECT * FROM home_slider WHERE delete_status = 0  ";
            $prepare = $DB_conn->prepare($sql_slider);
            $exc = $prepare->execute();
            $slider_details = $prepare->fetchAll();
            if ($exc == true) {
                foreach ($slider_details as $value) {
            ?>
                    <div class="item">
                        <img class="img-fluid" src="<?php echo $IP_SITE . "/" . $value['slider_path']; ?>">
                    </div>
            <?php
                }
            }
            ?>
            <!-- 
                <div class="item">

                    <img class="img-fluid" src="<?php echo $IP_SITE; ?>/images/pictures/13.jpg">

                </div>
                <div class="item">

                    <img class="img-fluid" src="<?php echo $IP_SITE; ?>/images/pictures/29.jpg">

                </div>

                <div class="item">

                    <img class="img-fluid" src="<?php echo $IP_SITE; ?>/images/pictures/28.jpg">

                </div>    
            -->

            <!--   End Testimonials -->
        </div>
    </div>



    <div class="modal fade" id="call_modal" tabindex="-1" role="dialog" aria-labelledby="call_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="call_modalTitle">Call Our Designer</h5>
                    <button type="button" class="close" onclick="modal_toggle('call_modal')" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                    ?>

                        <div class="row">
                            <div class="col modal-title text-primary">Order No</div>
                            <div class="col">
                                <a href="#" onclick="call_option('7402148766')" class="btn btn-primary">
                                    Designer Name
                                </a>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="modal_toggle('call_modal')">Close</button>
                </div>

            </div>
        </div>
    </div>


    <div id="sub_slide_main" class="page-content header-clear-small-others">
        <div class="row text-center mb-0">
            <a href="#" onclick="fetch_page('place_order')" class="col-6 card-height pe-0   ">
                <div class="card card-style me-2 mb-3 rect1 box_shadow_home">
                    <div class="logo_images">
                        <img src="images/Place_your_order.png" class="ind_logos">
                        <!-- <img src="<?php echo $IP_SITE; ?>/images/Place_your_order.png" class="ind_logos"> -->
                    </div>
                    <div class="pt-4 fonter mt-n2">PLACE YOUR ORDER</div>

                </div>
            </a>
            <a href="#" onclick="fetch_page('order_status')" class="col-6 card-height ps-0 ">
                <div class="card card-style ms-2 mb-3 rect2 box_shadow_home">
                    <div class="logo_images">
                        <img src="images/Order_Status.png" class="ind_logos">
                        <!-- <img src="<?php echo $IP_SITE; ?>/images/Order_Status.png" class="ind_logos"> -->
                    </div>
                    <div class="pt-4 fonter mt-n2">ORDER STATUS</div>

                </div>
            </a>
            <a href="#" onclick="fetch_page('bill', 1)" class="col-6 card-height pe-0 ">
                <div class="card card-style me-2 rect3 box_shadow_home">
                    <div class="logo_images">
                        <img src="images/Bill.png" class="ind_logos">
                        <!-- <img src="<?php echo $IP_SITE; ?>/images/Bill.png" class="ind_logos"> -->
                    </div>
                    <div class="pt-4 fonter mt-n2">BILL</div>

                </div>
            </a>
            <a class="col-6 card-height ps-0 " href="#">
                <div class="card card-style ms-2 rect4 box_shadow_home">
                    <div class="logo_images">
                        <img src="images/Portfolio.png" class="ind_logos">
                        <!-- <img src="<?php echo $IP_SITE; ?>/images/Portfolio.png" class="ind_logos"> -->
                    </div>
                    <div class="pt-4 fonter mt-n2">PORTFOLIO</div>

                </div>
            </a>
            <a href="#" class="col-6 card-height pe-0 ">
                <div class="card card-style me-2 rect5 box_shadow_home">
                    <div class="logo_images">
                        <img src="images/Design_Proof.png" class="ind_logos">
                        <!-- <img src="<?php echo $IP_SITE; ?>/images/Design_Proof.png" class="ind_logos"> -->
                    </div>
                    <div class="pt-4 fonter mt-n2">DESIGN PROOF</div>

                </div>
            </a>
            <!-- onclick="call_option()" -->
            <a class="col-6 ps-0 " onclick="modal_toggle('call_modal')" href="#">
                <div class="card card-style ms-2 rect6 box_shadow_home">
                    <div class="logo_images">
                        <img src="images/Call.png" class="ind_logos">
                        <!-- <img src="<?php echo $IP_SITE; ?>/images/Call.png" class="ind_logos"> -->
                    </div>
                    <div class="pt-4 fonter mt-n2">CALL OUR DESIGNER</div>

                </div>
            </a>
        </div>

    </div>
</div>