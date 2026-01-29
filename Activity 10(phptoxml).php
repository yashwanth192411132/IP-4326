<form method="post">
    name<input type="text" name="name">
    <button type="submit" name="save"> SAVE</button>
</form>
<?php
if (isset($_POST['save'])){
    $xml=file_exists("example.xml") ? simplexml_load_file("example.xml"): new simpleXMLElement("<students></students>");
$xml->addChild("name",$_POST['name']);
$xml->asXML("example.xml");
}
?>