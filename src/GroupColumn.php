<?php

namespace SaineshMamgain\FilamentGroupTableColumn;

use Filament\Tables\Columns\Column;

class GroupColumn extends Column
{
    protected string $view = 'filament.tables.columns.group-column';

    public array $groupColumns;
    public string $columnSeparator = "<br>";

    public function setGroupColumns(array $columns) : static
    {
        $this->groupColumns = $columns;
        return $this;
    }

    public function setColumnSeparator(string $separator) : static
    {
        $this->columnSeparator = $separator;
        return $this;
    }
}
