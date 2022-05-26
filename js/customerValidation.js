var fname = document.customer.fname.value;
var lname = document.customer.lname.value;
var nic = document.customer.nic.value;
var uName = document.customer.uName.value;
var uPassword = document.customer.uPassword.value;
var uEmail = document.customer.uEmail.value;
var dob = document.customer.dob.value;
var address = document.customer.address.value;
function customerValidation(){
    if (document.customer.fname.value=="") {
        alert("First Name is Required..");
        document.customer.fname.focus();
    
      }else if(document.customer.lname.value==""){
        alert("Last Name is Required..");
        document.customer.lname.focus();
    
      }else if(document.customer.nic.value==""){
        alert("NIC is Required..");
        document.customer.nic.focus();
    
    } if (document.customer.uName.value=="") {
        alert("User Name is Required..");
        document.customer.uName.focus();
    
      }else if(document.customer.uPassword==""){
        alert("Password is Required..");
        document.customer.uPassword.focus();
        uPassword.borderColor = "red"= "#2EFE2E";
      }else if(document.customer.uEmail.value==""){
        alert("Email is Required..");
        document.customer.uEmail.focus();
    
    } if (document.customer.dob.value=="") {
        alert("Date of Brith is Required..");
        document.customer.dob.focus();
    
      }else if(   document.customer.address.value==""){
        alert("Address is Required..");
        document.customer.address.focus();
    
      }else{
        load("../php/VehicleRegistration.php");
      }
}
