# Gather content utilities (WIP)

## What it does

1. Pulls content and assets using gather content api
2. Converts shortcodes in body field using wordpress shortcode api
3. Saves the content as JSON to folder

# How it works

1. Enter gather content credentials in `lib/gathercontent.api.php` file
2. Add the short codes that you want to convert to `shortcodes.php`
3. Run `php index.php`
