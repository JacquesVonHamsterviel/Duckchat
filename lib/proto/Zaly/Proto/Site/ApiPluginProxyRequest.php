<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_plugin_proxy.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: api.plugin.proxy
 *
 * Generated from protobuf message <code>site.ApiPluginProxyRequest</code>
 */
class ApiPluginProxyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 pluginId = 1;</code>
     */
    private $pluginId = 0;
    /**
     * Generated from protobuf field <code>string url = 2;</code>
     */
    private $url = '';
    /**
     * Generated from protobuf field <code>.core.HttpQueryType method = 3;</code>
     */
    private $method = 0;
    /**
     * Generated from protobuf field <code>bytes body = 4;</code>
     */
    private $body = '';
    /**
     * Generated from protobuf field <code>string cookie = 5;</code>
     */
    private $cookie = '';
    /**
     * Generated from protobuf field <code>map<string, string> headers = 6;</code>
     */
    private $headers;

    public function __construct() {
        \GPBMetadata\Site\ApiPluginProxy::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 pluginId = 1;</code>
     * @return int
     */
    public function getPluginId()
    {
        return $this->pluginId;
    }

    /**
     * Generated from protobuf field <code>int32 pluginId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPluginId($var)
    {
        GPBUtil::checkInt32($var);
        $this->pluginId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url = 2;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.core.HttpQueryType method = 3;</code>
     * @return int
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Generated from protobuf field <code>.core.HttpQueryType method = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkEnum($var, \Zaly\Proto\Core\HttpQueryType::class);
        $this->method = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes body = 4;</code>
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Generated from protobuf field <code>bytes body = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkString($var, False);
        $this->body = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cookie = 5;</code>
     * @return string
     */
    public function getCookie()
    {
        return $this->cookie;
    }

    /**
     * Generated from protobuf field <code>string cookie = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCookie($var)
    {
        GPBUtil::checkString($var, True);
        $this->cookie = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> headers = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Generated from protobuf field <code>map<string, string> headers = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setHeaders($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->headers = $arr;

        return $this;
    }

}
