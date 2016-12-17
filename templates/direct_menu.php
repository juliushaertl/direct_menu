@media only screen and (min-width: <?php p($_['width']); ?>px) {
	#navigation {
		margin: 0;
		padding: 0;
		position: absolute;
		top: 0;
		left: 80px;
		box-shadow: none;
		overflow: visible !important;
	}

	#navigation {
		width: auto;
		padding: 0;
		margin: 0;
		padding: 0;
		margin: 0;
		background-color: transparent;
		display: block !important;
		position: fixed;
	}

	#navigation #apps {
		overflow: visible;
	}

	#navigation div ul {
		position: relative;
		margin-left: 170px;
	}

	#navigation div ul:after {
		content: ".";
		clear: both;
		display: block;
		visibility: hidden;
		height: 0;
	}

	#navigation div ul li {
		float: left;
		padding: 0;
		margin: 0;
		height: 44px;
	}

	#navigation div ul li a {
		margin: 0;
		padding: 12px;
		padding-left: 6px;
		padding-right: 6px;
		width: 50px;
		height: 44px;
		position: static;
		text-align: center;
		color: #1d2d44 !important;
	}

	#navigation img.app-icon {
		width: 20px;
		height: 20px;
	}

	#navigation .app-loading .app-icon,
	#navigation .app-loading svg {
		display: none;
	}

	#navigation .app-loading .icon-loading-dark {
		background-size: 20px;
		position: relative;
		top: 0;
		left: 0;
		width: 20px;
		height: 20px;
		display: inline-block !important;
	}

	#navigation #apps .app-loading .icon-loading-dark::after {
		width: 18px;
		height: 18px;
		margin: -10px 0 0 -10px;
	}

	#navigation div li span {
		display: none;
		position: absolute;
		overflow: visible;
		left: 0;
		top: 45px;
		background-color: #FFF;
		border: 1px solid #000;
		color: #000;
	}

	#navigation div li:hover a {
		position: relative
	}

	#navigation div li:hover span {
		display: block
	}

	#navigation div li:hover span {
		background-color: white;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		border-radius: 3px;
		border-top-left-radius: 0;
		border-top-right-radius: 0;
		margin-top: 0;
		border: none;
		color: #333;
		left: 50%;
		transform: translateX(-50%);
		padding: 5px;
		-webkit-filter: drop-shadow(0 0 5px rgba(150, 150, 150, 0.75));
		-moz-filter: drop-shadow(0 0 5px rgba(150, 150, 150, 0.75));
		-ms-filter: drop-shadow(0 0 5px rgba(150, 150, 150, 0.75));
		-o-filter: drop-shadow(0 0 5px rgba(150, 150, 150, 0.75));
		filter: drop-shadow(0 0 5px rgba(150, 150, 150, 0.75));
	}

	#navigation div li:hover span {
		display: block;
	}

	#navigation div li:hover span:after,
	#navigation div li:hover span:before {
		content: " ";
		bottom: 100%;
		left: 50%;
		border: solid transparent;
		height: 0;
		width: 0;
		position: absolute;
		pointer-events: none;
		margin-left: -9px;
	}

	#navigation div li:hover span:after {
		border-bottom-color: white;
		border-width: 8px;
		margin-left: -8px;
	}

	#navigation div li:hover span:before {
		border-bottom-color: white;
		border-width: 9px;
	}

	a.menutoggle .icon-caret {
		display: none !important;
	}

	#navigation svg {
		width: 20px;
		height: 20px;
	}

	#navigation svg image {
		width: 100%;
		height: 100%;
<?php if($_['inverted']===false) { ?>
		-webkit-filter: none;
		filter: none;
<?php } ?>
	}

	#navigation a svg,
	#navigation a span {
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
		opacity: .5;
	}

	#navigation a:hover svg,
	#navigation a:hover span,
	#navigation a.active svg,
	#navigation a.active span {
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
		opacity: 1;
	}
}
