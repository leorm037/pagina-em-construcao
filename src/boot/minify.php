<?php

if(strpos(url(), "localhost") !== false) {
    /**
     * ###############
     * ###   CSS   ###
     * ###############
     */
    
    $minCss = new MatthiasMullie\Minify\CSS();
    
    $cssDir = __DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/css";
    $cssFiles = scandir($cssDir);
    
    foreach ($cssFiles as $file){
        $cssFile = $cssDir . "/{$file}";
        if(is_file($cssFile) && pathinfo($cssFile)['extension'] == "css"){
            $minCss->add($cssFile);
        }
    }
    
    $minCss->minify(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/app.css");
    
    
    /**
     * ##############
     * ###   JS   ###
     * ##############
     */
    
    $minJs = new MatthiasMullie\Minify\JS();
    
    $jsDirShared = __DIR__ . "/../../shared/js";
    $minJs->add($jsDirShared . "/jquery.min.js");
    
    $jsDir = __DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/js";
    $jsFiles = scandir($jsDir);
    
    foreach ($jsFiles as $file){
        $jsFile = $jsDir . "/{$file}";
        if(is_file($jsFile) && pathinfo($jsFile)['extension'] == "js"){
            $minJs->add($jsFile);     
        }
    }
    
    $minJs->minify(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/app.js");
}
