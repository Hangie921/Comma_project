<script>
     	$(function() {

    		$.scrollify({
			section : "section",
			sectionName : "section-name",
			easing: "easeOutExpo",
			scrollSpeed: 500,
			offset : 0,
			scrollbars: true,
			before:function() {},
			after:function() {},
			afterResize:function() {}
			});

    		// $("#submit1").click(function(){
    		// 	$("#lightboxMemMod").bPopup();
    		// });//$("#submit1").click     		

    		$("#submit2").click(function(){
    			$("#lightboxExtUpload").bPopup();
    		});//$("#submit2").click


    		$("#ordCurButton").click(function(){
    			$("#lightCurOrder").bPopup();
    		});//$("#ordHisButton").click

    		$("#ordHisButton").click(function(){
    			$("#lightboxHisOrder").bPopup();
    		});//$("#ordHisButton").click

    		$(".cancel").click(function(){
    		$("#lightboxCancel").bPopup();
    		});//$(".cancel").click

    		$("#submit3").click(function(){
    			$("#lightboxAssess").bPopup();
    		});//$("#submit3").click

    		$("#submit1").click(function(){
    			$(".r-success").bPopup();
    		});//$("#submit1").click
    		

    		$(".x").click(function(){
    			$("#lightboxExtUpload").bPopup().close();
    		})

    		$(".x").click(function(){
    			$("#lightCurOrder").bPopup().close();
    		})

    		$(".x").click(function(){
    			$("#lightboxHisOrder").bPopup().close();
    		})

    		$(".x").click(function(){
    			$("#lightboxCancel").bPopup().close();
    		})

    		$(".x").click(function(){
    			$("#lightboxAssess").bPopup().close();
    		});

    		$("#circle1").click(function(){
    			$.scrollify.move("#memMod");
    		});    			

    		$("#circle2").click(function(){
    			$.scrollify.move("#extUpload");
    		});

    		$("#circle3").click(function(){
    			$.scrollify.move("#order");
    		});

    		$("#circle4").click(function(){
    			$.scrollify.move("#assess");
    		});




        });//$(function()
	</script>