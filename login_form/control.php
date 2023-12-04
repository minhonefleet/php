<?php
include('connect.php');
class data
{
        // Gui dl len tbl
        public function in_login($lastname,$firstname,$gender,$email,$password,$address,$phone)
        {
          global $conn;
          $sql="insert into user(Lastname,Firstname,Gender,Email,Password,Address,Phone) 
          values('$lastname','$firstname','$gender','$email','$password','$address','$phone')";
          $run=mysqli_query($conn,$sql);
          return $run;
        }
        // Gui dl len tbl contact voi userid
        public function in_contact($useridc,$name,$email,$phone,$des)
        {
          global $conn;
          $sql="insert into contact(Id_User,Name,Email,Phone,Description) values('$useridc','$name','$email','$phone','$des')";
          $run=mysqli_query($conn,$sql);
          return $run;
        }       
        // Gui dl len tbl contact
        public function in_contactc($name,$email,$phone,$des)
        {
          global $conn;
          $sql="insert into contact(Name,Email,Phone,Description) values('$name','$email','$phone','$des')";
          $run=mysqli_query($conn,$sql);
          return $run;
        } 
         // Gui dl len tbl order
         public function in_pay($userid,$productid,$img,$name,$price,$quantity,$quantityremain)
         {
           global $conn;
           $sql="insert into orders(User_Id,Product_Id,Image,Name,Price,Quantity,Product_remaining) 
            values('$userid','$productid','$img','$name','$price','$quantity','$quantityremain')";
           $run=mysqli_query($conn,$sql);
           return $run;
         }                          
        // Lay ra user
        public function select_user($email)
        {
          global $conn;
          $sql="select * from user where Email='$email'";
          $run=mysqli_query($conn,$sql);
          $num=mysqli_num_rows($run);
          return $num;
        }
         // Lay ra ten sp
         public function select_product($name)
         {
           global $conn;
           $sql="select * from orders where Name='$name'";
           $run=mysqli_query($conn,$sql);
           $num=mysqli_num_rows($run);
           return $num;
         }  
          // Lay ra ten email
          public function select_email($email)
          {
            global $conn;
            $sql="select * from contact where Email='$email'";
            $run=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($run);
            return $num;
          }     
}
