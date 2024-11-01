<?php 

if ( ! defined( 'ABSPATH' ) ) exit;
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multipurpose Website UI Theme</title>
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="<?php echo BLENDED_PLUGIN_URL.'image/bootstrap/css/bootstrap.css'?>">
    
    <link rel="stylesheet" href="<?php echo BLENDED_PLUGIN_URL.'image/js/jquery-ui/jquery-ui.css'?>">
    <!--link rel="stylesheet" href="theme/image_tandoor.css"-->
    <!--THEME CSS-->
    <link rel="stylesheet" href="<?php echo BLENDED_PLUGIN_URL.'image/js/theme.css'?>">




    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </div>
    </footer>
    <!-- Modal -->
    <div class="" id="spread-word" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" data-keyboard="false" >
        <div class="" role="document">
            <div class="modal-content">
                
                <div class="modal-body">
                    <div class="modal-content-wrapper">
                        <!-- <a href="#" class="help-icon"><i class="fa fa-question-circle fa-2"></i></a> -->
                        <div id="modal-tab-content">
                            <!--DESKTOP TAB START-->
                            <div class="row tab-content show" id="desktop-tab">
                                <div class="col-lg-12 ">
                                    <div class="mt-50 mb-50 text-center">
                                        <p><img src="images/upload-page-icon.png" alt="Upload Image" width="130" height="131"></p>
                                        <!--h1 class="text-orange mt-30 large">DRAG &amp; DROP <span class="light text-blue">A PICTURE</span></h1>
							<p>OR</p-->
                                        <h1 class="text-orange mt-30 large text-uppercase">UPLOAD <span class="light text-blue">A FILE</span></h1>
                                        <p class="text-uppercase large mb-0">UPLOAD PHOTO FROM YOUR MACHINE</p>
                                        <a href="#" class="btn btn-primary" id="browse">BROWSE PHOTOS</a>
                                        <div class="input-container"><input type="file" id="image-loader-desktop" name="image-loader-desktop" /></div>
                                        <p class="small mt-10">Click browse photos to chose a file from your machine</p>
                                        <!--img src="images/upload-a-photo.png" class="upload-a-photo" alt="Upload a Photo" width="151" height="81">
							<img src="images/choose-additional.png" class="choose-additional" alt="Choose Additional Options" width="167" height="98"-->
                                    </div>
                                </div>
                            </div>
                            <!--DESKTOP TAB END-->
                            <!--CAMERA TAB START-->
                            <!-- <div class="row tab-content  hide" id="camera-tab">
                                <div class="col-lg-12 ">
                                    <div class="mt-50 mb-50 text-center">
                                        <i class="fa fa-camera fa-7x text-light-gray"></i>
                                        <h1 class="text-orange mt-30 large">PLEASE ALLOW ACCESS <br><span class="light text-blue">TO YOUR CAMERA</span></h1>
                                        <a href="#" id="camera-snap" class="btn btn-primary take-photo" id="request-permission">REQUEST PERMISSION</a>
                                    </div>
                                </div>
                            </div> -->
                            <!--CAMERA TAB END-->
                            <!--TAKE PHOTO WITH CAMERA START-->
                            <!-- <div class="row tab-content  hide" id="take-photo">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="mt-10 mb-10 text-center">
                                        <div class="gray-place-holder">
                                            <video id="photo-take-video">Video stream not available.</video>
                                            <canvas id="photo-take-canvas"></canvas>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6" id="camera-btn-left">
                                                <button id="camera-mirror" class="btn btn-primary  btn-block">MIRROR</button>
                                                <button id="camera-retake" class="btn btn-primary ">RETAKE</button>
                                            </div>
                                            <div class="col-xs-12 col-sm-6" id="camera-btn-right">
                                                <button class="btn  btn-warning  " id="take-photo-btn">TAKE A PHOTO</button>
                                                <button class="btn  btn-warning  " id="edit-taken-photo-btn">USE THIS PICTURE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!--TAKE PHOTO WITH CAMERA END-->
                            <!--IMAGE CROP START-->
                            <div class="row tab-content  hide" id="image-crop">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col-md-12" id="canvas-holder">
                                                <div class="canvas-holder">
                                                    <canvas id="imageCanvas"></canvas>
                                                </div>
                                                <!-- <div class="row hide mt-10" id="sec-btns-holder">
                                                    <div class="col-md-4 mb-10">
                                                        <a id="edit-image-preview" href="#" class="btn btn-primary btn-block ">EDIT</a>
                                                    </div>
                                                    <div class="col-md-4  mb-10">
                                                        <a id="download-image-preview" class="btn btn-warning btn-block ">DOWNLOAD</a>
                                                    </div>
                                                    <div class="col-md-4  mb-10">
                                                         <a id="email-image-preview" href="#" class="btn btn-primary  btn-block btn-bordered">EMAIL ME A COPY</a>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="col-sm-5 col-md-4 hide" id="tools-holder">
                                                <!--button class="btn btn-primary btn-bordered btn-block mb-10 mt-20">VIEW ORIGINAL IMAGE</button>
									<button class="btn  btn-warning  btn-bordered btn-block mb-10">PREVIEW</button-->
                                                <!--div class="btn-group-small text-left" id="tools">
                                                </div>
                                                <div id="subtool" class="text-left">
                                                </div-->
                                                <!-- New Elements Starts-->
                                          
                                                <!-- Adjust -->
                                               <!--  <div class="text-left hide" id="adjust-color">
                                                    <div id="pre-select" class="hide">
                                                    <h3>Select Two Color To Keep</h3>
                                                    <p>Click on photo and select two colors you want to keep.</p>
                                                    </div>
                                                    
                                                    <div id="post-select" class="hide">
                                                    <h3>Adjust Selected Colors</h3>
                                                    <p>Slide the bar <stong>Left</stong> or <stong>Right</stong> to adjust the color</p>
                                                    <p class="small">Note: You will be able to clean up the image by adding color to specific areas or removing color later. We suggest getting it as close as you can now but not worring if its perfect.</p>
                                                    </div>
                                                    <div class="subtool-holder">
                                                        <div class="subtool-block">
                                                            <div class="subtool-group">
                                                                <div class="add-cp-button cp-button-1">
                                                                    <div id="cp-1">&nbsp;</div>
                                                                </div>
                                                                <div id='cp-1-slider-holder' class="slider-holder tool-slider"><div id="cp-1-slider" class="color-slider tool-slider"></div></div>
                                                                <a href="#" id='cp-1-del' class="remove-color-link text-danger"><i class="fa fa-minus-circle"></i></a>

                                                            </div>
                                                        </div>
                                                        <div class="subtool-block">
                                                            <div class="subtool-group">
                                                                <div class="add-cp-button cp-button-2">
                                                                    <div id="cp-2">&nbsp;</div>
                                                                </div>
                                                                <div id='cp-2-slider-holder' class="slider-holder tool-slider"><div id="cp-2-slider" class="color-slider tool-slider"></div></div>
                                                                <a  id='cp-2-del' href="#" class="remove-color-link  text-danger"><i class="fa fa-minus-circle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="text-left hide" id="touch-brush">
                                                  
                                                    <div class="subtool-holder btn-group-small">
                                                        <label>Select A Brush:</label><br>

                                                        Convert to Grayscale<div class="add_table_data_botton_class btn btn-primary btn-bordered  btn_desat" id="desat-btn"></div>
                                                        <br>Revert original color<div class="add_table_data_botton_class btn btn-primary btn-bordered btn_sat" id="sat-btn"></div>
                                                        <div class="slider-holder" id="slider-holder"></div>
                                                    </div>
                                                    <!--div class="subtool-holder btn-group-small">
                                                        <label>Undo &amp; Redo:</label>
                                                        <div class="add_table_data_botton_class btn btn-primary btn-bordered btn_undo" id="undo-btn"></div>
                                                        <div class="add_table_data_botton_class btn btn-primary btn-bordered btn_redo" id="redo-btn"></div>
                                                    </div-->
                                                </div>
                                                <!-- Email Send Words -->
                                                
                                                    <a href="#" class="btn btn-primary" id="sav">SAVE PHOTO</a>
                                        <div class="input-container"><input type="file" id="image-loader-desktop" name="image-loader-desktop" /></div>

<a href="#" class="btn btn-primary" id="bck">BACK</a>
                                                <!-- New Elements End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
              <span title="zacksac@gmail.com" style="cursor:hand;" class='small mt-10'> By: Aman Deep Katoch </span>
            </div>
            <div class="row">
<div class="col-md-5 col-lg-5 col-sm-5">
</div>
  <div class="col-md-5 col-lg-5 col-sm-5">

<h1> Buy me a beer !!</h1>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>
    </div>
</div>
        </div>
    </div>
    <?php 
    ?>
   
    <?php
     wp_enqueue_script( 'jquery-ui');
    ?>
     <script>
     var $= jQuery.noConflict();
  
     </script>
  
    
    <script type="text/javascript" src="<?php echo BLENDED_PLUGIN_URL.'image/js/image_tandoor.js'?>"></script>
    <script type="text/javascript">
 
    // Initialize
   


    function loadCamera() {
        var video = document.getElementById('photo-take-video'),
            jqVideo = $(video).attr({
                width: '100%'
            }),
            jqCanvas = $('#photo-take-canvas');
        $("#camera-tab").addClass('hide').removeClass('show');
        $("#take-photo").removeClass('hide');
        $('#edit-taken-photo-btn').hide();
        $('#take-photo-btn').show();
        $('#camera-mirror').show();
        $('#camera-retake').hide();
        $('#camera-btn-left').hide();
        $('#camera-btn-right').addClass('col-sm-offset-3');
       
        jqCanvas.hide();
        jqVideo.show();



        navigator.getMedia({
                video: true,
                audio: false
            },
            function(stream) {
                localMediaStream = stream;
                if (navigator.mozGetUserMedia) {
                    video.mozSrcObject = stream;
                } else {
                    var vendorURL = window.URL || window.webkitURL;
                    video.src = vendorURL.createObjectURL(stream);
                }
                video.play();
            },
            function(err) {
                console.log("An error occured! " + err);
            }
        );


    }


    function takeImage() {
        var video = document.getElementById('photo-take-video'),
            jqVideo = $(video),
            canvasElem = document.getElementById('photo-take-canvas'),
            context = canvasElem.getContext('2d'),
            jqCanvas = $(canvasElem).show();;
            cameraWidth = jqVideo.width();
        cameraHeight = video.videoHeight / (video.videoWidth / cameraWidth);

        if (isNaN(cameraHeight)) {
            cameraHeight = cameraWidth / (4 / 3);
        }
        jqCanvas.attr({
            width: cameraWidth,
            height: cameraHeight
        })

        context.drawImage(video, 0, 0, cameraWidth, cameraHeight)
        video.pause();
        localMediaStream && localMediaStream.stop && localMediaStream.stop();

        $('#edit-taken-photo-btn').show();
        $('#take-photo-btn').hide();
        $('#camera-mirror').hide();
        $('#camera-retake').show();
        $('#camera-btn-left').show();
        $('#camera-btn-right').removeClass('col-sm-offset-3');
        jqCanvas.show();
        jqVideo.hide();

    }

    function applymirror() {

    }

    // This function is just to show Instagram post share page
    function instagramShare() {
        hideAll();
        $("#image-crop").removeClass("show").addClass("hide");
        $("#instagram-tab").addClass("show");
        $("#instagram-upload").addClass("hide");
        $("#instagram-share").removeClass("hide");
        $("#tab-btn-wrapper").removeClass("show").addClass("hide");
        $("#link-btn").removeClass("hide").html("<a href='#' class='btn btn-link btn-link-warning'>go back to sharing options</a><a href='#' class='btn btn-primary' id='done-sharing'>DONE SHARING</a>");
    }

   


    function hideAll() {

        $('#adjust-color').addClass('hide');
        $('#touch-brush').addClass('hide');
        $('#share-word').addClass('hide');
        $('#sec-btns-holder').addClass('hide');
        $('#send-email').addClass('hide');
        $('#post-send').addClass('hide');
        $('#pre-select').addClass('hide');
        $('#post-select').addClass('hide');
        $("#canvas-holder").removeClass('thumbnail-view');

    }


    function showCropOption() {
        hideAll();
        $("#image-crop").siblings().removeClass("show").addClass("hide");
        $("#image-crop").removeClass("hide").addClass("show");
        $("#tab-btn-wrapper").removeClass("show").addClass("hide");
        $("#link-btn").addClass("show");
        $("#canvas-holder").addClass("col-sm-12");
        currentWindow = "image-crop";
    }

    function activeColorPicker() {
        hideAll();
        $('#adjust-color').removeClass("hide").removeClass("active-adjust");;;
        $("#tools-holder").removeClass("hide");
        $("#canvas-holder").addClass("col-sm-7 col-md-8").removeClass("col-md-12");
        $("#pre-select").removeClass("hide");
        $("#cp-1-slider-holder").addClass("hide");
        $("#cp-2-slider-holder").addClass("hide");
        $("#slider-holder").removeClass("active-slider");
        currentWindow = "color-picker";
        imageTandoor.activateColourPicker();
        checkModalSize();
    }

  function activeColorPicker2() {
        hideAll();
        $('#adjust-color').removeClass("hide").addClass("active-adjust");;
        $("#tools-holder").removeClass("hide");
        $("#canvas-holder").addClass("col-sm-7 col-md-8").removeClass("col-md-12");
        $("#pre-select").addClass("hide");
        $("#post-select").removeClass("hide");
        $("#cp-1-slider-holder").removeClass("hide");
        $("#cp-2-slider-holder").removeClass("hide");
        currentWindow = "color-picker2";
        imageTandoor.activateColourPicker();
  }

    function activeTouchUp() {
        hideAll();
        currentWindow = "touch-up";
        $('#touch-brush').removeClass("hide");
        $('#pre-select').removeClass("hide");
        imageTandoor.activateBrush();
    }

 
    function preview() {
        hideAll();
        $('#share-word').removeClass("hide");
        $('#sec-btns-holder').removeClass("hide");
        currentWindow = "preview";
        imageTandoor.preview();
        $("#continue").hide();
                $("#canvas-holder").addClass("thumbnail-view");
    }

    function email() {
        $('#send-email').removeClass("hide");
        $('#share-word').addClass("hide");
        $('#post-send').addClass('hide');
    }

    function sendEmail() {
        var emailAddress = $('#email-input').val(),
        validEmail = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/ig.test(emailAddress);

        if (validEmail) {
            // send the email data as ajax and put the dummy sucess text
            $.ajax({
              method: "POST",
              url: emailURL,
              data: { email: emailAddress, imageData: canvasElem.toDataURL() }
            })
              .done(function( msg ) {// for betterment show the done messege here
                
              });

            $('#send-email').addClass("hide");
            $('#post-send').removeClass('hide');
            $('#share-word').removeClass('hide');
            $('#email-input').removeClass('error-email');
        }
        else {
            $('#email-input').addClass('error-email');
        }
    }



    function showAdvanceEditOption() {
        //$("#color").siblings().removeClass("show").addClass("hide");
        //$("#color").addClass("show");
        //$("#tab-btn-wrapper").removeClass("show").addClass("hide");
        //$("#link-btn").addClass("show");
        imageTandoor.deActivateTool();
        $("#tools-holder").removeClass("hide");
        $("#canvas-holder").addClass("col-sm-7 col-md-8").removeClass("col-md-12");
        currentWindow = "color";


    }


    function showShareOption() {
        //helper.deActivateTool();
        // $("#share").siblings().removeClass("show").addClass("hide");
        // $("#share").addClass("show");
        // $("#tab-btn-wrapper").removeClass("show").addClass("hide");
        // $("#link-btn").addClass("show");
        $("#canvas-holder").append(extraBtns);
        $("#tools-holder").html(shareBtns);
        $("#continue").remove();
    }



     function resizeImageCanv (width, height) {
        var canvasSize = imageTandoor.getSize(),
        newSize = imageTandoor.calcSize(canvasSize.w, canvasSize.h, width, height)
        
        imageTandoor.resize(newSize[0], newSize[1]);
    }


    function checkModalSize() {
        var modalWidth = $('#spread-word .modal-content-wrapper').width();
        var modalHeight = $('#spread-word .modal-content-wrapper').height();
        resizeImageCanv(modalWidth, modalHeight);
    }





   $(document).ready(function() {

 imageTandoor.init();


    navigator.getMedia = (navigator.getUserMedia ||
        navigator.webkitGetUserMedia ||
        navigator.mozGetUserMedia ||
        navigator.msGetUserMedia);

    var currentWindow = "take-photo",
            cameraWidth = 320, // **** camera width
            cameraHeight,
            localMediaStream,
            emailURL = 'helper_php/email.php',
            canvasElem = document.getElementById('imageCanvas');

    	// add file browse events
        // set the local image handler
        $('#image-loader-desktop').on('change', function(e) {
            var reader = new FileReader();
            reader.onload = function(event) {
            	//showCropOption();
                imageTandoor.loadImage(event.target.result);
                $("#desktop-tab").removeClass('show');
                $("#desktop-tab").addClass('hide');
                
                $("#image-crop").removeClass('hide');
                  $("#image-crop").addClass('show');
                  $("#tools-holder").removeClass('hide');
                  $("#tools-holder").addClass('show');
                  $("#touch-brush").removeClass("hide");
                //setTimeout(checkModalSize, 10);
            }
            reader.readAsDataURL(e.target.files[0]);
            
            
            
        });
        
         $("#bck").on("click", function() {
           $("#desktop-tab").removeClass('hide');
                $("#desktop-tab").addClass('show');
                $("#image-crop").removeClass('show');
                  $("#image-crop").addClass('hide');
         })

         $('#sav').on("click",function(){
            var x=imageTandoor.getSize();
            var base_64data=imageTandoor.getImage64Data(x.w,x.h);
          
            var s_url='<?php echo BLENDED_PLUGIN_URL ;?>save.php';

                // $.ajax({
                // method: "POST",
                // url: s_url,
                // data: { image_64: base_64data }
                // })
                // .done(function( msg ) {
                // //console.log( "Data Saved: " + msg );
                // });
                    

                      $.ajax({
                         type : "post",
                         
                         url : '<?php echo admin_url( 'admin-ajax.php' )?>',
                         data : {action: "save_pic", image_64 :base_64data},
                         success: function(response) {
                            if(response.type == "success") {
                              alert('image saved in gallery')
                            }
                            else {
                               alert('image saved in gallery')
                            }
                         }
                      })   

         })

                     
        //email-image-preview

        $('#email-image-preview').on('click', email);
        $('#send-email-preview').on('click', sendEmail);
        $('#edit-image-preview').on('click', function () {
        	activeColorPicker();
        	$("#continue").show();
        });
        $('#download-image-preview').on('click', function() {
            imageTandoor.downLoad(this.id)
        });

        $("#continue").on("click", function() {
            /*var getSection = $("#modal-tab-content .show").attr("id");
            console.log(getSection);*/
            
            switch (currentWindow) {
                case "take-photo":
                    showCropOption();
                    break;
                case "image-crop":
                    activeColorPicker();
                    break;
                case "color-picker":
                    activeColorPicker2();
                    break;
                case "color-picker2":
                    activeTouchUp();
                    break;
                case "touch-up":
                    preview();
                    break;
                case "preview":
                    //preview();
                    break;                 
            }
        });




        /// Camera upload feature
        $('#camera-snap').on('click', loadCamera);
        $('#take-photo-btn').on('click', takeImage);
        $('#edit-taken-photo-btn').on('click', function() {
            var canvasElem = document.getElementById('photo-take-canvas'),
                context = canvasElem.getContext('2d');

            showCropOption();
            imageTandoor.loadImage(context.getImageData(0, 0, cameraWidth, cameraHeight), 'imagedata');
        });
        $('#camera-mirror').on('click', applymirror);
        $('#camera-retake').on('click', loadCamera);






        $('#tab-btn-wrapper li').click(function(e) {
            e.preventDefault();
            if ($(this).hasClass("active")) {
                //console.log("hi");
            } else {
                var clickedTab = $(this).attr("class");
                $("#modal-tab-content").find(".tab-content").removeClass("show").addClass("hide");
                $("#modal-tab-content").find("#" + clickedTab).addClass("show");
                $(this).siblings().removeClass("active");
                $(this).addClass("active");
            }
        });

        $("#request-permission").on("click", function() {
            $("#take-photo").siblings().removeClass("show").addClass("hide");
            $("#take-photo").addClass("show");
            $("#tab-btn-wrapper").removeClass("show").addClass("hide");
            $("#link-btn").addClass("show");
        });


        // function temp () {
        //     showCropOption();
        //     // @temp
        //     imageTandoor.loadImage('images/test-images/chear.jpg', 'url');
        //     $(window).off("click", temp);
        // }
        // $(window).on("click", temp);


        $("#connect-instagram").on("click", function() {
            hideAll();
            instagramShare();
        });

        $("#btn-instagram").on("click", function() {
            hideAll();
            instagramShare();
        });
       



        $(".paintbrush").on("click", function() {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
            $("#paintbrush").removeClass("hide").addClass("show");
            $("#paintbrush").siblings().removeClass("show").addClass("hide");
        });

        $(".paintbrush2").on("click", function() {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
            $("#paintbrush2").removeClass("hide").addClass("show");
            $("#paintbrush2").siblings().removeClass("show").addClass("hide");
        });

        $(".zoom").on("click", function() {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
            $("#zoom").removeClass("hide").addClass("show");
            $("#zoom").siblings().removeClass("show").addClass("hide");
        });


        // Check Active

        $(".add_table_data_botton_class").on("click", function() {
            $("#slider-holder").addClass("active-slider");
        })



        // Browser button

        $('#browse').click(function(){
            $('#image-loader-desktop').click();
        });

       $(window).load(function() {
            //$('#spread-word').modal('show');
            checkModalSize();
        });

       $(window).resize(function(){
            checkModalSize();
       });


    });
    </script>



