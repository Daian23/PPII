<?php
class Books {

    private $titleB;
    private $authorB;
    private $pageNumber;
    private $yearEdition;

    public function getTitle()
    {
       return $this->titleB;
    }

    public function setTitle ($title)
    {
        $this->titleB = $title;
    }

    public function getAuthorB()
    {
       return $this->authorB;
    }

    public function setAuthorB ($author)
    {
        $this->authorB = $author;
    }

    public function getPageNumber()
    {
       return $this->pageNumber;
    }

    public function setPageNumber($pageN)
    {
        $this->pageNumber= $pageN;
    }

    public function getYearEdition()
    {
       return $this->yearEdition;
    }

    public function setYearEdition($yearE)
    {
        $this->yearEdition = $yearE;
    }


}
?>