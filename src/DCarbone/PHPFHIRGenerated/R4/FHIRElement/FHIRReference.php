<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A reference from one resource to another.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRReference
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement
 */
class FHIRReference extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_REFERENCE;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_DISPLAY = 'display';
    const FIELD_DISPLAY_EXT = '_display';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_REFERENCE = 'reference';
    const FIELD_REFERENCE_EXT = '_reference';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Plain text narrative that identifies the resource in addition to the resource
     * reference.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $display = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for the target resource. This is used when there is no way to
     * reference the other resource directly, either because the entity it represents
     * is not available through a FHIR server, or because there is no way for the
     * author of the resource to convert a known identifier to an actual location.
     * There is no requirement that a Reference.identifier point to something that is
     * actually exposed as a FHIR instance, but it SHALL point to a business concept
     * that would be expected to be exposed as a FHIR instance, and that instance would
     * need to be of a FHIR resource type allowed by the reference.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a location at which the other resource is found. The reference
     * may be a relative reference, in which case it is relative to the service base
     * URL, or an absolute URL that resolves to the location where the resource is
     * found. The reference may be version specific or not. If the reference is not to
     * a FHIR RESTful server, then it should be assumed to be version specific.
     * Internal fragment references (start with '#') refer to contained resources.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $reference = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The expected type of the target of the reference. If both Reference.type and
     * Reference.reference are populated and Reference.reference is a FHIR URL, both
     * SHALL be consistent. The type is the Canonical URL of Resource Definition that
     * is the type this reference refers to. References are URLs that are relative to
     * http://hl7.org/fhir/StructureDefinition/ e.g. "Patient" is a reference to
     * http://hl7.org/fhir/StructureDefinition/Patient. Absolute URLs are only allowed
     * for logical models (and can only be used in references in logical models, not
     * resources).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    protected $type = null;

    /**
     * FHIRReference Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRReference::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DISPLAY])) {
            $ext = (isset($data[self::FIELD_DISPLAY_EXT]) && is_array($data[self::FIELD_DISPLAY_EXT]))
                ? $data[self::FIELD_DISPLAY_EXT]
                : null;
            if ($data[self::FIELD_DISPLAY] instanceof FHIRString) {
                $this->setDisplay($data[self::FIELD_DISPLAY]);
            } elseif ($ext && is_scalar($data[self::FIELD_DISPLAY])) {
                $this->setDisplay(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DISPLAY]] + $ext));
            } else {
                $this->setDisplay(new FHIRString($data[self::FIELD_DISPLAY]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->setIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE])) {
            $ext = (isset($data[self::FIELD_REFERENCE_EXT]) && is_array($data[self::FIELD_REFERENCE_EXT]))
                ? $data[self::FIELD_REFERENCE_EXT]
                : null;
            if ($data[self::FIELD_REFERENCE] instanceof FHIRString) {
                $this->setReference($data[self::FIELD_REFERENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_REFERENCE])) {
                $this->setReference(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_REFERENCE]] + $ext));
            } else {
                $this->setReference(new FHIRString($data[self::FIELD_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT]))
                ? $data[self::FIELD_TYPE_EXT]
                : null;
            if ($data[self::FIELD_TYPE] instanceof FHIRUri) {
                $this->setType($data[self::FIELD_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TYPE])) {
                $this->setType(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_TYPE]] + $ext));
            } else {
                $this->setType(new FHIRUri($data[self::FIELD_TYPE]));
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
        return "<Reference{$xmlns}></Reference>";
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Plain text narrative that identifies the resource in addition to the resource
     * reference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Plain text narrative that identifies the resource in addition to the resource
     * reference.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $display
     * @return static
     */
    public function setDisplay($display = null)
    {
        if (null === $display) {
            $this->display = null;
            return $this;
        }
        if ($display instanceof FHIRString) {
            $this->display = $display;
            return $this;
        }
        $this->display = new FHIRString($display);
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for the target resource. This is used when there is no way to
     * reference the other resource directly, either because the entity it represents
     * is not available through a FHIR server, or because there is no way for the
     * author of the resource to convert a known identifier to an actual location.
     * There is no requirement that a Reference.identifier point to something that is
     * actually exposed as a FHIR instance, but it SHALL point to a business concept
     * that would be expected to be exposed as a FHIR instance, and that instance would
     * need to be of a FHIR resource type allowed by the reference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for the target resource. This is used when there is no way to
     * reference the other resource directly, either because the entity it represents
     * is not available through a FHIR server, or because there is no way for the
     * author of the resource to convert a known identifier to an actual location.
     * There is no requirement that a Reference.identifier point to something that is
     * actually exposed as a FHIR instance, but it SHALL point to a business concept
     * that would be expected to be exposed as a FHIR instance, and that instance would
     * need to be of a FHIR resource type allowed by the reference.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a location at which the other resource is found. The reference
     * may be a relative reference, in which case it is relative to the service base
     * URL, or an absolute URL that resolves to the location where the resource is
     * found. The reference may be version specific or not. If the reference is not to
     * a FHIR RESTful server, then it should be assumed to be version specific.
     * Internal fragment references (start with '#') refer to contained resources.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a location at which the other resource is found. The reference
     * may be a relative reference, in which case it is relative to the service base
     * URL, or an absolute URL that resolves to the location where the resource is
     * found. The reference may be version specific or not. If the reference is not to
     * a FHIR RESTful server, then it should be assumed to be version specific.
     * Internal fragment references (start with '#') refer to contained resources.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $reference
     * @return static
     */
    public function setReference($reference = null)
    {
        if (null === $reference) {
            $this->reference = null;
            return $this;
        }
        if ($reference instanceof FHIRString) {
            $this->reference = $reference;
            return $this;
        }
        $this->reference = new FHIRString($reference);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The expected type of the target of the reference. If both Reference.type and
     * Reference.reference are populated and Reference.reference is a FHIR URL, both
     * SHALL be consistent. The type is the Canonical URL of Resource Definition that
     * is the type this reference refers to. References are URLs that are relative to
     * http://hl7.org/fhir/StructureDefinition/ e.g. "Patient" is a reference to
     * http://hl7.org/fhir/StructureDefinition/Patient. Absolute URLs are only allowed
     * for logical models (and can only be used in references in logical models, not
     * resources).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The expected type of the target of the reference. If both Reference.type and
     * Reference.reference are populated and Reference.reference is a FHIR URL, both
     * SHALL be consistent. The type is the Canonical URL of Resource Definition that
     * is the type this reference refers to. References are URLs that are relative to
     * http://hl7.org/fhir/StructureDefinition/ e.g. "Patient" is a reference to
     * http://hl7.org/fhir/StructureDefinition/Patient. Absolute URLs are only allowed
     * for logical models (and can only be used in references in logical models, not
     * resources).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $type
     * @return static
     */
    public function setType($type = null)
    {
        if (null === $type) {
            $this->type = null;
            return $this;
        }
        if ($type instanceof FHIRUri) {
            $this->type = $type;
            return $this;
        }
        $this->type = new FHIRUri($type);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
                throw new \DomainException(sprintf('FHIRReference::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRReference::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRReference;
        } elseif (!is_object($type) || !($type instanceof FHIRReference)) {
            throw new \RuntimeException(sprintf(
                'FHIRReference::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference or null, %s seen.',
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
        if (isset($attributes->display)) {
            $type->setDisplay((string)$attributes->display);
        }
        if (isset($children->display)) {
            $type->setDisplay(FHIRString::xmlUnserialize($children->display));
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($attributes->reference)) {
            $type->setReference((string)$attributes->reference);
        }
        if (isset($children->reference)) {
            $type->setReference(FHIRString::xmlUnserialize($children->reference));
        }
        if (isset($attributes->type)) {
            $type->setType((string)$attributes->type);
        }
        if (isset($children->type)) {
            $type->setType(FHIRUri::xmlUnserialize($children->type));
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
        if (null !== ($v = $this->getDisplay())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISPLAY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDisplay())) {
            $a[self::FIELD_DISPLAY] = $v->getValue();
            $a[self::FIELD_DISPLAY_EXT] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getReference())) {
            $a[self::FIELD_REFERENCE] = $v->getValue();
            $a[self::FIELD_REFERENCE_EXT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            $a[self::FIELD_TYPE_EXT] = $v;
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