<?php

namespace Shibby\Loilerplate\Helper;

/**
 * @author Guven Atbakan <guven@atbakan.com>
 */
class FlashMessage
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $field;

    public function __toString()
    {
        return $this->getText();
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    public function getCssClass()
    {
        if ($this->type === 'error') {
            return 'danger';
        }

        return $this->type;
    }

    public function getIcon()
    {
        if ($this->type === 'error') {
            return '<strong><span class="fa fa-cross"></span></strong>';
        } elseif ($this->type === 'success') {
            return '<strong><span class="fa fa-check"></span></strong>';
        }
    }

    /**
     * @param string $type
     *
     * @return FlashMessage
     */
    public function setType($type)
    {
        $this->type = $type;

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
     * @return FlashMessage
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param string $field
     *
     * @return FlashMessage
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }
}
