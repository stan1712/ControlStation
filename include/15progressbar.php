<div class="alert alert-danger">
  <strong>WARNING !</strong> <?php echo $nickname; ?>'s battery is critical
</div>

<div class="progress progress-striped active">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: <?php echo $battery,"%"; ?>"><?php echo $battery,"%"; ?></div>
</div>
