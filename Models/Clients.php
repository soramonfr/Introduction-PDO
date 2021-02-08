<?php

/**
 * Classe Clients qui correspond à la table clients en bdd
 */
class Clients
{

    private $lastName;
    private $firstName;
    private $birthDate;
    private $card;
    private $cardNumber;

    public function __construct($client)
    {
        $this->setLastName($client['lastName']);
        $this->setFirstName($client['firstName']);
        $this->setBirthDate($client['birthDate']);
        $this->setCard($client['card']);
        $this->setCardNumber($client['cardNumber']);
    }


    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @param   mixed  $lastName  
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @param   mixed  $firstName  
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get the value of birthDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set the value of birthDate
     *
     * @param   mixed  $birthDate  
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * Get the value of card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set the value of card
     *
     * @param   mixed  $card  
     */
    public function setCard($card)
    {
        $this->card = $card;
    }

    /**
     * Get the value of cardNumber
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set the value of cardNumber
     *
     * @param   mixed  $cardNumber  
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }
}
