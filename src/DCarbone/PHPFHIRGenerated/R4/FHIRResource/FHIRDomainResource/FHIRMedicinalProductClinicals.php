<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsInteractions;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The clinical particulars - indications, contraindications etc. of a medicinal
 * product, including for regulatory purposes.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicinalProductClinicals
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductClinicals extends FHIRDomainResource
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_CLINICALS;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CONTRAINDICATION = 'contraindication';
    const FIELD_INTERACTIONS = 'interactions';
    const FIELD_THERAPEUTIC_INDICATION = 'therapeuticIndication';
    const FIELD_UNDESIRABLE_EFFECTS = 'undesirableEffects';

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Contraindication for the medicinal product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication[]
     */
    protected $contraindication = [];

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * The interactions of the medicinal product with other medicinal products, or
     * other forms of interactions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsInteractions[]
     */
    protected $interactions = [];

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Indication for the Medicinal Product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication[]
     */
    protected $therapeuticIndication = [];

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Describe the undesirable effects of the medicinal product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects[]
     */
    protected $undesirableEffects = [];

    /**
     * FHIRMedicinalProductClinicals Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductClinicals::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONTRAINDICATION])) {
            if (is_array($data[self::FIELD_CONTRAINDICATION])) {
                foreach($data[self::FIELD_CONTRAINDICATION] as $v) {
                    if ($v instanceof FHIRMedicinalProductClinicalsContraindication) {
                        $this->addContraindication($v);
                    } else {
                        $this->addContraindication(new FHIRMedicinalProductClinicalsContraindication($v));
                    }
                }
            } else if ($data[self::FIELD_CONTRAINDICATION] instanceof FHIRMedicinalProductClinicalsContraindication) {
                $this->addContraindication($data[self::FIELD_CONTRAINDICATION]);
            } else {
                $this->addContraindication(new FHIRMedicinalProductClinicalsContraindication($data[self::FIELD_CONTRAINDICATION]));
            }
        }
        if (isset($data[self::FIELD_INTERACTIONS])) {
            if (is_array($data[self::FIELD_INTERACTIONS])) {
                foreach($data[self::FIELD_INTERACTIONS] as $v) {
                    if ($v instanceof FHIRMedicinalProductClinicalsInteractions) {
                        $this->addInteractions($v);
                    } else {
                        $this->addInteractions(new FHIRMedicinalProductClinicalsInteractions($v));
                    }
                }
            } else if ($data[self::FIELD_INTERACTIONS] instanceof FHIRMedicinalProductClinicalsInteractions) {
                $this->addInteractions($data[self::FIELD_INTERACTIONS]);
            } else {
                $this->addInteractions(new FHIRMedicinalProductClinicalsInteractions($data[self::FIELD_INTERACTIONS]));
            }
        }
        if (isset($data[self::FIELD_THERAPEUTIC_INDICATION])) {
            if (is_array($data[self::FIELD_THERAPEUTIC_INDICATION])) {
                foreach($data[self::FIELD_THERAPEUTIC_INDICATION] as $v) {
                    if ($v instanceof FHIRMedicinalProductClinicalsTherapeuticIndication) {
                        $this->addTherapeuticIndication($v);
                    } else {
                        $this->addTherapeuticIndication(new FHIRMedicinalProductClinicalsTherapeuticIndication($v));
                    }
                }
            } else if ($data[self::FIELD_THERAPEUTIC_INDICATION] instanceof FHIRMedicinalProductClinicalsTherapeuticIndication) {
                $this->addTherapeuticIndication($data[self::FIELD_THERAPEUTIC_INDICATION]);
            } else {
                $this->addTherapeuticIndication(new FHIRMedicinalProductClinicalsTherapeuticIndication($data[self::FIELD_THERAPEUTIC_INDICATION]));
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
        return "<MedicinalProductClinicals{$xmlns}></MedicinalProductClinicals>";
    }


    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Contraindication for the medicinal product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication[]
     */
    public function getContraindication()
    {
        return $this->contraindication;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Contraindication for the medicinal product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication $contraindication
     * @return static
     */
    public function addContraindication(FHIRMedicinalProductClinicalsContraindication $contraindication = null)
    {
        $this->contraindication[] = $contraindication;
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Contraindication for the medicinal product.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication[] $contraindication
     * @return static
     */
    public function setContraindication(array $contraindication = [])
    {
        $this->contraindication = [];
        if ([] === $contraindication) {
            return $this;
        }
        foreach($contraindication as $v) {
            if ($v instanceof FHIRMedicinalProductClinicalsContraindication) {
                $this->addContraindication($v);
            } else {
                $this->addContraindication(new FHIRMedicinalProductClinicalsContraindication($v));
            }
        }
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * The interactions of the medicinal product with other medicinal products, or
     * other forms of interactions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsInteractions[]
     */
    public function getInteractions()
    {
        return $this->interactions;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * The interactions of the medicinal product with other medicinal products, or
     * other forms of interactions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsInteractions $interactions
     * @return static
     */
    public function addInteractions(FHIRMedicinalProductClinicalsInteractions $interactions = null)
    {
        $this->interactions[] = $interactions;
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * The interactions of the medicinal product with other medicinal products, or
     * other forms of interactions.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsInteractions[] $interactions
     * @return static
     */
    public function setInteractions(array $interactions = [])
    {
        $this->interactions = [];
        if ([] === $interactions) {
            return $this;
        }
        foreach($interactions as $v) {
            if ($v instanceof FHIRMedicinalProductClinicalsInteractions) {
                $this->addInteractions($v);
            } else {
                $this->addInteractions(new FHIRMedicinalProductClinicalsInteractions($v));
            }
        }
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Indication for the Medicinal Product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication[]
     */
    public function getTherapeuticIndication()
    {
        return $this->therapeuticIndication;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Indication for the Medicinal Product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication $therapeuticIndication
     * @return static
     */
    public function addTherapeuticIndication(FHIRMedicinalProductClinicalsTherapeuticIndication $therapeuticIndication = null)
    {
        $this->therapeuticIndication[] = $therapeuticIndication;
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Indication for the Medicinal Product.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication[] $therapeuticIndication
     * @return static
     */
    public function setTherapeuticIndication(array $therapeuticIndication = [])
    {
        $this->therapeuticIndication = [];
        if ([] === $therapeuticIndication) {
            return $this;
        }
        foreach($therapeuticIndication as $v) {
            if ($v instanceof FHIRMedicinalProductClinicalsTherapeuticIndication) {
                $this->addTherapeuticIndication($v);
            } else {
                $this->addTherapeuticIndication(new FHIRMedicinalProductClinicalsTherapeuticIndication($v));
            }
        }
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Describe the undesirable effects of the medicinal product.
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
     * Describe the undesirable effects of the medicinal product.
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
     * Describe the undesirable effects of the medicinal product.
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductClinicals $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductClinicals
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
                throw new \DomainException(sprintf('FHIRMedicinalProductClinicals::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductClinicals::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicinalProductClinicals;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductClinicals)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductClinicals::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductClinicals or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->contraindication)) {
            foreach($children->contraindication as $child) {
                $type->addContraindication(FHIRMedicinalProductClinicalsContraindication::xmlUnserialize($child));
            }
        }
        if (isset($children->interactions)) {
            foreach($children->interactions as $child) {
                $type->addInteractions(FHIRMedicinalProductClinicalsInteractions::xmlUnserialize($child));
            }
        }
        if (isset($children->therapeuticIndication)) {
            foreach($children->therapeuticIndication as $child) {
                $type->addTherapeuticIndication(FHIRMedicinalProductClinicalsTherapeuticIndication::xmlUnserialize($child));
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

        if ([] !== ($vs = $this->getContraindication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTRAINDICATION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getInteractions())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INTERACTIONS, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getTherapeuticIndication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_THERAPEUTIC_INDICATION, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getContraindication())) {
            $a[self::FIELD_CONTRAINDICATION] = $vs;
        }
        if ([] !== ($vs = $this->getInteractions())) {
            $a[self::FIELD_INTERACTIONS] = $vs;
        }
        if ([] !== ($vs = $this->getTherapeuticIndication())) {
            $a[self::FIELD_THERAPEUTIC_INDICATION] = $vs;
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