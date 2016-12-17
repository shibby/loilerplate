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
        'pageTitle' => '',
    ];

    public function __construct()
    {
    }

    protected function setFlashMessage(string $type, string $text)
    {
        $message = new FlashMessage();
        $message->setType($type)
            ->setText($text);

        \Session::flash('message', $message);
    }

    protected function setMessage(string $type, string $text)
    {
        $message = new FlashMessage();
        $message->setType($type)
            ->setText($text);

        $this->data['message'][] = $message;
    }

    protected function view($view, $params = [])
    {
        return view($view, $params, $this->parameters);
    }
}
