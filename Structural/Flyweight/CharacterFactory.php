<?php

class CharacterFactory
{
    private array $characters = array();

    public function getCharacterByKey($key)
    {
        if (!array_key_exists($key, $this->characters))
        {
            switch($key)
            {
                case 'A': $this->characters[$key] = new CharacterA(); break;
                case 'B': $this->characters[$key] = new CharacterB(); break;
                case 'Z': $this->characters[$key] = new CharacterZ(); break;
            }
        }
        return $this->characters[$key];
    }
}
