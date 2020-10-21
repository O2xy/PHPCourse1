<?php
function getFiles(string $directory): array {
    return array_filter(
        scandir($directory),
        function($item) use ($directory) {
            return !is_dir($directory . "/" . $item);
        }
    );
}
