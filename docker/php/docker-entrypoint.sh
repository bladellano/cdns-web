#!/bin/sh

# Exit immediately if a command exits with a non-zero status.
set -e

# If vendor directory does not exist, run composer install
if [ ! -d "vendor" ]; then
    composer install
fi

# Execute the main container command (e.g., "php-fpm")
exec "$@"
