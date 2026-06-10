 
<?php 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        
        $new = time() . "_" .$image;
        
        $path = "uploads/" . $new;
        
        $result = move_uploaded_file($tmp_name, $path);

            if($result){
                header('location: form.html');

            }
    }

?>