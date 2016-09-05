$(function() {


        // if($(window).width()>480){
            $(".sectionBox").onepage_scroll({
            sectionContainer: "section",
            easing: "ease-in-out",
            pagination: false, 
            responsiveFallback: 481,
            keyboard: true, 
            loop: false
            });
        // }//end of the 480 if

            //會員修資料修改顯示底色
            $('#circle1').css({'background-color':'#ffc600'});
            $('#circle1-1').css({'background-color':'#ffc600'});
           
            // var datalo='';
            // datalo=$(data-index.val());
            // $('#circle1').click(function(){
            //     alert($('section:nth-of-type(1)').attr('data-index'));
            // });

            // if(){

            // }

			// 會員資料修改
            $('#submitMod').click(function(e) {
                $('.r-success').lightbox_me({
                centered: true, 
                onLoad: function() { 
                    $('.r-success').find('input:first').focus()
                    }
                });
            e.preventDefault();
            });

            // 展覽資料上傳
            var orderNo='';
            var siteName = '';
            var startDate = '';
            var endDate = '';
            var exhiName = '';
            var instro = '';
            // var phone = '';
            // var memEmail = '';
            // var password = '';

            $('#submitUp').click(function(e) {
               $('#lightboxExtUpload').lightbox_me({
               centered: true, 
               onLoad: function() { 
                   $('#lightboxExtUpload').find('input:first').focus()
                   }
               });

              orderNo = $('#orderNo').val(); 
              siteName = $('#siteName').val();
              startDate = $('#startDate').val();
              endDate = $('#endDate').val();
              exhiName = $('#exhiName').val();
              instro = $('#instro').val();
               $('#exhSiteName').html(siteName);
               $('#exhStartDate').html(startDate);
               $('#exhEndDate').html(endDate);
               $('#exhExhiName').html(exhiName);
               $('#exhInstro p').html(instro);
// alert($('#siteName').val());
               // $('#exhStartDate').html($('#startDate').val());
               // $('#exhEndDate').html($('#endDate').val());
               // $('#exhExhiName').html($('#exhiName').val());
               // $('#exhInstro p').html($('#instro').val());

                e.preventDefault();
           });
            
            
            // $( "body" ).on( "click", "#submitUp2", function() {
             
            //  var data_param = {
            //     // siteName: siteName,
            //     orderNo: orderNo,
            //     startDate: startDate,
            //     endDate: endDate,
            //     exhiName: exhiName,
            //     instro: instro
            //  }

            //  $.get( "ExhAdd.php", data_param )
            //   .done(function( data ) {
            //     if (data == "ok") {
            //       // 跳出lightbox
            //       alert( "Data Loaded: " + data );
            //     }
            //  });

                // $.get( "ExhAdd.php",  orderNo: "orderNo", startDate: "startDate", endDate: "endDate", exhiName: "exhiName", instro: "instro")
                // .done(function( data ) {
                // if (data == "ok") {
                  // 跳出lightbox
                //   alert( "Data Loaded: " + data );
                //  }
                // });
            
            //   $.post( "ExhAdd.php", {abc:23}, function( data ) {
            // alert(data)
            //   }, "json");
// alert(3)
            // });

            //目前訂單
            $('#ordCurButton').click(function(e) {
                $('#lightCurOrder').lightbox_me({
                centered: true, 
                onLoad: function() { 
                    $('#lightCurOrder').find('input:first').focus()
                    }
                });
            e.preventDefault();
            });

            //目前訂單
            $('#ordCurButton').click(function(e) {
                $('#lightCurOrder').lightbox_me({
                centered: true, 
                onLoad: function() { 
                    $('#lightCurOrder').find('input:first').focus()
                    }
                });
            e.preventDefault();
            });

            //取消目前訂單-->尚無第二層lightbox
            // $('.cancel1').click(function(e) {
            //     $('#lightboxCancel').lightbox_me({
            //     centered: true, 
            //     onLoad: function() { 
            //         $('#lightboxCancel').find('input:first').focus()
            //         }
            //     });

            //     $('.canorDate').html($('#startDate').val());
            //     $('.canNo').html($('#endDate').val());
            //     $('.canSite').html($('#exhiName').val());
            //     $('.startDatecan').html($('#instro').val());
            //     $('.finishDatecan').html($('#instro').val());
            //     $('.canPrice').html($('#instro').val());
            //     $('.cantoPrice').html($('#instro').val());
                
            // e.preventDefault();
            // });

            //歷史訂單
            $('#ordHisButton').click(function(e) {
                $('#lightboxHisOrder').lightbox_me({
                centered: true, 
                onLoad: function() { 
                    $('#lightboxHisOrder').find('input:first').focus()
                    }
                });
            e.preventDefault();
            });

            //評價
            $('#submitAs').click(function(e) {
                $('#lightboxAssess').lightbox_me({
                centered: true, 
                onLoad: function() { 
                    $('#lightboxAssess').find('input:first').focus()
                    }
                });

               $('#asOrdchoice').html($('#coo').val());
               $('#asOrdText').html($('#comment').val());
               

            e.preventDefault();
            });            


            //展覽2nd
            $('#submitUp2').click(function(e) {
                // $('#lightboxExtUpload').close();
                $('#success1').lightbox_me({
                centered: true, 
                onLoad: function() { 
                    $('#success1').find('input:first').focus()
                    }
                });
                // $('#exhSiteName').val()="";
                $('#lightboxExtUpload').trigger('close');

                

            e.preventDefault();

                // $('#lightboxExtUpload').close();
            });

            //評價2nd
            $('#submit5').click(function(e) {
                $('#success1').lightbox_me({
                centered: true, 
                onLoad: function() { 
                    $('#success1').find('input:first').focus()
                    }
                });
            e.preventDefault();
            });




            $('.x').click(function(){
            $('#success1').trigger('close');
            $('#lightboxExtUpload').trigger('close');
            $('#lightCurOrder').trigger('close');
            $('#lightboxHisOrder').trigger('close');
            $('#lightboxAssess').trigger('close');
            $('#lightboxCancel').trigger('close');
            $('#orderNo').val("");
            $('#siteName').val("");
            $('#startDate').val("");
            $('#endDate').val("");
            $('#exhiName').val("");
            $('#instro').val("");
            $('#picFile').val("");
            $('#password2').val("");
            $('#password3').val("");
            $('#perPic').val("");
            $('#comment').val("");          

            $('.starCh img').attr("src","img/star-w.png");            

            });


            //星星
            var nowimg = $(".starCh img").attr("src");
            $(".starCh img").click(function(){
            if($(this).attr("src") == nowimg){
                $(this).attr("src","img/star(2).png");
            }else{
                $(this).attr("src","img/star-w.png");
            }               
                           
            });


            $('.circle').click(function(){
                $('.circle').css({'background-color':'#fff'});
              $(this).css({'background-color':'#ffc600'});
 
            });

            $('#submitUp2').click(function(){
            $('#lightboxExtUpload').trigger('close');
            });

            $('#submit5').click(function(){
            $('#lightboxAssess').trigger('close');
            });

            $('#closeCurButton').click(function(){
            $('#lightCurOrder').trigger('close');
            });

            $('#closeHisButton').click(function(){
            $('#lightboxHisOrder').trigger('close');
            });

            $('#reset5').click(function(){
            $('#lightboxAssess').trigger('close');
            });
            
        

            // var $siteName=$('#siteName').val()
            //   $('#exhSiteName').html();             
            //    $('#exhStartDate').html($('#startDate').val());
            //    $('#exhEndDate').html($('#endDate').val());
            //    $('#exhExhiName').html($('#exhiName').val());
            //    $('#exhInstro p').html($('#instro').val());




        });//$(function()