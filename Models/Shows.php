<?php

/**
 * Classe Shows qui correspond à la table shows en bdd
 */
class Shows
{
    private $title;
    private $performer;
    private $date;
    private $showTypesId;
    private $firstGenresId;
    private $secondGenreId;
    private $duration;
    private $startTime;

    public function __construct($show)
    {
        $this->setTitle($show['title']);
        $this->setPerformer($show['performer']);
        $this->setDate($show['date']);
        $this->setShowTypesId($show['showTypesId']);
        $this->setFirstGenresId($show['firstGenresId']);
        $this->setSecondGenreId($show['secondGenresId']);
        $this->setDuration($show['duration']);
        $this->setStartTime($show['startTime']);
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param   mixed  $title  
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get the value of performer
     */ 
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Set the value of performer
     *
     * @param   mixed  $performer  
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @param   mixed  $date  
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get the value of showTypesId
     */ 
    public function getShowTypesId()
    {
        return $this->showTypesId;
    }

    /**
     * Set the value of showTypesId
     *
     * @param   mixed  $showTypesId  
     */
    public function setShowTypesId($showTypesId)
    {
        $this->showTypesId = $showTypesId;
    }

    /**
     * Get the value of firstGenresId
     */ 
    public function getFirstGenresId()
    {
        return $this->firstGenresId;
    }

    /**
     * Set the value of firstGenresId
     *
     * @param   mixed  $firstGenresId  
     */
    public function setFirstGenresId($firstGenresId)
    {
        $this->firstGenresId = $firstGenresId;
    }

    /**
     * Get the value of secondGenreId
     */ 
    public function getSecondGenreId()
    {
        return $this->secondGenreId;
    }

    /**
     * Set the value of secondGenreId
     *
     * @param   mixed  $secondGenreId  
     */
    public function setSecondGenreId($secondGenreId)
    {
        $this->secondGenreId = $secondGenreId;
    }

    /**
     * Get the value of duration
     */ 
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     *
     * @param   mixed  $duration  
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * Get the value of startTime
     */ 
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set the value of startTime
     *
     * @param   mixed  $startTime  
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }
}