$(function(){
   $(".videos .video a").on('click',function(e){
       e.preventDefault();

       let link = $(this).attr('href');
    //    console.log(link);
    $(".modal .modal-dialog .modal-content .modal-body iframe").attr('src',link);
   });

   $(".quizzes .disabled a").click(function(e){
      e.preventDefault();
   });
   $("#upload-btn").on('click',function(e){
      e.preventDefault();
      if($("#upload_btn").attr('class')!= "btn btn-success save_image"){
         $("#image_file").trigger('click');
      }else{
         //for submit
         $('#form').submit();
      }
   });
   $("#image_file").on("change",function(){
      let image_value = $(this).val();
      $("#upload-btn").html("<i class='fas fa-cloud-upload-alt'></i> Save");
      $("#upload_btn").attr('class','btn btn-success save_image');
      $("#upload_btn").css('width','100px');
   });
   // form submit ajax 
   $('#form').on('submit' , function(e){
      e.preventDefault();
      $.ajax({
         url        : '/profile',
         type       : 'POST',
         data       : new FormData(this),
         dataType   : 'JSON',
         contentType: false,
         cache      : false,
         processData: false,
         success: function(data){
             
             $("#message").css('display' , 'block');
             $("#message").text(data.message);
             $("#uploaded_image").html(data.uploaded_image);
         },
      });
   });
   // user info submit ajax 
   $('#user_info_form').on('submit' , function(e){
      e.preventDefault();
      $.ajax({
         url        : '/profile',
         type       : 'POST',
         data       : new FormData(this),
         dataType   : 'JSON',
         contentType: false,
         cache      : false,
         processData: false,
         success: function(data){
             
             $("#message").css('display' , 'block');
             $("#message").text(data.message);
             $("#errormessage").css('display' , 'none');
         },
         error:function(){
            $("#errormessage").css('display' , 'block');
            $("#message").css('display' , 'none');
         }
      });
   });
   $('#sendemail').click(function(e){
    e.preventDefault();
   
     });
   

});
