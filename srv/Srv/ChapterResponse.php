<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protoc/ParserService.protoc

namespace Srv;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>srv.ChapterResponse</code>
 */
class ChapterResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .srv.ChapterResponse.Chapter chapters = 1;</code>
     */
    private $chapters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Srv\ChapterResponse\Chapter[]|\Google\Protobuf\Internal\RepeatedField $chapters
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protoc\ParserService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .srv.ChapterResponse.Chapter chapters = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChapters()
    {
        return $this->chapters;
    }

    /**
     * Generated from protobuf field <code>repeated .srv.ChapterResponse.Chapter chapters = 1;</code>
     * @param \Srv\ChapterResponse\Chapter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChapters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Srv\ChapterResponse\Chapter::class);
        $this->chapters = $arr;

        return $this;
    }

}

