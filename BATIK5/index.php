<!-- header -->
<?php
include "section/header.php";
?>

<!-- isi page -->
<?php
if (isset($_GET['home'])) {
  include "pages/home.php";
} else if (isset($_GET['about'])) {
  include "pages/about.php";
} else if (isset($_GET['contact'])) {
  include "pages/contact.php";
} else {
  include "pages/home.php";
}
?>

<!-- footer -->
<?php
include "section/footer.php";
?>