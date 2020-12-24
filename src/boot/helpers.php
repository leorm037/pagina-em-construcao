<?php

/**
 * ###############
 * ###   URL   ###
 * ###############
 */

/**
 * 
 * @param string $path
 * @return string
 */
function url(string $path = null): string {
    if (strpos($_SERVER['HTTP_HOST'], "localhost") !== false) {
        if ($path) {
            return CONF_URL_BASE_DEV . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        return CONF_URL_BASE_DEV;
    }

    if ($path) {
        return CONF_URL_BASE . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }
    return CONF_URL_BASE;
}

/**
 * 
 * @return string
 */
function url_back(): string {
    return ($_SERVER['HTTP_REFERER'] ?? url());
}

/**
 * 
 * @param string $path
 * @return string
 */
function theme(string $path = null): string {
    if (strpos($_SERVER['HTTP_HOST'], "localhost") !== false) {
        if ($path) {
            return CONF_URL_BASE_DEV . "/themes/" . CONF_VIEW_THEME . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        return CONF_URL_BASE_DEV . "/themes/" . CONF_VIEW_THEME;
    }

    if ($path) {
        return CONF_URL_BASE . "/themes/" . CONF_VIEW_THEME . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }
    return CONF_URL_BASE . "/themes/" . CONF_VIEW_THEME;
}
