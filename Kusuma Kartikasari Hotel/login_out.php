<?php if( !empty($user) ): ?>
<div class="sukses">
    <br />Welcome <?= $user['email']; ?>
        <a href="cart.php" style="text-decoration:none"><h4>Pesanan Saya</h4>
        <a href="signout.php" style="text-decoration:none">Sign out?</a>
        </a>
</div>
<?php else: ?>

<div class="department"> <a href="sign.php" style="text-decoration:none">Sign in</a> | <a href="signup.php" style="text-decoration:none">Sign up</a></div>

<?php endif; ?>
