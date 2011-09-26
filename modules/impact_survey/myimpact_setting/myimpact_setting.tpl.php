<div id="left_content" style="float:left;">

	<h3 style="margin-bottom:0;"><?php if(isset($libName)) print $libName;?></h3>
	
	Username: <?php print $user->name;?><br>
	
	Registered User: <?php  if(isset($firstName, $lastName)) print $firstName." ".$lastName; ?><br>
	
	Position: <?php  if(isset($jobtitle)) print $jobtitle; ?><br>
	
	<?php if(isset($phoneNum)) print substr($phoneNum,0,3)."-".substr($phoneNum,3,3)."-".substr($phoneNum,-(strlen($phoneNum)-6)).$phoneExt; ?><br>
	
	<?php print $user->mail;?>
	
	<br/>
	
	<input type="button" value="Edit" class="form-submit" onClick="window.location.href='myimpact/edit'" /> <br><br>
		
	<h3 style="margin-bottom:0;">Completed Surveys:  <span style='color:#333333;'><?php if(isset($surveyCount)) print $surveyCount; else print "0" ?>*</span></h3><p style="margin:0;">*Updated every 24 hours at 1:35am PST.</p>
	
  <?php $fscs = impact_util_fscs();	?>
	<input type="button" value="Enter paper survey data" class="form-submit" onclick="window.open('http://impactsurvey.org/dataentry/?fscs=<?php print $fscs; ?>')"/> <br><br>
		
	<h3 style="margin-bottom:0;color:#4B1065;">Next Step</h3>
	
	<?php if(isset($step)) print $step;?>

</div><!-- left_content -->

<div id='photo_logo'>
	<h4 style="text-align:center;margin:0 0 5px 0;">Report Cover Sample</h4>
	<div style="border:1px solid black;padding-left:10px;"><?php print $pic_output;?></div>

	<div align='center'><input type='button' class="form-submit" value="<?php if(isset($tag)) print $tag;?>" onClick="window.location.href = '<?php print "./profile-photo_logo/$user->uid/edit";?>'" /></div>

</div><!-- photo_logo -->