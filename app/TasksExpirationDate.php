<?php

namespace App;

enum TasksExpirationDate
{
    case PAST;
    case TODAY;
    case FUTURE;
}
