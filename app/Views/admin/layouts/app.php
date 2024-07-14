<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title><?= $this->renderSection('title') ?></title>

    <!-- ========== All CSS files linkup ========= -->
     <?= $this->include('admin\partials\styles.php') ?>

  </head>
  <body>
    <!-- ======== Preloader =========== -->
     <?= $this->include('admin\partials\preloader.php') ?>
    <!-- ======== Preloader =========== -->

    <!-- ======== sidebar-nav start =========== -->
     <?= $this->include('admin\partials\sidebar.php') ?>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      <?= $this->include('admin\partials\header.php') ?>
      <!-- ========== header end ========== -->

      <!-- ========== section start ========== -->
      <?= $this->renderSection('content') ?>
      <!-- ========== section end ========== -->

      <!-- ========== footer start =========== -->
      <?= $this->include('admin\partials\footer.php') ?>
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
     <?= $this->include('admin\partials\scripts.php') ?>
  </body>
</html>
