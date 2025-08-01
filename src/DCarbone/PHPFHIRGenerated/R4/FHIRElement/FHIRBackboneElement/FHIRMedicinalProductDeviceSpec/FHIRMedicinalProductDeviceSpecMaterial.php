<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 28th, 2019 20:54+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A detailed description of a device, typically as part of a regulated medicinal
 * product. It is not intended to replace the Device resource, which covers use of
 * device instances.
 *
 * Class FHIRMedicinalProductDeviceSpecMaterial
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec
 */
class FHIRMedicinalProductDeviceSpecMaterial extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEVICE_SPEC_DOT_MATERIAL;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ALLERGENIC_INDICATOR = 'allergenicIndicator';
    const FIELD_ALLERGENIC_INDICATOR_EXT = '_allergenicIndicator';
    const FIELD_ALTERNATE = 'alternate';
    const FIELD_ALTERNATE_EXT = '_alternate';
    const FIELD_SUBSTANCE = 'substance';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the substance is a known or suspected allergen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $allergenicIndicator = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates an alternative material of the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $alternate = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $substance = null;

    /**
     * FHIRMedicinalProductDeviceSpecMaterial Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductDeviceSpecMaterial::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ALLERGENIC_INDICATOR])) {
            $ext = (isset($data[self::FIELD_ALLERGENIC_INDICATOR_EXT]) && is_array($data[self::FIELD_ALLERGENIC_INDICATOR_EXT]))
                ? $data[self::FIELD_ALLERGENIC_INDICATOR_EXT]
                : null;
            if ($data[self::FIELD_ALLERGENIC_INDICATOR] instanceof FHIRBoolean) {
                $this->setAllergenicIndicator($data[self::FIELD_ALLERGENIC_INDICATOR]);
            } elseif ($ext && is_scalar($data[self::FIELD_ALLERGENIC_INDICATOR])) {
                $this->setAllergenicIndicator(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_ALLERGENIC_INDICATOR]] + $ext));
            } else {
                $this->setAllergenicIndicator(new FHIRBoolean($data[self::FIELD_ALLERGENIC_INDICATOR]));
            }
        }
        if (isset($data[self::FIELD_ALTERNATE])) {
            $ext = (isset($data[self::FIELD_ALTERNATE_EXT]) && is_array($data[self::FIELD_ALTERNATE_EXT]))
                ? $data[self::FIELD_ALTERNATE_EXT]
                : null;
            if ($data[self::FIELD_ALTERNATE] instanceof FHIRBoolean) {
                $this->setAlternate($data[self::FIELD_ALTERNATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_ALTERNATE])) {
                $this->setAlternate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_ALTERNATE]] + $ext));
            } else {
                $this->setAlternate(new FHIRBoolean($data[self::FIELD_ALTERNATE]));
            }
        }
        if (isset($data[self::FIELD_SUBSTANCE])) {
            if ($data[self::FIELD_SUBSTANCE] instanceof FHIRCodeableConcept) {
                $this->setSubstance($data[self::FIELD_SUBSTANCE]);
            } else {
                $this->setSubstance(new FHIRCodeableConcept($data[self::FIELD_SUBSTANCE]));
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
        return "<MedicinalProductDeviceSpecMaterial{$xmlns}></MedicinalProductDeviceSpecMaterial>";
    }


    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the substance is a known or suspected allergen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getAllergenicIndicator()
    {
        return $this->allergenicIndicator;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the substance is a known or suspected allergen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $allergenicIndicator
     * @return static
     */
    public function setAllergenicIndicator($allergenicIndicator = null)
    {
        if (null === $allergenicIndicator) {
            $this->allergenicIndicator = null;
            return $this;
        }
        if ($allergenicIndicator instanceof FHIRBoolean) {
            $this->allergenicIndicator = $allergenicIndicator;
            return $this;
        }
        $this->allergenicIndicator = new FHIRBoolean($allergenicIndicator);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates an alternative material of the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getAlternate()
    {
        return $this->alternate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates an alternative material of the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $alternate
     * @return static
     */
    public function setAlternate($alternate = null)
    {
        if (null === $alternate) {
            $this->alternate = null;
            return $this;
        }
        if ($alternate instanceof FHIRBoolean) {
            $this->alternate = $alternate;
            return $this;
        }
        $this->alternate = new FHIRBoolean($alternate);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $substance
     * @return static
     */
    public function setSubstance(FHIRCodeableConcept $substance = null)
    {
        $this->substance = $substance;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec\FHIRMedicinalProductDeviceSpecMaterial $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec\FHIRMedicinalProductDeviceSpecMaterial
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
                throw new \DomainException(sprintf('FHIRMedicinalProductDeviceSpecMaterial::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductDeviceSpecMaterial::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicinalProductDeviceSpecMaterial;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductDeviceSpecMaterial)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductDeviceSpecMaterial::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec\FHIRMedicinalProductDeviceSpecMaterial or null, %s seen.',
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
        if (isset($attributes->allergenicIndicator)) {
            $type->setAllergenicIndicator((string)$attributes->allergenicIndicator);
        }
        if (isset($children->allergenicIndicator)) {
            $type->setAllergenicIndicator(FHIRBoolean::xmlUnserialize($children->allergenicIndicator));
        }
        if (isset($attributes->alternate)) {
            $type->setAlternate((string)$attributes->alternate);
        }
        if (isset($children->alternate)) {
            $type->setAlternate(FHIRBoolean::xmlUnserialize($children->alternate));
        }
        if (isset($children->substance)) {
            $type->setSubstance(FHIRCodeableConcept::xmlUnserialize($children->substance));
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
        if (null !== ($v = $this->getAllergenicIndicator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALLERGENIC_INDICATOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAlternate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALTERNATE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getSubstance())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSTANCE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAllergenicIndicator())) {
            $a[self::FIELD_ALLERGENIC_INDICATOR] = $v->getValue();
            $a[self::FIELD_ALLERGENIC_INDICATOR_EXT] = $v;
        }
        if (null !== ($v = $this->getAlternate())) {
            $a[self::FIELD_ALTERNATE] = $v->getValue();
            $a[self::FIELD_ALTERNATE_EXT] = $v;
        }
        if (null !== ($v = $this->getSubstance())) {
            $a[self::FIELD_SUBSTANCE] = $v;
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