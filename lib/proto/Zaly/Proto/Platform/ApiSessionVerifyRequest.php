<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/api_session_verify.proto

namespace Zaly\Proto\Platform;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: platform.api.session.verify
 *
 * Generated from protobuf message <code>platform.ApiSessionVerifyRequest</code>
 */
class ApiSessionVerifyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string preSessionId = 1;</code>
     */
    private $preSessionId = '';

    public function __construct() {
        \GPBMetadata\Platform\ApiSessionVerify::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string preSessionId = 1;</code>
     * @return string
     */
    public function getPreSessionId()
    {
        return $this->preSessionId;
    }

    /**
     * Generated from protobuf field <code>string preSessionId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPreSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->preSessionId = $var;

        return $this;
    }

}

