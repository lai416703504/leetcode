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
class Summary
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
        $this->readme = fopen($rootDir . '/SUMMARY.md', 'w+');
//        fwrite($this->readme, "# LeetCode\n");
//        fwrite($this->readme, "Original.php 为题目初始代码\n");
        fwrite($this->readme, "# [目录](./SUMMARY.md)\n");


        $this->rootDir = $rootDir;
    }

    public function __destruct()
    {
        fclose($this->readme);
    }

    public function gen()
    {
        $dirArr = scandir($this->rootDir);
        foreach ($dirArr as $file) {
            if (
                substr($file, 0, 1) != '.' //上级目录 本级目录 隐藏目录均不显示
                && is_dir($this->rootDir . '/' . $file
                )
            ) {
                $this->tree($this->rootDir . '/' . $file);
            }
        }

//        $handle->close();
    }

    private function tree($dir, $code = "")
    {
        $dirArr = scandir($dir);
        sort($dirArr, SORT_NUMERIC);
        if (in_array('README.md', $dirArr)) {
            $handle = fopen($dir . '/README.md', 'r');
            $str    = mb_convert_encoding(fgets($handle), 'UTF-8');
            $str    = trim($str, "#\t\n\r\0\x0B");
            fwrite($this->readme, "{$code} - [{$str}]({$dir})\n");
            if (!$handle) {
                fclose($handle);
            }
        }

        foreach ($dirArr as $file) {
            if (
                substr($file, 0, 1) != '.' //上级目录 本级目录 隐藏目录均不显示
                && is_dir($dir . '/' . $file)) {
                $this->tree($dir . '/' . $file, $code . "\t");
            }
        }
    }
}


$rootDir = '.';
$summary   = new Summary($rootDir);
$summary->gen();

//$map = [
//    'Interview' => '面试题',
//    'Item'      => '题库',
//];