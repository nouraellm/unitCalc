<?php
namespace WebService;

class registerMock implements registerInterface{
	
    public function send($result)
    {
        // Do nothing real here
        return null;
    }
}