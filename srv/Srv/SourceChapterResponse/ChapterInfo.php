<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protoc/BookService.protoc

namespace Srv\SourceChapterResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>srv.SourceChapterResponse.ChapterInfo</code>
 */
class ChapterInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string source = 1;</code>
     */
    private $source = '';
    /**
     * Generated from protobuf field <code>string chapterLink = 2;</code>
     */
    private $chapterLink = '';
    /**
     * Generated from protobuf field <code>int32 chapterCount = 3;</code>
     */
    private $chapterCount = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source
     *     @type string $chapterLink
     *     @type int $chapterCount
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protoc\BookService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string source = 1;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Generated from protobuf field <code>string source = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string chapterLink = 2;</code>
     * @return string
     */
    public function getChapterLink()
    {
        return $this->chapterLink;
    }

    /**
     * Generated from protobuf field <code>string chapterLink = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setChapterLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->chapterLink = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 chapterCount = 3;</code>
     * @return int
     */
    public function getChapterCount()
    {
        return $this->chapterCount;
    }

    /**
     * Generated from protobuf field <code>int32 chapterCount = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setChapterCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->chapterCount = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChapterInfo::class, \Srv\SourceChapterResponse_ChapterInfo::class);

