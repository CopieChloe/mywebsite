$(document).ready(function() {

  /* mouseleave gif */
  $(document).mouseleave(function() {
    $("header ,main ,menu ,footer").addClass("leave");
    $(".leavediv").css("display", "flex");
  });

  $(document).mouseenter(function() {
    console.log("hello world!");
    $("header ,main ,menu ,footer").removeClass("leave");
    $(".leavediv").css("display", "none");
  });

    /* setting some heights and tops dynamically */  
    var setHeightHome = $("#picture").height();
    $(".parent .intro_paragraph").height(setHeightHome);
    $(".intro_paragraph").css( "top", setHeightHome );

    var setHeightHomeHalf = setHeightHome/2;
    var heightParagraphHalf = $("#introtext").height()/2;

    var setTopIntrotext = setHeightHomeHalf - heightParagraphHalf;

    $("#introtext").css( "top", setTopIntrotext );


    var setHeightContact = $(".contactcalltoaction").height();
    $(".contact_link").height(setHeightContact); 

    var setHeightCv = $(".icon").width();
    $(".icon").height(setHeightCv); 

    /* tarifs clicks */
    $("#button_vitrine").click(function() {
      $( "#content_vitrine" ).slideDown("slow");
    });

    $("#button_vitrine_up").click(function() {
      $( "#content_vitrine" ).slideUp();
    });

    $("#button_ecommerce").click(function() {
      $( "#content_ecommerce" ).slideDown("slow");
    });

    $("#button_ecommerce_up").click(function() {
      $( "#content_ecommerce" ).slideUp();
    });


    /* resume rotations */
    $("#icon1").click(function() {
      $( "#icon1" ).addClass('icon_rotate');
      $( "#text1" ).addClass('text_rotate');
    });

    $("#icon2").click(function() {
      $( "#icon2" ).addClass('icon_rotate');
      $( "#text2" ).addClass('text_rotate');
    });

    $("#icon3").click(function() {
      $( "#icon3" ).addClass('icon_rotate');
      $( "#text3" ).addClass('text_rotate');
    });

    $("#icon4").click(function() {
      $( "#icon4" ).addClass('icon_rotate');
      $( "#text4" ).addClass('text_rotate');
    });

    $("#icon5").click(function() {
      $( "#icon5" ).addClass('icon_rotate');
      $( "#text5" ).addClass('text_rotate');
    });
 
    /* page home - texte photo - fadeIn*/
    function fadeOne () {
      $( "#fadein1" ).fadeIn( 2000 );
    }
     
      function fadeTwo () {
          $( '#fadein2' ).fadeIn(2000);
      }
     
      function fadeThree () {
        $( '#fadein3' ).fadeIn(2000);
    }

    function goClear () {
      $( '#picture' ).addClass('goClear');
    }
     
    setTimeout(function() {
      goClear();
      fadeOne();
    }, 5000)
     
      setTimeout(function() {
        fadeTwo();
      }, 7000);
     
      setTimeout(function() {
        fadeThree();
      }, 9000);
     
     
    /* page home - animation nom : */     
    function addPic () {
      $( "#round" ).show();
    }
     
    function hidePic() {
      $( "#round" ).hide();
    }
     
    function addPic2 () {
      $( "#imgcode" ).show();
    }
     
    function hidePic2() {
      $( "#imgcode" ).hide();
    }
     
    function crossOut() {
      $( "#crossout" ).show();
    }
     
    function unCross() {
      $( "#crossout" ).hide();
    }
     
    function murderFont() {
      $( '#name' ).css('fontFamily', 'Gloria Hallelujah');
      $( '#lastname' ).css('fontFamily', 'Gloria Hallelujah');
      $( '#name' ).css('fontSize', '40px');
      $( '#lastname' ).css('fontize', '40px');
    }
     
    function noMurder() {
      $( '#name' ).css('fontFamily', 'Amatic SC');
      $( '#lastname' ).css('fontFamily', 'Amatic SC');
      $( '#name' ).css('fontSize', '80px');
      $( '#lastname' ).css('fontize', '80px');
    }
     
    function gif() {
      $( "#gif" ).show();
    }
     
    function unGif() {
      $( "#gif" ).hide();
    }
     
    function arrow() {
      $( "#arrow" ).show();
    }
     
    function unArrow() {
      $( "#arrow" ).hide();
    }
     
    function goLightGray() {
      $( '#name' ).css('color', 'lightgray');
      $( '#lastname' ).css('color', 'lightgray');
    }
     
    function goGray() {
      $( '#name' ).css('color', 'gray');
      $( '#lastname' ).css('color', 'gray');
    }
     
    function goBackToBlack() {
      $( '#name' ).css('color', 'black');
      $( '#lastname' ).css('color', 'black');
    }
     
    function underline() {
      $( "#underline" ).show();
    }
     
    function unUnderline() {
      $( "#underline" ).hide();
    }

    setTimeout(addPic, 700);
    setTimeout(hidePic, 900);
    setTimeout(addPic2, 900);
    setTimeout(hidePic2, 1100);
    setTimeout(crossOut, 1100);
    setTimeout(unCross, 1300);
    setTimeout(murderFont, 1300);
    setTimeout(noMurder, 1500);
    setTimeout(gif, 1500);
    setTimeout(unGif, 2500);
    setTimeout(arrow, 2500);
    setTimeout(unArrow, 2700);
    setTimeout(arrow, 2800);
    setTimeout(unArrow, 2900);
    setTimeout(arrow, 2900);
    setTimeout(unArrow, 3000);
    setTimeout(arrow, 3100);
    setTimeout(unArrow, 3200);
    setTimeout(goLightGray, 3300);
    setTimeout(goGray, 3500);
    setTimeout(goBackToBlack, 3700);
    setTimeout(addPic, 3700);
    setTimeout(hidePic, 3900);
    setTimeout(underline, 3900);
    setTimeout(unUnderline, 4300);
    setTimeout(underline, 4500);   

    setTimeout(fadeOne, 4600);
    setTimeout(fadeTwo, 6100);
    setTimeout(fadeThree, 7600);



    function updateText(event){
      var input=$(this);
      setTimeout(function(){
        var val=input.val();
        if(val!="") {
          input.parent().addClass("float"); 
        }
        else {
          input.parent().removeClass("float"); 
        }
      },1)
    }
    $(".input_div input").keydown(updateText);
    $(".input_div input").change(updateText);
    
   
    });
     