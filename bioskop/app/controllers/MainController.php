<?php
    class MainController extends Controller {
        public function login() {
            if (!empty($_POST)) {
                $username = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
                $password = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);

                //$hash = hash('sha512', $password . Configuration::USER_SALT);
                //unset($password);

                $user = AdminModel::getByUsernameAndPassword($username, $password);
                //unset($hash);
//              
                if ($user) {
                    Session::set('admin_id', $user->admin_id);
                    Session::set('username', $username);
                    Session::set('ip', filter_input(INPUT_SERVER, 'REMOTE_ADDR'));
                    Session::set('user_agent', filter_input(INPUT_SERVER, 'HTTP_USER_AGENT', FILTER_SANITIZE_STRING));
                    Misc::redirect('adminProfil');
                } else {
                    Misc::redirect("index");
                    $this->set('message', 'Nisu dobri login parametri.');
                    sleep(1);
                }
            }
        }

        public function logout() {
            Session::end();
            Misc::redirect('login');
        }
    }
