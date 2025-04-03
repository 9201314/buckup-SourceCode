<?php
//查询处理
require ("./whoishub.php");
$domain = $_GET['domain'];
if (substr_count($domain, ".") >= 2) {
    $domain = preg_replace('/^www\./i', '', $domain);
}
$domain = idn_to_ascii($domain, IDNA_NONTRANSITIONAL_TO_ASCII, INTL_IDNA_VARIANT_UTS46);
$dedomain = idn_to_utf8($domain, IDNA_NONTRANSITIONAL_TO_UNICODE, INTL_IDNA_VARIANT_UTS46);
function LookupDomain($domain){
    $domain = idn_to_ascii($domain, IDNA_NONTRANSITIONAL_TO_ASCII, INTL_IDNA_VARIANT_UTS46);
    $dedomain = idn_to_utf8($domain, IDNA_NONTRANSITIONAL_TO_UNICODE, INTL_IDNA_VARIANT_UTS46);
	global $whoisservers;
	$domain_parts = explode(".", $domain);
	$tld = strtolower(array_pop($domain_parts));
	$whoisserver = $whoisservers[$tld];
	if(!$whoisserver) {
		return "错误: 未能找到适合<b> $dedomain </b>的Whois服务器!</br>ERROR : No appropriate Whois server found for<b> $dedomain </b>domain!";
	}
	$result = QueryWhoisServer($whoisserver, $domain);
	if(!$result) {
		return "错误: 未能从<b> $whoisserver </b>服务器中找到<b> $dedomain </b></br>ERROR: No results retrieved from<b> $whoisserver </b>server for<b> $dedomain </b>domain!";
	}
	else {
		while(strpos($result, "Whois Server:") !== FALSE){
			preg_match("/Whois Server: (.*)/", $result, $matches);
			$secondary = $matches[1];
			if($secondary) {
				$result = QueryWhoisServer($secondary, $domain);
				$whoisserver = $secondary;
			}
		}
	}
	if($domain==$dedomain){
	return "域名（Domain Name）: ".strtoupper($domain)." \n\n查询结果（Results Found）: \n\n" . $result;
	//return "<b>Domain Name : ".strtoupper($domain)." \n\nWhois server : ".strtoupper($whoisserver)."\n\nResults found:</b>\n\n" . $result;
	} else {
	return "域名（Domain Name）: ".$dedomain." ( ".strtoupper($domain)." ) \n\n查询结果（Results Found）: \n\n" . $result;
	//return "<b>Domain Name : ".$dedomain." ( ".strtoupper($domain)." ) \n\nWhois server : ".strtoupper($whoisserver)."\n\nResults found:</b>\n\n" . $result;
	}
}

function LookupIP($ip) {
	$whoisservers = array(
		"whois.apnic.net", // Asia/Pacific only
		"whois.arin.net", // North America only
		"whois.ripe.net", // Europe, Middle East and Central Asia only
		"whois.lacnic.net", // Latin America and Caribbean - returns data for ALL locations worldwide :-)
		"whois.afrinic.net", // Africa - returns timeout error :-(
	);
	$results = array();
	foreach($whoisservers as $whoisserver) {
		$result = QueryWhoisServer($whoisserver, $ip);
		if($result && !in_array($result, $results)) {
			$results[$whoisserver]= $result;
		}
	}
	$res = "[" . count($results)."] 查询结果（Results found , Please ReCheck）: ";
	foreach($results as $whoisserver=>$result) {
		$res .= "\n\n<hr>\nLookup results for <b>" . strtoupper($ip) . " </b>from<b> " . strtoupper($whoisserver) . " </b>server:\n\n" . $result;
	}
	return $res."\n\n<hr>";
}

function ValidateIP($ip) {
    if (preg_match("/^as([0-9]|[1-9][0-9]|[1-9][0-9]{2}|[1-9][0-9]{3}|[1-9][0-9]{4}|[1-9][0-9]{5}|[1-9][0-9]{6}|[1-9][0-9]{7}|[1-9][0-9]{8}|[4-9][0-9]{9}|[1-9][0-9]{10})$/",$ip)) {
        return $ip;
    }
    
    if (preg_match("/^((25[0-5]|2[0-4]\d|[01]?\d\d?)\.){3}(25[0-5]|2[0-4]\d|[01]?\d\d?)$|^([\da-fA-F]{1,4}:){6}((25[0-5]|2[0-4]\d|[01]?\d\d?)\.){3}(25[0-5]|2[0-4]\d|[01]?\d\d?)$|^::([\da-fA-F]{1,4}:){0,4}((25[0-5]|2[0-4]\d|[01]?\d\d?)\.){3}(25[0-5]|2[0-4]\d|[01]?\d\d?)$|^([\da-fA-F]{1,4}:):([\da-fA-F]{1,4}:){0,3}((25[0-5]|2[0-4]\d|[01]?\d\d?)\.){3}(25[0-5]|2[0-4]\d|[01]?\d\d?)$|^([\da-fA-F]{1,4}:){2}:([\da-fA-F]{1,4}:){0,2}((25[0-5]|2[0-4]\d|[01]?\d\d?)\.){3}(25[0-5]|2[0-4]\d|[01]?\d\d?)$|^([\da-fA-F]{1,4}:){3}:([\da-fA-F]{1,4}:){0,1}((25[0-5]|2[0-4]\d|[01]?\d\d?)\.){3}(25[0-5]|2[0-4]\d|[01]?\d\d?)$|^([\da-fA-F]{1,4}:){4}:((25[0-5]|2[0-4]\d|[01]?\d\d?)\.){3}(25[0-5]|2[0-4]\d|[01]?\d\d?)$|^([\da-fA-F]{1,4}:){7}[\da-fA-F]{1,4}$|^:((:[\da-fA-F]{1,4}){1,6}|:)$|^[\da-fA-F]{1,4}:((:[\da-fA-F]{1,4}){1,5}|:)$|^([\da-fA-F]{1,4}:){2}((:[\da-fA-F]{1,4}){1,4}|:)$|^([\da-fA-F]{1,4}:){3}((:[\da-fA-F]{1,4}){1,3}|:)$|^([\da-fA-F]{1,4}:){4}((:[\da-fA-F]{1,4}){1,2}|:)$|^([\da-fA-F]{1,4}:){5}:([\da-fA-F]{1,4})?$|^([\da-fA-F]{1,4}:){6}:$/",$ip)) {
        return $ip;
    }
    
	//$ipnums = explode(".", $ip);
	//if(count($ipnums) != 4) {
	//	return false;
	//}
	//foreach($ipnums as $ipnum) {
	//	if(!is_numeric($ipnum) || ($ipnum > 255)) {
	//		return false;
	//	}
	//}
	//return $ip;
}

function ValidateDomain($domain) {
	//if(!preg_match("/^([-a-z0-9]{2,100})\.([a-z\.]{2,8}|)$/i", $domain)) {
	//	return false;
	//}
	return $domain;
}

function QueryWhoisServer($whoisserver, $domain) {
	$port = 43;
	$timeout = 5;
	$fp = @fsockopen($whoisserver, $port, $errno, $errstr, $timeout) or die("<pre>\n" . "Socket Error " . $errno . " - " . $errstr.". Please try again!" . "\n</pre>\n");
	//if($whoisserver == "whois.verisign-grs.com") $domain = "=".$domain; // whois.verisign-grs.com requires the equals sign ("=") or it returns any result containing the searched string.
	fputs($fp, $domain . "\r\n");
	$out = "";
	while(!feof($fp)){
		$out .= fgets($fp);
	}
	fclose($fp);
	$res = "";
	if((strpos(strtolower($out), "no match found") === FALSE) && (strpos(strtolower($out), "not administered by") === FALSE) && (strpos(strtolower($out), "not managed by") === FALSE) && (strpos(strtolower($out), "not registered in") === FALSE) && (strpos(strtolower($out), "allocated by another") === FALSE) && (strpos(strtolower($out), "in not allocated") === FALSE) && (strpos(strtolower($out), "transferred to the") === FALSE)) {
		$rows = explode("\n", $out);
		foreach($rows as $row) {
			$row = trim($row);
			if(($row != '') && ($row[0] != '#') && ($row[0] != '%')) {
				$res .= $row."\n";
			}
		}
	}
	return $res;
}

?>