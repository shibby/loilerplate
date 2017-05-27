<?php

namespace Shibby\Loilerplate\Helper;

class Breadcrumb
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string|null
     */
    private $icon;

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return Breadcrumb
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return Breadcrumb
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param null|string $icon
     *
     * @return Breadcrumb
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }
}
