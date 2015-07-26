<?php
class Home
{
    public function index()
    {
        return array(
            'success' => array(
                'code' => 200,
                'message' => 'Restler is up and running!',
            ),
        );
    }
}