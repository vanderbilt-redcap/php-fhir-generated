<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Example of workflow instance.
 *
 * Class FHIRExampleScenarioContainedInstance
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario
 */
class FHIRExampleScenarioContainedInstance extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_CONTAINED_INSTANCE;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_RESOURCE_ID = 'resourceId';
    const FIELD_RESOURCE_ID_EXT = '_resourceId';
    const FIELD_VERSION_ID = 'versionId';
    const FIELD_VERSION_ID_EXT = '_versionId';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Each resource contained in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $resourceId = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A specific version of a resource contained in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $versionId = null;

    /**
     * FHIRExampleScenarioContainedInstance Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExampleScenarioContainedInstance::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_RESOURCE_ID])) {
            $ext = (isset($data[self::FIELD_RESOURCE_ID_EXT]) && is_array($data[self::FIELD_RESOURCE_ID_EXT]))
                ? $data[self::FIELD_RESOURCE_ID_EXT]
                : null;
            if ($data[self::FIELD_RESOURCE_ID] instanceof FHIRString) {
                $this->setResourceId($data[self::FIELD_RESOURCE_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_RESOURCE_ID])) {
                $this->setResourceId(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_RESOURCE_ID]] + $ext));
            } else {
                $this->setResourceId(new FHIRString($data[self::FIELD_RESOURCE_ID]));
            }
        }
        if (isset($data[self::FIELD_VERSION_ID])) {
            $ext = (isset($data[self::FIELD_VERSION_ID_EXT]) && is_array($data[self::FIELD_VERSION_ID_EXT]))
                ? $data[self::FIELD_VERSION_ID_EXT]
                : null;
            if ($data[self::FIELD_VERSION_ID] instanceof FHIRString) {
                $this->setVersionId($data[self::FIELD_VERSION_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_VERSION_ID])) {
                $this->setVersionId(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VERSION_ID]] + $ext));
            } else {
                $this->setVersionId(new FHIRString($data[self::FIELD_VERSION_ID]));
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
        return "<ExampleScenarioContainedInstance{$xmlns}></ExampleScenarioContainedInstance>";
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Each resource contained in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Each resource contained in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $resourceId
     * @return static
     */
    public function setResourceId($resourceId = null)
    {
        if (null === $resourceId) {
            $this->resourceId = null;
            return $this;
        }
        if ($resourceId instanceof FHIRString) {
            $this->resourceId = $resourceId;
            return $this;
        }
        $this->resourceId = new FHIRString($resourceId);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A specific version of a resource contained in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getVersionId()
    {
        return $this->versionId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A specific version of a resource contained in the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $versionId
     * @return static
     */
    public function setVersionId($versionId = null)
    {
        if (null === $versionId) {
            $this->versionId = null;
            return $this;
        }
        if ($versionId instanceof FHIRString) {
            $this->versionId = $versionId;
            return $this;
        }
        $this->versionId = new FHIRString($versionId);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
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
                throw new \DomainException(sprintf('FHIRExampleScenarioContainedInstance::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRExampleScenarioContainedInstance::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRExampleScenarioContainedInstance;
        } elseif (!is_object($type) || !($type instanceof FHIRExampleScenarioContainedInstance)) {
            throw new \RuntimeException(sprintf(
                'FHIRExampleScenarioContainedInstance::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance or null, %s seen.',
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
        if (isset($attributes->resourceId)) {
            $type->setResourceId((string)$attributes->resourceId);
        }
        if (isset($children->resourceId)) {
            $type->setResourceId(FHIRString::xmlUnserialize($children->resourceId));
        }
        if (isset($attributes->versionId)) {
            $type->setVersionId((string)$attributes->versionId);
        }
        if (isset($children->versionId)) {
            $type->setVersionId(FHIRString::xmlUnserialize($children->versionId));
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
        if (null !== ($v = $this->getResourceId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESOURCE_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getVersionId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VERSION_ID, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getResourceId())) {
            $a[self::FIELD_RESOURCE_ID] = $v->getValue();
            $a[self::FIELD_RESOURCE_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getVersionId())) {
            $a[self::FIELD_VERSION_ID] = $v->getValue();
            $a[self::FIELD_VERSION_ID_EXT] = $v;
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