$(function(){
 $("#contact").submit(function(){
  $(".message").removeClass("success").removeClass("error").addClass("loader").html("Sending message").fadeIn("slow");

  var ext = $('input[name=file_attach]').val().split('.').pop().toLowerCase();
  if($.inArray(ext, ['zip','7z','gzip','gz']) == -1) {
    alert('invalid file extension!');
    return false;
  }

  var m_data = new FormData();
  m_data.append( 'name', $('input[name=name]').val());
  m_data.append( 'email', $('input[name=email]').val());
  m_data.append( 'subject', $('input[name=subject]').val());
  m_data.append( 'message', $('textarea[name=message]').val());
  m_data.append( 'g-recaptcha-response', $('textarea[name=g-recaptcha-response]').val());
  m_data.append( 'file_attach', $('input[name=file_attach]')[0].files[0]);

  $.ajax({
   type: "POST",
   url: "../contact.php",
   data: m_data,
   cache: false,
   dataType: "text",
   processData: false,
   contentType: false,
   success: function(msg){
    switch(msg) {
     case "field_error": // one or more fields is/are empty
      $(".message").removeClass("loader").addClass("error");
      $(".message").html("Please fill in all the required fields.");
      break;
     case "captcha_error": // captcha wasn't typed correctly
      $(".message").removeClass("loader").addClass("error");
      $(".message").html("Captcha not solved correctly");
      break;
     case "success": // all good
      $(".message").removeClass("loader").addClass("success");
      $(".message").html("Your message has been sent. You'll soon hear from us!");
      break;
     default: // Hmm. The default case. You never know.
      alert("Something is wrong. Please try again.");
    }
   }
  });
  //Recaptcha.reload();
  return false;
 });
});
