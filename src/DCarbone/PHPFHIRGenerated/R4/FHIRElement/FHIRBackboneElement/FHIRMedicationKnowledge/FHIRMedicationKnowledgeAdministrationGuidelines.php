<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Information about a medication that is used to support knowledge.
 *
 * Class FHIRMedicationKnowledgeAdministrationGuidelines
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge
 */
class FHIRMedicationKnowledgeAdministrationGuidelines extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_ADMINISTRATION_GUIDELINES;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_DOSAGE = 'dosage';
    const FIELD_INDICATION_CODEABLE_CONCEPT = 'indicationCodeableConcept';
    const FIELD_INDICATION_REFERENCE = 'indicationReference';
    const FIELD_PATIENT_CHARACTERISTICS = 'patientCharacteristics';
    const FIELD_PATIENT_CHARACTERISTICS_EXT = '_patientCharacteristics';

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage[]
     */
    protected $dosage = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication for use that apply to the specific administration guidelines. (choose
     * any one of indication*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $indicationCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication for use that apply to the specific administration guidelines. (choose
     * any one of indication*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $indicationReference = null;

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics[]
     */
    protected $patientCharacteristics = [];

    /**
     * FHIRMedicationKnowledgeAdministrationGuidelines Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationKnowledgeAdministrationGuidelines::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DOSAGE])) {
            if (is_array($data[self::FIELD_DOSAGE])) {
                foreach($data[self::FIELD_DOSAGE] as $v) {
                    if ($v instanceof FHIRMedicationKnowledgeDosage) {
                        $this->addDosage($v);
                    } else {
                        $this->addDosage(new FHIRMedicationKnowledgeDosage($v));
                    }
                }
            } else if ($data[self::FIELD_DOSAGE] instanceof FHIRMedicationKnowledgeDosage) {
                $this->addDosage($data[self::FIELD_DOSAGE]);
            } else {
                $this->addDosage(new FHIRMedicationKnowledgeDosage($data[self::FIELD_DOSAGE]));
            }
        }
        if (isset($data[self::FIELD_INDICATION_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_INDICATION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setIndicationCodeableConcept($data[self::FIELD_INDICATION_CODEABLE_CONCEPT]);
            } else {
                $this->setIndicationCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_INDICATION_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_INDICATION_REFERENCE])) {
            if ($data[self::FIELD_INDICATION_REFERENCE] instanceof FHIRReference) {
                $this->setIndicationReference($data[self::FIELD_INDICATION_REFERENCE]);
            } else {
                $this->setIndicationReference(new FHIRReference($data[self::FIELD_INDICATION_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_PATIENT_CHARACTERISTICS])) {
            $ext = (isset($data[self::FIELD_PATIENT_CHARACTERISTICS_EXT]) && is_array($data[self::FIELD_PATIENT_CHARACTERISTICS_EXT]))
                ? $data[self::FIELD_PATIENT_CHARACTERISTICS_EXT]
                : null;
            if (is_array($data[self::FIELD_PATIENT_CHARACTERISTICS])) {
                foreach($data[self::FIELD_PATIENT_CHARACTERISTICS] as $i => $v) {
                    if ($v instanceof FHIRMedicationKnowledgePatientCharacteristics) {
                        $this->addPatientCharacteristics($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addPatientCharacteristics(new FHIRMedicationKnowledgePatientCharacteristics([FHIRMedicationKnowledgePatientCharacteristics::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addPatientCharacteristics(new FHIRMedicationKnowledgePatientCharacteristics($v));
                    }
                }
            } elseif ($data[self::FIELD_PATIENT_CHARACTERISTICS] instanceof FHIRMedicationKnowledgePatientCharacteristics) {
                $this->addPatientCharacteristics($data[self::FIELD_PATIENT_CHARACTERISTICS]);
            } elseif ($ext && is_scalar($data[self::FIELD_PATIENT_CHARACTERISTICS])) {
                $this->addPatientCharacteristics(new FHIRMedicationKnowledgePatientCharacteristics([FHIRMedicationKnowledgePatientCharacteristics::FIELD_VALUE => $data[self::FIELD_PATIENT_CHARACTERISTICS]] + $ext));
            } else {
                $this->addPatientCharacteristics(new FHIRMedicationKnowledgePatientCharacteristics($data[self::FIELD_PATIENT_CHARACTERISTICS]));
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
        return "<MedicationKnowledgeAdministrationGuidelines{$xmlns}></MedicationKnowledgeAdministrationGuidelines>";
    }


    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage[]
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage $dosage
     * @return static
     */
    public function addDosage(FHIRMedicationKnowledgeDosage $dosage = null)
    {
        $this->dosage[] = $dosage;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage[] $dosage
     * @return static
     */
    public function setDosage(array $dosage = [])
    {
        $this->dosage = [];
        if ([] === $dosage) {
            return $this;
        }
        foreach($dosage as $v) {
            if ($v instanceof FHIRMedicationKnowledgeDosage) {
                $this->addDosage($v);
            } else {
                $this->addDosage(new FHIRMedicationKnowledgeDosage($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication for use that apply to the specific administration guidelines. (choose
     * any one of indication*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getIndicationCodeableConcept()
    {
        return $this->indicationCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication for use that apply to the specific administration guidelines. (choose
     * any one of indication*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $indicationCodeableConcept
     * @return static
     */
    public function setIndicationCodeableConcept(FHIRCodeableConcept $indicationCodeableConcept = null)
    {
        $this->indicationCodeableConcept = $indicationCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication for use that apply to the specific administration guidelines. (choose
     * any one of indication*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getIndicationReference()
    {
        return $this->indicationReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication for use that apply to the specific administration guidelines. (choose
     * any one of indication*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $indicationReference
     * @return static
     */
    public function setIndicationReference(FHIRReference $indicationReference = null)
    {
        $this->indicationReference = $indicationReference;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics[]
     */
    public function getPatientCharacteristics()
    {
        return $this->patientCharacteristics;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics $patientCharacteristics
     * @return static
     */
    public function addPatientCharacteristics(FHIRMedicationKnowledgePatientCharacteristics $patientCharacteristics = null)
    {
        $this->patientCharacteristics[] = $patientCharacteristics;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics[] $patientCharacteristics
     * @return static
     */
    public function setPatientCharacteristics(array $patientCharacteristics = [])
    {
        $this->patientCharacteristics = [];
        if ([] === $patientCharacteristics) {
            return $this;
        }
        foreach($patientCharacteristics as $v) {
            if ($v instanceof FHIRMedicationKnowledgePatientCharacteristics) {
                $this->addPatientCharacteristics($v);
            } else {
                $this->addPatientCharacteristics(new FHIRMedicationKnowledgePatientCharacteristics($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines
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
                throw new \DomainException(sprintf('FHIRMedicationKnowledgeAdministrationGuidelines::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationKnowledgeAdministrationGuidelines::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicationKnowledgeAdministrationGuidelines;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationKnowledgeAdministrationGuidelines)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationKnowledgeAdministrationGuidelines::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines or null, %s seen.',
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
        if (isset($children->dosage)) {
            foreach($children->dosage as $child) {
                $type->addDosage(FHIRMedicationKnowledgeDosage::xmlUnserialize($child));
            }
        }
        if (isset($children->indicationCodeableConcept)) {
            $type->setIndicationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->indicationCodeableConcept));
        }
        if (isset($children->indicationReference)) {
            $type->setIndicationReference(FHIRReference::xmlUnserialize($children->indicationReference));
        }
        if (isset($children->patientCharacteristics)) {
            foreach($children->patientCharacteristics as $child) {
                $type->addPatientCharacteristics(FHIRMedicationKnowledgePatientCharacteristics::xmlUnserialize($child));
            }
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

        if ([] !== ($vs = $this->getDosage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOSAGE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getIndicationCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INDICATION_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getIndicationReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INDICATION_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getPatientCharacteristics())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT_CHARACTERISTICS, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getDosage())) {
            $a[self::FIELD_DOSAGE] = $vs;
        }
        if (null !== ($v = $this->getIndicationCodeableConcept())) {
            $a[self::FIELD_INDICATION_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getIndicationReference())) {
            $a[self::FIELD_INDICATION_REFERENCE] = $v;
        }
        if ([] !== ($vs = $this->getPatientCharacteristics())) {
            $a[self::FIELD_PATIENT_CHARACTERISTICS] = $vs;
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