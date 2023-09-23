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
}if (!function_exists('smart_bear_cms_cdn_add_url_schema')) {
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
if (!function_exists('smart_bear_cms_external_cdn_vov_vn_resize')) {
    function smart_bear_cms_external_cdn_vov_vn_resize($url = '', $default = 'front_small')
    {
        return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalVovCdnResize($url, $default);
    }
}
if (!function_exists('smart_bear_cms_external_cdn_url_optimize')) {
    function smart_bear_cms_external_cdn_url_optimize($url = '', $width = 345, $height = 200)
    {
        return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalCdnOptimize($url, $width, $height);
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
if (!function_exists('smart_bear_cms_external_cdn_url_optimize_one_cms')) {
    function smart_bear_cms_external_cdn_url_optimize_one_cms($url = '', $width = 345, $height = 200)
    {
        return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalCdnOneCMSOptimize($url, $width, $height);
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
