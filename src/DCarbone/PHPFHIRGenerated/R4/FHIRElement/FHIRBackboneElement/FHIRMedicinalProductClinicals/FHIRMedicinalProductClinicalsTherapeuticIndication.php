<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The clinical particulars - indications, contraindications etc. of a medicinal
 * product, including for regulatory purposes.
 *
 * Class FHIRMedicinalProductClinicalsTherapeuticIndication
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals
 */
class FHIRMedicinalProductClinicalsTherapeuticIndication extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_CLINICALS_DOT_THERAPEUTIC_INDICATION;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_COMORBIDITY = 'comorbidity';
    const FIELD_DISEASE_STATUS = 'diseaseStatus';
    const FIELD_DISEASE_SYMPTOM_PROCEDURE = 'diseaseSymptomProcedure';
    const FIELD_DURATION = 'duration';
    const FIELD_DURATION_EXT = '_duration';
    const FIELD_INTENDED_EFFECT = 'intendedEffect';
    const FIELD_OTHER_THERAPY = 'otherTherapy';
    const FIELD_POPULATION = 'population';
    const FIELD_UNDESIRABLE_EFFECTS = 'undesirableEffects';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $comorbidity = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for which the indication applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $diseaseStatus = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The disease, symptom or procedure that is the indication for treatment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $diseaseSymptomProcedure = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timing or duration information as part of the indication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $duration = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved by the indication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $intendedEffect = null;

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsOtherTherapy[]
     */
    protected $otherTherapy = [];

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * The population group to which this applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation[]
     */
    protected $population = [];

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies as part of the indication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects[]
     */
    protected $undesirableEffects = [];

    /**
     * FHIRMedicinalProductClinicalsTherapeuticIndication Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductClinicalsTherapeuticIndication::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COMORBIDITY])) {
            if (is_array($data[self::FIELD_COMORBIDITY])) {
                foreach($data[self::FIELD_COMORBIDITY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addComorbidity($v);
                    } else {
                        $this->addComorbidity(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_COMORBIDITY] instanceof FHIRCodeableConcept) {
                $this->addComorbidity($data[self::FIELD_COMORBIDITY]);
            } else {
                $this->addComorbidity(new FHIRCodeableConcept($data[self::FIELD_COMORBIDITY]));
            }
        }
        if (isset($data[self::FIELD_DISEASE_STATUS])) {
            if ($data[self::FIELD_DISEASE_STATUS] instanceof FHIRCodeableConcept) {
                $this->setDiseaseStatus($data[self::FIELD_DISEASE_STATUS]);
            } else {
                $this->setDiseaseStatus(new FHIRCodeableConcept($data[self::FIELD_DISEASE_STATUS]));
            }
        }
        if (isset($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE])) {
            if ($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] instanceof FHIRCodeableConcept) {
                $this->setDiseaseSymptomProcedure($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]);
            } else {
                $this->setDiseaseSymptomProcedure(new FHIRCodeableConcept($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]));
            }
        }
        if (isset($data[self::FIELD_DURATION])) {
            $ext = (isset($data[self::FIELD_DURATION_EXT]) && is_array($data[self::FIELD_DURATION_EXT]))
                ? $data[self::FIELD_DURATION_EXT]
                : null;
            if ($data[self::FIELD_DURATION] instanceof FHIRQuantity) {
                $this->setDuration($data[self::FIELD_DURATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DURATION])) {
                $this->setDuration(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_DURATION]] + $ext));
            } else {
                $this->setDuration(new FHIRQuantity($data[self::FIELD_DURATION]));
            }
        }
        if (isset($data[self::FIELD_INTENDED_EFFECT])) {
            if ($data[self::FIELD_INTENDED_EFFECT] instanceof FHIRCodeableConcept) {
                $this->setIntendedEffect($data[self::FIELD_INTENDED_EFFECT]);
            } else {
                $this->setIntendedEffect(new FHIRCodeableConcept($data[self::FIELD_INTENDED_EFFECT]));
            }
        }
        if (isset($data[self::FIELD_OTHER_THERAPY])) {
            if (is_array($data[self::FIELD_OTHER_THERAPY])) {
                foreach($data[self::FIELD_OTHER_THERAPY] as $v) {
                    if ($v instanceof FHIRMedicinalProductClinicalsOtherTherapy) {
                        $this->addOtherTherapy($v);
                    } else {
                        $this->addOtherTherapy(new FHIRMedicinalProductClinicalsOtherTherapy($v));
                    }
                }
            } else if ($data[self::FIELD_OTHER_THERAPY] instanceof FHIRMedicinalProductClinicalsOtherTherapy) {
                $this->addOtherTherapy($data[self::FIELD_OTHER_THERAPY]);
            } else {
                $this->addOtherTherapy(new FHIRMedicinalProductClinicalsOtherTherapy($data[self::FIELD_OTHER_THERAPY]));
            }
        }
        if (isset($data[self::FIELD_POPULATION])) {
            if (is_array($data[self::FIELD_POPULATION])) {
                foreach($data[self::FIELD_POPULATION] as $v) {
                    if ($v instanceof FHIRMedicinalProductClinicalsPopulation) {
                        $this->addPopulation($v);
                    } else {
                        $this->addPopulation(new FHIRMedicinalProductClinicalsPopulation($v));
                    }
                }
            } else if ($data[self::FIELD_POPULATION] instanceof FHIRMedicinalProductClinicalsPopulation) {
                $this->addPopulation($data[self::FIELD_POPULATION]);
            } else {
                $this->addPopulation(new FHIRMedicinalProductClinicalsPopulation($data[self::FIELD_POPULATION]));
            }
        }
        if (isset($data[self::FIELD_UNDESIRABLE_EFFECTS])) {
            if (is_array($data[self::FIELD_UNDESIRABLE_EFFECTS])) {
                foreach($data[self::FIELD_UNDESIRABLE_EFFECTS] as $v) {
                    if ($v instanceof FHIRMedicinalProductClinicalsUndesirableEffects) {
                        $this->addUndesirableEffects($v);
                    } else {
                        $this->addUndesirableEffects(new FHIRMedicinalProductClinicalsUndesirableEffects($v));
                    }
                }
            } else if ($data[self::FIELD_UNDESIRABLE_EFFECTS] instanceof FHIRMedicinalProductClinicalsUndesirableEffects) {
                $this->addUndesirableEffects($data[self::FIELD_UNDESIRABLE_EFFECTS]);
            } else {
                $this->addUndesirableEffects(new FHIRMedicinalProductClinicalsUndesirableEffects($data[self::FIELD_UNDESIRABLE_EFFECTS]));
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
        return "<MedicinalProductClinicalsTherapeuticIndication{$xmlns}></MedicinalProductClinicalsTherapeuticIndication>";
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getComorbidity()
    {
        return $this->comorbidity;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $comorbidity
     * @return static
     */
    public function addComorbidity(FHIRCodeableConcept $comorbidity = null)
    {
        $this->comorbidity[] = $comorbidity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $comorbidity
     * @return static
     */
    public function setComorbidity(array $comorbidity = [])
    {
        $this->comorbidity = [];
        if ([] === $comorbidity) {
            return $this;
        }
        foreach($comorbidity as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addComorbidity($v);
            } else {
                $this->addComorbidity(new FHIRCodeableConcept($v));
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
     * The status of the disease or symptom for which the indication applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDiseaseStatus()
    {
        return $this->diseaseStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for which the indication applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $diseaseStatus
     * @return static
     */
    public function setDiseaseStatus(FHIRCodeableConcept $diseaseStatus = null)
    {
        $this->diseaseStatus = $diseaseStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The disease, symptom or procedure that is the indication for treatment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDiseaseSymptomProcedure()
    {
        return $this->diseaseSymptomProcedure;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The disease, symptom or procedure that is the indication for treatment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $diseaseSymptomProcedure
     * @return static
     */
    public function setDiseaseSymptomProcedure(FHIRCodeableConcept $diseaseSymptomProcedure = null)
    {
        $this->diseaseSymptomProcedure = $diseaseSymptomProcedure;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timing or duration information as part of the indication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timing or duration information as part of the indication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $duration
     * @return static
     */
    public function setDuration(FHIRQuantity $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved by the indication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getIntendedEffect()
    {
        return $this->intendedEffect;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved by the indication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $intendedEffect
     * @return static
     */
    public function setIntendedEffect(FHIRCodeableConcept $intendedEffect = null)
    {
        $this->intendedEffect = $intendedEffect;
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsOtherTherapy[]
     */
    public function getOtherTherapy()
    {
        return $this->otherTherapy;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsOtherTherapy $otherTherapy
     * @return static
     */
    public function addOtherTherapy(FHIRMedicinalProductClinicalsOtherTherapy $otherTherapy = null)
    {
        $this->otherTherapy[] = $otherTherapy;
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsOtherTherapy[] $otherTherapy
     * @return static
     */
    public function setOtherTherapy(array $otherTherapy = [])
    {
        $this->otherTherapy = [];
        if ([] === $otherTherapy) {
            return $this;
        }
        foreach($otherTherapy as $v) {
            if ($v instanceof FHIRMedicinalProductClinicalsOtherTherapy) {
                $this->addOtherTherapy($v);
            } else {
                $this->addOtherTherapy(new FHIRMedicinalProductClinicalsOtherTherapy($v));
            }
        }
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * The population group to which this applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation[]
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * The population group to which this applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation $population
     * @return static
     */
    public function addPopulation(FHIRMedicinalProductClinicalsPopulation $population = null)
    {
        $this->population[] = $population;
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * The population group to which this applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation[] $population
     * @return static
     */
    public function setPopulation(array $population = [])
    {
        $this->population = [];
        if ([] === $population) {
            return $this;
        }
        foreach($population as $v) {
            if ($v instanceof FHIRMedicinalProductClinicalsPopulation) {
                $this->addPopulation($v);
            } else {
                $this->addPopulation(new FHIRMedicinalProductClinicalsPopulation($v));
            }
        }
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies as part of the indication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects[]
     */
    public function getUndesirableEffects()
    {
        return $this->undesirableEffects;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies as part of the indication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects $undesirableEffects
     * @return static
     */
    public function addUndesirableEffects(FHIRMedicinalProductClinicalsUndesirableEffects $undesirableEffects = null)
    {
        $this->undesirableEffects[] = $undesirableEffects;
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies as part of the indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects[] $undesirableEffects
     * @return static
     */
    public function setUndesirableEffects(array $undesirableEffects = [])
    {
        $this->undesirableEffects = [];
        if ([] === $undesirableEffects) {
            return $this;
        }
        foreach($undesirableEffects as $v) {
            if ($v instanceof FHIRMedicinalProductClinicalsUndesirableEffects) {
                $this->addUndesirableEffects($v);
            } else {
                $this->addUndesirableEffects(new FHIRMedicinalProductClinicalsUndesirableEffects($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication
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
                throw new \DomainException(sprintf('FHIRMedicinalProductClinicalsTherapeuticIndication::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductClinicalsTherapeuticIndication::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicinalProductClinicalsTherapeuticIndication;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductClinicalsTherapeuticIndication)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductClinicalsTherapeuticIndication::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication or null, %s seen.',
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
        if (isset($children->comorbidity)) {
            foreach($children->comorbidity as $child) {
                $type->addComorbidity(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->diseaseStatus)) {
            $type->setDiseaseStatus(FHIRCodeableConcept::xmlUnserialize($children->diseaseStatus));
        }
        if (isset($children->diseaseSymptomProcedure)) {
            $type->setDiseaseSymptomProcedure(FHIRCodeableConcept::xmlUnserialize($children->diseaseSymptomProcedure));
        }
        if (isset($children->duration)) {
            $type->setDuration(FHIRQuantity::xmlUnserialize($children->duration));
        }
        if (isset($children->intendedEffect)) {
            $type->setIntendedEffect(FHIRCodeableConcept::xmlUnserialize($children->intendedEffect));
        }
        if (isset($children->otherTherapy)) {
            foreach($children->otherTherapy as $child) {
                $type->addOtherTherapy(FHIRMedicinalProductClinicalsOtherTherapy::xmlUnserialize($child));
            }
        }
        if (isset($children->population)) {
            foreach($children->population as $child) {
                $type->addPopulation(FHIRMedicinalProductClinicalsPopulation::xmlUnserialize($child));
            }
        }
        if (isset($children->undesirableEffects)) {
            foreach($children->undesirableEffects as $child) {
                $type->addUndesirableEffects(FHIRMedicinalProductClinicalsUndesirableEffects::xmlUnserialize($child));
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

        if ([] !== ($vs = $this->getComorbidity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMORBIDITY, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getDiseaseStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISEASE_STATUS, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDiseaseSymptomProcedure())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISEASE_SYMPTOM_PROCEDURE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getIntendedEffect())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INTENDED_EFFECT, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getOtherTherapy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OTHER_THERAPY, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getPopulation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_POPULATION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getUndesirableEffects())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_UNDESIRABLE_EFFECTS, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getComorbidity())) {
            $a[self::FIELD_COMORBIDITY] = $vs;
        }
        if (null !== ($v = $this->getDiseaseStatus())) {
            $a[self::FIELD_DISEASE_STATUS] = $v;
        }
        if (null !== ($v = $this->getDiseaseSymptomProcedure())) {
            $a[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] = $v;
        }
        if (null !== ($v = $this->getDuration())) {
            $a[self::FIELD_DURATION] = $v;
        }
        if (null !== ($v = $this->getIntendedEffect())) {
            $a[self::FIELD_INTENDED_EFFECT] = $v;
        }
        if ([] !== ($vs = $this->getOtherTherapy())) {
            $a[self::FIELD_OTHER_THERAPY] = $vs;
        }
        if ([] !== ($vs = $this->getPopulation())) {
            $a[self::FIELD_POPULATION] = $vs;
        }
        if ([] !== ($vs = $this->getUndesirableEffects())) {
            $a[self::FIELD_UNDESIRABLE_EFFECTS] = $vs;
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