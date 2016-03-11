<?php
class Article
{
    public $author;

    public function __construct($author)
    {
        $this->author = $author;
    }
    public function __get($name)
    {
        echo "__get:$name<br/>";
    }
    public function __set($name,$value)
    {
        $this->$name=$value;
    }
    public function __call($name,$arguments)
    {
        echo "<br/>".$name."()<br/";
        print_r($arguments);
    }

}

$article = new Article("Article");
echo $article->author;
$article ->content;
$article->show = "Myshow";
echo $article->show;
$article->test("a","b","c");
