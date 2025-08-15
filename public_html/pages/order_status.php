<style>
    nav {
        position: fixed !important;
        background-color: #3c50ff00 !important;
    }

    .curve {
        padding-top: 40px;
        background: rgb(242, 107, 124);
        background: linear-gradient(0deg, rgba(242, 107, 124, 1) 0%, rgba(245, 134, 125, 1) 39%, rgba(245, 142, 127, 1) 100%);
        ;
        top: 0;
        position: sticky;
        width: 100vw;
        margin: 0;
        /* text-align: center; */
        height: max-content !important;
        /* padding-bottom: 0.5vh; */
        border-radius: 0 0 30px 30px !important;
        box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.36);
        /* padding-bottom: 5vh; */
    }

    .left-align {
        text-align: left;
    }

    .right-align {
        text-align: right;
    }

    .center-align {
        text-align: center;
    }

    .page-content-main {
        background-color: rgb(255, 199, 207);
        position: fixed;
        height: 100vh;
        display: block;
        width: 100vw;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .history-div {
        display: block;
        position: sticky;
        background-color: white !important;
        padding-bottom: 0;
        max-height: max-content;
    }

    .order-history {
        width: 90vw;
        margin-left: 5vw;
        padding: 13px 0;
        text-align: center;
    }

    .order-history .col:first-child {
        border-right: solid 1px gray;
    }

    .order-history .col:last-child {
        border-left: solid 1px gray;
    }

    .order-list {
        position: relative;
        width: 90vw;
        display: block;
        margin-left: 5vw;
    }

    .second-container {
        overflow-y: auto;
        display: block;
        position: absolute;
        margin: auto;

        height: 65vh;
        width: 100vw;
        padding-bottom: 10vh;
    }

    .order-status-individual:not(:first-child) {
        margin-top: 2vh;
    }

    .order-status-individual {
        padding: 10px 0;
        background-color: white;
        text-align: center;
        overflow: hidden;
        border-radius: 20px;
        width: 100%;
    }

    .temp-row .temp-col {
        margin: auto;
    }

    .temp-row {
        margin-bottom: 0 !important;
    }

    .order-status-individual .accordion-header .temp-row .temp-col:first-child {
        border-right: 2px solid gray;

    }

    /* 
    .order-status-individual .accordion-header .temp-row .temp-col:last-child {
        border-left: 1px solid gray;
    }
     */

    .order-bundle {
        padding: 10px 0;
        width: max-content;
        margin: auto;
    }

    .order-bundle-status {
        width: 100%;
        margin-top: 4.2vw;
    }

    .accordion-body-head {
        width: 100%;
        border-top: 1px solid gray;
        padding: 0;
        margin-top: 0;
    }

    .rotate {
        font-size: 7vw;
        color: rgb(242, 107, 124);
        -moz-transition: all 0.2s linear;
        -webkit-transition: all 0.2s linear;
        transition: all 0.2s linear;
    }

    .rotate.down {
        -moz-transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .os_images {
        width: 100%;
    }

    .os_images img {
        width: 15vw;
        height: 100%;
    }

    .order-head-curve {
        font-size: 4vw;
        color: white;
        font-weight: 400;
    }

    .order-head-icon {
        margin-right: 10vw;
        text-align: center;
        margin-top: 10vw;
    }

    .order-bill-count {
        font-weight: 800;
        color: white;
        font-size: 8vw;
        padding: 2vw 0;
        display: block;
    }

    .inner-order-history {
        padding: 5px 0;
        font-size: 5vw;
        font-weight: 600;
    }

    .mar-r-0 {
        margin-right: 0%
    }

    .order-item {
        font-size: 5vw;
        font-weight: 700;
    }

    .order-count {
        font-size: 2.5vw;
        font-weight: 500;
        color: gray;
    }

    .order-current-status {
        font-size: 3.5vw;
        margin: auto 0;
        color: blue;
        font-weight: 500;
    }

    .accordion-content {
        width: 100%;
    }

    .bg-blue {
        background-color: rgb(11, 7, 255);
    }

    .bg-green {
        background-color: rgb(36, 255, 7);
    }

    .bg-orange {
        background-color: rgb(255, 139, 7);
    }

    .bg-white {
        background-color: rgb(248, 248, 248);
    }

    /* ul.status-bar-container li {
        padding: 10px 0;
    } */

    .status-bar-container>* {
        max-height: max-content;
        height: max-content;
        margin-bottom: 1vh;
    }

    @media screen and (max-width : 363px) {
        .status-bar {
            height: 5.8vh !important;
        }
    }

    .status-bar {
        height: 5.8vh;
        width: 0.5vw;
        position: absolute;
        text-align: center;
        /* border-bottom: 2px solid black; */
        background-color: #000000;
        margin-left: 1.2vw;
    }

    .status-blue,
    .status-orange,
    .status-green {
        position: relative;
    }

    .dot {
        height: 3vw;
        width: 3vw;
        border-radius: 50%;
        display: inline-block;
        border: 2px solid black;
        position: absolute;
    }

    .status-text {
        font-size: 3vw;
        color: darkslategrey;

    }

    .m-b-0 {
        margin-bottom: 0;
    }
</style>


<script>
    //menu js
    $('.slide-toggle').on("click", function() {
        $('#menu_checkbox').prop('checked', false);
    });


    $(document).ready(function() {
        var slide_main = document.getElementById('slide_main');
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




    $(document).ready(function() {
        $(".accordion-header").click(function() {
            $(this).find('.rotate').toggleClass("down");
        })
    });
</script>


<?php include("menu.php"); ?>

<div id="slide_main" class="slide-toggle">
    <div class="page-content-main">

        <div class="history-div">
            <div class="curve row align-items-end">
                <div class="col">
                    <div class="row">
                        <div class="order-head-icon">
                            <div class="os_images">
                                <img src="images/Order_Status.png">
                                <!-- <img src="<?php echo $IP_SITE; ?>/images/Order_Status.png"> -->
                            </div>
                            <div class="order-head-curve">
                                Order Status
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 ">
                    <div class="row mar-r-0 center-align">
                        <div class="col-12 bill-status-count order-2">
                            <div class="order-bill-count">
                                21
                            </div>
                            <div class="order-head-curve">
                                Bill No
                            </div>
                        </div>
                    </div>
                    <div class="row mar-r-0 center-align">
                        <div class="col-12 order-status-count order-1">
                            <div class="order-bill-count">
                                1998
                            </div>
                            <div class="order-head-curve">
                                Total Order
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row order-history">
                <div class="col">
                    <div class="inner-order-history">
                        Ongoing
                    </div>
                </div>
                <div class="col">
                    <div class="inner-order-history">
                        History
                    </div>
                </div>
            </div>
        </div>

        <div class="second-container">
            <div class="order-list">
                <div class="order-status-individual accordion" id="accordian1">

                    <div class="accordion-header">
                        <div class="row temp-row" data-bs-toggle="collapse" data-bs-target="#accordion-body1" aria-controls="accordion-body1">

                            <div class="col temp-col">
                                <div class="order-bundle">
                                    <div class="order-item">
                                        Broucher
                                    </div>
                                    <div class="order-count left-align">
                                        8 page broucher
                                    </div>
                                </div>
                            </div>
                            <div class="col temp-col">
                                <div class="order-bundle-status ">
                                    <div class="row">
                                        <div class="col-8 order-current-status" style="color: rgb(11, 7, 255);">
                                            Received Order
                                        </div>
                                        <div class="col-1">
                                            <i class="fas fa-angle-down rotate"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                    <div id="accordion-body1" class="accordion-collapse collapse" data-bs-parent="#accordian1">
                        <div class="accordion-body">
                            <div class="accordion-body-head">&nbsp;</div>
                            <div class="accordion-content">
                                <ul class="status-bar-container">
                                    <li>
                                        <div class="row m-b-0">
                                            <div class="col-1">
                                                <div class="status-blue">
                                                    <span class="status-bar">
                                                        &nbsp;
                                                    </span>
                                                    <span class="dot bg-blue">&nbsp;</span>
                                                </div>
                                            </div>
                                            <div class="status-text col">Status:Recived</div>
                                            <div class="status-text col">Status:time</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row m-b-0">
                                            <div class="col-1">
                                                <div class="status-orange">
                                                    <span class="status-bar">
                                                        &nbsp;
                                                    </span>
                                                    <span class="dot bg-white">&nbsp;</span>
                                                </div>
                                            </div>
                                            <div class="status-text col">Status:Inprogress</div>
                                            <div class="status-text col">Status:time</div>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="row m-b-0">
                                            <div class="col-1">
                                                <div class="status-green">
                                                    <!-- <span class="status-bar">
                                                        &nbsp;
                                                    </span> -->
                                                    <span class="dot bg-white">&nbsp;</span>
                                                </div>
                                            </div>
                                            <div class="status-text col">Status:Completed</div>
                                            <div class="status-text col">Status:time</div>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ACCORDION 2 -->

                <div class="order-status-individual accordion" id="accordian2">

                    <div class="accordion-header">
                        <div class="row temp-row" data-bs-toggle="collapse" data-bs-target="#accordion-body2" aria-controls="accordion-body2">

                            <div class="col temp-col">
                                <div class="order-bundle">
                                    <div class="order-item">
                                        Logo
                                    </div>
                                    <div class="order-count left-align">
                                        3 Item
                                    </div>
                                </div>
                            </div>
                            <div class="col temp-col">
                                <div class="order-bundle-status ">
                                    <div class="row">
                                        <div class="col-8 order-current-status" style="color: rgb(255, 139, 7);">
                                            Inprogress
                                        </div>
                                        <div class="col-1">
                                            <i class="fas fa-angle-down rotate"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>

                    <div id="accordion-body2" class="accordion-collapse collapse" data-bs-parent="#accordian2">
                        <div class="accordion-body">
                            <div class="accordion-body-head">&nbsp;</div>
                            <div class="accordion-content">
                                <ul class="status-bar-container">
                                    <li>
                                        <div class="row m-b-0">
                                            <div class="col-1">
                                                <div class="status-blue">
                                                    <span class="status-bar">
                                                        &nbsp;
                                                    </span>
                                                    <span class="dot bg-blue">&nbsp;</span>
                                                </div>
                                            </div>
                                            <div class="status-text col">Status:Recived</div>
                                            <div class="status-text col">Status:time</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row m-b-0">
                                            <div class="col-1">
                                                <div class="status-orange">
                                                    <span class="status-bar">
                                                        &nbsp;
                                                    </span>
                                                    <span class="dot bg-orange">&nbsp;</span>
                                                </div>
                                            </div>
                                            <div class="status-text col">Status:Inprogress</div>
                                            <div class="status-text col">Status:time</div>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="row m-b-0">
                                            <div class="col-1">
                                                <div class="status-green">
                                                    <!-- <span class="status-bar">
                                                        &nbsp;
                                                    </span> -->
                                                    <span class="dot bg-white">&nbsp;</span>
                                                </div>
                                            </div>
                                            <div class="status-text col">Status:Completed</div>
                                            <div class="status-text col">Status:time</div>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-status-individual accordion" id="accordian3">

                    <div class="accordion-header">
                        <div class="row temp-row" data-bs-toggle="collapse" data-bs-target="#accordion-body3" aria-controls="accordion-body3">

                            <div class="col temp-col">
                                <div class="order-bundle">
                                    <div class="order-item">
                                        Website
                                    </div>
                                    <div class="order-count left-align">
                                        Dynamic
                                    </div>
                                </div>
                            </div>
                            <div class="col temp-col">
                                <div class="order-bundle-status ">
                                    <div class="row">
                                        <div class="col-8 order-current-status" style="color: rgb(36, 255, 7);">
                                            Completed
                                        </div>
                                        <div class="col-1">
                                            <i class="fas fa-angle-down rotate"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                    <div id="accordion-body3" class="accordion-collapse collapse" data-bs-parent="#accordian3">
                        <div class="accordion-body">
                            <div class="accordion-body-head">&nbsp;</div>
                            <div class="accordion-content">
                                <ul class="status-bar-container">
                                    <li>
                                        <div class="row m-b-0">
                                            <div class="col-1">
                                                <div class="status-blue">
                                                    <span class="status-bar">
                                                        &nbsp;
                                                    </span>
                                                    <span class="dot bg-blue">&nbsp;</span>
                                                </div>
                                            </div>
                                            <div class="status-text col">Status:Recived</div>
                                            <div class="status-text col">Status:time</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row m-b-0">
                                            <div class="col-1">
                                                <div class="status-orange">
                                                    <span class="status-bar">
                                                        &nbsp;
                                                    </span>
                                                    <span class="dot bg-orange">&nbsp;</span>
                                                </div>
                                            </div>
                                            <div class="status-text col">Status:Inprogress</div>
                                            <div class="status-text col">Status:time</div>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="row m-b-0">
                                            <div class="col-1">
                                                <div class="status-green">
                                                    <!-- <span class="status-bar">
                                                        &nbsp;
                                                    </span> -->
                                                    <span class="dot bg-green">&nbsp;</span>
                                                </div>
                                            </div>
                                            <div class="status-text col">Status:Completed</div>
                                            <div class="status-text col">Status:time</div>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>