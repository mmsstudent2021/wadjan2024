<?php


class FileWriter
{
    private $fileHandle;

    public function __construct(string $filename)
    {
        $this->fileHandle = fopen($filename, 'a+') or die("Unable to open file!");
        // 'a' mode opens the file for writing only; creates the file if it doesn't exist
    }

    public function write(string $content)
    {
        fwrite($this->fileHandle, $content);
    }

    public function __destruct()
    {
        fclose($this->fileHandle);
        // Automatically closes the file when the object is destroyed
    }
}
