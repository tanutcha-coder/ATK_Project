<?php
    class rtpcrController
    {
        public function index()
        {
            $rtpcr_list = Rtpcrtesting::getAll();
            require_once('views/rtpcrtesting/index_rtpcr.php');
        }
        
    }
    