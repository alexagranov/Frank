<h2 id="page_title"><span class='title'>coordy</span> is a Flash layout toolkit that allows you to easily organize items in various layout patterns.</h2>
<div id='coordy_examples_nav' class='clearfix'>
<span class='header'>Select an example&hellip;</span>
</div>
<div id='hero_slideshow'><div class='examples'></div></div>
<ul id="download_follow" class='block-grid three-up'>
<li id='download'>
<a class='button download alt' href='https://github.com/somerandomdude/coordy'>Fork coordy on GitHub</a><small class='license'><a href="http://creativecommons.org/licenses/by-sa/3.0/us/">CC Attribution-Share Alike 3.0</a></small>
</li>
<li>
<a class='button twitter' href='http://twitter.com/somerandomdude'>Follow Me on Twitter</a><small>[twounter]somerandomdude[/twounter] followers.</small>
</li>
<li>
<a class='button rss' href='http://feeds.feedburner.com/somerandomdude'>Subscribe to RSS</a><small>[fbc_count][/fbc_count] subscribers.</small>
</li>
</ul>
<section id="info" class='row'>
<div class='nine columns'>
<h3>How it works</h3>
Coordy is a light Actionscript 3 layout framework which offers a simple way to organize objects into various different 2d and 3d layouts. The layouts are light, powerful and virtual organizers that simply manage x/y/z coordinates of objects - meaning your objects are not tightly bound to any specific layout. <strong><em>As of version 0.9.9, coordy plays very nicely with just about any Flash 3d engine, including <a href="http://code.google.com/p/papervision3d/">Papervision3d</a>, <a href="http://away3d.com/">Away3D</a> and <a href="http://five3d.mathieu-badimon.com/">FIVe3D</a></em></strong>.

The basic explanation of how coordy works is once an object is added to a layout, a node instance is created which points to the object. The node is the link between the layout and object. The node contains all the coordinate information for that object, so that even if an object is moved, the coordinate information for it persists due to its corresponding node. This is why an object can belong to an infinite amount of layouts, because the layout merely handles its created node objects which, in turn, have a link to objects.

Layouts are merely abstract organizers, they do not need to be added/removed from the stage. Nonetheless, they have tweenable properties such as x, y, z, width, height, depth etc. When a display property such as width is altered, the layout adjusts all the cells and the nodes’s links to fit in the layout’s new dimension. This allows you to “tween” a layout even though it does not truly exist on the stage.
</div>
<div class='three columns'>
<h3>Documentation</h3>
<p>If you need more than just examples, the coordy library comes with documentation. Documentation comes with the  <a href="http://coordy.googlecode.com/files/coordy-0.9.9.zip">downloadable version</a>, or you can browse through the <a href="/wp-content/docs/coordy/docs/">online documentation</a>.</p></div>
</section>
<section id="other_projects" class='span-9 clearfix'>
<h1>Other projects</h1>
<ul id='projects_list' class='row'>
<li class='four columns design'><div><h3><a href='/work/cue/' id="cue"><small>Cue</small></a></h3><p> Cue is a public domain gestural icon system which focuses on legibility and symbolic representation.</p></div></li>
<li class='four columns design'><div><h3><a href="/work/iconic/" id="projects_iconic"><small>Iconic</small></a></h3><p>Iconic is a minimal set of icons consisting of 84 marks in raster and vector formats — free for public use.</p></div></li>
<li class='four columns design'><div><h3><a href="/work/sanscons/" id="projects_sanscons"><small>Sanscons</small></a></h3><p>Sanscons is a CSS-friendly version of Bitcons — allowing you to set custom backgrounds on your icons.</p></div></li>
</ul>
</section>

<link rel="stylesheet" href="/wp-content/css/pages/coordy.css" type="text/css" media="all" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script><script src="/wp-content/js/jquery.swfobject.min.js"></script><script src="/wp-content/js/pages/coordy.js"></script>