<!DOCTYPE html>
<html>
  <head>
    <meta name="apple-mobile-web-app-capable" content="yes" />    
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, target-densitydpi=device-dpi" />
    <link href="lcars.css" media="all" rel="stylesheet" type="text/css" />
    <script src="lcars.js" type="text/javascript"></script>
	<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css">
  </head>
  <body id="fastclick">
    
    	<audio id="beep">
  <source src="beep.m4a"></source>
</audio>
<audio id="open">
  <source src="open.m4a"></source>
</audio>
<div class="container-fluid">
  <div class="row-fluid">
  
    <div id="nav" class="span2">
      <ul>
        <li class="nav-a">
          LCARS UI 0.1
          <div class="hr-top"><div class="hr-block"></div></div>
        </li>
        <li class="nav-c expandable" id="selected">
          Analysis
          <div class="hr-bottom"><div class="hr-block"></div></div>
        </li>
        <li class="nav-d expandable">Database</li>
        <li class="nav-e expandable">Mode Select</li>
        <li class="nav-f expandable">View</li>
      </ul>
    </div>
  
    <div id="top" class="span10">
      <div id="lcars">
        <div class="icons">
          <icon class="active" id="audioSwitch"><i class="icon-volume-up"></i></icon>
          <icon><i class="icon-warning-sign"></i></icon>
        </div>
        <h1>LCARS UI 0.1</h1>
        <p>A responsive LCARS interface.</p>
      </div>
    </div>

    <div id="main" class="span10"></div>

    <div id="sectionC">
      <div class="row-fluid">
        <div class="span2 btn btn-round btn-active">125A</div>
        <div class="span2 btn btn-round">199B</div>
        <div class="span2 btn btn-round btn-inactive">184C</div>
        <div class="span2 btn btn-round">142D</div>
        <div class="span2 btn">141E</div>
        <div class="span2 btn btn-round-right">Heading</div>
      </div>
      <div class="row-fluid">
        <div class="span2 btn btn-round">212A</div>
        <div class="span2 btn btn-round">253B</div>
        <div class="span2 btn btn-round">284C</div>
        <div class="span2 btn btn-round">261D</div>
        <div class="span2 btn">251E</div>
        <div class="span2 btn btn-round-right">Calib</div>
      </div>
      <div class="row-fluid">
        <div class="span2 btn btn-round">312A</div>
        <div class="span2 btn btn-round">353B</div>
        <div class="span2 btn btn-round">384C</div>
        <div class="span2 btn btn-round btn-active">361D</div>
        <div class="span2 btn">351E</div>
        <div class="span2 btn btn-round-right">Ext 1</div>
      </div>
      <div class="row-fluid">
        <div class="span4 btn btn-round">312A</div>
        <div class="span2 btn btn-round">353B</div>
        <div class="span2 btn btn-round">384C</div>
        <div class="span2 btn">361D</div>
        <div class="span2 btn btn-round-right btn-inactive">Ext 2</div>
      </div>
      <div class="row-fluid">
        <div class="span2 btn btn-round">312A</div>
        <div class="span2 btn btn-round">353B</div>
        <div class="span2 btn btn-round">384C</div>
        <div class="span2 btn btn-round btn-active">361D</div>
        <div class="span2 btn">351E</div>
        <div class="span2 btn btn-round-right">Activate</div>
      </div>
    </div>

    <div id="sectionD">
      <div class="headline">
        <span class="h3">Ode To Spot - Database B3-549</span>
      </div>
      
      <p>Felis Cattus, is your taxonomic nomenclature, 
      an endothermic quadruped carnivorous by nature? 
      Your visual, olfactory and auditory senses 
      contribute to your hunting skills, and natural defenses.<p>

      <p>I find myself intrigued by your subvocal oscillations,
      a singular development of cat communications
      that obviates your basic hedonistic predilection
      for a rhythmic stroking of your fur, to demonstrate affection.</p>

      <p>A tail is quite essential for your acrobatic talents; 
      you would not be so agile if you lacked its counterbalance. 
      And when not being utilized to aide in locomotion, 
      it often serves to illustrate the state of your emotion.</p>

      <p>O Spot, the complex levels of behaviour you display
      connote a fairly well-developed cognitive array. 
      And though you are not sentient, Spot, and do not comprehend, 
      I nonetheless consider you a true and valued friend.</p>
    </div>

    <div id="sectionE">
      Mode select
    </div>

    <div id="sectionF">
      View
    </div>

  </div>
</div>

  </body>
</html>