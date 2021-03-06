<?php
/*
    Title: GEARED 
    Description: Mock-up musical equipment discussion board.
    File Summary: Users controller
    Date: 2021-08-23
    Author: Coty McKinney
*/

    class Users extends Controller {
        protected function Index() {
            $viewModel = new UserModel();
            $this->returnView($viewModel->Index(), true);
        }

        protected function Login() {
            $viewModel = new UserModel();
            $this->returnView($viewModel->Login(), true);
        }

        protected function Register() {
            $viewModel = new UserModel();
            $this->returnView($viewModel->Register(), true);
        }

        protected function Logout() {
            unset($_SESSION['is_logged_in']);
            unset($_SESSION['user_data']);
            session_destroy();
            header('location: '.ROOT_URL);
        }
    }


?>