<style>
body, html {
	margin: 0;
	padding: 0;
	font-family: Arial, Helvetica, sans-serif;
	background-color: #222222;
	height: 101%;
}

ul { margin: 0; padding: 0; list-style: none; }
a { text-decoration: none; color: #000; }
.clear { margin: 0; padding: 0; clear: both; }
.display-block { display: block; }
.display-none,
#mapped .mapp-note,
#mapped .mapp-address,
#mapped .mapp-addnote,
#mapped .mapp-table table { 
	display: none; 
}

#header,
#close-fixed, 
#mapp-fixed {
	position: fixed;
}
#header {
	top: 0;
	height: 40px;
	width: 100%;
	background-color: #000000;
	border-bottom: solid 1px #fff;
}
#t-search {
	margin: 10px 40px 10px 0;
}
#t-search input {
	width: 94%;
	display: block;
	margin: 0 auto;
}
.light-switch {
	text-align: center;
	position: absolute;
	top: 0;
	right: 0;
	height: 40px;
	line-height: 40px;
	width: 40px;
	font-size: 14pt;
	font-weight: bold;
}
#light-on { color: #ffffff; }
#light-off { color: #000000; }

#close-fixed {
	background-color: #fff;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	z-index: 999;
	opacity: .6;
}
#mapp-fixed {
	background-color: #222222;
	height: 80%;
	width: 90%;
	z-index: 1000;
	left: 5%;
	bottom: 10%;
	overflow-y: auto;
	padding: 5px;
	margin-left: -5px;
	margin-bottom: -5px;
}

#mapped {
	margin: 0 5px;
	padding-bottom: 2px;
}
.site-note,
.mapp-title,
.mapp-filter,
.mapp-address span,
.mapp-note,
.mapp-table th,
.mapp-table td {
	background-color: #333333;
}
.mapp-table td a {
	background-color: #666666;
}
.site-note,
.mapp-title,
.mapp-filter,
.mapp-note,
.mapp-address,
.mapp-addnote,
.mapp-table th,
.mapp-table td,
.mapp-table td a,
.mapp-table td a:hover {
	color: #eeeeee;
}
.mapp-content {
	margin-bottom: 5px;
}
.mapp-title {
	display: block;
	font-size: 14pt;
	padding: 10px 3%;
}
.mapp-title div { padding: 10px 0; }
.mapp-title div span {
	display: block;
	margin-top: 2px;
	padding: 8px;
	font-size: 10pt;
	font-weight: bold;
	background-color: #222222;
}
.mapp-title div .highlight {
	color: #000;
	background-color: #FFFF33;
}
#num-apt-mapped,
#mapped .mapp-title:hover,
.mapp-table tr:hover td { 
	background-color: #444444; 
}
.mapp-entrance { margin-bottom: 10px; }
.mapp-city { font-size: 10pt; }
.mapp-filter { margin: -2px 0; padding: 10px; }
.mapp-filter input {
	display: block;
	width: 95%;
	margin: 0 auto;
}
.site-note b,
.mapp-address b,
.mapp-note li b, 
.mapp-addnote b, 
.mapp-note li u, 
.mapp-addnote u {
	font-weight: bold;
	color: #FFBE00;
}
.mapp-note, .site-note {
	font-size: 11pt; 
	padding: 10px 3%;
}
.mapp-note li, .site-note li {
	margin-left: 20px;
	list-style: square;
}
.site-note { margin: 0 0 5px 0; overflow: hidden; }
.site-note li {
	padding: 2px 0;
}
.site-note .site-note-section { margin: 20px 0 10px 0; font-weight: bold; font-size: 16pt; list-style: none; }
.mapp-address {
	font-weight: bold;
	padding: 10px 10px 10px 36px;
	display: block;
	position: relative;
	font-size: 14pt;
	margin: 10px 0;
	border-bottom: solid 3px #666666;
}
.mapp-address span {
	top: 10px;
	left: 2px;
	position: absolute;
	width: 24px;
	text-align: center;
}
.mapp-address b {
	float: right;
}
.mapp-addnote {
	font-size: 11pt;
	margin: 10px 2px;
}
.mapp-table .bldg { width: 60px; }
.mapp-table .bldg, 
.mapp-table td a {
	font-size: 10pt;
}
.mapp-table table {
	width: 100%;
}
.mapp-table th,
.mapp-table td {
	text-align: center;
}
.mapp-table td a:hover { background-color: #222222; }
.mapp-table td a {
	margin: 5px;
	padding: 2px 5px;
	display: inline-block;
}
#header {
	-o-transition: .4s;
	-ms-transition: .4s;
	-moz-transition: .4s;
	-webkit-transition: .4s;
	transition: .4s;
}
</style>