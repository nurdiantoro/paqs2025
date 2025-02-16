<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditOrder extends EditRecord
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        // Redirect ke halaman index setelah update berhasil
        $this->redirect($this->getResource()::getUrl('index'));

        // Opsional: Tambahkan notifikasi jika diperlukan
        Notification::make()
            ->title('Berhasil')
            ->body('Data berhasil diperbarui!')
            ->success()
            ->send();
    }
}
