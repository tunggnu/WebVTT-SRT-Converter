# WebVTT-to-SRT
A PHP command line script to convert a subtitles from WebVTT format to SubRip format

## Usage
### webvtt2srt.php /some/path/original.vtt other/path/result.srt

This script is very simple. You provide 2 files: an original file in WebVTT and a result file.
Because WebVTT and SRT are almost identical so this script will use the PHP PCRE extension to replace the old text with the new text.

#### Note: If PHP is not properly recognizing the line endings when reading files either on or created by a Macintosh computer, enabling the auto_detect_line_endings run-time configuration option may help resolve the problem.
