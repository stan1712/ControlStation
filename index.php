<html lang="fr">
	<head>
		<title>Rover control station</title>
		<link rel="stylesheet" href="css/bootstrap.css" media="screen">
		<link rel="stylesheet" href="css/custom.min.css">
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			include('config.php');
			include('scripts/states.php');
		?>
		<h3 class="text-center"><?php echo $nickname; ?> control station</h3><hr />
		<br>
		<div class="card text-white bg-info mb-3">
			<div class="card-header">Control panel</div>
			<div class="card-body">
				<h4 class="card-title">Cockpit</h4>
				<p><?php
					$autopilot = "true";

					if($autopilot == "true") {
					echo "The discovery mode is activated.";
					}
					elseif($autopilot == "false") {
					echo "The discovery mode is deactivated.";
					}
					else{
					echo "The discorvery mode is unavailable or missing, please take manual controls";
					}
				?></p>

				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#autopilot">Discovery mode / Auto pilot</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#manual">Manual mode</a>
					</li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade show active" id="autopilot">
						<p>Into the void</p>
					</div>
					<div class="tab-pane fade" id="manual">
						<div class="panel-body">
							<button href="#" target="_blank" id="little_up_left">&#x2196;</button>
							<button href="#" target="_blank" id="up">&#x2191;</button>
							<button href="#" target="_blank" id="little_up_right">&#x2197;</button>
							<br />
							<button href="#" target="_blank" id="left">&#x2190;</button>
							<button href="#" target="_blank" id="stop">&#x2715;</button>
							<button href="#" target="_blank" id="right">&#x2192;</button>
							<br />
							<button href="#" target="_blank" id="little_down_left">&#x2199;</button>
							<button href="#" target="_blank" id="down">&#x2193;</button>
							<button href="#" target="_blank" id="little_down_right">&#x2198;</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card text-white bg-info mb-3">
			<div class="card-header"><?php echo $nickname; ?>'s ETA</div>
			<div class="card-body">

				<h4 class="card-title">State : </h4><p><?php
				if ($echo == 0) {
					echo "N/A";
				}
				elseif ($echo == 1) {
					echo "Available";
				}
				elseif ($echo == 2) {
					echo "Unavailable";
				}
				else {
					echo "N/A";
				}
				?></p>
				<h4 class="card-title">Speed :</h4>
				<p><?php echo $speed," m/s"; ?></p>

				<h4 class="card-title">Battery :</h4>
				<?php
					if ($battery < 0) {
						include('include/errorprogressbar.php');
					}
					elseif ($battery < 15) {
						include('include/15progressbar.php');
					}
					elseif ($battery < 30) {
						include('include/30progressbar.php');
					}
					elseif ($battery <= 100) {
						include('include/100progressbar.php');
					}
					elseif ($battery > 100) {
						include('include/errorprogressbar.php');
					}
				?>
			</div>
		</div>
	<body>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">/* <![CDATA[ 							*/(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */
	</script>
</html>
