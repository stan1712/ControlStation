<html lang="fr">
	<head>
		<title>Gestion Rob Ellul</title>
		<link rel="stylesheet" href="css/bootstrap.css" media="screen">
		<link rel="stylesheet" href="css/custom.min.css">
		<link rel="stylesheet" href="css/style_perso.css">
		<meta charset="UTF-8">
	</head>
	<body>
		<u><h3 class="text-center">Gestion du Rob Ellul</h3></u><hr />
			<br>
			<div class="panel panel-success col-lg-7">
			  <div class="panel-heading">
				<h3 class="panel-title">Panel vitesse</h3>
			  </div>
			  <div class="panel-body">
				<p>Vitesse : <div class="success">50%</div></p>
			  </div>
			</div>

			<div class="panel panel-danger col-lg-7">
			  <div class="panel-heading">
				<h3 class="panel-title">Panel de contrôle</h3>
			  </div>
			  <div class="panel-body">
				<p>Pilote automatique : <div class="error">NONE</div></p>
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
				<a href="javascript:window.open('img/pdc.png','popup','width=500,height=500,left=50,top=50,scrollbars=0')">Pad Num&#xE9;rique</a><!-- https://placeholdit.imgix.net/~text?txtsize=33&txt=%E2%98%A3%F0%9F%98%8EPad%20de%20Contr%C3%B4le%F0%9F%98%8E%E2%98%A3&w=500&h=500 -->
			  </div>
			</div>

			<div class="panel panel-success col-lg-7">
			  <div class="panel-heading">
				<h3 class="panel-title">Panel d'etat</h3>
			  </div>
			  <div class="panel-body">
				<p>Etat : <div class="error">NONE</div></p>
				<p>Batterie : 
					<div class="alert alert-dismissible alert-danger">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>ATTENTION !</strong> Batterie faible !
					</div>
					<div class="progress progress-striped active">
					  <div class="progress-bar progress-bar-success" style="width: 75%">75%</div>
					</div>
				</p>
			  </div>
			</div>
			<div class="panel panel-default alignright">
			<p>Etat camera : <div class="warning">INCONNUE</div></p>
			<table border=2> 
				<tr>
				<th><img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=CAMERA&w=400&h=400" /></th> 
				</tr>
			</table>
		</div>
	<body>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  <script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script>
</html>
