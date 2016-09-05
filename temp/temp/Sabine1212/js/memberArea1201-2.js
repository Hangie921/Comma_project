$(function() {

            $(".sectionBox").onepage_scroll({
            sectionContainer: "section",
            easing: "ease-in-out",
            pagination: false, 
            // responsiveFallback: 481,
            keyboard: true, 
            loop: false
            });

            
// lightbox
            // $(".close").click(function(){
            // $(".lightbox_bg").css("display", "none");
            // })
            // 這是要關掉的時候
            // $("#submitMod").click(function(){
            // $(".lightbox_bg").show();
            // }

            // $("#submitUp").click(function(){
            // $(".lightbox_bg").show();
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

            $('#submitUp').click(function(e) {
               $('#lightboxExtUpload').lightbox_me({
               centered: true, 
               onLoad: function() { 
                   $('#lightboxExtUpload').find('input:first').focus()
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
            $('.cancel').click(function(e) {
                $('#lightboxCancel').lightbox_me({
                centered: true, 
                onLoad: function() { 
                    $('#lightboxCancel').find('input:first').focus()
                    }
                });
            e.preventDefault();
            });

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
            e.preventDefault();
            });            

            //展覽2nd
            $('#submitUp2').click(function(e) {
                $('#success1').lightbox_me({
                centered: true, 
                onLoad: function() { 
                    $('#success1').find('input:first').focus()
                    }
                });
            e.preventDefault();
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
            
        

    		// $("#submitMod").click(function(){
    		// 	$(".r-success").bPopup();
    		// });//$("#submitMod").click     		

    		// $("#submitUp").click(function(){
    		// 	$("#lightboxExtUpload").bPopup();
    		// });//$("#submit2").click

      //       $("#submitUp2").click(function(){
      //           $(".r-success").bPopup();
      //       });


    		// // $("#ordCurButton").click(function(){
    		// // 	$("#lightCurOrder").bPopup();
    		// // });//$("#ordHisButton").click

    		// // $("#ordHisButton").click(function(){
    		// // 	$("#lightboxHisOrder").bPopup();
    		// // });//$("#ordHisButton").click

    		// $(".cancel").click(function(){
    		// $("#lightboxCancel").bPopup();
    		// });//$(".cancel").click

    		// $("#submitAs").click(function(){
    		// $("#lightboxAssess").bPopup();
    		// });//$("#submit3").click

      //       $("#closeCurButton").click(function(){
      //           $("#lightCurOrder").bPopup().close();
      //       });

      //       $("#closeHisButton").click(function(){
      //           $("#lightboxHisOrder").bPopup().close();
      //       });



      //       $(".x").click(function(){
      //           $("#lightboxExtUpload").bPopup().close();
      //       })

      //       $(".x").click(function(){
      //           $("#lightCurOrder").bPopup().close();
      //       })

      //       $(".x").click(function(){
      //           $("#lightboxHisOrder").bPopup().close();
      //       })

      //       $(".x").click(function(){
      //           $("#lightboxCancel").bPopup().close();
      //       })

      //       $(".x").click(function(){
      //           $("#lightboxAssess").bPopup().close();
      //       });

      //       $(".x").click(function(){
      //           $(".r-success").bPopup().close();
      //       });            



    		// $("#circle1").click(function(){
    		// 	$.scrollify.move("#memMod");
    		// });    			

    		// $("#circle2").click(function(){
    		// 	$.scrollify.move("#extUpload");
    		// });

    		// $("#circle3").click(function(){
    		// 	$.scrollify.move("#order");
    		// });

    		// $("#circle4").click(function(){
    		// 	$.scrollify.move("#assess");
    		// });




        });//$(function()