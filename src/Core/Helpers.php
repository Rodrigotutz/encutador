<?php

function asset($path): string {
    return getenv("APP_URL")."/assets/$path";
}