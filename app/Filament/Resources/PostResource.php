<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan([
                        'sm' => 2,
                        '2xl' => 1,
                    ]),
                Forms\Components\Select::make('language')
                    ->required()
                    ->options([
                        'hu' => 'hu',
                        'en' => 'en',
                    ])
                    ->default('hu')
                    ->columnSpan([
                        'sm' => 2,
                        '2xl' => 1,
                    ]),
                Forms\Components\Textarea::make('excerpt')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpan([
                        'sm' => 2,
                    ]),
                Forms\Components\MarkdownEditor::make('body')
                    ->required()
                    ->maxLength(65535)
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('images')
                    ->fileAttachmentsVisibility('public')
                    ->columnSpan([
                        'sm' => 2,
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('language'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('Y-m-d'),
            ])
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
