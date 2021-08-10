<?php
    class Post {
        public $img;
        public $title;
        public $text;
        public $date;
        public $author;

        public function __construct($img, $title, $text, $author) {
            $this->img = $img;
            $this->title = $title;
            $this->text = $text;
            $this->author = $author;
            $this->date = date("Y-m-d h:ia");
        }

//      მეთოდები თითოეული პარამეტრის შესაცვლელად

        public function setTitle($title) {
            $this->title = $title;
        }
        //მოცემულ შემთხვევაში მხოლოდ jpg გაფართოების ფოტოები აირჩევა images საქაღალდიდან
        public function setImage($img) {
            $this->img = $img;
        }
        public function setText($text) {
            $this->text = $text;
        }
        public function setAuthor($author) {
            $this->author = $author;
        }
        public function setDate($date) {
            $this->date = $date;
        }
    }

    class FullPostCard extends Post {
        const COPYRIGHT = "&copy;2021 ყველა უფლება დაცულია";

//      public ფუნქცია რომელიც მთლიან პოსტს ხატავს, მშობელი კლასიდან მოაქვს პარამეტრები და იყენებს copyright კონსტანტას
        public function drawPostCard() {
            echo '<div class="card w-100 my-5 shadow">
                    <img class="card-img-top bg-light px-4 pt-4" src="images/'.$this->img.'.jpg" alt="img">
                    <div class="card-body pb-0">
                        <h5 class="card-title h2 text-center">'.$this->title.'</h5>
                        <p class="card-text">'.$this->text.'</p>
                        <div class="d-flex align-items-center justify-content-between py-2 px-3">
                            <p class="text-secondary font-italic"> ავტორი: '.$this->author.'</p>
                            <p class="text-secontary">'.$this->date.'</p>
                        </div>
                        <p class="text-secondary text-center mt-3" style="font-size: 12px">'.self::COPYRIGHT.'</p>
                    </div>
                </div>';
        }
    } 
?>