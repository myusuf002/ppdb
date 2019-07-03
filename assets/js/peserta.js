$(function(){
    // Date Picker
    var dp1 = $('#dp1').datepicker().data('datepicker');
    dp1.selectDate( new Date( ));
    
});

(function() {  
    var form = document.getElementById("form-validation");
    form.addEventListener("input", function(event){
      var password = document.getElementById("password-user");
      var confirm = document.getElementById("confirm-password");
      confirm.setCustomValidity(confirm.value != password.value ? "Passwords do not match." : "");
      
    });
    form.addEventListener("submit", function(event) {          
      if (form.checkValidity() == false) {
          event.preventDefault();
          event.stopPropagation();
      }
      form.classList.add("was-validated");
    }, false);
})();

