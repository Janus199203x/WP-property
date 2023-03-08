<?php

/**
 * SendSmtpEmailMessageVersions
 *
 * PHP version 5
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |   | 406  | Error. Not Acceptable  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */
namespace EasyWPSMTP\Vendor\SendinBlue\Client\Model;

use ArrayAccess;
use EasyWPSMTP\Vendor\SendinBlue\Client\ObjectSerializer;
/**
 * SendSmtpEmailMessageVersions Class Doc Comment
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SendSmtpEmailMessageVersions implements \EasyWPSMTP\Vendor\SendinBlue\Client\Model\ModelInterface, \ArrayAccess
{
    const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'sendSmtpEmail_messageVersions';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = ['to' => 'EasyWPSMTP\\Vendor\\SendinBlue\\Client\\Model\\SendSmtpEmailTo1[]', 'params' => 'map[string,object]', 'bcc' => 'EasyWPSMTP\\Vendor\\SendinBlue\\Client\\Model\\SendSmtpEmailBcc[]', 'cc' => 'EasyWPSMTP\\Vendor\\SendinBlue\\Client\\Model\\SendSmtpEmailCc[]', 'replyTo' => 'EasyWPSMTP\\Vendor\\SendinBlue\\Client\\Model\\SendSmtpEmailReplyTo1', 'subject' => 'string'];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = ['to' => null, 'params' => null, 'bcc' => null, 'cc' => null, 'replyTo' => null, 'subject' => null];
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = ['to' => 'to', 'params' => 'params', 'bcc' => 'bcc', 'cc' => 'cc', 'replyTo' => 'replyTo', 'subject' => 'subject'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = ['to' => 'setTo', 'params' => 'setParams', 'bcc' => 'setBcc', 'cc' => 'setCc', 'replyTo' => 'setReplyTo', 'subject' => 'setSubject'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = ['to' => 'getTo', 'params' => 'getParams', 'bcc' => 'getBcc', 'cc' => 'getCc', 'replyTo' => 'getReplyTo', 'subject' => 'getSubject'];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];
    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['bcc'] = isset($data['bcc']) ? $data['bcc'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['replyTo'] = isset($data['replyTo']) ? $data['replyTo'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
    }
    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        return $invalidProperties;
    }
    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return \count($this->listInvalidProperties()) === 0;
    }
    /**
     * Gets to
     *
     * @return \SendinBlue\Client\Model\SendSmtpEmailTo1[]
     */
    public function getTo()
    {
        return $this->container['to'];
    }
    /**
     * Sets to
     *
     * @param \SendinBlue\Client\Model\SendSmtpEmailTo1[] $to List of email addresses and names (_optional_) of the recipients. For example, [{\"name\":\"Jimmy\", \"email\":\"jimmy98@example.com\"}, {\"name\":\"Joe\", \"email\":\"joe@example.com\"}]
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }
    /**
     * Gets params
     *
     * @return map[string,object]
     */
    public function getParams()
    {
        return $this->container['params'];
    }
    /**
     * Sets params
     *
     * @param map[string,object] $params Pass the set of attributes to customize the template. For example, {\"FNAME\":\"Joe\", \"LNAME\":\"Doe\"}. It's considered only if template is in New Template Language format.
     *
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;
        return $this;
    }
    /**
     * Gets bcc
     *
     * @return \SendinBlue\Client\Model\SendSmtpEmailBcc[]
     */
    public function getBcc()
    {
        return $this->container['bcc'];
    }
    /**
     * Sets bcc
     *
     * @param \SendinBlue\Client\Model\SendSmtpEmailBcc[] $bcc List of email addresses and names (optional) of the recipients in bcc
     *
     * @return $this
     */
    public function setBcc($bcc)
    {
        $this->container['bcc'] = $bcc;
        return $this;
    }
    /**
     * Gets cc
     *
     * @return \SendinBlue\Client\Model\SendSmtpEmailCc[]
     */
    public function getCc()
    {
        return $this->container['cc'];
    }
    /**
     * Sets cc
     *
     * @param \SendinBlue\Client\Model\SendSmtpEmailCc[] $cc List of email addresses and names (optional) of the recipients in cc
     *
     * @return $this
     */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;
        return $this;
    }
    /**
     * Gets replyTo
     *
     * @return \SendinBlue\Client\Model\SendSmtpEmailReplyTo1
     */
    public function getReplyTo()
    {
        return $this->container['replyTo'];
    }
    /**
     * Sets replyTo
     *
     * @param \SendinBlue\Client\Model\SendSmtpEmailReplyTo1 $replyTo replyTo
     *
     * @return $this
     */
    public function setReplyTo($replyTo)
    {
        $this->container['replyTo'] = $replyTo;
        return $this;
    }
    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }
    /**
     * Sets subject
     *
     * @param string $subject Custom subject specific to message version
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (\is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (\defined('JSON_PRETTY_PRINT')) {
            // use JSON pretty print
            return \json_encode(\EasyWPSMTP\Vendor\SendinBlue\Client\ObjectSerializer::sanitizeForSerialization($this), \JSON_PRETTY_PRINT);
        }
        return \json_encode(\EasyWPSMTP\Vendor\SendinBlue\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
