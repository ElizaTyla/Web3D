<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Index</title>
  </head>
  <body id="bodyID">
    <nav class="navbar sticky-top navbar-expand-md navbar_top">
      <div class="container">
        <div class="Logo">
          <a class="navbar-brand" href="javascript:swapPage('homeID')">
            <h1>1</h1>
            <h1>oca</h1>
            <h2>Cola</h2>
            <h3>Journey</h3>
            <p>Refreshing the world, one story at a time</p>
          </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="javascript:swapPage('homeID')"><span class="navbar_text">Home</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:swapPage('aboutID')"><span class="navbar_text">About</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="drinksDropdown" data-bs-toggle="dropdown">
                <span class="navbar_text">Drinks</span>
              </a>
              <div class="dropdown-menu drinks-dropdown-items">
                <a class="dropdown-item" href="javascript:swapPage('cocacolaID')"><span class="navbar_dropdown_text">Coca Cola</span></a>
                <hr class="dropdown-divider">
                <a class="dropdown-item" href="javascript:swapPage('spriteID')"><span class="navbar_dropdown_text">Sprite</span></a>
                <a class="dropdown-item" href="javascript:swapPage('drpepperID')"><span class="navbar_dropdown_text">Dr Pepper</span></a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><span class="navbar_text">Contacts</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	    <div id="homeID" class="container-fluid main_contents">
    <div class="container main_contents">
      <div class="row">
        <div class="col-sm-12">
          <div id="MainImageArea" style="background-image: url(assets/images/main_3D.jpg);"></div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-4">
          <br>
          <div class="card" style="background-color: lightcoral;">
            <div class="card-header">
              <div id="homeCocacolaImage"></div>
              <div class="card-body">
                <div id="homeCocacolaTitle"></div>
                <div id="homeCocacolaSubTitle"></div>
                <div id="homeCocacolaDescription"></div>
                <div class="d-grid gap-2">
                  <a href="javascript:swapPage('cocacolaID')" role="button" class="btn btn-danger"><i>Find out more...</i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <br>
          <div class="card" style="background-color: darkseagreen;">
            <div class="card-header">
              <div id="homeSpriteImage"></div>
              <div class="card-body">
                <div id="homeSpriteTitle"></div>
                <div id="homeSpriteSubTitle"></div>
                <div id="homeSpriteDescription"></div>
                <div class="d-grid gap-2">
                  <a href="javascript:swapPage('spriteID')" role="button" class="btn btn-success"><i>Find out more...</i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <br>
          <div class="card" style="background-color: rosybrown;">
            <div class="card-header">
              <div id="homeDrPepperImage"></div>
              <div class="card-body">
                <div id="homeDrPepperTitle"></div>
                <div id="homeDrPepperSubTitle"></div>
                <div id="homeDrPepperDescription"></div>
                <div class="d-grid gap-2">
                  <a href="javascript:swapPage('drpepperID')" role="button" class="btn btn-secondary"><i>Find out more...</i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  <div class="row">
	  <div class="col-sm-12">
	  </div>
	  </div>
    </div>
    </div>
	
	    <div id="aboutID" style="display:none;" class="container-fluid main_contents">
    <div class="container main_contents">
      <div class="row">
        <div class="col-sm-12">
          <div id="MainImageArea" style="background-image: url(assets/images/main_3D.jpg);"></div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <br>
          <div class="card" style="background-color: lightcoral;">
            <div class="card-header">
              <div id="homeCocacolaImage"></div>
              <div class="card-body">
                <h2>Statement of Originality</h2>
                <h4>This assignment is submitted as part requirement for the degree of ... at the University of Sussex. It is the product of my own labour except where indicated in the accompanying codebase. This assignment may be freely copied and distributed provided the source is acknowledged. I hereby withhold permission for a copy of this assignment to be loaned out to students in future years</h4>
				<h2>Open Source Code Used (Excluding Web3D default technology stack)</h2>
                <h4>fslightbox: https://fslightbox.com/</h4>
                <div class="d-grid gap-2">
                  <a href="https://github.com/ElizaTyla/Web3D" role="button" class="btn btn-danger"><i>Github Repository</i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
		
      </div>
	  <div class="row">
	  <div class="col-sm-12">
	  </div>
	  </div>
    </div>
    </div>

    <div id="cocacolaID" style="display:none;" class="container-fluid main_contents">
      <div class="container main_contents">
        <div class="row">
        <div class="col-md-9">
          <div class="container modelViewer">
          <div class="row">
              <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer">
            <div class="container">
            <div class="navbar-nav">
            <div id="cocacolaModelTitle"></div>
            </div>
            </div>
            </nav>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer" style="max-height:100vh; height:auto;">
            <div class="container">
            <div class="navbar-nav camButtonList">
            <a class="nav-link active" href="javascript:swapPage('cocacolaID')"><span class="navbar_text">Coca Cola</span></a>
            <a class="nav-link active" href="javascript:swapPage('spriteID')"><span class="navbar_text">Sprite</span></a>
            <a class="nav-link active" href="javascript:swapPage('drpepperID')"><span class="navbar_text">Dr Pepper</span></a>
            </div>
            </div>
            </nav>
              </div>
            </div>
        <div class="row">
        <div class="col-sm-12">
          <div class="model3D">
		  <div id=<?php echo $cokeMod ?>></div>
          </div>
        </div>
        </div>
            <div class="row">
                  <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer">
            <div class="container">
            <div class="navbar-nav">
            <a class="nav-link active"><span class="navbar_text_nolink">Camera Views</span></a>
            </div>
            </div>
            </nav>
              </div>
          </div>
              <div class="row">
              <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer" style="max-height:100vh; height:auto;">
            <div class="container">
            <div class="navbar-nav camButtonList">
            <a class="nav-link active" href="javascript:swapCam('View_Iso')"><span class="navbar_text_small">Isometric</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Front')"><span class="navbar_text_small">Front</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Back')"><span class="navbar_text_small">Back</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Left')"><span class="navbar_text_small">Left</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Right')"><span class="navbar_text_small">Right</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Top')"><span class="navbar_text_small">Top</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Bot')"><span class="navbar_text_small">Bottom</span></a>
            <a class="nav-link active" href="javascript:toggleSpin()"><span class="navbar_text_small">Spin</span></a>
            <a class="nav-link active" href="javascript:toggleWireframe()"><span class="navbar_text_small">Wire</span></a>
            </div>
            </div>
            </nav>
              </div>
            </div>
			            <div class="row">
                  <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer"  style="max-height:100vh; height:auto;">
				<div class="container">
            <div class="navbar-nav">
			<div id="cocacolaModelSubTitle"></div>
            </div>
            </div>
            </nav>
              </div>
          </div>
		</div>
			<br>
        </div>
            <div class="col-md-3">
          <div class="container modelViewer">
          <div class="row">
              <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer">
            <div class="container">
            <div class="navbar-nav">
            <a class="nav-link active"><span class="navbar_text_nolink">Gallery</span></a>
            </div>
            </div>
            </nav>
              </div>
            </div>
			<div class="row">
				  <div class="gallerySpace container">
	  </div>
	  </div>
        </div>
        </div>
        </div>
            <div class="row">
              <div class="col-sm-12">
                <br>
                <div class="card" style="background-color: lightcoral;">
            <div class="row">
            <div class="col-md-6"> 
              <div id="cocacolaImage"></div>
            </div>
            <div class="col-md-6">
            <div class ="modelInfo">
					  <div id="cocacolaTitle"></div>
					  <div id="cocacolaSubTitle"></div>
					  <div id="cocacolaDescription"></div>
            </div>
            </div>
                </div>
            </div>
              </div>
        </div>
        </div>
    </div>

    <div id="spriteID" style="display:none;" class="container-fluid main_contents">
      <div class="container main_contents">
        <div class="row">
        <div class="col-md-9">
          <div class="container modelViewer">
          <div class="row">
              <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer">
            <div class="container">
            <div class="navbar-nav">
            <div id="spriteModelTitle"></div>
            </div>
            </div>
            </nav>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer" style="max-height:100vh; height:auto;">
            <div class="container">
            <div class="navbar-nav camButtonList">
            <a class="nav-link active" href="javascript:swapPage('cocacolaID')"><span class="navbar_text">Coca Cola</span></a>
            <a class="nav-link active" href="javascript:swapPage('spriteID')"><span class="navbar_text">Sprite</span></a>
            <a class="nav-link active" href="javascript:swapPage('drpepperID')"><span class="navbar_text">Dr Pepper</span></a>
            </div>
            </div>
            </nav>
              </div>
            </div>
        <div class="row">
        <div class="col-sm-12">
        <div class="model3D">
		  <div id=<?php echo $spriMod ?>></div>
          </div>
        </div>
        </div>
            <div class="row">
                  <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer">
            <div class="container">
            <div class="navbar-nav">
            <a class="nav-link active"><span class="navbar_text_nolink">Camera Views</span></a>
            </div>
            </div>
            </nav>
              </div>
          </div>
              <div class="row">
              <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer" style="max-height:100vh; height:auto;">
            <div class="container">
            <div class="navbar-nav camButtonList">
            <a class="nav-link active" href="javascript:swapCam('View_Iso')"><span class="navbar_text_small">Isometric</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Front')"><span class="navbar_text_small">Front</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Back')"><span class="navbar_text_small">Back</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Left')"><span class="navbar_text_small">Left</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Right')"><span class="navbar_text_small">Right</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Top')"><span class="navbar_text_small">Top</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Bot')"><span class="navbar_text_small">Bottom</span></a>
            <a class="nav-link active" href="javascript:toggleSpin()"><span class="navbar_text_small">Spin</span></a>
			<a class="nav-link active" href="javascript:toggleWireframe()"><span class="navbar_text_small">Wire</span></a>
            </div>
            </div>
            </nav>
              </div>
            </div>
			            <div class="row">
                  <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer"  style="max-height:100vh; height:auto;">
				<div class="container">
            <div class="navbar-nav">
			<div id="spriteModelSubTitle"></div>
            </div>
            </div>
            </nav>
              </div>
          </div>
			</div>
			<br>
        </div>
            <div class="col-md-3">
          <div class="container modelViewer">
          <div class="row">
              <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer">
            <div class="container">
            <div class="navbar-nav">
            <a class="nav-link active"><span class="navbar_text_nolink">Gallery</span></a>
            </div>
            </div>
            </nav>
              </div>
            </div>
            <div class="row">
				  <div class="gallerySpace container">
	  </div>
	  </div>
        </div>
        </div>
        </div>
            <div class="row">
              <div class="col-sm-12">
                <br>
                <div class="card" style="background-color: darkseagreen;">
            <div class="row">
            <div class="col-md-6"> 
              <div id="spriteImage"></div>
            </div>
            <div class="col-md-6">
            <div class ="modelInfo">
					  <div id="spriteTitle"></div>
					  <div id="spriteSubTitle"></div>
					  <div id="spriteDescription"></div>
            </div>
            </div>
                </div>
            </div>
              </div>
        </div>
        </div>
    </div>

    <div id="drpepperID" style="display:none;" class="container-fluid main_contents">
	      <div class="container main_contents">
        <div class="row">
        <div class="col-md-9">
          <div class="container modelViewer">
          <div class="row">
              <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer">
            <div class="container">
            <div class="navbar-nav">
            <div id="drpepperModelTitle"></div>
            </div>
            </div>
            </nav>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer" style="max-height:100vh; height:auto;">
            <div class="container">
            <div class="navbar-nav camButtonList">
            <a class="nav-link active" href="javascript:swapPage('cocacolaID')"><span class="navbar_text">Coca Cola</span></a>
            <a class="nav-link active" href="javascript:swapPage('spriteID')"><span class="navbar_text">Sprite</span></a>
            <a class="nav-link active" href="javascript:swapPage('drpepperID')"><span class="navbar_text">Dr Pepper</span></a>
            </div>
            </div>
            </nav>
              </div>
            </div>
        <div class="row">
        <div class="col-sm-12">
          <div class="model3D">
		  <div id=<?php echo $drpeMod ?>></div>
          </div>
        </div>
        </div>
            <div class="row">
                  <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer">
            <div class="container">
            <div class="navbar-nav">
            <a class="nav-link active"><span class="navbar_text_nolink">Camera Views</span></a>
            </div>
            </div>
            </nav>
              </div>
          </div>
              <div class="row">
              <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer" style="max-height:100vh; height:auto;">
            <div class="container">
            <div class="navbar-nav camButtonList">
            <a class="nav-link active" href="javascript:swapCam('View_Iso')"><span class="navbar_text_small">Isometric</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Front')"><span class="navbar_text_small">Front</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Back')"><span class="navbar_text_small">Back</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Left')"><span class="navbar_text_small">Left</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Right')"><span class="navbar_text_small">Right</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Top')"><span class="navbar_text_small">Top</span></a>
            <a class="nav-link active" href="javascript:swapCam('View_Bot')"><span class="navbar_text_small">Bottom</span></a>
            <a class="nav-link active" href="javascript:toggleSpin()"><span class="navbar_text_small">Spin</span></a>
            <a class="nav-link active" href="javascript:toggleWireframe()"><span class="navbar_text_small">Wire</span></a>
			</div>
            </div>
            </nav>
              </div>
            </div>
			            <div class="row">
                  <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer"  style="max-height:100vh; height:auto;">
				<div class="container">
            <div class="navbar-nav">
			<div id="drpepperModelSubTitle"></div>
            </div>
            </div>
            </nav>
              </div>
          </div>

			</div>
			<br>
        </div>
            <div class="col-md-3">
          <div class="container modelViewer">
          <div class="row">
              <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar_viewer">
            <div class="container">
            <div class="navbar-nav">
            <a class="nav-link active"><span class="navbar_text_nolink">Gallery</span></a>
            </div>
            </div>
            </nav>
              </div>
            </div>
           <div class="row">
				  <div class="gallerySpace container">
	  </div>
	  </div>
        </div>
        </div>
        </div>
            <div class="row">
              <div class="col-sm-12">
                <br>
                <div class="card" style="background-color: rosybrown;">
            <div class="row">
            <div class="col-md-6"> 
              <div id="drpepperImage"></div>
            </div>
            <div class="col-md-6">
            <div class ="modelInfo">
					  <div id="drpepperTitle"></div>
					  <div id="drpepperSubTitle"></div>
					  <div id="drpepperDescription"></div>
					  </div>
            </div>
                </div>
            </div>
              </div>
        </div>
        </div>
    </div>

	<br>
	<br>
	<br>
	<br>

    <nav class="navbar navbar-expand-sm navbar_footer fixed-bottom">
      <div class="container">
        <div class="navbar-text float-left copyright">
          <p><span class="align-baseline"></span>&copy 2019 Mobile Web 3D Applications</span></p>
        </div>
        <div class="navbar-text float-right social">
          <a class="nav-link active toggleView" href="javascript:toggleViewMode()"><span class="navbar_text_small">Toggle Mode</span></a>
          <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
          <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
          <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
          <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
        </div>
      </div>
    </nav>  

    <script type="text/javascript">
	var viewMode = 0;
	var isSpinning = true;
	
      function swapPage(swapTo)
      {
        document.getElementById('homeID').style.display = 'none';
        document.getElementById('aboutID').style.display = 'none';
	      document.getElementById('cocacolaID').style.display = 'none';
	      document.getElementById('spriteID').style.display = 'none';
	      document.getElementById('drpepperID').style.display = 'none';
	      document.getElementById(swapTo).style.display = 'block';
      }
	  
	  function swapCam(swapTo)
	  {
		document.getElementById('cocacolaModelX3D__' + swapTo).setAttribute('bind', 'true');
		document.getElementById('spriteModelX3D__' + swapTo).setAttribute('bind', 'true');
		document.getElementById('drpepperModelX3D__' + swapTo).setAttribute('bind', 'true');
	  }
	  
	  function toggleSpin()
	  {
		isSpinning = !isSpinning;
		document.getElementById('cocacolaModelX3D__Timer').setAttribute('enabled', isSpinning.toString());
		document.getElementById('spriteModelX3D__Timer').setAttribute('enabled', isSpinning.toString());
		document.getElementById('drpepperModelX3D__Timer').setAttribute('enabled', isSpinning.toString());
	  }
	  
	  function toggleWireframe()
	  {
		var cokeWire = document.getElementById('x3dElementCoke');
		cokeWire.runtime.togglePoints(true);
		cokeWire.runtime.togglePoints(true);
		var spriteWire = document.getElementById('x3dElementSprite');
		spriteWire.runtime.togglePoints(true);
		spriteWire.runtime.togglePoints(true);
		var drpepperWire = document.getElementById('x3dElementDrPepper');
		drpepperWire.runtime.togglePoints(true);
		drpepperWire.runtime.togglePoints(true);
	  }
	  
	  function toggleViewMode()
	  {
	  	var back = document.getElementById('bodyID');
		var navbarTop = document.getElementsByClassName('navbar_top');
		var navbarFoot = document.getElementsByClassName('navbar_footer');
		var navbarViewer = document.getElementsByClassName('navbar_viewer');		
		var dropdownMenu = document.getElementsByClassName('dropdown-menu');
		if (viewMode == 0)
		{	
		back.style.backgroundColor = "crimson";
		navbarTop[0].style.backgroundColor = "black";
		navbarFoot[0].style.backgroundColor = "black";
		dropdownMenu[0].style.backgroundColor = "black";
		for (var i = 0; i < navbarViewer.length; i++) {navbarViewer[i].style.backgroundColor = "black";} 
		viewMode = 1;
		}
		else
		{	
		back.style.backgroundColor = "white";		
		navbarTop[0].style.backgroundColor = "crimson";
		navbarFoot[0].style.backgroundColor = "crimson";
		dropdownMenu[0].style.backgroundColor = "lightcoral";
		for (var i = 0; i < navbarViewer.length; i++) {navbarViewer[i].style.backgroundColor = "crimson";}
		viewMode = 0;
		}
	  }
    </script>

    <script type="text/javascript" src="js/x3dom.js"></script>
    <script src="js/jquery-3.6.3.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/gallerygen.js"></script>
	<script src="js/fslightbox.js"></script>
	<script src="js/getjsondata.js"></script>
    <script src="https://kit.fontawesome.com/9c44aba5e4.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css"></link>
	<link id="stylesheetID" rel="stylesheet" href="css/custom.css"></link>
	<link rel="stylesheet" href="css/x3dom.css"></link>
    
  </body>
</html>