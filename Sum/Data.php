<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/sum.proto

namespace Sum;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sum.Data</code>
 */
class Data extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool compressed = 1;</code>
     */
    private $compressed = false;
    /**
     * Generated from protobuf field <code>bytes payload = 2;</code>
     */
    private $payload = '';

    public function __construct() {
        \GPBMetadata\Proto\Sum::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bool compressed = 1;</code>
     * @return bool
     */
    public function getCompressed()
    {
        return $this->compressed;
    }

    /**
     * Generated from protobuf field <code>bool compressed = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setCompressed($var)
    {
        GPBUtil::checkBool($var);
        $this->compressed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 2;</code>
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, False);
        $this->payload = $var;

        return $this;
    }

}
