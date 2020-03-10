<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/10 11:43
 **/

/**
 * 自动生成README文件
 * Class Directories
 */
class Directories
{
    /**
     * @var false|resource
     */
    private $readme;

    /**
     * @var string
     */
    private $rootDir;

    public function __construct($rootDir)
    {
        $this->readme = fopen($rootDir . '/README.md', 'w+');
        fwrite($this->readme, "# LeetCode\n");
        fwrite($this->readme, "Original.php 为题目初始代码\n");
        fwrite($this->readme, "## [目录](./)\n");


        $this->rootDir = $rootDir;
    }

    public function __destruct()
    {
        fclose($this->readme);
    }

    public function gen()
    {
        $handle = dir($this->rootDir);
        while ($file = $handle->read()) {
            if (
                substr($file, 0, 1) != '.' &&
                is_dir($this->rootDir . '/' . $file)
            ) {
                $this->tree($this->rootDir . '/' . $file);
            }
        }

        $handle->close();
    }

    private function tree($dir, $code = "")
    {
        $mydir = dir($dir);

        if (in_array('README.md', scandir($dir))) {
            $handle = fopen($dir . '/README.md', 'r');
            $str    = mb_convert_encoding(fgets($handle), 'UTF-8');
            $str    = trim($str, "#\t\n\r\0\x0B");
//            - [面试题57 - II. 和为s的连续正数序列](./Interview/find-continuous-sequence/)
            fwrite($this->readme, "{$code} - [{$str}]({$dir})\n");
            if (!$handle) {
                fclose($handle);
            }
        }

        while ($file = $mydir->read()) {
            if (is_dir($dir . '/' . $file) && $file != '.' && $file != '..') {
//                echo $code . $dir . '/' . $file . PHP_EOL;
                $this->tree($dir . '/' . $file, $code . "\t");
            }

        }

        $mydir->close();
    }
}


$rootDir = '.';
$class   = new Directories($rootDir);
$class->gen();

//$map = [
//    'Interview' => '面试题',
//    'Item'      => '题库',
//];