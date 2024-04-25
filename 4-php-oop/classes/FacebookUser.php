<?php

class FacebookUser
{

    public $facebookAccount;
    private $facebookPassword;
    protected $posts;

    function __construct($fb, $pass, $post)
    {
        $this->facebookAccount = $fb;
        $this->facebookPassword = $pass;
        $this->posts = $post;
    }
}
