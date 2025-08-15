<style>
    nav {
        background-color: #3c4fff00 !important;
    }

    .bill_design {
        background-color: #cee8ff;
        height: 100vh;
        width: 100vw;
        /* margin-top: -40px; */
        position: fixed;
        top: 0;
    }

    .header_container {
        top: 0;

        width: 100vw;
        height: auto;
        position: sticky;
        margin-bottom: 2vh;
    }

    .bill_details_head {
        font-size: 5vw;
        padding-bottom: 20px;
        font-weight: 700;
    }

    .upper_container {
        position: relative;
        height: 70%;
        padding-top: 50px;
        padding-bottom: 5vh;
        background: rgb(68, 132, 196);
        background: linear-gradient(0deg, rgba(68, 132, 196, 1) 0%, rgba(85, 150, 208, 1) 39%, rgba(103, 169, 221, 1) 100%);
        border-radius: 0px 0 25px 25px;
    }

    .lower_container {
        background-color: rgb(255, 255, 255);
        position: relative;
        height: max-content;
        width: 80vw;
        margin: -10vh auto 0 auto;
        border-radius: 15px;
    }

    .fa-user {
        font-size: 38px;
    }

    .user-name {
        text-align: left;
        color: white;
        font-size: 4.5vw;
        font-weight: 500;
    }

    .bill_details {
        padding: 1vh 0px 0px 30px;
        font-size: 4vw;
    }

    .body_container {
        position: absolute;
        display: block;
        overflow-y: auto;
        width: 100vw;
        height: 60vh;
    }

    .body_container_list {
        display: block;
        position: relative;

    }

    .inner_body_container {
        width: 80vw;
        display: block;
        position: relative;
        margin: 0 auto;
    }

    .bill_container {
        width: 100%;
        font-size: 5vw;
        height: max-content;
        padding-top: 2vh;
        /* padding-bottom: 2vh; */
        padding-left: 2vh;
        padding-right: 2vh;
        margin-top: 13px;
        margin: 0 auto;
        background-color: white;
        border-radius: 10px;
    }

    .total_bill_due_text {
        font-size: 4vw;
        font-weight: 400;
    }

    .total_bill_due_amt {
        font-size: 5vw;
        font-weight: 600;
        padding-bottom: 2vh;
    }

    input[type='checkbox'] {
        /* -webkit-appearance:none; */
        width: 30px;
        height: 30px;
        /* background:white; */
        border-radius: 5px;
        border: 2px solid #555;
    }

    .advance_payed:after {
        content: "";
        border-bottom: 15px solid rgb(68, 132, 196);
        border-top: 15px solid rgb(66, 138, 211);
        display: block;
        opacity: 1;
    }

    .pay_on {
        width: 10vw;
    }

    .order_date {
        font-size: 10px;
        font-weight: 500;
        margin-left: 3vw;
    }

    .paid_date {
        font-size: 10px;
        font-weight: 500;
        margin-top: 2vw;
    }

    .total_amt {
        font-size: 10px;
        font-weight: 500;
    }

    .pay_amount {
        font-size: 15px;
        font-weight: 500;
    }

    .pdf-png {
        width: 7vw;
    }

    .bill_status {
        background: rgb(68, 132, 196);
        background: linear-gradient(0deg, rgba(68, 132, 196, 1) 0%, rgba(85, 150, 208, 1) 39%, rgba(103, 169, 221, 1) 100%);
        color: white;
        font-size: 12px;
        padding: 4px;
        border-radius: 2vw;
    }

    .order_number {
        margin-left: 3vw;
    }

    .p-t-list {
        padding-top: 10px;
    }

    .profile_details_head {
        padding: 3vh 0;
    }

    .m-b-0 {
        margin-bottom: 0px;
    }

    .m-t-10 {
        margin-top: 10px;
    }
    .p-b-5{
        padding-bottom: 5vh;
    }
</style>

<script>


    //menu js
    $('.slide-toggle').on("click", function () {
        $('#menu_checkbox').prop('checked', false);
    });



    $(document).ready(function () {
        // var slide_main = document.getElementById('slide_main');
        var slide_main = document.getElementById('slide_main');
        // var slide_main = $('#slide_main :not(.owl-carousel)');
        var open_slide = new Hammer(slide_main);
        open_slide.on("panright", function (ev) {
            // console.log(ev.type);
            $('#menu_checkbox').prop('checked', true);
        });


        var nav_pannel = document.getElementById('app');
        var close_slide = new Hammer(nav_pannel);
        close_slide.on("panleft", function (ev) {
            // console.log(ev.type);
            $('#menu_checkbox').prop('checked', false);
        });
    });

</script>

<?php include("menu.php"); ?>

<div id="slide_main" class="slide-toggle">

    <div class="bill_design">
        <div class="header_container">
            <div class="upper_container">
                <div class="profile_details_head row ">
                    <div class="col-2 offset-1">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="col-8 user-name d-flex align-content-center flex-wrap">
                        Hello, Vinoth
                    </div>
                </div>
            </div>
            <div class="lower_container">
                <div class="bill_details">
                    <div class="row m-b-0">
                        <div class="col-8">
                            <div class="bill_details_head row m-b-0">My Bill</div>
                            <div class="total_bill_due_text row m-b-0">Total bills Due</div>
                            <div class="total_bill_due_amt row m-b-0">$ 17000/-</div>

                        </div>
                        <div class="col-4">Imgae</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body_container">
            <div class="body_container_list">
                <div class="inner_body_container">
                    <div class="bill_container">
                        <div class="row m-b-0">
                            <div class="col">
                                <div class="m-b-0 row align-items-center">
                                    <div class="col-1 m-t-10">
                                        <input type="checkbox" onclick="return false;"
                                            class="advance_payed payment_notation" name="" id="">
                                    </div>
                                    <div class="col-6">
                                        <div class="order_number"><b>342343</b></div>
                                        <div class="order_date">
                                            07.08.2021 - 10.08.2021
                                        </div>

                                    </div>
                                    <div class="col-5">
                                        <span><img class="pay_on" src="images/phonepe.png"></span>

                                        <span><img class="pay_on" src="images/gpay.png"></span>
                                        <!-- 
                                            <span><img class="pay_on" src="<?php echo $IP_SITE; ?>/images/phonepe.png"></span>

                                            <span><img class="pay_on" src="<?php echo $IP_SITE; ?>/images/gpay.png"></span> 
                                        -->
                                    </div>
                                </div>
                                <div class="row m-b-0">
                                    <div class="col-7 paid_date">
                                        <span class="total_amt">Advance</span>
                                        <span class="pay_amount">&#8377; &nbsp;100/-</span>
                                    </div>
                                    <div class="col-5 paid_amount">
                                        <span class="total_amt">Total</span>
                                        <span class="pay_amount">&#8377; &nbsp;1500/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="inner_body_container p-t-list">
                    <div class="bill_container">
                        <div class="row m-b-0">
                            <div class="col">
                                <div class="m-b-0 row align-items-center">
                                    <div class="col-1 m-t-10">
                                        <input type="checkbox" checked onclick="return false;" class="payment_notation"
                                            name="" id="">
                                    </div>
                                    <div class="col-6">
                                        <div class="order_number"><b>141523</b></div>
                                        <div class="order_date">
                                            07.08.2021 - 10.08.2021
                                        </div>

                                    </div>
                                    <div class="col-5">
                                        <span><img class="pdf-png" src="images/pdf.png"></span>
                                        <!-- <span><img class="pdf-png" src="<?php echo $IP_SITE; ?>/images/pdf.png"></span> -->

                                        <span class="bill_status">Completed</span>
                                    </div>
                                </div>
                                <div class="row m-b-0">
                                    <div class="col-7 paid_date">
                                        Paid: 15.08.2021
                                    </div>
                                    <div class="col-5 paid_amount">
                                        <span class="total_amt">Total</span>
                                        <span class="pay_amount">&#8377; &nbsp;1500/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="inner_body_container p-b-5 p-t-list">
                    <div class="bill_container">
                        <div class="row m-b-0">
                            <div class="col">
                                <div class="m-b-0 row align-items-center">
                                    <div class="col-1 m-t-10">
                                        <input type="checkbox" onclick="return false;" class="payment_notation" name=""
                                            id="">
                                    </div>
                                    <div class="col-6">
                                        <div class="order_number"><b>342343</b></div>
                                        <div class="order_date">
                                            07.08.2021 - 10.08.2021
                                        </div>

                                    </div>
                                    <div class="col-5">
                                        <span><img class="pay_on" src="images/phonepe.png"></span>

                                        <span><img class="pay_on" src="images/gpay.png"></span>
                                        <!-- 
                                            <span><img class="pay_on" src="<?php echo $IP_SITE; ?>/images/phonepe.png"></span>

                                            <span><img class="pay_on" src="<?php echo $IP_SITE; ?>/images/gpay.png"></span>
                                        -->
                                    </div>
                                </div>
                                <div class="row m-b-0">
                                    <div class="col-7 paid_date">
                                        Pay Advance
                                    </div>
                                    <div class="col-5 paid_amount">
                                        <span class="total_amt">Total</span>
                                        <span class="pay_amount">&#8377; &nbsp;1500/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>