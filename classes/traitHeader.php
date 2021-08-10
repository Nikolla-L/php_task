<?php
//  თრეითს და შექმნილ კლასს თემატურად დავავალე ჰედერის დახატვა, თუმცა იდეაში ვეცადე არ ავცდენილიყავი დავალების შინაარსს

    trait header {
        public $logo;
        public function drawHeader() {
            echo '<nav class="navbar navbar-light bg-warning shadow-lg">
                    <a class="navbar-brand" href="#">'.$this->logo.'</a>
                    <button class="navbar-toggler" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>';
        }
    }

    class FullHeader {
        const LOGO = "<img src='./images/blogposts.jpg' width='30' height='30' class='d-inline-block align-top' alt='logo'> Blogger";
        use header;
        
        public function setLogo() {
            $this->logo = self::LOGO;
        }
    }
?>