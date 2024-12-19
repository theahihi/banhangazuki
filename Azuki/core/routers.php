<?php

    class Router {
        protected $controller = 'taikhoancontroller';
        protected $action = 'login';
        protected $params = [];
        
        private function parseUrl($uri) {
            //echo "Chuỗi URI:";
            //var_dump(explode('/', filter_var(rtrim($uri, '/'), FILTER_SANITIZE_URL)));
            return explode('/', filter_var(rtrim($uri, '/'), FILTER_SANITIZE_URL));
        }
        public function dispatch($uri) {
            $url = $this->parseUrl($uri);
            
            // Kiểm tra nếu controller tồn tại

            if ( isset($url[2]) && file_exists('app/Controllers/' . $url[2] . 'Controller.php')) {
                $this->controller = ucfirst($url[2]) . 'Controller';
                unset($url[2]);
            }
        
            require_once 'app/Controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;
        
            // Kiểm tra nếu action tồn tại
            if (isset($url[3]) && method_exists($this->controller, $url[3])) {
                $this->action = $url[3];
                unset($url[3]);
            }
        
            // Kiểm tra và loại bỏ tham số trên URL
            $currentUrl = strtok($_SERVER['REQUEST_URI'], '?'); // Chỉ lấy URL trước dấu ?
            if ($currentUrl != $_SERVER['REQUEST_URI']) {
                // Redirect về URL không chứa tham số
                header("Location: $currentUrl");
                exit;
            }
        
            unset($url[0]);
            unset($url[1]);
            $this->params = $url ? array_values($url) : [];
        
            // Gọi controller với action và tham số
            call_user_func_array([$this->controller, $this->action], $this->params);
        }
        
        

        
    }
?>