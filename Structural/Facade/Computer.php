<?php

class Computer
{
    protected CPU $cpu;
    protected Memory $memory;
    protected HardDrive $hardDrive;

    public function __construct()
    {
        $this->cpu = new CPU();
        $this->memory = new Memory();
        $this->hardDrive = new HardDrive();
    }

    public function startComputer()
    {
        $this->cpu->freeze();
        $this->memory->load(
            $this->memory::BOOT_ADDRESS,
            $this->hardDrive->read($this->hardDrive::BOOT_SECTOR, $this->hardDrive::SECTOR_SIZE)
        );
        $this->cpu->jump($this->memory::BOOT_ADDRESS);
        echo $this->cpu->execute();
    }
}