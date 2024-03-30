<?php
if (!function_exists('smart_bear_cms_cdn_url_http_to_https')) {
	function smart_bear_cms_cdn_url_http_to_https($url = '')
	{
		return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::httpToHttps($url);
	}
}
if (!function_exists('smart_bear_cms_cdn_url_change_domain')) {
	function smart_bear_cms_cdn_url_change_domain($url = '')
	{
		return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::changeDomain($url);
	}
}
if (!function_exists('smart_bear_cms_cdn_url_query_removed')) {
	function smart_bear_cms_cdn_url_query_removed($url = '')
	{
		return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::urlQueryRemoved($url);
	}
}
if (!function_exists('smart_bear_cms_cdn_add_url_schema')) {
	function smart_bear_cms_cdn_add_url_schema($url = '', $protocol = 'https')
	{
		return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::urlPushSchemaProtocol($url, $protocol);
	}
}
if (!function_exists('smart_bear_cms_external_cdn_work_with_query_resize_list')) {
	function smart_bear_cms_external_cdn_work_with_query_resize_list($url = '', $default = 'front_small')
	{
		return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalCdnWorkWithUrlQueryResize();
	}
}
