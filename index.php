<?
session_start();
session_destroy();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Feedback Form</title>

    <script type="text/javascript" src="script.js"></script>
  <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
</head>
<body>
<div class="PageBackgroundSimpleGradient">
    </div>
    <div class="PageBackgroundGlare">
        <div class="PageBackgroundGlareImage"></div>
    </div>
    <div class="Main">
        <div class="Sheet">
            <div class="Sheet-tl"></div>
            <div class="Sheet-tr"><div></div></div>
            <div class="Sheet-bl"><div></div></div>
            <div class="Sheet-br"><div></div></div>
            <div class="Sheet-tc"><div></div></div>
            <div class="Sheet-bc"><div></div></div>
            <div class="Sheet-cl"><div></div></div>
            <div class="Sheet-cr"><div></div></div>
            <div class="Sheet-cc"></div>
            <div class="Sheet-body">
                <div class="Header">
                    <div class="Header-png"></div>
                    <div class="Header-jpeg"></div>
                    <div class="logo">
                        <h1 id="name-text" class="logo-name">Feedback Form</h1>
                        <div id="slogan-text" class="logo-text"></div>
                    </div>
                </div>
                <div class="contentLayout">
                    <div class="content">
                        <div class="Post">
                            <div class="Post-body">
                        <div class="Post-inner">
                            <div class="PostMetadataHeader">
                                <h2 class="PostHeaderIcon-wrapper">
                                    <span class="PostHeader">Welcome</span>
                                </h2>
                            </div>
                            <div class="PostContent">
                                
                          <font style="Georgia" size="2">
                           <span id='show_info'>
     <p>This site is designed for getting the feedback from students based on staffs' teaching ability and for the usage of staff for making use of it by viewing the result of the feedback.</p></font></span> 
                            <!--    <a href="#" title="link">link</a>, <a class="visited" href="#" title="visited link">visited link</a>, 
                                 <a class="hover" href="#" title="hovered link">hovered link</a> consectetuer 
                                
                               -->
                                
                                <table class="table" width="100%">
                                	<tr>
                                		<td width="33%" valign="top">
                                		<div class="Block">
                                			<div class="Block-body">
                                				<div class="BlockHeader">
                                					<!--div class="header-tag-icon"-->
                                					<div class="BlockHeader-text">
                                						<center><a  href="feedback.php" class="topic">Student Login</a></center></div>
                                					<!--/div-->
                                					<div class="l">
                                					</div>
                                					<div class="r">
                                						<div>
                                						</div>
                                					</div>
                                				</div>
                                				<div class="BlockContent">
                                					<div class="PostContent">
                                					<font style="Georgia" size="2">	<p>This login is for students for filling the feedback form. </p><br>Click <a  href="feedback.php">here</a> to login.
                                					</div></font>
                                				</div>
                                			</div>
                                		</div>
                                		</td>
                                		<td width="33%" valign="top">
                                		<div class="Block">
                                			<div class="Block-body">
                                				<div class="BlockHeader">
                                					<!--div class="header-tag-icon"-->
                                					<div class="BlockHeader-text">
                                						<center><a href="stafflogin.php" class="topic">Staff Login</a></center></div>
                                					<!--/div-->
                                					<div class="l">
                                					</div>
                                					<div class="r">
                                						<div>
                                						</div>
                                					</div>
                                				</div>
                                				<div class="BlockContent">
                                					<div class="PostContent">
                                							<font style="Georgia" size="2"><p>This login is for Staffs for getting result of feedback.</p><br>Click <a href="stafflogin.php" >here</a> to login.</font>
                                					</div>
                                				</div>                                			</div>
                                		</div>
                                		</td>
                                		<td width="33%" valign="top">
                                		<div class="Block">
                                			<div class="Block-body">
                                				<div class="BlockHeader">
                                					<!--div class="header-tag-icon"-->
                                					<div class="BlockHeader-text">
                                						<a class="topic" href="adminlogin.php" ><center>Administrator</center></a></div>
                                					<!--/div-->
                                					<div class="l">
                                					</div>
                                					<div class="r">
                                						<div>
                                						</div>
                                					</div>
                                				</div>
                                				<div class="BlockContent">
                                					<div class="PostContent">
                                						<font style="Georgia" size="2"><p>This login is for maintaining the Database.  </p> <br>Click <a href="adminlogin.php" >here</a> to login.</font>
                                					</div>
                                				</div>
                                			</div>
                                		</div>
                                		</td>
                                	</tr>
                                </table><br />
                                <div align="center"><font size="2" style="color:#CC0000" ><b> <? $q=$_GET["q"]; echo $q; ?>  </b> </font></div>
                            </div>
                            <div class="cleared"></div>
                        </div>
                        
                            </div>
                        </div>
                        
                    </div>
                   
                </div>
                <div class="cleared"></div><div class="Footer">
                    <div class="Footer-inner">
                        <a href="#" class="rss-tag-icon" title="RSS"></a>
                        <div class="Footer-text">
                            <p><br />
                               Designed by Ajay Kumar(2005-2009), Dept of CSE</p>
                        </div>
                    </div>
                    <div class="Footer-background"></div>
                </div>
            </div>
        </div>
        
    
</body>
</html>
