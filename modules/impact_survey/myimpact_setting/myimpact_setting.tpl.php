<div id="left_content" style="float:left;">

	<h3><?php if(isset($libName)) print $libName;?></h3>
	
	Username: <?php print $user->name;?><br>
	
	Registered User: <?php  if(isset($firstName, $lastName)) print $firstName." ".$lastName; ?><br>
	
	Position: <?php  if(isset($jobtitle)) print $jobtitle; ?><br>
	
	<?php if(isset($phoneNum)) print substr($phoneNum,0,3)."-".substr($phoneNum,3,3)."-".substr($phoneNum,-(strlen($phoneNum)-6)).$phoneExt; ?><br>
	
	<?php print $user->mail;?>
	
	<h3>Completed Surveys:  <span style='color:#333333'><?php if(isset($surveyCount)) print $surveyCount; else print "0" ?>*</span></h3><p>*Updated every 24 hours at 1:35am PST.</p>
	
	<input type="button" value="Edit" class="form-submit" onClick="window.location.href='myimpact/edit'" /> <br><br>
		
	<font id="next_step">Next Step</font><br><br>
	
	<?php if(isset($step)) print $step;?>

</div><!-- left_content -->

<div id='photo_logo'>
	<h4 style="text-align:center;margin:0 0 5px 0;">Report Cover Sample</h4>
	<div style="border:1px solid black;padding-left:10px;"><?php print $pic_output;?></div>

	<div align='center'><input type='button' class="form-submit" value="<?php if(isset($tag)) print $tag;?>" onClick="window.location.href = '<?php print "./profile-photo_logo/$user->uid/edit";?>'" /></div>

</div><!-- photo_logo -->