<?php
class Posts extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Post');
        $this->userModel = $this->model('User');
    }

    public function index() {
        // Get posts
        $posts = $this->postModel->getPosts();
        
        $data = [
            'posts' => $posts
        ];

        $this->view('posts/index', $data);
    }

    public function add() {
        if(!isset($_SESSION['user_id'])){
            header("Location: /users/login");
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanatize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => trim($_POST['title']),
                'body' =>  trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => ''
            ];

            // Validate data
            if(empty($data['title'])){
                $data['title_err'] = 'Plesae enter title';
            }
            if(empty($data['body'])){
                $data['body_err'] = 'Please enter description';
            }

            // Make sure no errors
            if(empty($data['title_err']) && empty($data['body_err'])){
                // Validated
                if($this->postModel->addPost($data)){
                    flash('post_message', 'Post Added');
                    header("Location: /posts/index");

                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('posts/add', $data);
            }
        } else {
            $data = [
                'title' => '',
                'body' => '',
                'title_err' => '',
                'body_err' => ''
            ];
    
            $this->view('posts/add', $data);
        }
    }

    public function show($id) {
        $post = $this->postModel->getPostById($id);
        $user = $this->userModel->getUserbyId($post->user_id);

        $data = [
            'post' => $post,
            'user' => $user
        ];
        $this->view('posts/show', $data);
    }

    public function edit($id) {
        if(!isset($_SESSION['user_id'])){
            header("Location: /users/login");
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanatize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'title' => trim($_POST['title']),
                'body' =>  trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => ''
            ];

            // Validate data
            if(empty($data['title'])){
                $data['title_err'] = 'Plesae enter title';
            }
            if(empty($data['body'])){
                $data['body_err'] = 'Please enter description';
            }

            // Make sure no errors
            if(empty($data['title_err']) && empty($data['body_err'])){
                // Validated
                if($this->postModel->updatePost($data)){
                    flash('post_message', 'Post Updated');
                    header("Location: /posts/index");

                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('posts/edit', $data);
            }
        } else {
            
            // Get existing post from model
            $post = $this->postModel->getPostByid($id);

            // Check for owner
            if($post->user_id != $_SESSION['user_id']){
                header("Location: /posts/index");
            }
            $data = [
                'id' => $id,
                'title' => $post->title,
                'body' => $post->body,
                'title_err' => '',
                'body_err' => ''
            ];

            // Check for owner
    
            $this->view('posts/edit', $data);
        }
    }

    public function delete($id) {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Get existing post from model
            $post = $this->postModel->getPostByid($id);

            // Check for owner
            if($post->user_id != $_SESSION['user_id']){
                header("Location: /posts/index");
            }

            if($this->postModel->deletePost($id)){
                flash('post_message', 'Post Removed');
            } else {
                die('Something went wrong');
            }
        } else {
            header("Location: /posts/index");
        }
    }
}