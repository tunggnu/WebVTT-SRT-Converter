# WebVTT-to-SRT
A PHP **command line** script to convert a subtitles from WebVTT format to SubRip format

## Usage
This script is very simple. You provide 2 file-paths: one for the original file in WebVTT format and another for the result file.

`php webvtt2srt.php </some/path/original.vtt> <other/path/result.srt>`

**Note:** *If PHP is not properly recognizing the line endings when reading files either on or created by a Macintosh computer, enabling the `auto_detect_line_endings` run-time configuration option may help resolve the problem.*

## How it works
Because WebVTT format and SRT format are almost identical, this script will use the ~~PHP PCRE extension~~ built-in function `str_replace` to modify the timestamp lines.

## Test
I tested it on Linux Mint 17 (based on Ubuntu 14.04) with both Windows and Unix line endings (LF and CRLF).

## Fork it!
This script runs in command line mode. It's easy to modify it to run in web mode.

Also, it's easy to create another script to convert backward from SubRip to WebVTT.

Hope to see your modification soon :)

## My story
As a self-taught developer, I find out that free online sources as Coursera, edX, Udacity, Microsoft Virtual Academy etc. are invaluable. I want to translate their courses to have a better understanding on topics and help others save their time. So I need a tool to convert the WebVTT format to SupRip format because Coursera or Microsoft Virtual Academy use WebVTT format for their courses. Although Coursera provides a better environment for translators, it require too much time to validate the translation. Therefore I decide to code a WebVTT-to-SubRip converter in PHP (the language I know most) then use other subtitles tool (such as Gnome Subtitles or Aegisub) to translate the SubRip result.
