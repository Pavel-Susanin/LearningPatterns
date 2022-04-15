<?php

class Sql
{
    private array $fields = array();
    private array $from = array();
    private array $where = array();

    public function select(array $fields): Sql
    {
        $this->fields = $fields;
    }

    public function from (string $table, string $alias): Sql
    {
        $this->from[] = $table . ' AS ' . $alias;

        return $this;
    }

    public function where (string $condition): Sql
    {
        $this->where[] = $condition;

        return $this;
    }

    public function __toString(): string
    {
        return sprintf(
            'SELECT %s FROM %s WHERE %s',
            join(', ', $this->fields),
            join(', ', $this->from),
            join(' AND ', $this->where)
        );
    }
}