$(function(){
      $.validator.addMethod("emailID", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value);
      });
      $.validator.addMethod("password", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9_@]+$/i.test(value);
      });

      $.validator.setDefaults({
      
      errorPlacement: function (error, element) {
      error.insertAfter(element.parent()).css("color","red");
      },
      });

      $("#loginForm").validate({
           	onfocusout: function(element){
                  this.element(element);
            },

            rules: {
                  emailID:{
            	required: true,
            	emailID: true,
            	},

            	password:{
      		required: true,
      		password: true,
            	},
            },

            messages: {
            	emailID:{
            		required: "Please enter email id.",
            		emailID: "Please enter a valid form of email id."
            	},
            	password:{
            		required: "Please enter password.",
            		password: "Password should match the standards.",
            	},
            };
            });
		});