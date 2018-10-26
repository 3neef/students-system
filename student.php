<?php
class studentDB{
    private $db;
    
    
public function __construct($conn){
    $this->db=$conn;
    }
public function create($name,$age,$grade,$department){
    try{
        $stmt=$this->db->prepare("INSERT INTO `students`(`name`, `age`, `grade`, `department`) VALUES (:name,:age,:grade,:department)");
        $stmt->bindparam(":name",$name);
        $stmt->bindparam(":age",$age);
        $stmt->bindparam(":grade",$grade);
        $stmt->bindparam(":department",$department);
        $stmt->execute();
        return true;
      
        }catch(PDOException $e){
         echo 'ERORR :'.$e->$getmessage();   
         return false;
        }
    }
public function getID($id){
        $stmt=$this->db->prepare("SELECT * FROM `students` WHERE id=:id");
        $stmt->execute(array(":id"=>$id));
        $editrow=$stmt->fetch(PDO::FETCH_ASSOC);
        return $editrow;

    }


    public function update($id,$name,$age,$grade,$department){
   

        try{
            $stmt=$this->db->prepare("UPDATE `students` SET `name`=:name,`age`=:age,`grade`=:grade,`department`=:department WHERE `id`=:id");
            $stmt->bindparam(":name",$name);
            $stmt->bindparam(":age",$age);
            $stmt->bindparam(":grade",$grade);
            $stmt->bindparam(":department",$department);
            $stmt->bindparam(":id",$id);

            $stmt->execute();
            return true;
          
            }catch(PDOException $e){
                echo 'ERORR :'.$e->$getmessage();   
                return false;
            }
        }
        public function delete($id){
   

            
                $stmt=$this->db->prepare("DELETE FROM `students` WHERE `id`=:id");
                $stmt->bindparam(":id",$id);
    
                $stmt->execute();
                return true;
              
        }
        public function dataview(){

           $query= "SELECT * FROM `students` WHERE 1";
           $stmt= $this->db->prepare($query);
           $stmt->execute();

           if($stmt->rowCount()>0){
               while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
           ?>
         <tr> 
         <td><?php echo $row['name']; ?> </td>
         <td><?php echo $row['age']; ?> </td>
         <td><?php echo $row['grade']; ?> </td>
         <td><?php echo $row['department']; ?> </td>
<td><a href="edit.php?edit_id=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o fa-2x color" aria-hidden="true"></i>
</a>

<a href="delete.php?delete_id=<?php echo $row['id']; ?>"><i class="fa fa-trash-o fa-2x col" aria-hidden="true"></i>
</a></td>
</tr>


           <?php
            }

        }else{
            ?>
            <td>الشغلانة دي فاضية يا عمك</td>
            </tr>
<?php
        }



}
}



?>