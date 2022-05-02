 <?php if (count($errors) > 0) : ?>
 <ul class="alert alert-danger text-center">
     <?php foreach ($errors as $error) : ?>
     <li> <?php echo $error ?></li>
     <?php endforeach; ?>
 </ul>
 <?php endif; ?>