<div class="alert alert-warning">
  <strong>WARNING !</strong> <?php echo $nickname; ?>'s battery is low
</div>

<div class="progress progress-striped active">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: <?php echo $battery,"%"; ?>"><?php echo $battery,"%"; ?></div>
</div>
