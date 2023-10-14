<?php
if (!function_exists('smart_bear_cms_external_cdn_url_optimize')) {
    function smart_bear_cms_external_cdn_url_optimize($url = '', $width = 345, $height = 200)
    {
        return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalCdnOptimize($url, $width, $height);
    }
}
if (!function_exists('smart_bear_cms_external_cdn_url_optimize_ttxvn_cms')) {
    function smart_bear_cms_external_cdn_url_optimize_ttxvn_cms($url = '', $width = 345, $height = 200)
    {
        return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalCdnTTXVNCMSOptimize($url, $width, $height);
    }
}
if (!function_exists('smart_bear_cms_external_cdn_url_optimize_epi_cms')) {
    function smart_bear_cms_external_cdn_url_optimize_epi_cms($url = '', $width = 345, $height = 200)
    {
        return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalCdnEPICMSOptimize($url, $width, $height);
    }
}
if (!function_exists('smart_bear_cms_external_cdn_url_optimize_vccorp_cms')) {
    function smart_bear_cms_external_cdn_url_optimize_vccorp_cms($url = '', $width = 345, $height = 200)
    {
        return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalCdnVCCorpCMSOptimize($url, $width, $height);
    }
}
if (!function_exists('smart_bear_cms_external_cdn_url_optimize_ex_cdn_com')) {
    function smart_bear_cms_external_cdn_url_optimize_ex_cdn_com($url = '', $width = 345, $height = 200)
    {
        return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalCdnEXCDNOptimize($url, $width, $height);
    }
}

if (!function_exists('smart_bear_cms_external_cdn_url_optimize_netlink_cms')) {
    function smart_bear_cms_external_cdn_url_optimize_netlink_cms($url = '', $width = 345, $height = 200)
    {
        return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalCdnNetLinkCMSOptimize($url, $width, $height);
    }
}
if (!function_exists('smart_bear_cms_external_cdn_url_optimize_yeah1_cms')) {
    function smart_bear_cms_external_cdn_url_optimize_yeah1_cms($url = '', $width = 345, $height = 200)
    {
        return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalCdnYeahOneGroupCDNOptimize($url, $width, $height);
    }
}
