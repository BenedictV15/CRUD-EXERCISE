<?php
if (isset($_SESSION['add'])) :
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>alert!</strong> <?= $_SESSION['add'];?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
    unset($_SESSION['add']);
    endif;

    if (isset($_SESSION['update'])) :
      ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>alert!</strong> <?= $_SESSION['update'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php
          unset($_SESSION['update']);
          endif;

          if (isset($_SESSION['del'])) :
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>alert!</strong> <?= $_SESSION['del'];?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
                unset($_SESSION['del']);
                endif;
?>