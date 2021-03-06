<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protoc/ParserService.protoc

namespace Srv;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>srv.ChapterContentResponse</code>
 */
class ChapterContentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *内容
     *
     * Generated from protobuf field <code>string contents = 1;</code>
     */
    private $contents = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $contents
     *          内容
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protoc\ParserService::initOnce();
        parent::__construct($data);
    }

    /**
     *内容
     *
     * Generated from protobuf field <code>string contents = 1;</code>
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     *内容
     *
     * Generated from protobuf field <code>string contents = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContents($var)
    {
        GPBUtil::checkString($var, True);
        $this->contents = $var;

        return $this;
    }

}

