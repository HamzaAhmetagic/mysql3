<ul>
<?php
    // foreach($result as $user){
    //     $name = $user["username"];
    //     $email = $user["email"];
    //     echo '<li class="userlist"><a href="">'.$name.'</a><a href="">'.$email.'</a></li>';
    // }

?>
<?php foreach($result as $user): ?>
    <li class="userlist"><a href=""><?php echo $user["username"]; ?></a><a href=""><?php echo $user["email"]; ?></a><a href="deleteuser.php?id=<?php echo $user["id"]; ?>">Delete</a></li>
<?php endforeach; ?>
</ul>