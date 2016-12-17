<?php

namespace Shibby\Loilerplate\Controller;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Shibby\Loilerplate\Helper\FlashMessage;

/**
 * @author Guven Atbakan <guven@atbakan.com>
 */
class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var array
     */
    protected $parameters = [
        'siteTitle' => '',
        'siteDescription' => '',
        'pageTitle' => '',
    ];

    protected function setTitle($title)
    {
        $this->setSiteTitle($title);
        $this->setPageTitle($title);
    }

    protected function setSiteTitle($title)
    {
        $this->parameters['siteTitle'] = $title.' | '.$this->parameters['siteTitle'];
    }

    protected function setPageTitle($title, $append = false)
    {
        if ($append === true) {
            $title .= ' - '.@$this->parameters['pageTitle'];
        }
        $this->parameters['pageTitle'] = $title;
    }

    protected function setSiteDescription($description)
    {
        $this->parameters['siteDescription'] = $description;
    }

    protected function setFlashMessage(string $type, string $text)
    {
        $message = new FlashMessage();
        $message->setType($type)
            ->setText($text);

        \Session::flash('flashMessages', $message);
    }

    protected function setMessage(string $type, string $text)
    {
        $message = new FlashMessage();
        $message->setType($type)
            ->setText($text);

        $this->parameters['flashMessages'][] = $message;
    }

    protected function view($view, $params = [])
    {
        $message = \Session::get('flashMessages');

        if ($message) {
            $this->parameters['flashMessages'][] = $message;
        }

        return view($view, $params, $this->parameters);
    }
}
