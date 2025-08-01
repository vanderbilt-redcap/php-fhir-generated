<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A digital signature along with supporting context. The signature may be
 * electronic/cryptographic in nature, or a graphical image representing a
 * hand-written signature, or a signature process. Different signature approaches
 * have different utilities.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRSignature
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement
 */
class FHIRSignature extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SIGNATURE;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_BLOB = 'blob';
    const FIELD_BLOB_EXT = '_blob';
    const FIELD_CONTENT_TYPE = 'contentType';
    const FIELD_CONTENT_TYPE_EXT = '_contentType';
    const FIELD_ON_BEHALF_OF_REFERENCE = 'onBehalfOfReference';
    const FIELD_ON_BEHALF_OF_URI = 'onBehalfOfUri';
    const FIELD_ON_BEHALF_OF_URI_EXT = '_onBehalfOfUri';
    const FIELD_TYPE = 'type';
    const FIELD_WHEN = 'when';
    const FIELD_WHEN_EXT = '_when';
    const FIELD_WHO_REFERENCE = 'whoReference';
    const FIELD_WHO_URI = 'whoUri';
    const FIELD_WHO_URI_EXT = '_whoUri';

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The base64 encoding of the Signature content. When signature is not recorded
     * electronically this element would be empty.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    protected $blob = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A mime type that indicates the technical format of the signature. Important mime
     * types are application/signature+xml for X ML DigSig, application/jwt for JWT,
     * and image/* for a graphical image of a signature, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    protected $contentType = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an application-usable description of the identity that is
     * represented by the signature.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $onBehalfOfReference = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an application-usable description of the identity that is
     * represented by the signature.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $onBehalfOfUri = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An indication of the reason that the entity signed this document. This may be
     * explicitly included as part of the signature information and can be used when
     * determining accountability for various actions concerning the document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    protected $type = [];

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the digital signature was signed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    protected $when = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an application-usable description of the identity that signed
     * (e.g. the signature used their private key).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $whoReference = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an application-usable description of the identity that signed
     * (e.g. the signature used their private key).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $whoUri = null;

    /**
     * FHIRSignature Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSignature::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BLOB])) {
            $ext = (isset($data[self::FIELD_BLOB_EXT]) && is_array($data[self::FIELD_BLOB_EXT]))
                ? $data[self::FIELD_BLOB_EXT]
                : null;
            if ($data[self::FIELD_BLOB] instanceof FHIRBase64Binary) {
                $this->setBlob($data[self::FIELD_BLOB]);
            } elseif ($ext && is_scalar($data[self::FIELD_BLOB])) {
                $this->setBlob(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $data[self::FIELD_BLOB]] + $ext));
            } else {
                $this->setBlob(new FHIRBase64Binary($data[self::FIELD_BLOB]));
            }
        }
        if (isset($data[self::FIELD_CONTENT_TYPE])) {
            $ext = (isset($data[self::FIELD_CONTENT_TYPE_EXT]) && is_array($data[self::FIELD_CONTENT_TYPE_EXT]))
                ? $data[self::FIELD_CONTENT_TYPE_EXT]
                : null;
            if ($data[self::FIELD_CONTENT_TYPE] instanceof FHIRCode) {
                $this->setContentType($data[self::FIELD_CONTENT_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_CONTENT_TYPE])) {
                $this->setContentType(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_CONTENT_TYPE]] + $ext));
            } else {
                $this->setContentType(new FHIRCode($data[self::FIELD_CONTENT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_ON_BEHALF_OF_REFERENCE])) {
            if ($data[self::FIELD_ON_BEHALF_OF_REFERENCE] instanceof FHIRReference) {
                $this->setOnBehalfOfReference($data[self::FIELD_ON_BEHALF_OF_REFERENCE]);
            } else {
                $this->setOnBehalfOfReference(new FHIRReference($data[self::FIELD_ON_BEHALF_OF_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_ON_BEHALF_OF_URI])) {
            $ext = (isset($data[self::FIELD_ON_BEHALF_OF_URI_EXT]) && is_array($data[self::FIELD_ON_BEHALF_OF_URI_EXT]))
                ? $data[self::FIELD_ON_BEHALF_OF_URI_EXT]
                : null;
            if ($data[self::FIELD_ON_BEHALF_OF_URI] instanceof FHIRUri) {
                $this->setOnBehalfOfUri($data[self::FIELD_ON_BEHALF_OF_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_ON_BEHALF_OF_URI])) {
                $this->setOnBehalfOfUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_ON_BEHALF_OF_URI]] + $ext));
            } else {
                $this->setOnBehalfOfUri(new FHIRUri($data[self::FIELD_ON_BEHALF_OF_URI]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addType($v);
                    } else {
                        $this->addType(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRCoding($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_WHEN])) {
            $ext = (isset($data[self::FIELD_WHEN_EXT]) && is_array($data[self::FIELD_WHEN_EXT]))
                ? $data[self::FIELD_WHEN_EXT]
                : null;
            if ($data[self::FIELD_WHEN] instanceof FHIRInstant) {
                $this->setWhen($data[self::FIELD_WHEN]);
            } elseif ($ext && is_scalar($data[self::FIELD_WHEN])) {
                $this->setWhen(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_WHEN]] + $ext));
            } else {
                $this->setWhen(new FHIRInstant($data[self::FIELD_WHEN]));
            }
        }
        if (isset($data[self::FIELD_WHO_REFERENCE])) {
            if ($data[self::FIELD_WHO_REFERENCE] instanceof FHIRReference) {
                $this->setWhoReference($data[self::FIELD_WHO_REFERENCE]);
            } else {
                $this->setWhoReference(new FHIRReference($data[self::FIELD_WHO_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_WHO_URI])) {
            $ext = (isset($data[self::FIELD_WHO_URI_EXT]) && is_array($data[self::FIELD_WHO_URI_EXT]))
                ? $data[self::FIELD_WHO_URI_EXT]
                : null;
            if ($data[self::FIELD_WHO_URI] instanceof FHIRUri) {
                $this->setWhoUri($data[self::FIELD_WHO_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_WHO_URI])) {
                $this->setWhoUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_WHO_URI]] + $ext));
            } else {
                $this->setWhoUri(new FHIRUri($data[self::FIELD_WHO_URI]));
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
        return "<Signature{$xmlns}></Signature>";
    }


    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The base64 encoding of the Signature content. When signature is not recorded
     * electronically this element would be empty.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    public function getBlob()
    {
        return $this->blob;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The base64 encoding of the Signature content. When signature is not recorded
     * electronically this element would be empty.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary $blob
     * @return static
     */
    public function setBlob($blob = null)
    {
        if (null === $blob) {
            $this->blob = null;
            return $this;
        }
        if ($blob instanceof FHIRBase64Binary) {
            $this->blob = $blob;
            return $this;
        }
        $this->blob = new FHIRBase64Binary($blob);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A mime type that indicates the technical format of the signature. Important mime
     * types are application/signature+xml for X ML DigSig, application/jwt for JWT,
     * and image/* for a graphical image of a signature, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A mime type that indicates the technical format of the signature. Important mime
     * types are application/signature+xml for X ML DigSig, application/jwt for JWT,
     * and image/* for a graphical image of a signature, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $contentType
     * @return static
     */
    public function setContentType($contentType = null)
    {
        if (null === $contentType) {
            $this->contentType = null;
            return $this;
        }
        if ($contentType instanceof FHIRCode) {
            $this->contentType = $contentType;
            return $this;
        }
        $this->contentType = new FHIRCode($contentType);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an application-usable description of the identity that is
     * represented by the signature.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getOnBehalfOfReference()
    {
        return $this->onBehalfOfReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an application-usable description of the identity that is
     * represented by the signature.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $onBehalfOfReference
     * @return static
     */
    public function setOnBehalfOfReference(FHIRReference $onBehalfOfReference = null)
    {
        $this->onBehalfOfReference = $onBehalfOfReference;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an application-usable description of the identity that is
     * represented by the signature.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getOnBehalfOfUri()
    {
        return $this->onBehalfOfUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an application-usable description of the identity that is
     * represented by the signature.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $onBehalfOfUri
     * @return static
     */
    public function setOnBehalfOfUri($onBehalfOfUri = null)
    {
        if (null === $onBehalfOfUri) {
            $this->onBehalfOfUri = null;
            return $this;
        }
        if ($onBehalfOfUri instanceof FHIRUri) {
            $this->onBehalfOfUri = $onBehalfOfUri;
            return $this;
        }
        $this->onBehalfOfUri = new FHIRUri($onBehalfOfUri);
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An indication of the reason that the entity signed this document. This may be
     * explicitly included as part of the signature information and can be used when
     * determining accountability for various actions concerning the document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
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
     * An indication of the reason that the entity signed this document. This may be
     * explicitly included as part of the signature information and can be used when
     * determining accountability for various actions concerning the document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $type
     * @return static
     */
    public function addType(FHIRCoding $type = null)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An indication of the reason that the entity signed this document. This may be
     * explicitly included as part of the signature information and can be used when
     * determining accountability for various actions concerning the document.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[] $type
     * @return static
     */
    public function setType(array $type = [])
    {
        $this->type = [];
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addType($v);
            } else {
                $this->addType(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the digital signature was signed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the digital signature was signed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $when
     * @return static
     */
    public function setWhen($when = null)
    {
        if (null === $when) {
            $this->when = null;
            return $this;
        }
        if ($when instanceof FHIRInstant) {
            $this->when = $when;
            return $this;
        }
        $this->when = new FHIRInstant($when);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an application-usable description of the identity that signed
     * (e.g. the signature used their private key).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getWhoReference()
    {
        return $this->whoReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an application-usable description of the identity that signed
     * (e.g. the signature used their private key).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $whoReference
     * @return static
     */
    public function setWhoReference(FHIRReference $whoReference = null)
    {
        $this->whoReference = $whoReference;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an application-usable description of the identity that signed
     * (e.g. the signature used their private key).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getWhoUri()
    {
        return $this->whoUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an application-usable description of the identity that signed
     * (e.g. the signature used their private key).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $whoUri
     * @return static
     */
    public function setWhoUri($whoUri = null)
    {
        if (null === $whoUri) {
            $this->whoUri = null;
            return $this;
        }
        if ($whoUri instanceof FHIRUri) {
            $this->whoUri = $whoUri;
            return $this;
        }
        $this->whoUri = new FHIRUri($whoUri);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature
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
                throw new \DomainException(sprintf('FHIRSignature::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSignature::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSignature;
        } elseif (!is_object($type) || !($type instanceof FHIRSignature)) {
            throw new \RuntimeException(sprintf(
                'FHIRSignature::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->blob)) {
            $type->setBlob((string)$attributes->blob);
        }
        if (isset($children->blob)) {
            $type->setBlob(FHIRBase64Binary::xmlUnserialize($children->blob));
        }
        if (isset($attributes->contentType)) {
            $type->setContentType((string)$attributes->contentType);
        }
        if (isset($children->contentType)) {
            $type->setContentType(FHIRCode::xmlUnserialize($children->contentType));
        }
        if (isset($children->onBehalfOfReference)) {
            $type->setOnBehalfOfReference(FHIRReference::xmlUnserialize($children->onBehalfOfReference));
        }
        if (isset($attributes->onBehalfOfUri)) {
            $type->setOnBehalfOfUri((string)$attributes->onBehalfOfUri);
        }
        if (isset($children->onBehalfOfUri)) {
            $type->setOnBehalfOfUri(FHIRUri::xmlUnserialize($children->onBehalfOfUri));
        }
        if (isset($children->type)) {
            foreach($children->type as $child) {
                $type->addType(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($attributes->when)) {
            $type->setWhen((string)$attributes->when);
        }
        if (isset($children->when)) {
            $type->setWhen(FHIRInstant::xmlUnserialize($children->when));
        }
        if (isset($children->whoReference)) {
            $type->setWhoReference(FHIRReference::xmlUnserialize($children->whoReference));
        }
        if (isset($attributes->whoUri)) {
            $type->setWhoUri((string)$attributes->whoUri);
        }
        if (isset($children->whoUri)) {
            $type->setWhoUri(FHIRUri::xmlUnserialize($children->whoUri));
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
        if (null !== ($v = $this->getBlob())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BLOB, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getContentType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT_TYPE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getOnBehalfOfReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ON_BEHALF_OF_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOnBehalfOfUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ON_BEHALF_OF_URI, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getWhen())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHEN, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getWhoReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHO_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWhoUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHO_URI, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getBlob())) {
            $a[self::FIELD_BLOB] = $v->getValue();
            $a[self::FIELD_BLOB_EXT] = $v;
        }
        if (null !== ($v = $this->getContentType())) {
            $a[self::FIELD_CONTENT_TYPE] = $v->getValue();
            $a[self::FIELD_CONTENT_TYPE_EXT] = $v;
        }
        if (null !== ($v = $this->getOnBehalfOfReference())) {
            $a[self::FIELD_ON_BEHALF_OF_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getOnBehalfOfUri())) {
            $a[self::FIELD_ON_BEHALF_OF_URI] = $v->getValue();
            $a[self::FIELD_ON_BEHALF_OF_URI_EXT] = $v;
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = $vs;
        }
        if (null !== ($v = $this->getWhen())) {
            $a[self::FIELD_WHEN] = $v->getValue();
            $a[self::FIELD_WHEN_EXT] = $v;
        }
        if (null !== ($v = $this->getWhoReference())) {
            $a[self::FIELD_WHO_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getWhoUri())) {
            $a[self::FIELD_WHO_URI] = $v->getValue();
            $a[self::FIELD_WHO_URI_EXT] = $v;
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