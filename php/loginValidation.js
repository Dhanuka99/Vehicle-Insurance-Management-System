const name = document.getElementById('name');
const nic = document.getElementById('nic');
const password = document.getElementById('password');

form.addEventListner('submit',(e)=>{
    let messages = [];
    if(name.value === '' || nic.value === '' || password.value==''){
        alert("Username password ");
    }

})

function validate()
{
  var nic = document.getElementById('nic').value;
  var nic = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
  var nic = phoneRGEX.test(nic);
  alert("phone:"+nic );
}



