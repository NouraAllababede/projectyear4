<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GameService;

class GaController extends Controller
{
    //

    protected $gameService;

    public function __construct(GameService $gameService)
    {
        $this->gameService = $gameService;
    }

    public function index()
    {
        $games = $this->gameService->getAllGames();
      //  return view('games.index', compact('games'));
      return json_encode($games) ;
    }

    public function show($id)
    {
        $game = $this->gameService->getGameById($id);
        return view('games.show', compact('game'));
    }
}

