$(document).ready(function(){
  $("#signup_form").submit(function(){
     var first_name = $("input#first_name").val();
     var last_name = $("input#last_name").val();
     var email = $("input#email").val();
     var username = $("input#username").val();
     var password = $("input#password").val();
     var password_confirmation = $("input#password_confirmation").val();
     var email_regexp = /^[\w\.\+-]{1,}\@([\da-zA-Z-]{1,}\.){1,}[\da-zA-Z-]{2,6}$/;

     var error = "";     

     if(first_name == ""){ error += "<li>First Name can't be blank.</li>"; }
     if(last_name == ""){ error += "<li>Last Name can't be blank.</li>"; }
     if(!email_regexp.test(email)) { error += "<li>Invalid Email.</li>"; }
     if(username == ""){ error += "<li>Username can't be blank.</li>"; }
     if(password.length < 8) { error += "<li>Password must be at least 8 characters.</li>"; }
     if(password != password_confirmation) { error += "<li>Confirmation password mismatch.</li>"; }

      if(error != "")
      {
       $(".form .errors").show();
       $(".form .errors").html("Please correct these errors:<br/><ul>"+error+"</ul>");
       return false;
      }
      else
  		{
       return true;
			}
    
  });
  
  var error = $(".login-form .errors").html();
  if(error != "") {$(".login-form .errors").show();}
});
