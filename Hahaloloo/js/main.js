
$(document).ready(function(){
  $("#email").change(function(){

    //Xử lý phía Client
    let emailPattern = /(@gmail.com)$/;
    if(emailPattern.test($(this).val())== false){
      $("#emailHelp").text("Email của bạn không hợp lệ").css("color","red");
    }else{
      //Gửi dữ liệu để Server xử lý và nhận phản hồi
      //Nó sẽ gửi dữ liệu đi bằng Ajax
      //$.post("process-register.php",{email:$("#email").val()})
 
      $.ajax({
        url:"check-register.php",
        type: "post",
        data:{email:$(this).val()},
        
        //callback function
        success:function(res){
          $("#emailHelp").text(res).css("color","blue");
        }
      })
    }
      
  })
})

let btnAddpost = document.getElementById('btnAddpost');

btnAddpost.addEventListener('click', addpost.php);


function menuToggle() {
    const toggleMenu = document.querySelector('.box-logout');
    toggleMenu.classList.toggle('active');
}


function STT() {
  document.getElementById("popupForm").style.display = "block";
}
function Dong() {
  document.getElementById("popupForm").style.display = "none";
}
