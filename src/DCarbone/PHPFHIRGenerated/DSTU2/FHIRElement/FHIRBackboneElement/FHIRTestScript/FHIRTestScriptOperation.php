<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 10th, 2019 18:12+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * TestScript is a resource that specifies a suite of tests against a FHIR server
 * implementation to determine compliance against the FHIR specification.
 *
 * Class FHIRTestScriptOperation
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptOperation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACCEPT = 'accept';
    const FIELD_ACCEPT_EXT = '_accept';
    const FIELD_CONTENT_TYPE = 'contentType';
    const FIELD_CONTENT_TYPE_EXT = '_contentType';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DESTINATION = 'destination';
    const FIELD_DESTINATION_EXT = '_destination';
    const FIELD_ENCODE_REQUEST_URL = 'encodeRequestUrl';
    const FIELD_ENCODE_REQUEST_URL_EXT = '_encodeRequestUrl';
    const FIELD_LABEL = 'label';
    const FIELD_LABEL_EXT = '_label';
    const FIELD_PARAMS = 'params';
    const FIELD_PARAMS_EXT = '_params';
    const FIELD_REQUEST_HEADER = 'requestHeader';
    const FIELD_REQUEST_HEADER_EXT = '_requestHeader';
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESOURCE_EXT = '_resource';
    const FIELD_RESPONSE_ID = 'responseId';
    const FIELD_RESPONSE_ID_EXT = '_responseId';
    const FIELD_SOURCE_ID = 'sourceId';
    const FIELD_SOURCE_ID_EXT = '_sourceId';
    const FIELD_TARGET_ID = 'targetId';
    const FIELD_TARGET_ID_EXT = '_targetId';
    const FIELD_TYPE = 'type';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';

    /**
     * The content or mime type.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The content-type or mime-type to use for RESTful operation in the 'Accept'
     * header.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType
     */
    protected $accept = null;

    /**
     * The content or mime type.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type'
     * header.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType
     */
    protected $contentType = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The description would be used by test engines for tracking and reporting
     * purposes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which server to perform the operation on.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
     */
    protected $destination = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not to implicitly send the request url in encoded format. The default
     * is true to match the standard RESTful client behavior. Set to false when
     * communicating with a server that does not support encoded url paths.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $encodeRequestUrl = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $label = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Path plus parameters after [type]. Used to set parts of the request URL
     * explicitly.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $params = null;

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Header elements would be used to set HTTP headers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader[]
     */
    protected $requestHeader = [];

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the resource. See http://hl7-fhir.github.io/resourcelist.html.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $resource = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The fixture id (maybe new) to map to the response.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
     */
    protected $responseId = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The id of the fixture used as the body of a PUT or POST request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
     */
    protected $sourceId = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Id of fixture used for extracting the [id], [type], and [vid] for GET requests.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
     */
    protected $targetId = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Server interaction or operation type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $type = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Complete request URL.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $url = null;

    /**
     * FHIRTestScriptOperation Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptOperation::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACCEPT])) {
            $ext = (isset($data[self::FIELD_ACCEPT_EXT]) && is_array($data[self::FIELD_ACCEPT_EXT]))
                ? $data[self::FIELD_ACCEPT_EXT]
                : null;
            if ($data[self::FIELD_ACCEPT] instanceof FHIRContentType) {
                $this->setAccept($data[self::FIELD_ACCEPT]);
            } elseif ($ext && is_scalar($data[self::FIELD_ACCEPT])) {
                $this->setAccept(new FHIRContentType([FHIRContentType::FIELD_VALUE => $data[self::FIELD_ACCEPT]] + $ext));
            } else {
                $this->setAccept(new FHIRContentType($data[self::FIELD_ACCEPT]));
            }
        }
        if (isset($data[self::FIELD_CONTENT_TYPE])) {
            $ext = (isset($data[self::FIELD_CONTENT_TYPE_EXT]) && is_array($data[self::FIELD_CONTENT_TYPE_EXT]))
                ? $data[self::FIELD_CONTENT_TYPE_EXT]
                : null;
            if ($data[self::FIELD_CONTENT_TYPE] instanceof FHIRContentType) {
                $this->setContentType($data[self::FIELD_CONTENT_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_CONTENT_TYPE])) {
                $this->setContentType(new FHIRContentType([FHIRContentType::FIELD_VALUE => $data[self::FIELD_CONTENT_TYPE]] + $ext));
            } else {
                $this->setContentType(new FHIRContentType($data[self::FIELD_CONTENT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_DESTINATION])) {
            $ext = (isset($data[self::FIELD_DESTINATION_EXT]) && is_array($data[self::FIELD_DESTINATION_EXT]))
                ? $data[self::FIELD_DESTINATION_EXT]
                : null;
            if ($data[self::FIELD_DESTINATION] instanceof FHIRInteger) {
                $this->setDestination($data[self::FIELD_DESTINATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESTINATION])) {
                $this->setDestination(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_DESTINATION]] + $ext));
            } else {
                $this->setDestination(new FHIRInteger($data[self::FIELD_DESTINATION]));
            }
        }
        if (isset($data[self::FIELD_ENCODE_REQUEST_URL])) {
            $ext = (isset($data[self::FIELD_ENCODE_REQUEST_URL_EXT]) && is_array($data[self::FIELD_ENCODE_REQUEST_URL_EXT]))
                ? $data[self::FIELD_ENCODE_REQUEST_URL_EXT]
                : null;
            if ($data[self::FIELD_ENCODE_REQUEST_URL] instanceof FHIRBoolean) {
                $this->setEncodeRequestUrl($data[self::FIELD_ENCODE_REQUEST_URL]);
            } elseif ($ext && is_scalar($data[self::FIELD_ENCODE_REQUEST_URL])) {
                $this->setEncodeRequestUrl(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_ENCODE_REQUEST_URL]] + $ext));
            } else {
                $this->setEncodeRequestUrl(new FHIRBoolean($data[self::FIELD_ENCODE_REQUEST_URL]));
            }
        }
        if (isset($data[self::FIELD_LABEL])) {
            $ext = (isset($data[self::FIELD_LABEL_EXT]) && is_array($data[self::FIELD_LABEL_EXT]))
                ? $data[self::FIELD_LABEL_EXT]
                : null;
            if ($data[self::FIELD_LABEL] instanceof FHIRString) {
                $this->setLabel($data[self::FIELD_LABEL]);
            } elseif ($ext && is_scalar($data[self::FIELD_LABEL])) {
                $this->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_LABEL]] + $ext));
            } else {
                $this->setLabel(new FHIRString($data[self::FIELD_LABEL]));
            }
        }
        if (isset($data[self::FIELD_PARAMS])) {
            $ext = (isset($data[self::FIELD_PARAMS_EXT]) && is_array($data[self::FIELD_PARAMS_EXT]))
                ? $data[self::FIELD_PARAMS_EXT]
                : null;
            if ($data[self::FIELD_PARAMS] instanceof FHIRString) {
                $this->setParams($data[self::FIELD_PARAMS]);
            } elseif ($ext && is_scalar($data[self::FIELD_PARAMS])) {
                $this->setParams(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PARAMS]] + $ext));
            } else {
                $this->setParams(new FHIRString($data[self::FIELD_PARAMS]));
            }
        }
        if (isset($data[self::FIELD_REQUEST_HEADER])) {
            $ext = (isset($data[self::FIELD_REQUEST_HEADER_EXT]) && is_array($data[self::FIELD_REQUEST_HEADER_EXT]))
                ? $data[self::FIELD_REQUEST_HEADER_EXT]
                : null;
            if (is_array($data[self::FIELD_REQUEST_HEADER])) {
                foreach($data[self::FIELD_REQUEST_HEADER] as $i => $v) {
                    if ($v instanceof FHIRTestScriptRequestHeader) {
                        $this->addRequestHeader($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addRequestHeader(new FHIRTestScriptRequestHeader([FHIRTestScriptRequestHeader::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addRequestHeader(new FHIRTestScriptRequestHeader($v));
                    }
                }
            } elseif ($data[self::FIELD_REQUEST_HEADER] instanceof FHIRTestScriptRequestHeader) {
                $this->addRequestHeader($data[self::FIELD_REQUEST_HEADER]);
            } elseif ($ext && is_scalar($data[self::FIELD_REQUEST_HEADER])) {
                $this->addRequestHeader(new FHIRTestScriptRequestHeader([FHIRTestScriptRequestHeader::FIELD_VALUE => $data[self::FIELD_REQUEST_HEADER]] + $ext));
            } else {
                $this->addRequestHeader(new FHIRTestScriptRequestHeader($data[self::FIELD_REQUEST_HEADER]));
            }
        }
        if (isset($data[self::FIELD_RESOURCE])) {
            $ext = (isset($data[self::FIELD_RESOURCE_EXT]) && is_array($data[self::FIELD_RESOURCE_EXT]))
                ? $data[self::FIELD_RESOURCE_EXT]
                : null;
            if ($data[self::FIELD_RESOURCE] instanceof FHIRCode) {
                $this->setResource($data[self::FIELD_RESOURCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_RESOURCE])) {
                $this->setResource(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_RESOURCE]] + $ext));
            } else {
                $this->setResource(new FHIRCode($data[self::FIELD_RESOURCE]));
            }
        }
        if (isset($data[self::FIELD_RESPONSE_ID])) {
            $ext = (isset($data[self::FIELD_RESPONSE_ID_EXT]) && is_array($data[self::FIELD_RESPONSE_ID_EXT]))
                ? $data[self::FIELD_RESPONSE_ID_EXT]
                : null;
            if ($data[self::FIELD_RESPONSE_ID] instanceof FHIRId) {
                $this->setResponseId($data[self::FIELD_RESPONSE_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_RESPONSE_ID])) {
                $this->setResponseId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_RESPONSE_ID]] + $ext));
            } else {
                $this->setResponseId(new FHIRId($data[self::FIELD_RESPONSE_ID]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_ID])) {
            $ext = (isset($data[self::FIELD_SOURCE_ID_EXT]) && is_array($data[self::FIELD_SOURCE_ID_EXT]))
                ? $data[self::FIELD_SOURCE_ID_EXT]
                : null;
            if ($data[self::FIELD_SOURCE_ID] instanceof FHIRId) {
                $this->setSourceId($data[self::FIELD_SOURCE_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_SOURCE_ID])) {
                $this->setSourceId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_SOURCE_ID]] + $ext));
            } else {
                $this->setSourceId(new FHIRId($data[self::FIELD_SOURCE_ID]));
            }
        }
        if (isset($data[self::FIELD_TARGET_ID])) {
            $ext = (isset($data[self::FIELD_TARGET_ID_EXT]) && is_array($data[self::FIELD_TARGET_ID_EXT]))
                ? $data[self::FIELD_TARGET_ID_EXT]
                : null;
            if ($data[self::FIELD_TARGET_ID] instanceof FHIRId) {
                $this->setTargetId($data[self::FIELD_TARGET_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_TARGET_ID])) {
                $this->setTargetId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_TARGET_ID]] + $ext));
            } else {
                $this->setTargetId(new FHIRId($data[self::FIELD_TARGET_ID]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCoding($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_URL])) {
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT]))
                ? $data[self::FIELD_URL_EXT]
                : null;
            if ($data[self::FIELD_URL] instanceof FHIRString) {
                $this->setUrl($data[self::FIELD_URL]);
            } elseif ($ext && is_scalar($data[self::FIELD_URL])) {
                $this->setUrl(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_URL]] + $ext));
            } else {
                $this->setUrl(new FHIRString($data[self::FIELD_URL]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<TestScriptOperation{$xmlns}></TestScriptOperation>";
    }


    /**
     * The content or mime type.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The content-type or mime-type to use for RESTful operation in the 'Accept'
     * header.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType
     */
    public function getAccept()
    {
        return $this->accept;
    }

    /**
     * The content or mime type.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The content-type or mime-type to use for RESTful operation in the 'Accept'
     * header.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType $accept
     * @return static
     */
    public function setAccept(FHIRContentType $accept = null)
    {
        $this->accept = $accept;
        return $this;
    }

    /**
     * The content or mime type.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type'
     * header.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * The content or mime type.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type'
     * header.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType $contentType
     * @return static
     */
    public function setContentType(FHIRContentType $contentType = null)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The description would be used by test engines for tracking and reporting
     * purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The description would be used by test engines for tracking and reporting
     * purposes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which server to perform the operation on.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which server to perform the operation on.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger $destination
     * @return static
     */
    public function setDestination($destination = null)
    {
        if (null === $destination) {
            $this->destination = null;
            return $this;
        }
        if ($destination instanceof FHIRInteger) {
            $this->destination = $destination;
            return $this;
        }
        $this->destination = new FHIRInteger($destination);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not to implicitly send the request url in encoded format. The default
     * is true to match the standard RESTful client behavior. Set to false when
     * communicating with a server that does not support encoded url paths.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getEncodeRequestUrl()
    {
        return $this->encodeRequestUrl;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not to implicitly send the request url in encoded format. The default
     * is true to match the standard RESTful client behavior. Set to false when
     * communicating with a server that does not support encoded url paths.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $encodeRequestUrl
     * @return static
     */
    public function setEncodeRequestUrl($encodeRequestUrl = null)
    {
        if (null === $encodeRequestUrl) {
            $this->encodeRequestUrl = null;
            return $this;
        }
        if ($encodeRequestUrl instanceof FHIRBoolean) {
            $this->encodeRequestUrl = $encodeRequestUrl;
            return $this;
        }
        $this->encodeRequestUrl = new FHIRBoolean($encodeRequestUrl);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label would be used for tracking/logging purposes by test engines.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $label
     * @return static
     */
    public function setLabel($label = null)
    {
        if (null === $label) {
            $this->label = null;
            return $this;
        }
        if ($label instanceof FHIRString) {
            $this->label = $label;
            return $this;
        }
        $this->label = new FHIRString($label);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Path plus parameters after [type]. Used to set parts of the request URL
     * explicitly.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Path plus parameters after [type]. Used to set parts of the request URL
     * explicitly.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $params
     * @return static
     */
    public function setParams($params = null)
    {
        if (null === $params) {
            $this->params = null;
            return $this;
        }
        if ($params instanceof FHIRString) {
            $this->params = $params;
            return $this;
        }
        $this->params = new FHIRString($params);
        return $this;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Header elements would be used to set HTTP headers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader[]
     */
    public function getRequestHeader()
    {
        return $this->requestHeader;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Header elements would be used to set HTTP headers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader $requestHeader
     * @return static
     */
    public function addRequestHeader(FHIRTestScriptRequestHeader $requestHeader = null)
    {
        $this->requestHeader[] = $requestHeader;
        return $this;
    }

    /**
     * TestScript is a resource that specifies a suite of tests against a FHIR server
     * implementation to determine compliance against the FHIR specification.
     *
     * Header elements would be used to set HTTP headers.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader[] $requestHeader
     * @return static
     */
    public function setRequestHeader(array $requestHeader = [])
    {
        $this->requestHeader = [];
        if ([] === $requestHeader) {
            return $this;
        }
        foreach($requestHeader as $v) {
            if ($v instanceof FHIRTestScriptRequestHeader) {
                $this->addRequestHeader($v);
            } else {
                $this->addRequestHeader(new FHIRTestScriptRequestHeader($v));
            }
        }
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the resource. See http://hl7-fhir.github.io/resourcelist.html.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the resource. See http://hl7-fhir.github.io/resourcelist.html.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $resource
     * @return static
     */
    public function setResource($resource = null)
    {
        if (null === $resource) {
            $this->resource = null;
            return $this;
        }
        if ($resource instanceof FHIRCode) {
            $this->resource = $resource;
            return $this;
        }
        $this->resource = new FHIRCode($resource);
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The fixture id (maybe new) to map to the response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
     */
    public function getResponseId()
    {
        return $this->responseId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The fixture id (maybe new) to map to the response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId $responseId
     * @return static
     */
    public function setResponseId($responseId = null)
    {
        if (null === $responseId) {
            $this->responseId = null;
            return $this;
        }
        if ($responseId instanceof FHIRId) {
            $this->responseId = $responseId;
            return $this;
        }
        $this->responseId = new FHIRId($responseId);
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The id of the fixture used as the body of a PUT or POST request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The id of the fixture used as the body of a PUT or POST request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId $sourceId
     * @return static
     */
    public function setSourceId($sourceId = null)
    {
        if (null === $sourceId) {
            $this->sourceId = null;
            return $this;
        }
        if ($sourceId instanceof FHIRId) {
            $this->sourceId = $sourceId;
            return $this;
        }
        $this->sourceId = new FHIRId($sourceId);
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Id of fixture used for extracting the [id], [type], and [vid] for GET requests.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
     */
    public function getTargetId()
    {
        return $this->targetId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Id of fixture used for extracting the [id], [type], and [vid] for GET requests.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId $targetId
     * @return static
     */
    public function setTargetId($targetId = null)
    {
        if (null === $targetId) {
            $this->targetId = null;
            return $this;
        }
        if ($targetId instanceof FHIRId) {
            $this->targetId = $targetId;
            return $this;
        }
        $this->targetId = new FHIRId($targetId);
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Server interaction or operation type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Server interaction or operation type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $type
     * @return static
     */
    public function setType(FHIRCoding $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Complete request URL.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Complete request URL.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $url
     * @return static
     */
    public function setUrl($url = null)
    {
        if (null === $url) {
            $this->url = null;
            return $this;
        }
        if ($url instanceof FHIRString) {
            $this->url = $url;
            return $this;
        }
        $this->url = new FHIRString($url);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRTestScriptOperation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTestScriptOperation::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRTestScriptOperation;
        } elseif (!is_object($type) || !($type instanceof FHIRTestScriptOperation)) {
            throw new \RuntimeException(sprintf(
                'FHIRTestScriptOperation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->accept)) {
            $type->setAccept(FHIRContentType::xmlUnserialize($children->accept));
        }
        if (isset($children->contentType)) {
            $type->setContentType(FHIRContentType::xmlUnserialize($children->contentType));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->destination)) {
            $type->setDestination((string)$attributes->destination);
        }
        if (isset($children->destination)) {
            $type->setDestination(FHIRInteger::xmlUnserialize($children->destination));
        }
        if (isset($attributes->encodeRequestUrl)) {
            $type->setEncodeRequestUrl((string)$attributes->encodeRequestUrl);
        }
        if (isset($children->encodeRequestUrl)) {
            $type->setEncodeRequestUrl(FHIRBoolean::xmlUnserialize($children->encodeRequestUrl));
        }
        if (isset($attributes->label)) {
            $type->setLabel((string)$attributes->label);
        }
        if (isset($children->label)) {
            $type->setLabel(FHIRString::xmlUnserialize($children->label));
        }
        if (isset($attributes->params)) {
            $type->setParams((string)$attributes->params);
        }
        if (isset($children->params)) {
            $type->setParams(FHIRString::xmlUnserialize($children->params));
        }
        if (isset($children->requestHeader)) {
            foreach($children->requestHeader as $child) {
                $type->addRequestHeader(FHIRTestScriptRequestHeader::xmlUnserialize($child));
            }
        }
        if (isset($attributes->resource)) {
            $type->setResource((string)$attributes->resource);
        }
        if (isset($children->resource)) {
            $type->setResource(FHIRCode::xmlUnserialize($children->resource));
        }
        if (isset($attributes->responseId)) {
            $type->setResponseId((string)$attributes->responseId);
        }
        if (isset($children->responseId)) {
            $type->setResponseId(FHIRId::xmlUnserialize($children->responseId));
        }
        if (isset($attributes->sourceId)) {
            $type->setSourceId((string)$attributes->sourceId);
        }
        if (isset($children->sourceId)) {
            $type->setSourceId(FHIRId::xmlUnserialize($children->sourceId));
        }
        if (isset($attributes->targetId)) {
            $type->setTargetId((string)$attributes->targetId);
        }
        if (isset($children->targetId)) {
            $type->setTargetId(FHIRId::xmlUnserialize($children->targetId));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCoding::xmlUnserialize($children->type));
        }
        if (isset($attributes->url)) {
            $type->setUrl((string)$attributes->url);
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRString::xmlUnserialize($children->url));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAccept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACCEPT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getContentType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDestination())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESTINATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEncodeRequestUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCODE_REQUEST_URL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLabel())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LABEL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getParams())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARAMS, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getRequestHeader())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST_HEADER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getResponseId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSE_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSourceId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTargetId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET_ID, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_URL, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAccept())) {
            $a[self::FIELD_ACCEPT] = $v;
        }
        if (null !== ($v = $this->getContentType())) {
            $a[self::FIELD_CONTENT_TYPE] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getDestination())) {
            $a[self::FIELD_DESTINATION] = $v->getValue();
            $a[self::FIELD_DESTINATION_EXT] = $v;
        }
        if (null !== ($v = $this->getEncodeRequestUrl())) {
            $a[self::FIELD_ENCODE_REQUEST_URL] = $v->getValue();
            $a[self::FIELD_ENCODE_REQUEST_URL_EXT] = $v;
        }
        if (null !== ($v = $this->getLabel())) {
            $a[self::FIELD_LABEL] = $v->getValue();
            $a[self::FIELD_LABEL_EXT] = $v;
        }
        if (null !== ($v = $this->getParams())) {
            $a[self::FIELD_PARAMS] = $v->getValue();
            $a[self::FIELD_PARAMS_EXT] = $v;
        }
        if ([] !== ($vs = $this->getRequestHeader())) {
            $a[self::FIELD_REQUEST_HEADER] = $vs;
        }
        if (null !== ($v = $this->getResource())) {
            $a[self::FIELD_RESOURCE] = $v->getValue();
            $a[self::FIELD_RESOURCE_EXT] = $v;
        }
        if (null !== ($v = $this->getResponseId())) {
            $a[self::FIELD_RESPONSE_ID] = $v->getValue();
            $a[self::FIELD_RESPONSE_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getSourceId())) {
            $a[self::FIELD_SOURCE_ID] = $v->getValue();
            $a[self::FIELD_SOURCE_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getTargetId())) {
            $a[self::FIELD_TARGET_ID] = $v->getValue();
            $a[self::FIELD_TARGET_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v->getValue();
            $a[self::FIELD_URL_EXT] = $v;
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}