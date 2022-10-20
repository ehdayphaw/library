<?php  

if(isset($_POST['register'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$error = [];

	empty(trim(name)) ? $error[] = 'Name is required' : "";
	empty(trim(email)) ? $error[] = 'Email is required' : "";
	empty(trim(password)) ? $error[] = "Password is required" : "";
}

?>


<?php include "layout/header.php"; ?>

<h1>Register</h1>

<ul class="text-danger">
    <?php foreach($error as $err) : ?>
        <li><?php echo $err ?></li>
        <?php endforeach; ?>
</ul>

<form action="" method="post">
    <div class="form_floating my-2">
        <input class="form-control" type="text" name="name" placeholder="name">
        <label for="">Enter Your Name</label>
    </div>
    <div class="form_floating my-2">
        <input class="form-control" type="email" name="email" placeholder="email">
        <label for="">Enter Your Email</label>
    </div>
    <div class="form_floating my-2">
        <input class="form-control" type="password" name="password" placeholder="password">
        <label for="">Enter Your Password</label>
    </div>
    <div>
        <button type="submit" name="register" class="btn btn-outline-primary">Register</button>
    </div>
</form>

<?php include "layout/footer.php"; ?>