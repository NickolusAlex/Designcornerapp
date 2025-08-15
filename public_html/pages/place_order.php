<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>


    //menu js
    $('.slide-toggle').on("click", function () {
        $('#menu_checkbox').prop('checked', false);
    });



    $(document).ready(function () {
        var slide_main = document.getElementById('slide_main');
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

    $(document).ready(function () {

        $('.drag_box').change(function () {
            $(this).each(function () {
                // debugger;
                if ($(this).prop("checked")) {
                    $(this).parent().hide();
                    // $(this).parent().sibling().show();

                    $(this).parent().siblings(".service-quantity-tab").css("display", "flex");
                    $(this).parent().siblings(".service-quantity-tab").find("input").val("1");

                    return;
                }
                else {
                    $(this).parent().show();
                    $(this).parent().siblings(".service-quantity-tab").css("display", "none");
                }
            });
        });

        $(".decrement_cls").click(function () {
            // debugger;
            $(this).each(function () {
                var service_count = $(this).parent().find("input").val();
                console.log(service_count);

                if (service_count == "" || isNaN(service_count)) {
                    service_count = 1;
                }
                service_count = parseInt(service_count) - 1;
                if (service_count == 0) {
                    $(this).parent().hide();
                    $(this).parent().siblings("label").show();
                    $(this).parent().siblings("label").find("#drag_box").prop("checked", false);

                }
                $(this).parent().find("input").val(service_count);
            });
        });

        $(".increament_cls").click(function () {
            // debugger;
            $(this).each(function () {
                var service_counter = $(this).parent().find("input").val();
                console.log(service_counter);

                if (service_counter == "" || isNaN(service_counter)) {
                    service_counter = 1;
                }
                service_counter = parseInt(service_counter) + 1;
                if (service_counter > 100) {
                    $(this).parent().find("input").val('99');
                }
                else {
                    $(this).parent().find("input").val(service_counter);
                }
            });
        });

    });

    function handleChange(input) {
        if (input.value < 0) input.value = 0;
        if (input.value > 99) input.value = 99;
    }


</script>

<style>
    * {
        font-family: Roboto;
    }

    #place_body {
        background-color: rgb(255, 255, 255);
        height: 100vh;
        position: sticky;
        overflow-y: auto;
    }

    .heading_order {
        padding: 3vh 0;
        text-align: center;
        position: sticky;
        font-size: 6vw;
        font-weight: 600;
        color: rgb(255, 255, 255);
        text-shadow: 2px 2px 4px rgb(0 0 0 / 60%);
    }

    .heading_order span {
        padding-left: 20px;
    }

    .service_list {
        height: max-content;
        width: 100vw;
        color: rgb(255, 255, 255);
        padding: 0 10vw;
        /* border-radius: 10px; */
        background-color: rgba(255, 255, 255, 0);
        border-top: white 1px solid;
        transition-timing-function: linear;
        transition: all 1s;

    }

    .service_list:last-child {
        border-bottom: white 1px solid;
    }

    .service-name div:last-child {
        color: black;
        font-style: normal;
        font-size: 2.5vw;
        font-weight: 500;
        letter-spacing: 0.1vw;
    }

    .service_list:hover {
        background: rgb(225, 208, 255);
        background: linear-gradient(0deg, rgb(220, 199, 255) 0%, (220, 199, 255) 50%, (220, 199, 255) 100%);
        color: #4810b1;
    }

    .inner-service-tag {
        padding: 20px 0 20px 20px;
        margin-bottom: 0 !important;
    }

    .service-name {
        font-size: 5vw;
        font-weight: 900;
    }

    .orders_list {
        padding: 1vh 0vw;
    }

    nav {
        position: sticky;
        top: 0;
        z-index: 2;
        background-color: #4810b1 !important;
        height: 65px;
        width: 100vw;
    }

    .service-quantity {
        display: none;
    }

    .service-quantity {
        position: relative;
        display: inline-block;
        width: 100%;
        height: 70%;
        background-color: red;
        border-radius: 30px;
        border: 2px solid gray;
    }

    /* toggle in label designing */
    .toggle {
        position: relative;
        display: inline-block;
        width: 100%;
        height: 70%;
        background-color: red;
        border-radius: 30px;
        border: 2px solid gray;
    }

    /* After slide changes */
    .toggle:after {
        content: '';
        position: absolute;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: gray;
        top: 1px;
        left: 1px;
        transition: all 1.5s;
    }


    .checkbox {
        display: none;
    }

    .confirm-div {
        z-index: 10;
        position: fixed;
        bottom: 0;
        background-color: #4810b1 !important;
        height: max-content;
        padding: 20px 0;
        font-size: 5vw;
        width: 100vw;
        color: white;
        font-weight: 700;
        letter-spacing: 0.2vw;

        transition-timing-function: linear;
        transition: all 3s;

    }

    .confirm-div:hover {
        background-color: rgb(90, 90, 90);
        color: bisque;
    }

    .body_head_list {
        height: 100%;
        overflow-y: auto;
        background-attachment: fixed;
        background-position: center;
        background: rgb(104, 23, 250);
        background: linear-gradient(90deg, rgba(104, 23, 250, 1) 0%, rgba(131, 62, 253, 1) 50%, rgba(152, 91, 255, 1) 100%);
    }

    .icon-shadow {
        box-shadow: 6px 3px 4px -1px rgb(0 0 0 / 75%);
        -webkit-box-shadow: 6px 3px 4px -1px rgb(0 0 0 / 75%);
        -moz-box-shadow: 6px 3px 4px -1px rgb(0 0 0 / 75%);
    }

    .service-button {
        height: 5vw;
        font-size: 5vw;

    }

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
        margin-left: 44%;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

    .service-quantity-tab {
        position: relative;
        display: none;
        width: max-content;
        /* width: 55%; */
        height: 9vw;
        margin-left: 35%;
        /* padding: 10px; */
        /* background-color: rgb(83, 83, 83); */
        border-radius: 30px;
        /* border: 2px solid gray; */
        padding-top: 1px;
        background: #12a6ff;

        background: linear-gradient(90deg, #12a6ff 0%, #0376ff 80%);
        background: -webkit-linear-gradient(90deg, #12a6ff 0%, #0376ff 80%);
        background: -moz-linear-gradient(90deg, #12a6ff 0%, #0376ff 80%);
    }

    .service-quantity-tab li {
        display: inline-block;
        padding: 8px 1vw;

    }

    .fa-minus-circle {
        color: #ff0000;
        background-size: 10px 10px;
        background-position: center;
        background-color: rgb(255, 255, 255);
        border-radius: 50%;

    }

    .fa-plus-circle {

        color: #92c451;
        background-color: rgb(255, 255, 255);
        background-size: 10px 10px;
        background-position: center;
        border-radius: 50%;
    }

    .place_head {
        width: 10%;
        height: 100%;
    }

    .service_qty {
        height: 5vw;
        width: 5vw !important;
        border-radius: 50%;
        text-align: center;
        /* margin-left: 1vw; */
        /* margin-left: 17%; */
    }
</style>


<?php include("menu.php"); ?>


<div id="slide_main" class="slide-toggle">

    <div id="place_body">
        <div class="body_head_list">

            <div class="heading_order">
                <img class='place_head' src="images/Place_your_order.png">
                <!-- <img class='place_head' src="<?php echo $IP_SITE; ?>/images/Place_your_order.png"> -->
                <span>PLACE YOUR ORDER</span>
            </div>

            <div class="orders_list">

                <div class="service_list">
                    <div class="inner-service-tag row">
                        <div class="col-6 service-name">
                            <div>
                                Logo
                            </div>
                            <div>
                                *Upload Content
                            </div>
                        </div>
                        <div class="col-6 ">

                            <label class="switch">
                                <input type="checkbox" id="drag_box" class="drag_box">
                                <span class="slider round"></span>
                            </label>
                            <div class="service-quantity-tab ">
                                <li class="decrement_cls"><i
                                        class="service-button icon-shadow fas fa-minus-circle "></i>
                                </li>
                                <li class="">
                                    <input type="number" class="service_qty" oninput="handleChange(this);" min="0"
                                        max="99" value="1" maxlength="2" style="width: 100%;" width="10">
                                </li>

                                <li class="increament_cls"><i
                                        class="service-button icon-shadow fas fa-plus-circle "></i>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="service_list">
                    <div class="inner-service-tag row">
                        <div class="col-6 service-name">
                            <div>
                                Logo
                            </div>
                            <div>
                                *Upload Content
                            </div>
                        </div>
                        <div class="col-6 ">

                            <label class="switch">
                                <input type="checkbox" id="drag_box" class="drag_box">
                                <span class="slider round"></span>
                            </label>
                            <div class="service-quantity-tab ">
                                <li class="decrement_cls"><i
                                        class="service-button icon-shadow fas fa-minus-circle "></i>
                                </li>
                                <li class="">
                                    <input type="number" class="service_qty" oninput="handleChange(this);" min="0"
                                        max="99" value="1" maxlength="2" style="width: 100%;" width="10">
                                </li>

                                <li class="increament_cls"><i
                                        class="service-button icon-shadow fas fa-plus-circle "></i>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div onclick="sweetalert_pop()" class="confirm-div">
            <center>
                Confirm
            </center>
        </div>
    </div>
</div>

<script>
    function sweetalert_pop() {
        swal("Your order placed", "We will contact you Soon !", "success");
    }
</script>