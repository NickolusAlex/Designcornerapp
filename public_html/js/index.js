/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

// Wait for the deviceready event before using any of Cordova's device APIs.
// See https://cordova.apache.org/docs/en/latest/cordova/events/events.html#deviceready

// IP ADDRESS : 192.168.29.247


var URL_SITE = "http://192.168.0.108/design_corner_app/index.php";
// var URL_SITE = "http://192.168.29.247/design_corner_app/index.php";
// var URL_SITE = "http://localhost/design_corner_app/index.php";

var CURRENT_PAGE = "login";


// document.addEventListener('deviceready', onDeviceReady, false);

document.addEventListener("deviceready", function () {
    console.log(navigator.notification);

    fetch_page(CURRENT_PAGE);
    screen.orientation.lock('portrait');

    // cordovaDevice();

}, false);


function load_page(page_name, menu_tigger = 0) {
    var menu_element = $('#menu_checkbox');
    if (menu_element.length > 0 && menu_tigger == 0) {
        // var is_checked = $('#menu_checkbox').prop("checked");

        if (menu_element.prop("checked") == true) {
            $('#menu_checkbox').prop('checked', false);
            return false;
        }
    }

    $("#app").load('pages/' + page_name + '.html');

    CURRENT_PAGE = page_name;
    return 0;
}


function fetch_page(page_name, menu_tigger = 0) {

    var menu_element = $('#menu_checkbox');
    if (menu_element.length > 0 && menu_tigger == 0) {
        // var is_checked = $('#menu_checkbox').prop("checked");

        if (menu_element.prop("checked") == true) {
            $('#menu_checkbox').prop('checked', false);
            return false;
        }
    }

    if (window.localStorage.getItem("loggedIn") == 1) {
        page_name = "home";
    }
    else {
        page_name = "login";
    }

    $.ajax({
        url: URL_SITE,
        type: "POST",
        crossOrigin: true,
        data: {
            "page_name": "pages/" + page_name,
        },
        beforeSend: function () {
            $("#app").html(' <div style="margin: 80% 0;" class="container"><div class="row"><div class="col-md-6"><img class="mx-auto d-block" width="60%" src="img/DC-light-logo.png"></div></div></div> ');
        },
        success: function (msg) {
            // $("#link_scripts").html(link_scripts);
            $("#app").load(msg);
        },
        error: function (msg) {
            console.log(msg);

            $("#app").html(' <div style="margin: 80% 0;" class="container"><div class="row"><div class="col-md-6"><img class="mx-auto d-block" width="60%" src="img/DC-light-logo.png"></div></div></div> ');

        }
    });
}


function onDeviceReady() {
    // set to either landscape
    screen.orientation.lock('portrait');


    /*  
                // jQuery(window).on("swipeleft", function (event) {
                //     $('#menu_checkbox').prop('checked', false);
                // });

                // jQuery(window).on("swiperight", function (event) {
                //     $('#menu_checkbox').prop('checked', true);
                // });



                // Cordova is now initialized. Have fun!

                // console.log('Running cordova-' + cordova.platformId + '@' + cordova.version);
                // document.getElementById('deviceready').classList.add('ready');

                // $.ajax({
                //     url: URL_SITE,
                //     type: "POST",
                //     crossOrigin: true,
                //     data: {
                //         "page_name": "pages/login"
                //     },
                //     beforeSend: function () {
                //         $("#app").html(' <div style="margin: 80% 0;" class="container"><div class="row"><div class="col-md-6"><img class="mx-auto d-block" width="60%" src="img/DC-light-logo.png"></div></div></div> ');
                //     },
                //     success: function (msg) {

                //         // $("#link_scripts").html(link_scripts);
                //         $("#app").html(msg);

                //     },
                //     error: function(msg){
                //         console.log(msg);

                //         $("#app").html(' <div style="margin: 80% 0;" class="container"><div class="row"><div class="col-md-6"><img class="mx-auto d-block" width="60%" src="img/DC-light-logo.png"></div></div></div> ');

                //     }
                // });
    */

}



function modal_toggle(modal_name) {
    $("#" + modal_name).modal('toggle');
}
//menu js


// $(document).on("pagecreate", "#app", function () {

//     jQuery(window).on("swipeleft", function (event) {
//         $('#menu_checkbox').prop('checked', false);
//     });

//     jQuery(window).on("swiperight", function (event) {
//         $('#menu_checkbox').prop('checked', true);
//     });



//     // $("p").on("swipeleft",function() {
//     //    $("span").text("swipe event occurred!!!");
//     // });
// });


function DeviceInfo() {
    device_info = {
        "cordova_version": device.cordova,
        "device_model": device.model,
        "device_platform": device.platform,
        "device_uuid": device.uuid,
        "device_version": device.version,
    };

    return device_info;

    /* alert("Cordova version: " + device.cordova + "\n" +
        "Device model: " + device.model + "\n" +
        "Device platform: " + device.platform + "\n" +
        "Device UUID: " + device.uuid + "\n" +
        "Device version: " + device.version); */
}

document.addEventListener("backbutton", onBackKeyDown, false);
function onBackKeyDown(e) {
    e.preventDefault();
    switch (CURRENT_PAGE) {
        case "login":
            // load_page("login");
            navigator.app.exitApp();
            break;
        case "signup":
            load_page("login");
            break;
        case "home":
            load_page("login");
            break;
        case "order_status":
            load_page("home");
            break;
        case "place_order":
            load_page("home");
            break;
        case "bill":
            load_page("home");
            break;
        default:
            load_page("home");
            break;
    }

}

function call_option() {
    window.plugins.CallNumber.callNumber(onSuccess, onError, "7402148766", false);
}

function onSuccess(result) {
    console.log("Success:" + result);
}

function onError(result) {
    console.log("Error:" + result);
}