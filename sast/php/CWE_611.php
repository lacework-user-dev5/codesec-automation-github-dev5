<?php
  $xml = file_get_contents($_FILES['upload']['name']);
  libxml_disable_entity_loader(false);
  $document = simplexml_load_string($xml, "SimpleXMLElement", LIBXML_NOENT);
?>
