<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GameResource\Pages;
use App\Filament\Resources\GameResource\RelationManagers;
use App\Models\Game;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput; 
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Tables\Columns\TextColumn ; 


class GameResource extends Resource
{
    protected static ?string $model = Game::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form

                ->schema([

                    TextInput::make('title')->required(),
                    Select::make('category_id')->label('Category')
                    ->options(Category::all()->pluck('title', 'id')->toArray()) ,// استخدم toArray() هنا
                   
                    TextInput::make('size') // إضافة حقل size
                    ->label('Size') // تعيين الاسم
                    ->type('number') // تعيين نوع الإدخال إلى number
                    ->step(0.01)
                    ->required() // إذا كنت تريد أن يكون الحقل مطلوبًا
                    ->placeholder('Enter size in double'), 
                
                  FileUpload::make('image')
                    ->label('UploadImages') 
                    ->multiple()
                    ->acceptedFileTypes(['image/*']) // قبول أنواع ملفات الصور فقط
                    ->maxSize(1024) // الحد الأقصى لحجم الملف (1 ميجابايت في هذا المثال)
                   ->required(),

    
                    MarkdownEditor::make('description')->required(),
                    TextInput::make('url_video')->required(),

                    Select::make('type')
                    ->label('Type')
                    ->options([
                        'freement' => 'مجاني',
                        'payment' => 'مدفوع',
                    ])
                    ->reactive()
                    ->afterStateUpdated(fn(callable $set)=>$set('price',null))
                    ->required(),

                    TextInput::make('price') // إضافة حقل price
                      ->numeric() // التأكد من أن الإدخال هو عدد
                      ->label('Price') // تسمية الحقل
                     ->placeholder('مثال: 12.34') // نص توضيحي
                     ->regex('/^\d+(\.\d{1,2})?$/') // تعبير منتظم للسماح برقم عشري برقمين بعد الفاصلة
                     ->helperText('أدخل رقم عشري برقمين بعد الفاصلة مثل: 12.34')
                     ->required(fn(callable $get)=> $get('type') === 'payment')
                     ->disabled(fn(callable $get)=> $get('type') === 'freement') ,// التأكد من أن الحقل مطلوب,
        
                    
        
                    ]); 
                }
       
         
     
    public static function table(Table $table): Table
    {
        return $table
              ->columns([
                TextColumn::make('title'),
                TextColumn::make('description'),
                TextColumn::make('size'),
                TextColumn::make('price'),
                TextColumn::make('type'),
                TextColumn::make('category.title')
                ->label('category')
                ->searchable(),
                
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListGames::route('/'),
            'create' => Pages\CreateGame::route('/create'),
            'edit' => Pages\EditGame::route('/{record}/edit'),
        ];
    }
   
}
