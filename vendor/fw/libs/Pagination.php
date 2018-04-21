<?php

namespace fw\libs;

class Pagination
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var
     */
    public $perPage;
    /**
     * @var
     */
    public $total;
    /**
     * @var int
     */
    public $countPages;
    /**
     * @var
     */
    public $uri;

    /**
     * Pagination constructor.
     * @param $page
     * @param $perPage
     * @param $total
     */
    public function __construct($page,$perPage,$total)
    {
        $this->perPage = $perPage;
        $this->total = $total;
        $this->countPages = $this->getCountPages();
        $this->currentPage = $this->getCurrentPage($page);
        $this->uri = $this->getParams();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getHtml();
    }

    /**
     * @return string
     */
    public function getHtml()
    {
        $back = null;
        $forward = null;
        $startpage = null;
        $endpage = null;
        $page2left = null;
        $page1left = null;
        $page2right = null;
        $page1right = null;

        if ($this->currentPage > 1)
        {
            $back = "<li><a href='{$this->uri}page=".($this->currentPage - 1)."' class='nav-link'>&lt;</a></li>";
        }
        if ($this->currentPage < $this->countPages)
        {
            $forward = "<li><a href='{$this->uri}page=". ($this->currentPage + 1) ."' class='nav-link'>&gt;</a></li>";
        }
        if ($this->currentPage > 3)
        {
            $startpage = "<li><a href='{$this->uri}page=1' class='nav-link'>&laquo;</a></li>";
        }
        if ($this->currentPage < ($this->countPages - 2))
        {
            $endpage = "<li><a href='{$this->uri}page=". ($this->countPages) ."' class='nav-link'>&raquo;</a></li>";
        }
        if ($this->currentPage - 2 > 0)
        {
            $page2left = "<li><a href='{$this->uri}page=". ($this->currentPage - 2) ."' class='nav-link'>". ($this->currentPage - 2) ."</a></li>";
        }
        if ($this->currentPage - 1 > 0)
        {
            $page1left = "<li><a href='{$this->uri}page=". ($this->currentPage - 1) ."' class='nav-link'>". ($this->currentPage - 1) ."</a></li>";
        }
        if ($this->currentPage + 1 <= $this->countPages)
        {
            $page1right = "<li><a href='{$this->uri}page=". ($this->currentPage + 1) ."' class='nav-link'>". ($this->currentPage + 1) ."</a></li>";
        }
        if ($this->currentPage + 2 <= $this->countPages)
        {
            $page1right = "<li><a href='{$this->uri}page=". ($this->currentPage + 2) ."' class='nav-link'>". ($this->currentPage + 2) ."</a></li>";
        }

        return '<ul class="pagination">'. $startpage.$back.$page2left.$page1left .'<li class="active"><a>'. $this->currentPage .'</a></li>'.$page1right.$page2right.$forward.$endpage .'</ul>';
    }

    /**
     * @return int
     */
    public function getCountPages()
    {
        return ceil($this->total / $this->perPage) ?: 1;
    }

    /**
     * @return int
     */
    public function getCurrentPage()
    {
        if (!$page || $page < 1) $page = 1;
        if ($page > $this->currentPage) $page = $this->currentPage;
        return $page;
    }

    /**
     * @return float|int
     */
    public function getStart()
    {
        return ($this->currentPage - 1) * $this->perPage;
    }

    /**
     * @return string
     */
    public function getParams()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('?',$url);
        $uri = $url[0] . '?';
        if (isset($url[1]) && $url[1] != '')
        {
            $params = explode('&', $url[1]);
            foreach ($params as $param)
            {
                if (!preg_match("#page=#", $param)) $uri .= "{$param}&amp;";
            }
        }
        return $uri;
    }

}