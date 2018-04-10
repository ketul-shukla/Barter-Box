  $(function(){
	  
		$.validator.addMethod("firstName", function(value, element) {
               return this.optional(element) || /^[a-zA-Z]+$/i.test(value);
			});
		$.validator.addMethod("lastName", function(value, element) {
               return this.optional(element) || /^[a-zA-Z]+$/i.test(value);
           });
		$.validator.addMethod("userName", function(value, element) {
               return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
           });
		$.validator.addMethod("emailID", function(value, element) {
               return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value);
           });
		$.validator.addMethod("password", function(value, element) {
               return this.optional(element) || /^[a-zA-Z0-9@_]+$/i.test(value);
           });
		$.validator.addMethod("about", function(value, element) {
               return this.optional(element) || /^[A-Za-z0-9 ]+$/i.test(value);
           });
		$.validator.addMethod("location", function(value, element) {
               return this.optional(element) || /^[A-Za-z, ]+$/i.test(value);
           });
		$.validator.setDefaults({
	  
    errorPlacement: function (error, element) {
		error.insertAfter(element.parent()).css("color","red");
    }
  });
		$("#createProfileForm").validate({
			onfocusout: function(element){
				this.element(element);
			},
			
			rules: {
				firstName:{
			  required: true,
			  firstName: true,
			  minlength:2
		  },
		 lastName:{
			 required:true,
			 lastName:true,
			 minlength: 2
		 },
		 userName:{
			 required: true,
			 userName: true,
			 minlength: 5
		 },
		 password:{
			 required: true,
			 password: true,
			 minlength: 2
			 
		 },
		 verifypassword:{
			 required: true,
			equalTo: "#password", 
		 },
		 emailID:{
			 required: true,
			 email: true
			 
		 },
		 verifyemailID:{
			 required: true,
			equalTo: "#emailID", 
		 },
		 about:{
			 required: true,
			 about: true,
			 minlength: 10
			 
		 },
		 location:{
			 required: true,
			 location: true,
			 minlength: 2
		 },
		},
		
		 messages: {
			 firstName:{
			  firstName: "Please Enter Valid firstname only alphabets",
			 required: "Please Enter First Name",
		     minlength: "Minimum length required is 2",
		  },
		 lastName:{
			lastName: "Please Enter Valid last Name only alphabets",
			required: "Please Enter Last Name",
			minlength: "Minimum length required is 2",
		 },
		 userName:{
			 userName: "Please Enter Valid UserName only alphabets and numbers",
			required: "Please Enter User Name",
			minlength: "Minimum length required is 5",
			 
		 },
		 password:{
			 password: "Please Enter Valid password only alphabets, Numbers '_' and '@' ",
		required: "Please Enter password ",
		minlength: "Minimum length required is 2",
			 
		 },
		 verifypassword:{
			equalTo: "Password did not matched", 
		 },
		 emailID:{
			 required: "Please Enter Email",
			 email: "EmailId should be of the format xyz@company.ext",
			 
		 },
		 verifyemailID:{
			equalTo:"Email ID did not matched", 
		 },
		 about:{
			 required: "Describe yourself",
			 about: "Should contain only alphabets and numbers",
			 minlength: "Enter more than 10 characters",
			 
		 },
		 location:{
			 required: "Please Enter Location",
			 location: "Please enter alphabets , and spaces only",
			 minlength: "Please Enter more than 2 characters",
		 },
		 },
			
		});	
  });