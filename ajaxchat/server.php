<?php include 'connection.php'; 

        $req = $_REQUEST['req'];
        $user = $_REQUEST['u'];
        $post = $_REQUEST['p'];
        $id   = $_REQUEST['id'];


        if($req != ''){
                if($req == 'add'){
                        $stmt=$db->prepare("INSERT INTO post(username,post)
                        VALUES(:zuser,:zpost)"); 
                        $stmt->execute(array(
                                'zuser' =>$user,
                            'zpost'         =>$post
                        ));
                }else if($req == 'del'){
                        $stmt = $db->prepare("DELETE FROM post WHERE id=:zid");
                        $stmt->bindParam(":zid",$id);
                        $stmt->execute();
                }else if($req == 'edit'){
                        $stmt=$db->prepare("UPDATE post SET post =?  WHERE id= ?");
                        $stmt->execute(array($post,$id ));
                       
                                     
                 
                }
        }





        $getuser=$db->prepare("SELECT * FROM post order by id DESC");  
        $getuser->execute();
        $sts= $getuser->fetchAll();
        foreach($sts as $st){
?>

 <div  style='margin-right:30px;background:white;padding:3%;margin-top:2%;'>

        <i class="fas fa-trash-alt action" onclick = 'post("del"," <?php echo $st['id']?>")' style='font-size:40px;float:right;'></i> 
        <i class="fas fa-pencil-alt action edit" style='font-size:40px;margin-left:90%' data-id='<?php echo $st['id']?>'></i>
        <h3><?php echo $st['username']?></h3>
        <small style='font-weight:bold'><span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php echo $st['time']?></small>
        <p><?php echo $st['post']?></p>

</div>  

<?php 
        }
?>