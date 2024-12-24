<?php
const PUBLIC_DIR = __DIR__ . '/';
const BASE_DIR = __DIR__ . '/../';

require '../app/models/User.php';

session_start();

require '../Flash.php';

require '../functions.php';

$configs = require '../configs.php';

require '../Database.php';

require '../Validation.php';

require '../app/models/Movie.php';
require '../app/models/Category.php';

require '../router.php';
