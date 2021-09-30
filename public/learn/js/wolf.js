$(function(){
   $("#panelsStayOpen-collapseOne .accordion-body .open-video h3 a").on('click',function(e){
    e.preventDefault();
   
    let link = $(this).attr('href');
    console.log(link);
    // $("#qq iframe").attr('src',link5);
    $(".section .ratio iframe").attr('src',link);
   });

// upload image button in user profile

  $("#upload_btn").on('click',function(e){
   //   "use strict";
     e.preventDefault();
     if($("#upload_btn").attr('class') != "btn btn-success save_image"){     
        $("#image_file").trigger('click');    // excute event click
      }else{
         // $("#image_file").unbind('click');
         // $("#image_file").trigger('unClick');
         $('#form').submit();
      }
});
  $("#image_file").on("change",function(){
     let image_v = $(this).val();
     $("#upload_btn").html("<i class='fas fa-cloud-upload-alt'></i>Save");
     $("#upload_btn").attr("class","btn btn-success save_image");
  });
//   $('#form').on('submit' , function(e){
//    e.preventDefault();
//    $.ajax({
//       url        : '/profile',
//       type       : 'POST',
//       data       : new FormData(this),
//       dataType   : 'JSON',
//       contentType: false,
//       cache      : false,
//       processData: false,
//       success: function(data){
          
//           $("#message").css('display' , 'block');
//           $("#message").text(data.message);
//           $("#uploaded_image").html(data.uploaded_image);
//       },
//    });

// End upload image button in user profile

});