<?php

namespace VoyagerMedia;


use Psy\Util\Json;

class VoyagerMediaButton
{
    protected $config;


    public function __construct(){
        $this->config = config('media_config');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function run()
    {
        $args = func_get_args();

        echo view('voyager.media::input', collect(['input' => $args[0],'multiple' => $args[1], 'src' => Json::encode($args[2])]));
    }
}