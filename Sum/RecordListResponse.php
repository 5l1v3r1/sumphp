<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/sum.proto

namespace Sum;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sum.RecordListResponse</code>
 */
class RecordListResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 total = 1;</code>
     */
    private $total = 0;
    /**
     * Generated from protobuf field <code>uint64 pages = 2;</code>
     */
    private $pages = 0;
    /**
     * Generated from protobuf field <code>repeated .sum.Record records = 3;</code>
     */
    private $records;

    public function __construct() {
        \GPBMetadata\Proto\Sum::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 total = 1;</code>
     * @return int|string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Generated from protobuf field <code>uint64 total = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkUint64($var);
        $this->total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 pages = 2;</code>
     * @return int|string
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Generated from protobuf field <code>uint64 pages = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPages($var)
    {
        GPBUtil::checkUint64($var);
        $this->pages = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .sum.Record records = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * Generated from protobuf field <code>repeated .sum.Record records = 3;</code>
     * @param \Sum\Record[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sum\Record::class);
        $this->records = $arr;

        return $this;
    }

}

