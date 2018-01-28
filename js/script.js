function onEmailSubmit(){
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var phone = document.getElementById('phone').value;
	var message = document.getElementById('message').value;

	sendEmail(name, email, phone, message);
}

function sendEmail(name, email, phone, message){

	document.getElementById("loading").style.display = 'block';
	if(document.getElementById("send").value == "Submit"){
		document.getElementById("send").value = "Sending...";
	} 

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('sendEmail').innerHTML = this.responseText;
		}
	};

	xhttp.open("GET", "background/sendMail.php?name="+name+"&email="+email+"&phone="+phone+"&message="+message, true);
	xhttp.send();
}



//Registration
function registration(){
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	var confirmPassword = document.getElementById('confirm_password').value;
	var contact_no = document.getElementById('contact_no').value;
	var gender = document.getElementById('gender').value;

	if(name == ""){
		document.getElementById('errorName').innerHTML = 'Name is required';
	}
	else if (email == "") {
		document.getElementById('errorName').innerHTML = '';
		document.getElementById('errorEmail').innerHTML = 'Email is required';
	}
	else if (password == "") {
		document.getElementById('errorEmail').innerHTML = '';
		document.getElementById('errorPass').innerHTML = "Password is required";
	}
	else if (contact_no == "") {
		document.getElementById('errorPass').innerHTML = '';
		document.getElementById('errorContact').innerHTML = 'Contact is required';
	}
	
	else if (confirmPassword != password) {
		document.getElementById('errorContact').innerHTML = '';
		document.getElementById('errorPassword').innerHTML = 'Password does not match';
	}
	else if(validateEmail(email) == false){
		document.getElementById('errorPassword').innerHTML = '';
		document.getElementById('errorEmail').innerHTML = 'Please Enter valid Email-Address';
	}
	else {
		document.getElementById('errorName').innerHTML = '';
		document.getElementById('errorEmail').innerHTML = '';
		document.getElementById('errorContact').innerHTML = '';
		document.getElementById('errorPassword').innerHTML = '';

		register(name, email, password, contact_no, gender);
	}
}


function register(name, email, password, contact_no, gender){
	if(document.getElementById("submit").value == "SUBMIT"){
		document.getElementById("submit").value = "SUBMITTING...";
	}

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var flg = this.responseText;
			if(flg == 1){
				document.getElementById('errorEmail').innerHTML = "This Email already exist";
				if(document.getElementById("submit").value == "SUBMITTING..."){
					document.getElementById("submit").value = "SUBMIT";
				}
			}
			else{
				document.getElementById('confirmRegistration').innerHTML = flg;
			}	
		}
	};

	xhttp.open("GET", "background/registration.php?name="+name+"&email="+email+"&contact_no="+contact_no+"&password="+password+"&gender="+gender, true);
	xhttp.send();

}




//login function

function login(){
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;

	if(document.getElementById("login").value == "LOGIN"){
		document.getElementById("login").value = "LOGGING...";
	}

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
				var flg = this.responseText;
				if(flg == 0){
					document.getElementById('checkLogin').innerHTML = '<div class="alert alert-danger"><strong>Login Failed!</strong> Please enter valid credentials or verify your account if not.</div>';
					if(document.getElementById("login").value == "LOGGING..."){
							document.getElementById("login").value = "LOGIN";
						}
				}
				else{
					window.location.href = "index.php";
				}

		}
	};

	xhttp.open("GET", "background/login_handler.php?email="+email+"&password="+password, true);
	xhttp.send();
}





//Final submission

function finalSubmit(){
	
	var name1 = document.getElementById('name1').value;
	var name2 = document.getElementById('name2').value;
	var name3 = document.getElementById('name3').value;
	var name4 = document.getElementById('name4').value;

	var email1 = document.getElementById('email1').value;
	var email2 = document.getElementById('email2').value;
	var email3 = document.getElementById('email3').value;
	var email4 = document.getElementById('email4').value;
	
	var mobile1 = document.getElementById('mobile1').value;
	var mobile2 = document.getElementById('mobile2').value;
	var mobile3 = document.getElementById('mobile3').value;
	var mobile4 = document.getElementById('mobile4').value;

	var gender1 = document.getElementById('gender1').value;
	var gender2 = document.getElementById('gender2').value;
	var gender3 = document.getElementById('gender3').value;
	var gender4 = document.getElementById('gender4').value;

	var teamName = document.getElementById('teamName').value;
	var nameOfCollege = document.getElementById('nameOfCollege').value;
	var ideaTitle = document.getElementById('ideaTitle').value;
	var ideaSummary = document.getElementById('ideaSummary').value;

	if(name1 == '' || name2 == '' || name3 == '' || name4 == '' || email1 == '' || email2 == '' || email3 == '' || email4 == '' || mobile1 == '' || mobile2 == '' || mobile3 == '' || mobile4 == '' || gender1 == '' || gender2 == '' || gender3 == '' || gender4 == '' || teamName == '' || nameOfCollege == '' || ideaTitle == '' || ideaSummary == '') {
		document.getElementById('errorMessage').innerHTML = "Please fill all above data";
	}

	else if (validateEmail(email1) == false || validateEmail(email2) == false || validateEmail(email3) == false || validateEmail(email4) == false) {
		document.getElementById('errorMessage').innerHTML = "Please Enter valid EmailID";
	}




	else{

		if(document.getElementById("savebutton").value == "FINAL SUBMIT"){
		document.getElementById("savebutton").value = "SUBMITTING...";
		document.getElementById('errorMessage').innerHTML = "";
		}

		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				document.getElementById('message').innerHTML  = this.responseText;
			}
		};

		xhttp.open("GET", "background/finalSubmission_handler.php?name1="+name1+"&name2="+name2+"&name3="+name3+"&name4="+name4+"&email1="+email1+"&email2="+email2+"&email3="+email3+"&email4="+email4+"&mobile1="+mobile1+"&mobile2="+mobile2+"&mobile3="+mobile3+"&mobile4="+mobile4+"&gender1="+gender1+"&gender2="+gender2+"&gender3="+gender3+"&gender4="+gender4+"&teamName="+teamName+"&nameOfCollege="+nameOfCollege+"&ideaTitle="+ideaTitle+"&ideaSummary="+ideaSummary, true);
		xhttp.send();
	}


	
	
}

function validateEmail(email) {
    var x = email;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        return false;
    }
    return true;
}





//File Upload

$('#savebutton').on('click', function() {
    var file_data = $('#fileUpload').prop('files')[0];   
    var form_data = new FormData();                  
    form_data.append('file', file_data);
    alert(form_data);                             
    $.ajax({
                url: '../background/upload.php', // point to server-side PHP script 
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(php_script_response){
                    alert(php_script_response); // display response from the PHP script, if any
                }
     });
});