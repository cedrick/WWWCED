<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Template</title>
    <link type="text/css" href="template/css/style.css" rel="stylesheet" />  
  </head>
  <body>
    <div id="content">
      <div id="contentHeader">
      	<div style="width: 820px;margin-left: 200px;"><div id="nslogo"></div><div id="appTitle">{{title}}</div><div id="greeting">Hi {{user}}  |  logout</div></div>
      </div>
      <div id="navMenu">
      	<div id="location">{{location}}</div>
      	<div>
      		<ul>
      			<li><a href="#">{{menu 1}}</a></li>
      			<li><a href="#">{{menu 2}}</a></li>
      			<li><a href="#">{{menu 3}}</a></li>
      			<li><a href="#">{{menu 4}}</a></li>
      		</ul>
      	</div>
      </div>
      <div class="clearFix"></div>
      <div id="contentBody">
      	<div id="contentTitle">{{content title}}</div>
      	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        <div id="leftcontentBody">
        	
        </div>
        <div id="rightcontentBody">
        </div>
      </div>
      <div id="contentFooter">
      	{{copyright}}
      </div>
    </div>
  </body>
</html>