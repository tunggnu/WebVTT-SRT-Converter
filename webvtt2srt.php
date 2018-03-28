<?php

/**
 * Example command on Linux:
 *   php webvtt2srt.php file.vtt [file.srt]
 */
// Check command line mode
if (empty($argv) or $argc <2)
{
    echo ("usage instructions: \n");
    exit ("webvtt2srt.php file.vtt [file.srt]\n");
}

// Get file paths
$webVttFile = $argv[1];

// If srt filename was passed
if ($argc > 2)
{
    $srtFile = $argv[2];
}
else
{
    $info = pathinfo($argv[1]);

    $srtFile = ($info['dirname'] ? $info['dirname'] . DIRECTORY_SEPARATOR : '')
        . $info['filename']
        . '.srt';
}

// Read the WebVTT file content into an array of lines
$lines = file($webVttFile);

// Convert all timestamp lines
// The first timestamp line is 3
$length = count($lines);

for ($index = 3; $index < $length; $index++)
{
    // A line is a timestamp line if the second line above it is an empty line
    if ( trim($lines[$index - 2]) === '' )
    {
        $lines[$index] = str_replace('.', ',', $lines[$index]);
    }
}

// Remove 2 first lines of WebVTT format
unset($lines[0]);
unset($lines[1]);

// Concatenate all other lines into the result file
file_put_contents($srtFile, implode('', $lines));
