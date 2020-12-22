<?php

namespace PaginaEmConstrucao\Support;

/**
 * Description of Seo
 *
 * @author Leonardo Marques <leonardo@paginaemconstrucao.com.br>
 */
class Seo
{

    /** @var Optimizer */
    protected $optimizer;

    /**
     * @param string $schema
     */
    public function __construct(string $schema = "article")
    {
        $this->optimizer = new \CoffeeCode\Optimizer\Optimizer();
        $this->optimizer->openGraph(
                CONF_SITE_NAME,
                CONF_SITE_LANG,
                $schema
        )->twitterCard(
                CONF_SOCIAL_TWITTER_CREATOR,
                CONF_SOCIAL_TWITTER_PUBLISHER,
                CONF_SITE_DOMAIN
        )->publisher(
                CONF_SOCIAL_FACEBOOK_PAGE,
                CONF_SOCIAL_FACEBOOK_AUTHOR,
                CONF_SOCIAL_GOOGLE_PAGE,
                CONF_SOCIAL_GOOGLE_AUTHOR
        )->facebook(
                CONF_SOCIAL_FACEBOOK_APP
        );
    }
    
    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->optimizer->data()->$name;
    }
    /**
     * 
     * @param string $title
     * @param string $description
     * @param string $url
     * @param string $image
     * @param bool $follow
     * @return string
     */
    public function render(string $title, string $description, string $url, string $image, bool $follow = true): string
    {
        return $this->optimizer($title, $description, $url, $image, $follow)->render();
    }
    
    /**
     * 
     * @param string|null $title
     * @param string|null $description
     * @param string|null $url
     * @param string|null $image
     * @return object|null
     */
    public function data(?string $title = null, ?string $description =  null, ?string $url = null, ?string $image = null): ?object
    {
        return $this->optimizer->data($title, $description, $url, $image);
    }
    
    /**
     * 
     * @return Optimizer
     */
    public function optimizer(): Optimizer
    {
        return $this->optimizer;
    }
}
