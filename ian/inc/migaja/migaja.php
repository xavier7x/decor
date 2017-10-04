<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  <?php echo $varAcceso['nombre']; ?>
    <small>.</small>
  </h1>
  <?php
  $breadcrumbText = '';
  $breadcrumbText .= '<ol class="breadcrumb">';
  for($f = 0; $f < count($breadcrumb); $f++){

      if(($f + 1) == count($breadcrumb)){
          
          
          $breadcrumbText .= '<li><a href="#">'.$breadcrumb[$f].'</a></li>';
          
          
      }else{
          
          $breadcrumbText .= '<li class="active">'.$breadcrumb[$f].'</li>';
          
      }
  }
  echo $breadcrumbText;
  $breadcrumbText .= '</ol>';
  
?>
</section>