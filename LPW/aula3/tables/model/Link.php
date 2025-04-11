<?php
class Link {
    private $LinkImg;
    private $info;

    public function __construct($LinkImg, $info) {
        $this->LinkImg = $LinkImg;
        $this->info = $info;
    }


    /**
     * Get the value of LinkImg
     */
    public function getLinkImg()
    {
        return $this->LinkImg;
    }

    /**
     * Set the value of LinkImg
     */
    public function setLinkImg($LinkImg): self
    {
        $this->LinkImg = $LinkImg;

        return $this;
    }

    /**
     * Get the value of info
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set the value of info
     */
    public function setInfo($info): self
    {
        $this->info = $info;

        return $this;
    }
}
