<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/sum.proto

namespace Sum;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sum.ListRequest</code>
 */
class ListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 page = 1;</code>
     */
    private $page = 0;
    /**
     * Generated from protobuf field <code>uint64 per_page = 2;</code>
     */
    private $per_page = 0;

    public function __construct() {
        \GPBMetadata\Proto\Sum::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 page = 1;</code>
     * @return int|string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Generated from protobuf field <code>uint64 page = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkUint64($var);
        $this->page = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 per_page = 2;</code>
     * @return int|string
     */
    public function getPerPage()
    {
        return $this->per_page;
    }

    /**
     * Generated from protobuf field <code>uint64 per_page = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPerPage($var)
    {
        GPBUtil::checkUint64($var);
        $this->per_page = $var;

        return $this;
    }

}

