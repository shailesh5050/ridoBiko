$(document).ready(function () {
   
$('#myForm').on('submit',function(e){
    $('#loading').css({
        width: '80px',
        height: '80px',
       display: 'block',
        margin:'-62px 90px'
        
    });
    $('#success').css({
        width: '40px',
        height: '40px',
       display: 'none',
        margin:'-40px 90px'
        
    });
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: "POST",
            url: "includes/uploadedData.php",
            data: formData,
            dataType: "text",
            contentType: false,
            processData: false,
            success: function (data) {
                var strArray = new Array();
                strArray= data.split(".");
                if(data.length>0 ){
                    $(window).scrollTop(0);
                }else if(data.length==0){
                   $('#name').val('')
                   $('#mobile').val('')
                   $('#adharNum').val('')
                   $('#address').val('')
                   $('#adharFront').val('')
                   $('#adharBack').val('')
                   $('#drivingLicense').val('')
                   $('#success').css({
                    width: '40px',
                    height: '40px',
                   display: 'block',
                    margin:'-40px 90px'
                    
                });
                }
                var myHtml;
                $('#alert-box').html('');
                for(i=0;i<strArray.length-1;i++){
                    myHtml =$('#alert-box').html();
                    $('#alert-box').html(myHtml+`<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    ${strArray[i]}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>`)
                }
                
                 myHtml=" ";
                 strArray=[];
                $('#loading').css({
                    width: '80px',
                    height: '80px',
                   display: 'none',
                    margin:'-62px 90px'
                    
                });
            }
        });
    })


    var prevHtml=$('#viewTable').html();
    console.log(prevHtml)
    $('#search-box').keyup(function (e) { 
        var inputText = $('#search-box').val();
        
        $.ajax({
            type:"POST",
            url:"includes/search.php",
            data:{inputText:inputText},
            success:function (data) {
                if(inputText.length>1){
                    console.log(inputText.length)
                    $('#viewTable').html(data);
                }else{
                    $('#viewTable').html(prevHtml);
                }
              }
        })
    });
});