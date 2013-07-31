<h4>If you pay the costs of heating the dwelling where you live, list the MONTHLY amount here.</h4>
<div class='help-block'>
  If you do not pay for heating, leave this value as 0 (zero).
</div>
<div class='input-prepend input-append'>
  <span class='add-on'>$</span>
  <input type="text" name='applHeatingCost' id='applHeatingCost' class='span1' 
          value='<?php echo isset($_SESSION['applHeatingCost'])?htmlspecialchars($_SESSION['applHeatingCost']):'';?>' >
  <span class='add-on'>per month</span>
</div>
<?php echo isset($_SESSION['errors']['applHeatingCost'])?$_SESSION['errors']['applHeatingCost']:''; ?>