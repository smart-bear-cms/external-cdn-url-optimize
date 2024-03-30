<?php
if (!function_exists('smart_bear_cms_external_cdn_hostname_is_one_cms')) {
	function smart_bear_cms_external_cdn_hostname_is_one_cms($hostname = '')
	{
		return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalCdnHostnameIsOfOneCMS($hostname);
	}
}
if (!function_exists('smart_bear_cms_external_cdn_url_is_of_one_cms')) {
	function smart_bear_cms_external_cdn_url_is_of_one_cms($url = '')
	{
		return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalCdnIsOfOneCMS($url);
	}
}
if (!function_exists('smart_bear_cms_external_one_cms_list_cdn')) {
	function smart_bear_cms_external_one_cms_list_cdn($url = '')
	{
		return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalListCdnOfOneCMS();
	}
}
if (!function_exists('smart_bear_cms_external_cdn_url_one_cms_thumb_quick_fixed')) {
	function smart_bear_cms_external_cdn_url_one_cms_thumb_quick_fixed($url = '')
	{
		return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalCdnOneCMSQuickFixedImageSrcThumbnail($url);
	}
}
if (!function_exists('smart_bear_cms_external_cdn_url_one_cms_thumb_fixed')) {
	function smart_bear_cms_external_cdn_url_one_cms_thumb_fixed($url = '')
	{
		return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalCdnOneCMSFixedImageSrcThumbnail($url);
	}
}
if (!function_exists('smart_bear_cms_external_cdn_url_optimize_one_cms')) {
	function smart_bear_cms_external_cdn_url_optimize_one_cms($url = '', $width = 345, $height = 200)
	{
		return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalCdnOneCMSOptimize($url, $width, $height);
	}
}
