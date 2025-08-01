<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * This resource provides eligibility and plan details from the processing of an
 * CoverageEligibilityRequest resource.
 *
 * Class FHIRCoverageEligibilityResponseBenefit
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse
 */
class FHIRCoverageEligibilityResponseBenefit extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_BENEFIT;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ALLOWED_MONEY = 'allowedMoney';
    const FIELD_ALLOWED_MONEY_EXT = '_allowedMoney';
    const FIELD_ALLOWED_STRING = 'allowedString';
    const FIELD_ALLOWED_STRING_EXT = '_allowedString';
    const FIELD_ALLOWED_UNSIGNED_INT = 'allowedUnsignedInt';
    const FIELD_ALLOWED_UNSIGNED_INT_EXT = '_allowedUnsignedInt';
    const FIELD_TYPE = 'type';
    const FIELD_USED_MONEY = 'usedMoney';
    const FIELD_USED_MONEY_EXT = '_usedMoney';
    const FIELD_USED_STRING = 'usedString';
    const FIELD_USED_STRING_EXT = '_usedString';
    const FIELD_USED_UNSIGNED_INT = 'usedUnsignedInt';
    const FIELD_USED_UNSIGNED_INT_EXT = '_usedUnsignedInt';

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage. (choose any
     * one of allowed*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    protected $allowedMoney = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage. (choose any
     * one of allowed*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $allowedString = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage. (choose any
     * one of allowed*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
     */
    protected $allowedUnsignedInt = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Classification of benefit being provided.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date. (choose any one of
     * used*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    protected $usedMoney = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which have been consumed to date. (choose any one of
     * used*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $usedString = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date. (choose any one of
     * used*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
     */
    protected $usedUnsignedInt = null;

    /**
     * FHIRCoverageEligibilityResponseBenefit Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverageEligibilityResponseBenefit::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ALLOWED_MONEY])) {
            $ext = (isset($data[self::FIELD_ALLOWED_MONEY_EXT]) && is_array($data[self::FIELD_ALLOWED_MONEY_EXT]))
                ? $data[self::FIELD_ALLOWED_MONEY_EXT]
                : null;
            if ($data[self::FIELD_ALLOWED_MONEY] instanceof FHIRMoney) {
                $this->setAllowedMoney($data[self::FIELD_ALLOWED_MONEY]);
            } elseif ($ext && is_scalar($data[self::FIELD_ALLOWED_MONEY])) {
                $this->setAllowedMoney(new FHIRMoney([FHIRMoney::FIELD_VALUE => $data[self::FIELD_ALLOWED_MONEY]] + $ext));
            } else {
                $this->setAllowedMoney(new FHIRMoney($data[self::FIELD_ALLOWED_MONEY]));
            }
        }
        if (isset($data[self::FIELD_ALLOWED_STRING])) {
            $ext = (isset($data[self::FIELD_ALLOWED_STRING_EXT]) && is_array($data[self::FIELD_ALLOWED_STRING_EXT]))
                ? $data[self::FIELD_ALLOWED_STRING_EXT]
                : null;
            if ($data[self::FIELD_ALLOWED_STRING] instanceof FHIRString) {
                $this->setAllowedString($data[self::FIELD_ALLOWED_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_ALLOWED_STRING])) {
                $this->setAllowedString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ALLOWED_STRING]] + $ext));
            } else {
                $this->setAllowedString(new FHIRString($data[self::FIELD_ALLOWED_STRING]));
            }
        }
        if (isset($data[self::FIELD_ALLOWED_UNSIGNED_INT])) {
            $ext = (isset($data[self::FIELD_ALLOWED_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_ALLOWED_UNSIGNED_INT_EXT]))
                ? $data[self::FIELD_ALLOWED_UNSIGNED_INT_EXT]
                : null;
            if ($data[self::FIELD_ALLOWED_UNSIGNED_INT] instanceof FHIRUnsignedInt) {
                $this->setAllowedUnsignedInt($data[self::FIELD_ALLOWED_UNSIGNED_INT]);
            } elseif ($ext && is_scalar($data[self::FIELD_ALLOWED_UNSIGNED_INT])) {
                $this->setAllowedUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_ALLOWED_UNSIGNED_INT]] + $ext));
            } else {
                $this->setAllowedUnsignedInt(new FHIRUnsignedInt($data[self::FIELD_ALLOWED_UNSIGNED_INT]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_USED_MONEY])) {
            $ext = (isset($data[self::FIELD_USED_MONEY_EXT]) && is_array($data[self::FIELD_USED_MONEY_EXT]))
                ? $data[self::FIELD_USED_MONEY_EXT]
                : null;
            if ($data[self::FIELD_USED_MONEY] instanceof FHIRMoney) {
                $this->setUsedMoney($data[self::FIELD_USED_MONEY]);
            } elseif ($ext && is_scalar($data[self::FIELD_USED_MONEY])) {
                $this->setUsedMoney(new FHIRMoney([FHIRMoney::FIELD_VALUE => $data[self::FIELD_USED_MONEY]] + $ext));
            } else {
                $this->setUsedMoney(new FHIRMoney($data[self::FIELD_USED_MONEY]));
            }
        }
        if (isset($data[self::FIELD_USED_STRING])) {
            $ext = (isset($data[self::FIELD_USED_STRING_EXT]) && is_array($data[self::FIELD_USED_STRING_EXT]))
                ? $data[self::FIELD_USED_STRING_EXT]
                : null;
            if ($data[self::FIELD_USED_STRING] instanceof FHIRString) {
                $this->setUsedString($data[self::FIELD_USED_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_USED_STRING])) {
                $this->setUsedString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_USED_STRING]] + $ext));
            } else {
                $this->setUsedString(new FHIRString($data[self::FIELD_USED_STRING]));
            }
        }
        if (isset($data[self::FIELD_USED_UNSIGNED_INT])) {
            $ext = (isset($data[self::FIELD_USED_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_USED_UNSIGNED_INT_EXT]))
                ? $data[self::FIELD_USED_UNSIGNED_INT_EXT]
                : null;
            if ($data[self::FIELD_USED_UNSIGNED_INT] instanceof FHIRUnsignedInt) {
                $this->setUsedUnsignedInt($data[self::FIELD_USED_UNSIGNED_INT]);
            } elseif ($ext && is_scalar($data[self::FIELD_USED_UNSIGNED_INT])) {
                $this->setUsedUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_USED_UNSIGNED_INT]] + $ext));
            } else {
                $this->setUsedUnsignedInt(new FHIRUnsignedInt($data[self::FIELD_USED_UNSIGNED_INT]));
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
        return "<CoverageEligibilityResponseBenefit{$xmlns}></CoverageEligibilityResponseBenefit>";
    }


    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage. (choose any
     * one of allowed*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    public function getAllowedMoney()
    {
        return $this->allowedMoney;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage. (choose any
     * one of allowed*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney $allowedMoney
     * @return static
     */
    public function setAllowedMoney(FHIRMoney $allowedMoney = null)
    {
        $this->allowedMoney = $allowedMoney;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage. (choose any
     * one of allowed*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getAllowedString()
    {
        return $this->allowedString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage. (choose any
     * one of allowed*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $allowedString
     * @return static
     */
    public function setAllowedString($allowedString = null)
    {
        if (null === $allowedString) {
            $this->allowedString = null;
            return $this;
        }
        if ($allowedString instanceof FHIRString) {
            $this->allowedString = $allowedString;
            return $this;
        }
        $this->allowedString = new FHIRString($allowedString);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage. (choose any
     * one of allowed*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
     */
    public function getAllowedUnsignedInt()
    {
        return $this->allowedUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage. (choose any
     * one of allowed*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt $allowedUnsignedInt
     * @return static
     */
    public function setAllowedUnsignedInt($allowedUnsignedInt = null)
    {
        if (null === $allowedUnsignedInt) {
            $this->allowedUnsignedInt = null;
            return $this;
        }
        if ($allowedUnsignedInt instanceof FHIRUnsignedInt) {
            $this->allowedUnsignedInt = $allowedUnsignedInt;
            return $this;
        }
        $this->allowedUnsignedInt = new FHIRUnsignedInt($allowedUnsignedInt);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Classification of benefit being provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Classification of benefit being provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date. (choose any one of
     * used*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    public function getUsedMoney()
    {
        return $this->usedMoney;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date. (choose any one of
     * used*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney $usedMoney
     * @return static
     */
    public function setUsedMoney(FHIRMoney $usedMoney = null)
    {
        $this->usedMoney = $usedMoney;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which have been consumed to date. (choose any one of
     * used*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getUsedString()
    {
        return $this->usedString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which have been consumed to date. (choose any one of
     * used*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $usedString
     * @return static
     */
    public function setUsedString($usedString = null)
    {
        if (null === $usedString) {
            $this->usedString = null;
            return $this;
        }
        if ($usedString instanceof FHIRString) {
            $this->usedString = $usedString;
            return $this;
        }
        $this->usedString = new FHIRString($usedString);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date. (choose any one of
     * used*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt
     */
    public function getUsedUnsignedInt()
    {
        return $this->usedUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date. (choose any one of
     * used*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt $usedUnsignedInt
     * @return static
     */
    public function setUsedUnsignedInt($usedUnsignedInt = null)
    {
        if (null === $usedUnsignedInt) {
            $this->usedUnsignedInt = null;
            return $this;
        }
        if ($usedUnsignedInt instanceof FHIRUnsignedInt) {
            $this->usedUnsignedInt = $usedUnsignedInt;
            return $this;
        }
        $this->usedUnsignedInt = new FHIRUnsignedInt($usedUnsignedInt);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit
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
                throw new \DomainException(sprintf('FHIRCoverageEligibilityResponseBenefit::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCoverageEligibilityResponseBenefit::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCoverageEligibilityResponseBenefit;
        } elseif (!is_object($type) || !($type instanceof FHIRCoverageEligibilityResponseBenefit)) {
            throw new \RuntimeException(sprintf(
                'FHIRCoverageEligibilityResponseBenefit::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit or null, %s seen.',
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
        if (isset($children->allowedMoney)) {
            $type->setAllowedMoney(FHIRMoney::xmlUnserialize($children->allowedMoney));
        }
        if (isset($attributes->allowedString)) {
            $type->setAllowedString((string)$attributes->allowedString);
        }
        if (isset($children->allowedString)) {
            $type->setAllowedString(FHIRString::xmlUnserialize($children->allowedString));
        }
        if (isset($attributes->allowedUnsignedInt)) {
            $type->setAllowedUnsignedInt((string)$attributes->allowedUnsignedInt);
        }
        if (isset($children->allowedUnsignedInt)) {
            $type->setAllowedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->allowedUnsignedInt));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        if (isset($children->usedMoney)) {
            $type->setUsedMoney(FHIRMoney::xmlUnserialize($children->usedMoney));
        }
        if (isset($attributes->usedString)) {
            $type->setUsedString((string)$attributes->usedString);
        }
        if (isset($children->usedString)) {
            $type->setUsedString(FHIRString::xmlUnserialize($children->usedString));
        }
        if (isset($attributes->usedUnsignedInt)) {
            $type->setUsedUnsignedInt((string)$attributes->usedUnsignedInt);
        }
        if (isset($children->usedUnsignedInt)) {
            $type->setUsedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($children->usedUnsignedInt));
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

        if (null !== ($v = $this->getAllowedMoney())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALLOWED_MONEY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAllowedString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALLOWED_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAllowedUnsignedInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALLOWED_UNSIGNED_INT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getUsedMoney())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USED_MONEY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUsedString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USED_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUsedUnsignedInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USED_UNSIGNED_INT, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAllowedMoney())) {
            $a[self::FIELD_ALLOWED_MONEY] = $v;
        }
        if (null !== ($v = $this->getAllowedString())) {
            $a[self::FIELD_ALLOWED_STRING] = $v->getValue();
            $a[self::FIELD_ALLOWED_STRING_EXT] = $v;
        }
        if (null !== ($v = $this->getAllowedUnsignedInt())) {
            $a[self::FIELD_ALLOWED_UNSIGNED_INT] = $v->getValue();
            $a[self::FIELD_ALLOWED_UNSIGNED_INT_EXT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getUsedMoney())) {
            $a[self::FIELD_USED_MONEY] = $v;
        }
        if (null !== ($v = $this->getUsedString())) {
            $a[self::FIELD_USED_STRING] = $v->getValue();
            $a[self::FIELD_USED_STRING_EXT] = $v;
        }
        if (null !== ($v = $this->getUsedUnsignedInt())) {
            $a[self::FIELD_USED_UNSIGNED_INT] = $v->getValue();
            $a[self::FIELD_USED_UNSIGNED_INT_EXT] = $v;
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