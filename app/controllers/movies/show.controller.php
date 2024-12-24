<?php

$id = $params[0];

$movie = Movie::find($id);

view('movies/show', ['movie' => $movie]);
