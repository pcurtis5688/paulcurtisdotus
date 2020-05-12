<?php
$html = file_get_contents("https://cbjpeg.stream.highwebmedia.com/stream?room=huntertiana");
$doc = new DOMDocument ();
$doc->loadHTML($html);
$docFirstChild = $doc->firstChild;
$docChildren = $doc->childNodes;
foreach ($docChildren->children() as $child) {
    echo "Child node: " . $child . "<br>";
}
/* foreach ( $doc->childNodes as $item )
	if ($item->nodeType == XML_PI_NODE)
		$doc->removeChild ( $item ); // remove hack
$doc->encoding = 'UTF-8'; */ // insert proper