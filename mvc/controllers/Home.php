<?php
class Home extends Controller {

    function sayHi() {
        $post = $this->model('PostsModel');
        echo $post->getPost();
    }

    function show() {
        echo 'Showing';
    }
}