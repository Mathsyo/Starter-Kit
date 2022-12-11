<?php

namespace App\Http\Livewire;

use App\Models\User;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Livewire\Component;

class ListUsers extends Component implements HasTable
{

    use InteractsWithTable;

    protected function getTableQuery()
    {
        return User::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name')
                ->sortable()
                ->searchable(),
            TextColumn::make('email')
                ->sortable()
                ->searchable(),
            TextColumn::make('roles.name')
                ->sortable()
                ->searchable(),

        ];
    }

    protected function getTableFilters(): array
    {
        return [];
    }

    protected function getTableActions(): array
    {
        return [];
    }

    protected function getTableBulkActions(): array
    {
        return [];
    }

    protected function isTablePaginationEnabled(): bool
    {
        return true;
    }

    protected function getTableRecordsPerPageSelectOptions(): array
    {
        return [10, 25, 50, 100];
    }

    public function isTableSearchable(): bool
    {
        return true;
    }

    protected function getTableEmptyStateIcon(): ?string
    {
        return 'heroicon-o-user';
    }

    protected function getTableEmptyStateHeading(): ?string
    {
        return 'No users yet';
    }

    protected function getTableEmptyStateDescription(): ?string
    {
        return 'You may create a post using the button below.';
    }

    protected function getTableEmptyStateActions(): array
    {
        return [
            Action::make('create')
                ->label('Create post')
                ->url(route('posts.create'))
                ->icon('heroicon-o-plus')
                ->button(),
        ];
    }

    public function render()
    {
        return view('livewire.list-users');
    }
}
