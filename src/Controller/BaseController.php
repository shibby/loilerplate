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

        \Session::flash('flashMessage', $message);
    }

    protected function setMessage(string $type, string $text)
    {
        $message = new FlashMessage();
        $message->setType($type)
            ->setText($text);

        $this->data['flashMessage'][] = $message;
    }

    protected function view($view, $params = [])
    {
        $message = \Session::get('flashMessage');
        if (!empty($message[0])) {
            $this->parameters['flashMessage'][] = $message[0];
        }
        return view($view, $params, $this->parameters);
    }
}
