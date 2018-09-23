<?php

namespace VoyagerMedia;


class VoyagerMediaModal
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
        echo view('voyager.media::modal');
    }
}