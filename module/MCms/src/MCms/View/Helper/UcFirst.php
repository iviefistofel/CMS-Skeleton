<?php
namespace MCms\View\Helper;

use Zend\View\Helper\AbstractHelper;

class UcFirst extends AbstractHelper
{
    /**
     * @param  $str String
     * @param  $encoding String
     *
     * @return String
     */
    public function __invoke($str, $encoding = null)
    {
        if ($encoding === null)
            return mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1);
        else
            return mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding) . mb_substr($str, 1, null, $encoding);
    }
}