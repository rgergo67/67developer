<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\PostResource\Pages\ListPosts;
use App\Filament\Resources\PostResource\Pages\CreatePost;
use App\Filament\Resources\PostResource\Pages\EditPost;
use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan([
                        'sm' => 2,
                        '2xl' => 1,
                    ]),
                Select::make('language')
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
                Textarea::make('excerpt')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpan([
                        'sm' => 2,
                    ]),
                MarkdownEditor::make('body')
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
                TextColumn::make('title'),
                TextColumn::make('language'),
                TextColumn::make('created_at')
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
            'index' => ListPosts::route('/'),
            'create' => CreatePost::route('/create'),
            'edit' => EditPost::route('/{record}/edit'),
        ];
    }
}
