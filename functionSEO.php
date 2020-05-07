<?php

function createSeoFriendlyName($data)
{
   $data = preg_replace('/\s\s+/', ' ', $data);

   $seoName = preg_replace('/([ ]+)/', '-', $data);
   $seoName = preg_replace('/[^a-zA-Z0-9_\-]*/isU', '', $seoName);
   $seoName = str_replace('--', '-', $seoName);
   $seoName = strtolower($seoName);

   return str_replace('--', '-', $seoName);
}

?>
