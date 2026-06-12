<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccessoryResource\Pages;
use App\Models\Accessory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AccessoryResource extends Resource
{
    // Note a grafia com dois "c", alinhada com a imagem da sua estrutura
    protected static ?string $model = Accessory::class; 

    protected static ?string $navigationIcon = 'heroicon-o-device-phone-mobile';
    protected static ?string $navigationLabel = 'Acessórios';
    protected static ?string $modelLabel = 'Acessório';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Select::make('product_id')
                            ->label('Vincular ao Produto Base')
                            ->relationship('product', 'name')
                            ->required()
                            ->searchable(),

                        Forms\Components\TextInput::make('compatibility')
                            ->label('Compatibilidade (Celular/PC)')
                            ->placeholder('Ex: iPhone 13, iPhone 14, Mac M1')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('color')
                            ->label('Cor')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('material')
                            ->label('Material')
                            ->placeholder('Ex: Silicone, Couro, Nylon')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Toggle::make('has_extended_warranty')
                            ->label('Possui Garantia Estendida?')
                            ->inline(false)
                            ->default(false),
                    ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product.name')->label('Produto Base')->searchable(),
                Tables\Columns\TextColumn::make('compatibility')->label('Compatibilidade'),
                Tables\Columns\TextColumn::make('color')->label('Cor'),
                Tables\Columns\TextColumn::make('material')->label('Material'),
                Tables\Columns\IconColumn::make('has_extended_warranty')
                    ->label('Garantia Estendida')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAccessories::route('/'),
            'create' => Pages\CreateAccessory::route('/create'),
            'edit' => Pages\EditAccessory::route('/{record}/edit'),
        ];
    }
}