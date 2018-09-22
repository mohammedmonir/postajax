<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>facebook posts</title>
    
    <link rel='stylesheet' href="all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='stylesheet' href="bootstrap.min.css">
    <link rel='stylesheet' href="style.css">
</head>



<body onload ="post()"> 

        <?php include 'connection.php';  ?>

<!-- Modal المودل الخاصة بالتعديل من بوت ستراب -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">edit posts</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id='modal-body'>
        <form> 
                <div class="form-group">
                    <textarea class="form-control" id="edit-post" rows='7'></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" onclick='post("edit")' class="btn btn-primary" id='btn-edit-post' value='edit'>
                    <input type="hidden" id='post-id'>
                </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<!--نهاية المودل-->
   
   
    <div class='container'>
        <form>
            <div class='form-group'>
                <h1 class='text-center'>Post Facebook</h1>
                <label for="">write something here</label>
                <textarea class='form-control' name="" id="post-txt" onkeyup='check()' cols="30" rows="10"></textarea>
                <input type="submit" value='post' id='post-btn' disabled  class='btn btn-primary auto' onclick='post("add")' style='margin-left:43%;width:200px'>
              
            </div>
        </form>
        
    </div>




    <div class='container'>
        <div id='posts-8'>

                     <!--مكان عرض البوستات-->
    
        </div>
    </div>


        <script src='all.js'></script>
        <script src='jquery-3.2.1.min.js'></script>
        <script src='bootstrap.min.js'></script>
    
    <script>
  
  
    function post(reqtype,id){

        var user = 'Mohammed Abbas';
        var post = document.getElementById('post-txt').value;

        var xhr = new XMLHttpRequest();
        
        if(reqtype == undefined && id == undefined){
            reqtype = '';
            id= '';
        }else if(reqtype == 'add'){
            id = '';
        }else if (reqtype == 'del'){
            var a = window.confirm('are you sure');
            if(a == false ){ //..يعني ضغط الغاء
                id = '';
            }
        }else if(reqtype == 'edit'){
            post = document.getElementById('edit-post').value;
            id   = document.getElementById('post-id').value; 
        }

        xhr.onreadystatechange = function (){
            if(xhr.readyState == 4 && xhr.status == 200){
                document.getElementById('posts-8').innerHTML=xhr.responseText;
                document.getElementById('post-txt').value= '';
            }
        }
        xhr.open('GET','server.php?req='+reqtype+'&id='+id+'&u='+user+'&p='+post,'true');
        xhr.send();
    }




    $('form').submit(function (a){
        a.preventDefault();
    });


    function check(){
        if(document.getElementById('post-txt').value !=''){
            document.getElementById('post-btn').removeAttribute('disabled');
        }else{
            document.getElementById('post-btn').setAttribute('disabled','disabled');
        }
    }

    $(document).ready(function(){
        $('#posts-8').on('click','.edit',function(){
            $('#exampleModal').modal('show');
            $('#edit-post').val($(this).siblings('p').text());
            $('#post-id').val($(this).data('id'));
        });
    });

        $(document).ready(function(){
        
            $('#btn-edit-post').click(function(){
                $('#exampleModal').modal('hide');
            });    
          });

    

    
    
    </script>

</body>
</html>