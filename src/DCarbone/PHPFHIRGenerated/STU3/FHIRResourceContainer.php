<?php

namespace DCarbone\PHPFHIRGenerated\STU3;

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

use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRBinary;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRBundle;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAccount;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRActivityDefinition;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAuditEvent;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRBasic;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRBodySite;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCarePlan;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCareTeam;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRChargeItem;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaimResponse;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClinicalImpression;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCommunication;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRComposition;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRConceptMap;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCondition;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRConsent;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRContract;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCoverage;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDataElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDetectedIssue;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDevice;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceComponent;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceRequest;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDocumentManifest;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDocumentReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityRequest;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREncounter;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREndpoint;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRExpansionProfile;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRFlag;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGoal;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGraphDefinition;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGroup;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRHealthcareService;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImagingManifest;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImagingStudy;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImmunization;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRLibrary;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRLinkage;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRList;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRLocation;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMeasure;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMeasureReport;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedia;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedication;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationDispense;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationRequest;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationStatement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMessageDefinition;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMessageHeader;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRNamingSystem;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRNutritionOrder;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRObservation;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIROperationDefinition;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIROperationOutcome;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIROrganization;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPatient;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPaymentNotice;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPlanDefinition;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPractitioner;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPractitionerRole;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcedure;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcedureRequest;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcessRequest;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcessResponse;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProvenance;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRQuestionnaire;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRReferralRequest;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRelatedPerson;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRequestGroup;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchSubject;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRiskAssessment;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSchedule;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSearchParameter;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSequence;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRServiceDefinition;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSlot;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSpecimen;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRStructureDefinition;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRStructureMap;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSubscription;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSubstance;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSupplyRequest;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTask;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTestReport;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTestScript;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRValueSet;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRVisionPrescription;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRParameters;

/**
 * Class FHIRResourceContainer
 * @package \DCarbone\PHPFHIRGenerated\STU3
 */
class FHIRResourceContainer implements PHPFHIRCommentContainerInterface, PHPFHIRTypeInterface
{
    use PHPFHIRCommentContainerTrait;

    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RESOURCE_CONTAINER;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACCOUNT = 'Account';
    const FIELD_ACTIVITY_DEFINITION = 'ActivityDefinition';
    const FIELD_ADVERSE_EVENT = 'AdverseEvent';
    const FIELD_ALLERGY_INTOLERANCE = 'AllergyIntolerance';
    const FIELD_APPOINTMENT = 'Appointment';
    const FIELD_APPOINTMENT_RESPONSE = 'AppointmentResponse';
    const FIELD_AUDIT_EVENT = 'AuditEvent';
    const FIELD_BASIC = 'Basic';
    const FIELD_BINARY = 'Binary';
    const FIELD_BODY_SITE = 'BodySite';
    const FIELD_BUNDLE = 'Bundle';
    const FIELD_CAPABILITY_STATEMENT = 'CapabilityStatement';
    const FIELD_CARE_PLAN = 'CarePlan';
    const FIELD_CARE_TEAM = 'CareTeam';
    const FIELD_CHARGE_ITEM = 'ChargeItem';
    const FIELD_CLAIM = 'Claim';
    const FIELD_CLAIM_RESPONSE = 'ClaimResponse';
    const FIELD_CLINICAL_IMPRESSION = 'ClinicalImpression';
    const FIELD_CODE_SYSTEM = 'CodeSystem';
    const FIELD_COMMUNICATION = 'Communication';
    const FIELD_COMMUNICATION_REQUEST = 'CommunicationRequest';
    const FIELD_COMPARTMENT_DEFINITION = 'CompartmentDefinition';
    const FIELD_COMPOSITION = 'Composition';
    const FIELD_CONCEPT_MAP = 'ConceptMap';
    const FIELD_CONDITION = 'Condition';
    const FIELD_CONSENT = 'Consent';
    const FIELD_CONTRACT = 'Contract';
    const FIELD_COVERAGE = 'Coverage';
    const FIELD_DATA_ELEMENT = 'DataElement';
    const FIELD_DETECTED_ISSUE = 'DetectedIssue';
    const FIELD_DEVICE = 'Device';
    const FIELD_DEVICE_COMPONENT = 'DeviceComponent';
    const FIELD_DEVICE_METRIC = 'DeviceMetric';
    const FIELD_DEVICE_REQUEST = 'DeviceRequest';
    const FIELD_DEVICE_USE_STATEMENT = 'DeviceUseStatement';
    const FIELD_DIAGNOSTIC_REPORT = 'DiagnosticReport';
    const FIELD_DOCUMENT_MANIFEST = 'DocumentManifest';
    const FIELD_DOCUMENT_REFERENCE = 'DocumentReference';
    const FIELD_ELIGIBILITY_REQUEST = 'EligibilityRequest';
    const FIELD_ELIGIBILITY_RESPONSE = 'EligibilityResponse';
    const FIELD_ENCOUNTER = 'Encounter';
    const FIELD_ENDPOINT = 'Endpoint';
    const FIELD_ENROLLMENT_REQUEST = 'EnrollmentRequest';
    const FIELD_ENROLLMENT_RESPONSE = 'EnrollmentResponse';
    const FIELD_EPISODE_OF_CARE = 'EpisodeOfCare';
    const FIELD_EXPANSION_PROFILE = 'ExpansionProfile';
    const FIELD_EXPLANATION_OF_BENEFIT = 'ExplanationOfBenefit';
    const FIELD_FAMILY_MEMBER_HISTORY = 'FamilyMemberHistory';
    const FIELD_FLAG = 'Flag';
    const FIELD_GOAL = 'Goal';
    const FIELD_GRAPH_DEFINITION = 'GraphDefinition';
    const FIELD_GROUP = 'Group';
    const FIELD_GUIDANCE_RESPONSE = 'GuidanceResponse';
    const FIELD_HEALTHCARE_SERVICE = 'HealthcareService';
    const FIELD_IMAGING_MANIFEST = 'ImagingManifest';
    const FIELD_IMAGING_STUDY = 'ImagingStudy';
    const FIELD_IMMUNIZATION = 'Immunization';
    const FIELD_IMMUNIZATION_RECOMMENDATION = 'ImmunizationRecommendation';
    const FIELD_IMPLEMENTATION_GUIDE = 'ImplementationGuide';
    const FIELD_LIBRARY = 'Library';
    const FIELD_LINKAGE = 'Linkage';
    const FIELD_LIST = 'List';
    const FIELD_LOCATION = 'Location';
    const FIELD_MEASURE = 'Measure';
    const FIELD_MEASURE_REPORT = 'MeasureReport';
    const FIELD_MEDIA = 'Media';
    const FIELD_MEDICATION = 'Medication';
    const FIELD_MEDICATION_ADMINISTRATION = 'MedicationAdministration';
    const FIELD_MEDICATION_DISPENSE = 'MedicationDispense';
    const FIELD_MEDICATION_REQUEST = 'MedicationRequest';
    const FIELD_MEDICATION_STATEMENT = 'MedicationStatement';
    const FIELD_MESSAGE_DEFINITION = 'MessageDefinition';
    const FIELD_MESSAGE_HEADER = 'MessageHeader';
    const FIELD_NAMING_SYSTEM = 'NamingSystem';
    const FIELD_NUTRITION_ORDER = 'NutritionOrder';
    const FIELD_OBSERVATION = 'Observation';
    const FIELD_OPERATION_DEFINITION = 'OperationDefinition';
    const FIELD_OPERATION_OUTCOME = 'OperationOutcome';
    const FIELD_ORGANIZATION = 'Organization';
    const FIELD_PARAMETERS = 'Parameters';
    const FIELD_PATIENT = 'Patient';
    const FIELD_PAYMENT_NOTICE = 'PaymentNotice';
    const FIELD_PAYMENT_RECONCILIATION = 'PaymentReconciliation';
    const FIELD_PERSON = 'Person';
    const FIELD_PLAN_DEFINITION = 'PlanDefinition';
    const FIELD_PRACTITIONER = 'Practitioner';
    const FIELD_PRACTITIONER_ROLE = 'PractitionerRole';
    const FIELD_PROCEDURE = 'Procedure';
    const FIELD_PROCEDURE_REQUEST = 'ProcedureRequest';
    const FIELD_PROCESS_REQUEST = 'ProcessRequest';
    const FIELD_PROCESS_RESPONSE = 'ProcessResponse';
    const FIELD_PROVENANCE = 'Provenance';
    const FIELD_QUESTIONNAIRE = 'Questionnaire';
    const FIELD_QUESTIONNAIRE_RESPONSE = 'QuestionnaireResponse';
    const FIELD_REFERRAL_REQUEST = 'ReferralRequest';
    const FIELD_RELATED_PERSON = 'RelatedPerson';
    const FIELD_REQUEST_GROUP = 'RequestGroup';
    const FIELD_RESEARCH_STUDY = 'ResearchStudy';
    const FIELD_RESEARCH_SUBJECT = 'ResearchSubject';
    const FIELD_RISK_ASSESSMENT = 'RiskAssessment';
    const FIELD_SCHEDULE = 'Schedule';
    const FIELD_SEARCH_PARAMETER = 'SearchParameter';
    const FIELD_SEQUENCE = 'Sequence';
    const FIELD_SERVICE_DEFINITION = 'ServiceDefinition';
    const FIELD_SLOT = 'Slot';
    const FIELD_SPECIMEN = 'Specimen';
    const FIELD_STRUCTURE_DEFINITION = 'StructureDefinition';
    const FIELD_STRUCTURE_MAP = 'StructureMap';
    const FIELD_SUBSCRIPTION = 'Subscription';
    const FIELD_SUBSTANCE = 'Substance';
    const FIELD_SUPPLY_DELIVERY = 'SupplyDelivery';
    const FIELD_SUPPLY_REQUEST = 'SupplyRequest';
    const FIELD_TASK = 'Task';
    const FIELD_TEST_REPORT = 'TestReport';
    const FIELD_TEST_SCRIPT = 'TestScript';
    const FIELD_VALUE_SET = 'ValueSet';
    const FIELD_VISION_PRESCRIPTION = 'VisionPrescription';

    /**
     * A financial tool for tracking value accrued for a particular purpose. In the
     * healthcare field, used to track charges for a patient, cost centers, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAccount
     */
    protected $Account = null;

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRActivityDefinition
     */
    protected $ActivityDefinition = null;

    /**
     * Actual or potential/avoided event causing unintended physical injury resulting
     * from or contributed to by medical care, a research study or other healthcare
     * setting factors that requires additional monitoring, treatment, or
     * hospitalization, or that results in death.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    protected $AdverseEvent = null;

    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    protected $AllergyIntolerance = null;

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    protected $Appointment = null;

    /**
     * A reply to an appointment request for a patient and/or practitioner(s), such as
     * a confirmation or rejection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse
     */
    protected $AppointmentResponse = null;

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAuditEvent
     */
    protected $AuditEvent = null;

    /**
     * Basic is used for handling concepts not yet defined in FHIR, narrative-only
     * resources that don't map to an existing resource, and custom resources not
     * appropriate for inclusion in the FHIR specification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRBasic
     */
    protected $Basic = null;

    /**
     * A binary resource can contain any content, whether text, image, pdf, zip
     * archive, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRBinary
     */
    protected $Binary = null;

    /**
     * Record details about the anatomical location of a specimen or body part. This
     * resource may be used when a coded concept does not provide the necessary detail
     * needed for the use case.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRBodySite
     */
    protected $BodySite = null;

    /**
     * A container for a collection of resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRBundle
     */
    protected $Bundle = null;

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    protected $CapabilityStatement = null;

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient, group or community for a period of time, possibly
     * limited to care for a specific condition or set of conditions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCarePlan
     */
    protected $CarePlan = null;

    /**
     * The Care Team includes all the people and organizations who plan to participate
     * in the coordination and delivery of care for a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCareTeam
     */
    protected $CareTeam = null;

    /**
     * The resource ChargeItem describes the provision of healthcare provider products
     * for a certain patient, therefore referring not only to the product, but
     * containing in addition details of the provision, like date, time, amounts and
     * participating organizations and persons. Main Usage of the ChargeItem is to
     * enable the billing process and internal cost allocation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    protected $ChargeItem = null;

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    protected $Claim = null;

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    protected $ClaimResponse = null;

    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClinicalImpression
     */
    protected $ClinicalImpression = null;

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    protected $CodeSystem = null;

    /**
     * An occurrence of information being transmitted; e.g. an alert that was sent to a
     * responsible provider, a public health agency was notified about a reportable
     * condition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCommunication
     */
    protected $Communication = null;

    /**
     * A request to convey information; e.g. the CDS system proposes that an alert be
     * sent to a responsible provider, the CDS system proposes that the public health
     * agency be notified about a reportable condition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest
     */
    protected $CommunicationRequest = null;

    /**
     * A compartment definition that defines how resources are accessed on a server.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition
     */
    protected $CompartmentDefinition = null;

    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical document that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement. While a Composition defines the structure, it does not
     * actually contain the content: rather the full content of a document is contained
     * in a Bundle, of which the Composition is the first resource contained.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRComposition
     */
    protected $Composition = null;

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRConceptMap
     */
    protected $ConceptMap = null;

    /**
     * A clinical condition, problem, diagnosis, or other event, situation, issue, or
     * clinical concept that has risen to a level of concern.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCondition
     */
    protected $Condition = null;

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRConsent
     */
    protected $Consent = null;

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRContract
     */
    protected $Contract = null;

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    protected $Coverage = null;

    /**
     * The formal description of a single piece of information that can be gathered and
     * reported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDataElement
     */
    protected $DataElement = null;

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    protected $DetectedIssue = null;

    /**
     * This resource identifies an instance or a type of a manufactured item that is
     * used in the provision of healthcare without being substantially changed through
     * that activity. The device may be a medical or non-medical device. Medical
     * devices include durable (reusable) medical equipment, implantable devices, as
     * well as disposable equipment used for diagnostic, treatment, and research for
     * healthcare and public health. Non-medical devices may include items such as a
     * machine, cellphone, computer, application, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDevice
     */
    protected $Device = null;

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     */
    protected $DeviceComponent = null;

    /**
     * Describes a measurement, calculation or setting capability of a medical device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    protected $DeviceMetric = null;

    /**
     * Represents a request for a patient to employ a medical device. The device may be
     * an implantable device, or an external assistive device, such as a walker.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceRequest
     */
    protected $DeviceRequest = null;

    /**
     * A record of a device being used by a patient where the record is the result of a
     * report from the patient or another clinician.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement
     */
    protected $DeviceUseStatement = null;

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretations, and formatted representation of diagnostic reports.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport
     */
    protected $DiagnosticReport = null;

    /**
     * A collection of documents compiled for a purpose together with metadata that
     * applies to the collection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    protected $DocumentManifest = null;

    /**
     * A reference to a document.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDocumentReference
     */
    protected $DocumentReference = null;

    /**
     * The EligibilityRequest provides patient and insurance coverage information to an
     * insurer for them to respond, in the form of an EligibilityResponse, with
     * information regarding whether the stated coverage is valid and in-force and
     * optionally to provide the insurance details of the policy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityRequest
     */
    protected $EligibilityRequest = null;

    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     */
    protected $EligibilityResponse = null;

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREncounter
     */
    protected $Encounter = null;

    /**
     * The technical details of an endpoint that can be used for electronic services,
     * such as for web services providing XDS.b or a REST endpoint for another FHIR
     * server. This may include any security context information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    protected $Endpoint = null;

    /**
     * This resource provides the insurance enrollment details to the insurer regarding
     * a specified coverage.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest
     */
    protected $EnrollmentRequest = null;

    /**
     * This resource provides enrollment and plan details from the processing of an
     * Enrollment resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse
     */
    protected $EnrollmentResponse = null;

    /**
     * An association between a patient and an organization / healthcare provider(s)
     * during which time encounters may occur. The managing organization assumes a
     * level of responsibility for the patient during this time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    protected $EpisodeOfCare = null;

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRExpansionProfile
     */
    protected $ExpansionProfile = null;

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit
     */
    protected $ExplanationOfBenefit = null;

    /**
     * Significant health events and conditions for a person related to the patient
     * relevant in the context of care for the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
     */
    protected $FamilyMemberHistory = null;

    /**
     * Prospective warnings of potential issues when providing care to the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRFlag
     */
    protected $Flag = null;

    /**
     * Describes the intended objective(s) for a patient, group or organization care,
     * for example, weight loss, restoring an activity of daily living, obtaining herd
     * immunity via immunization, meeting a process improvement objective, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGoal
     */
    protected $Goal = null;

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGraphDefinition
     */
    protected $GraphDefinition = null;

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively and are not formally
     * or legally recognized; i.e. a collection of entities that isn't an Organization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGroup
     */
    protected $Group = null;

    /**
     * A guidance response is the formal response to a guidance request, including any
     * output parameters returned by the evaluation, as well as the description of any
     * proposed actions to be taken.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse
     */
    protected $GuidanceResponse = null;

    /**
     * The details of a healthcare service available at a location.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    protected $HealthcareService = null;

    /**
     * A text description of the DICOM SOP instances selected in the ImagingManifest;
     * or the reason for, or significance of, the selection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImagingManifest
     */
    protected $ImagingManifest = null;

    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImagingStudy
     */
    protected $ImagingStudy = null;

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImmunization
     */
    protected $Immunization = null;

    /**
     * A patient's point-in-time immunization and recommendation (i.e. forecasting a
     * patient's immunization eligibility according to a published schedule) with
     * optional supporting justification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation
     */
    protected $ImmunizationRecommendation = null;

    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    protected $ImplementationGuide = null;

    /**
     * The Library resource is a general-purpose container for knowledge asset
     * definitions. It can be used to describe and expose existing knowledge assets
     * such as logic libraries and information model descriptions, as well as to
     * describe a collection of knowledge assets.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRLibrary
     */
    protected $Library = null;

    /**
     * Identifies two or more records (resource instances) that are referring to the
     * same real-world "occurrence".
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRLinkage
     */
    protected $Linkage = null;

    /**
     * A set of information summarized from a list of other resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRList
     */
    protected $List = null;

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained or
     * accommodated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    protected $Location = null;

    /**
     * The Measure resource provides the definition of a quality measure.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMeasure
     */
    protected $Measure = null;

    /**
     * The MeasureReport resource contains the results of evaluating a measure.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    protected $MeasureReport = null;

    /**
     * A photo, video, or audio recording acquired or used in healthcare. The actual
     * content may be inline or provided by direct reference.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedia
     */
    protected $Media = null;

    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedication
     */
    protected $Medication = null;

    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    protected $MedicationAdministration = null;

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    protected $MedicationDispense = null;

    /**
     * An order or request for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
     * generalize the use across inpatient and outpatient settings, including care
     * plans, etc., and to harmonize with workflow patterns.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationRequest
     */
    protected $MedicationRequest = null;

    /**
     * A record of a medication that is being consumed by a patient. A
     * MedicationStatement may indicate that the patient may be taking the medication
     * now, or has taken the medication in the past or will be taking the medication in
     * the future. The source of this information can be the patient, significant other
     * (such as a family member or spouse), or a clinician. A common scenario where
     * this information is captured is during the history taking process during a
     * patient visit or stay. The medication information may come from sources such as
     * the patient's memory, from a prescription bottle, or from a list of medications
     * the patient, clinician or other party maintains The primary difference between a
     * medication statement and a medication administration is that the medication
     * administration has complete administration information and is based on actual
     * administration information from the person who administered the medication. A
     * medication statement is often, if not always, less specific. There is no
     * required date/time when the medication was administered, in fact we only know
     * that a source has reported the patient is taking this medication, where details
     * such as time, quantity, or rate or even medication product may be incomplete or
     * missing or less precise. As stated earlier, the medication statement information
     * may come from the patient's memory, from a prescription bottle or from a list of
     * medications the patient, clinician or other party maintains. Medication
     * administration is more formal and is not missing detailed information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationStatement
     */
    protected $MedicationStatement = null;

    /**
     * Defines the characteristics of a message that can be shared between systems,
     * including the type of event that initiates the message, the content to be
     * transmitted and what response(s), if any, are permitted.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMessageDefinition
     */
    protected $MessageDefinition = null;

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The reference(s) that are the subject of the action as well as other
     * information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMessageHeader
     */
    protected $MessageHeader = null;

    /**
     * A curated namespace that issues unique symbols within that namespace for the
     * identification of concepts, people, devices, etc. Represents a "System" used
     * within the Identifier and Coding data types.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRNamingSystem
     */
    protected $NamingSystem = null;

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
     */
    protected $NutritionOrder = null;

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRObservation
     */
    protected $Observation = null;

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIROperationDefinition
     */
    protected $OperationDefinition = null;

    /**
     * A collection of error, warning or information messages that result from a system
     * action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIROperationOutcome
     */
    protected $OperationOutcome = null;

    /**
     * A formally or informally recognized grouping of people or organizations formed
     * for the purpose of achieving some form of collective action. Includes companies,
     * institutions, corporations, departments, community groups, healthcare practice
     * groups, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIROrganization
     */
    protected $Organization = null;

    /**
     * This special resource type is used to represent an operation request and
     * response (operations.html). It has no other use, and there is no RESTful
     * endpoint associated with it.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRParameters
     */
    protected $Parameters = null;

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPatient
     */
    protected $Patient = null;

    /**
     * This resource provides the status of the payment for goods and services
     * rendered, and the request and response resource references.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPaymentNotice
     */
    protected $PaymentNotice = null;

    /**
     * This resource provides payment details and claim references supporting a bulk
     * payment.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation
     */
    protected $PaymentReconciliation = null;

    /**
     * Demographics and administrative information about a person independent of a
     * specific health-related context.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
     */
    protected $Person = null;

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    protected $PlanDefinition = null;

    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPractitioner
     */
    protected $Practitioner = null;

    /**
     * A specific set of Roles/Locations/specialties/services that a practitioner may
     * perform at an organization for a period of time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPractitionerRole
     */
    protected $PractitionerRole = null;

    /**
     * An action that is or was performed on a patient. This can be a physical
     * intervention like an operation, or less invasive like counseling or
     * hypnotherapy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcedure
     */
    protected $Procedure = null;

    /**
     * A record of a request for diagnostic investigations, treatments, or operations
     * to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcedureRequest
     */
    protected $ProcedureRequest = null;

    /**
     * This resource provides the target, request and response, and action details for
     * an action to be performed by the target on or about existing resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcessRequest
     */
    protected $ProcessRequest = null;

    /**
     * This resource provides processing status, errors and notes from the processing
     * of a resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    protected $ProcessResponse = null;

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    protected $Provenance = null;

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRQuestionnaire
     */
    protected $Questionnaire = null;

    /**
     * A structured set of questions and their answers. The questions are ordered and
     * grouped into coherent subsets, corresponding to the structure of the grouping of
     * the questionnaire being responded to.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse
     */
    protected $QuestionnaireResponse = null;

    /**
     * Used to record and send details about a request for referral service or transfer
     * of a patient to the care of another provider or provider organization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRReferralRequest
     */
    protected $ReferralRequest = null;

    /**
     * Information about a person that is involved in the care for a patient, but who
     * is not the target of healthcare, nor has a formal responsibility in the care
     * process.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRelatedPerson
     */
    protected $RelatedPerson = null;

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRequestGroup
     */
    protected $RequestGroup = null;

    /**
     * A process where a researcher or organization plans and then executes a series of
     * steps intended to increase the field of healthcare-related knowledge. This
     * includes studies of safety, efficacy, comparative effectiveness and other
     * information about medications, devices, therapies and other interventional and
     * investigative techniques. A ResearchStudy involves the gathering of information
     * about human or animal subjects.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    protected $ResearchStudy = null;

    /**
     * A process where a researcher or organization plans and then executes a series of
     * steps intended to increase the field of healthcare-related knowledge. This
     * includes studies of safety, efficacy, comparative effectiveness and other
     * information about medications, devices, therapies and other interventional and
     * investigative techniques. A ResearchStudy involves the gathering of information
     * about human or animal subjects.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     */
    protected $ResearchSubject = null;

    /**
     * An assessment of the likely outcome(s) for a patient or other subject as well as
     * the likelihood of each outcome.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRiskAssessment
     */
    protected $RiskAssessment = null;

    /**
     * A container for slots of time that may be available for booking appointments.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    protected $Schedule = null;

    /**
     * A search parameter that defines a named search item that can be used to
     * search/filter on a resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSearchParameter
     */
    protected $SearchParameter = null;

    /**
     * Raw data describing a biological sequence.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    protected $Sequence = null;

    /**
     * The ServiceDefinition describes a unit of decision support functionality that is
     * made available as a service, such as immunization modules or drug-drug
     * interaction checking.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRServiceDefinition
     */
    protected $ServiceDefinition = null;

    /**
     * A slot of time on a schedule that may be available for booking appointments.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSlot
     */
    protected $Slot = null;

    /**
     * A sample to be used for analysis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    protected $Specimen = null;

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRStructureDefinition
     */
    protected $StructureDefinition = null;

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRStructureMap
     */
    protected $StructureMap = null;

    /**
     * The subscription resource is used to define a push based subscription from a
     * server to another system. Once a subscription is registered with the server, the
     * server checks every resource that is created or updated, and if the resource
     * matches the given criteria, it sends a message on the defined "channel" so that
     * another system is able to take an appropriate action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSubscription
     */
    protected $Subscription = null;

    /**
     * A homogeneous material with a definite composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSubstance
     */
    protected $Substance = null;

    /**
     * Record of delivery of what is supplied.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery
     */
    protected $SupplyDelivery = null;

    /**
     * A record of a request for a medication, substance or device used in the
     * healthcare setting.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSupplyRequest
     */
    protected $SupplyRequest = null;

    /**
     * A task to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTask
     */
    protected $Task = null;

    /**
     * A summary of information based on the results of executing a TestScript.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTestReport
     */
    protected $TestReport = null;

    /**
     * A structured set of tests against a FHIR server implementation to determine
     * compliance against the FHIR specification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTestScript
     */
    protected $TestScript = null;

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRValueSet
     */
    protected $ValueSet = null;

    /**
     * An authorization for the supply of glasses and/or contact lenses to a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRVisionPrescription
     */
    protected $VisionPrescription = null;

    /**
     * FHIRResourceContainer Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRResourceContainer::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        if (isset($data[self::FIELD_ACCOUNT])) {
            if ($data[self::FIELD_ACCOUNT] instanceof FHIRAccount) {
                $this->setAccount($data[self::FIELD_ACCOUNT]);
            } else {
                $this->setAccount(new FHIRAccount($data[self::FIELD_ACCOUNT]));
            }
            return;
        }
        if (isset($data[self::FIELD_ACTIVITY_DEFINITION])) {
            if ($data[self::FIELD_ACTIVITY_DEFINITION] instanceof FHIRActivityDefinition) {
                $this->setActivityDefinition($data[self::FIELD_ACTIVITY_DEFINITION]);
            } else {
                $this->setActivityDefinition(new FHIRActivityDefinition($data[self::FIELD_ACTIVITY_DEFINITION]));
            }
            return;
        }
        if (isset($data[self::FIELD_ADVERSE_EVENT])) {
            if ($data[self::FIELD_ADVERSE_EVENT] instanceof FHIRAdverseEvent) {
                $this->setAdverseEvent($data[self::FIELD_ADVERSE_EVENT]);
            } else {
                $this->setAdverseEvent(new FHIRAdverseEvent($data[self::FIELD_ADVERSE_EVENT]));
            }
            return;
        }
        if (isset($data[self::FIELD_ALLERGY_INTOLERANCE])) {
            if ($data[self::FIELD_ALLERGY_INTOLERANCE] instanceof FHIRAllergyIntolerance) {
                $this->setAllergyIntolerance($data[self::FIELD_ALLERGY_INTOLERANCE]);
            } else {
                $this->setAllergyIntolerance(new FHIRAllergyIntolerance($data[self::FIELD_ALLERGY_INTOLERANCE]));
            }
            return;
        }
        if (isset($data[self::FIELD_APPOINTMENT])) {
            if ($data[self::FIELD_APPOINTMENT] instanceof FHIRAppointment) {
                $this->setAppointment($data[self::FIELD_APPOINTMENT]);
            } else {
                $this->setAppointment(new FHIRAppointment($data[self::FIELD_APPOINTMENT]));
            }
            return;
        }
        if (isset($data[self::FIELD_APPOINTMENT_RESPONSE])) {
            if ($data[self::FIELD_APPOINTMENT_RESPONSE] instanceof FHIRAppointmentResponse) {
                $this->setAppointmentResponse($data[self::FIELD_APPOINTMENT_RESPONSE]);
            } else {
                $this->setAppointmentResponse(new FHIRAppointmentResponse($data[self::FIELD_APPOINTMENT_RESPONSE]));
            }
            return;
        }
        if (isset($data[self::FIELD_AUDIT_EVENT])) {
            if ($data[self::FIELD_AUDIT_EVENT] instanceof FHIRAuditEvent) {
                $this->setAuditEvent($data[self::FIELD_AUDIT_EVENT]);
            } else {
                $this->setAuditEvent(new FHIRAuditEvent($data[self::FIELD_AUDIT_EVENT]));
            }
            return;
        }
        if (isset($data[self::FIELD_BASIC])) {
            if ($data[self::FIELD_BASIC] instanceof FHIRBasic) {
                $this->setBasic($data[self::FIELD_BASIC]);
            } else {
                $this->setBasic(new FHIRBasic($data[self::FIELD_BASIC]));
            }
            return;
        }
        if (isset($data[self::FIELD_BINARY])) {
            if ($data[self::FIELD_BINARY] instanceof FHIRBinary) {
                $this->setBinary($data[self::FIELD_BINARY]);
            } else {
                $this->setBinary(new FHIRBinary($data[self::FIELD_BINARY]));
            }
            return;
        }
        if (isset($data[self::FIELD_BODY_SITE])) {
            if ($data[self::FIELD_BODY_SITE] instanceof FHIRBodySite) {
                $this->setBodySite($data[self::FIELD_BODY_SITE]);
            } else {
                $this->setBodySite(new FHIRBodySite($data[self::FIELD_BODY_SITE]));
            }
            return;
        }
        if (isset($data[self::FIELD_BUNDLE])) {
            if ($data[self::FIELD_BUNDLE] instanceof FHIRBundle) {
                $this->setBundle($data[self::FIELD_BUNDLE]);
            } else {
                $this->setBundle(new FHIRBundle($data[self::FIELD_BUNDLE]));
            }
            return;
        }
        if (isset($data[self::FIELD_CAPABILITY_STATEMENT])) {
            if ($data[self::FIELD_CAPABILITY_STATEMENT] instanceof FHIRCapabilityStatement) {
                $this->setCapabilityStatement($data[self::FIELD_CAPABILITY_STATEMENT]);
            } else {
                $this->setCapabilityStatement(new FHIRCapabilityStatement($data[self::FIELD_CAPABILITY_STATEMENT]));
            }
            return;
        }
        if (isset($data[self::FIELD_CARE_PLAN])) {
            if ($data[self::FIELD_CARE_PLAN] instanceof FHIRCarePlan) {
                $this->setCarePlan($data[self::FIELD_CARE_PLAN]);
            } else {
                $this->setCarePlan(new FHIRCarePlan($data[self::FIELD_CARE_PLAN]));
            }
            return;
        }
        if (isset($data[self::FIELD_CARE_TEAM])) {
            if ($data[self::FIELD_CARE_TEAM] instanceof FHIRCareTeam) {
                $this->setCareTeam($data[self::FIELD_CARE_TEAM]);
            } else {
                $this->setCareTeam(new FHIRCareTeam($data[self::FIELD_CARE_TEAM]));
            }
            return;
        }
        if (isset($data[self::FIELD_CHARGE_ITEM])) {
            if ($data[self::FIELD_CHARGE_ITEM] instanceof FHIRChargeItem) {
                $this->setChargeItem($data[self::FIELD_CHARGE_ITEM]);
            } else {
                $this->setChargeItem(new FHIRChargeItem($data[self::FIELD_CHARGE_ITEM]));
            }
            return;
        }
        if (isset($data[self::FIELD_CLAIM])) {
            if ($data[self::FIELD_CLAIM] instanceof FHIRClaim) {
                $this->setClaim($data[self::FIELD_CLAIM]);
            } else {
                $this->setClaim(new FHIRClaim($data[self::FIELD_CLAIM]));
            }
            return;
        }
        if (isset($data[self::FIELD_CLAIM_RESPONSE])) {
            if ($data[self::FIELD_CLAIM_RESPONSE] instanceof FHIRClaimResponse) {
                $this->setClaimResponse($data[self::FIELD_CLAIM_RESPONSE]);
            } else {
                $this->setClaimResponse(new FHIRClaimResponse($data[self::FIELD_CLAIM_RESPONSE]));
            }
            return;
        }
        if (isset($data[self::FIELD_CLINICAL_IMPRESSION])) {
            if ($data[self::FIELD_CLINICAL_IMPRESSION] instanceof FHIRClinicalImpression) {
                $this->setClinicalImpression($data[self::FIELD_CLINICAL_IMPRESSION]);
            } else {
                $this->setClinicalImpression(new FHIRClinicalImpression($data[self::FIELD_CLINICAL_IMPRESSION]));
            }
            return;
        }
        if (isset($data[self::FIELD_CODE_SYSTEM])) {
            if ($data[self::FIELD_CODE_SYSTEM] instanceof FHIRCodeSystem) {
                $this->setCodeSystem($data[self::FIELD_CODE_SYSTEM]);
            } else {
                $this->setCodeSystem(new FHIRCodeSystem($data[self::FIELD_CODE_SYSTEM]));
            }
            return;
        }
        if (isset($data[self::FIELD_COMMUNICATION])) {
            if ($data[self::FIELD_COMMUNICATION] instanceof FHIRCommunication) {
                $this->setCommunication($data[self::FIELD_COMMUNICATION]);
            } else {
                $this->setCommunication(new FHIRCommunication($data[self::FIELD_COMMUNICATION]));
            }
            return;
        }
        if (isset($data[self::FIELD_COMMUNICATION_REQUEST])) {
            if ($data[self::FIELD_COMMUNICATION_REQUEST] instanceof FHIRCommunicationRequest) {
                $this->setCommunicationRequest($data[self::FIELD_COMMUNICATION_REQUEST]);
            } else {
                $this->setCommunicationRequest(new FHIRCommunicationRequest($data[self::FIELD_COMMUNICATION_REQUEST]));
            }
            return;
        }
        if (isset($data[self::FIELD_COMPARTMENT_DEFINITION])) {
            if ($data[self::FIELD_COMPARTMENT_DEFINITION] instanceof FHIRCompartmentDefinition) {
                $this->setCompartmentDefinition($data[self::FIELD_COMPARTMENT_DEFINITION]);
            } else {
                $this->setCompartmentDefinition(new FHIRCompartmentDefinition($data[self::FIELD_COMPARTMENT_DEFINITION]));
            }
            return;
        }
        if (isset($data[self::FIELD_COMPOSITION])) {
            if ($data[self::FIELD_COMPOSITION] instanceof FHIRComposition) {
                $this->setComposition($data[self::FIELD_COMPOSITION]);
            } else {
                $this->setComposition(new FHIRComposition($data[self::FIELD_COMPOSITION]));
            }
            return;
        }
        if (isset($data[self::FIELD_CONCEPT_MAP])) {
            if ($data[self::FIELD_CONCEPT_MAP] instanceof FHIRConceptMap) {
                $this->setConceptMap($data[self::FIELD_CONCEPT_MAP]);
            } else {
                $this->setConceptMap(new FHIRConceptMap($data[self::FIELD_CONCEPT_MAP]));
            }
            return;
        }
        if (isset($data[self::FIELD_CONDITION])) {
            if ($data[self::FIELD_CONDITION] instanceof FHIRCondition) {
                $this->setCondition($data[self::FIELD_CONDITION]);
            } else {
                $this->setCondition(new FHIRCondition($data[self::FIELD_CONDITION]));
            }
            return;
        }
        if (isset($data[self::FIELD_CONSENT])) {
            if ($data[self::FIELD_CONSENT] instanceof FHIRConsent) {
                $this->setConsent($data[self::FIELD_CONSENT]);
            } else {
                $this->setConsent(new FHIRConsent($data[self::FIELD_CONSENT]));
            }
            return;
        }
        if (isset($data[self::FIELD_CONTRACT])) {
            if ($data[self::FIELD_CONTRACT] instanceof FHIRContract) {
                $this->setContract($data[self::FIELD_CONTRACT]);
            } else {
                $this->setContract(new FHIRContract($data[self::FIELD_CONTRACT]));
            }
            return;
        }
        if (isset($data[self::FIELD_COVERAGE])) {
            if ($data[self::FIELD_COVERAGE] instanceof FHIRCoverage) {
                $this->setCoverage($data[self::FIELD_COVERAGE]);
            } else {
                $this->setCoverage(new FHIRCoverage($data[self::FIELD_COVERAGE]));
            }
            return;
        }
        if (isset($data[self::FIELD_DATA_ELEMENT])) {
            if ($data[self::FIELD_DATA_ELEMENT] instanceof FHIRDataElement) {
                $this->setDataElement($data[self::FIELD_DATA_ELEMENT]);
            } else {
                $this->setDataElement(new FHIRDataElement($data[self::FIELD_DATA_ELEMENT]));
            }
            return;
        }
        if (isset($data[self::FIELD_DETECTED_ISSUE])) {
            if ($data[self::FIELD_DETECTED_ISSUE] instanceof FHIRDetectedIssue) {
                $this->setDetectedIssue($data[self::FIELD_DETECTED_ISSUE]);
            } else {
                $this->setDetectedIssue(new FHIRDetectedIssue($data[self::FIELD_DETECTED_ISSUE]));
            }
            return;
        }
        if (isset($data[self::FIELD_DEVICE])) {
            if ($data[self::FIELD_DEVICE] instanceof FHIRDevice) {
                $this->setDevice($data[self::FIELD_DEVICE]);
            } else {
                $this->setDevice(new FHIRDevice($data[self::FIELD_DEVICE]));
            }
            return;
        }
        if (isset($data[self::FIELD_DEVICE_COMPONENT])) {
            if ($data[self::FIELD_DEVICE_COMPONENT] instanceof FHIRDeviceComponent) {
                $this->setDeviceComponent($data[self::FIELD_DEVICE_COMPONENT]);
            } else {
                $this->setDeviceComponent(new FHIRDeviceComponent($data[self::FIELD_DEVICE_COMPONENT]));
            }
            return;
        }
        if (isset($data[self::FIELD_DEVICE_METRIC])) {
            if ($data[self::FIELD_DEVICE_METRIC] instanceof FHIRDeviceMetric) {
                $this->setDeviceMetric($data[self::FIELD_DEVICE_METRIC]);
            } else {
                $this->setDeviceMetric(new FHIRDeviceMetric($data[self::FIELD_DEVICE_METRIC]));
            }
            return;
        }
        if (isset($data[self::FIELD_DEVICE_REQUEST])) {
            if ($data[self::FIELD_DEVICE_REQUEST] instanceof FHIRDeviceRequest) {
                $this->setDeviceRequest($data[self::FIELD_DEVICE_REQUEST]);
            } else {
                $this->setDeviceRequest(new FHIRDeviceRequest($data[self::FIELD_DEVICE_REQUEST]));
            }
            return;
        }
        if (isset($data[self::FIELD_DEVICE_USE_STATEMENT])) {
            if ($data[self::FIELD_DEVICE_USE_STATEMENT] instanceof FHIRDeviceUseStatement) {
                $this->setDeviceUseStatement($data[self::FIELD_DEVICE_USE_STATEMENT]);
            } else {
                $this->setDeviceUseStatement(new FHIRDeviceUseStatement($data[self::FIELD_DEVICE_USE_STATEMENT]));
            }
            return;
        }
        if (isset($data[self::FIELD_DIAGNOSTIC_REPORT])) {
            if ($data[self::FIELD_DIAGNOSTIC_REPORT] instanceof FHIRDiagnosticReport) {
                $this->setDiagnosticReport($data[self::FIELD_DIAGNOSTIC_REPORT]);
            } else {
                $this->setDiagnosticReport(new FHIRDiagnosticReport($data[self::FIELD_DIAGNOSTIC_REPORT]));
            }
            return;
        }
        if (isset($data[self::FIELD_DOCUMENT_MANIFEST])) {
            if ($data[self::FIELD_DOCUMENT_MANIFEST] instanceof FHIRDocumentManifest) {
                $this->setDocumentManifest($data[self::FIELD_DOCUMENT_MANIFEST]);
            } else {
                $this->setDocumentManifest(new FHIRDocumentManifest($data[self::FIELD_DOCUMENT_MANIFEST]));
            }
            return;
        }
        if (isset($data[self::FIELD_DOCUMENT_REFERENCE])) {
            if ($data[self::FIELD_DOCUMENT_REFERENCE] instanceof FHIRDocumentReference) {
                $this->setDocumentReference($data[self::FIELD_DOCUMENT_REFERENCE]);
            } else {
                $this->setDocumentReference(new FHIRDocumentReference($data[self::FIELD_DOCUMENT_REFERENCE]));
            }
            return;
        }
        if (isset($data[self::FIELD_ELIGIBILITY_REQUEST])) {
            if ($data[self::FIELD_ELIGIBILITY_REQUEST] instanceof FHIREligibilityRequest) {
                $this->setEligibilityRequest($data[self::FIELD_ELIGIBILITY_REQUEST]);
            } else {
                $this->setEligibilityRequest(new FHIREligibilityRequest($data[self::FIELD_ELIGIBILITY_REQUEST]));
            }
            return;
        }
        if (isset($data[self::FIELD_ELIGIBILITY_RESPONSE])) {
            if ($data[self::FIELD_ELIGIBILITY_RESPONSE] instanceof FHIREligibilityResponse) {
                $this->setEligibilityResponse($data[self::FIELD_ELIGIBILITY_RESPONSE]);
            } else {
                $this->setEligibilityResponse(new FHIREligibilityResponse($data[self::FIELD_ELIGIBILITY_RESPONSE]));
            }
            return;
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIREncounter) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIREncounter($data[self::FIELD_ENCOUNTER]));
            }
            return;
        }
        if (isset($data[self::FIELD_ENDPOINT])) {
            if ($data[self::FIELD_ENDPOINT] instanceof FHIREndpoint) {
                $this->setEndpoint($data[self::FIELD_ENDPOINT]);
            } else {
                $this->setEndpoint(new FHIREndpoint($data[self::FIELD_ENDPOINT]));
            }
            return;
        }
        if (isset($data[self::FIELD_ENROLLMENT_REQUEST])) {
            if ($data[self::FIELD_ENROLLMENT_REQUEST] instanceof FHIREnrollmentRequest) {
                $this->setEnrollmentRequest($data[self::FIELD_ENROLLMENT_REQUEST]);
            } else {
                $this->setEnrollmentRequest(new FHIREnrollmentRequest($data[self::FIELD_ENROLLMENT_REQUEST]));
            }
            return;
        }
        if (isset($data[self::FIELD_ENROLLMENT_RESPONSE])) {
            if ($data[self::FIELD_ENROLLMENT_RESPONSE] instanceof FHIREnrollmentResponse) {
                $this->setEnrollmentResponse($data[self::FIELD_ENROLLMENT_RESPONSE]);
            } else {
                $this->setEnrollmentResponse(new FHIREnrollmentResponse($data[self::FIELD_ENROLLMENT_RESPONSE]));
            }
            return;
        }
        if (isset($data[self::FIELD_EPISODE_OF_CARE])) {
            if ($data[self::FIELD_EPISODE_OF_CARE] instanceof FHIREpisodeOfCare) {
                $this->setEpisodeOfCare($data[self::FIELD_EPISODE_OF_CARE]);
            } else {
                $this->setEpisodeOfCare(new FHIREpisodeOfCare($data[self::FIELD_EPISODE_OF_CARE]));
            }
            return;
        }
        if (isset($data[self::FIELD_EXPANSION_PROFILE])) {
            if ($data[self::FIELD_EXPANSION_PROFILE] instanceof FHIRExpansionProfile) {
                $this->setExpansionProfile($data[self::FIELD_EXPANSION_PROFILE]);
            } else {
                $this->setExpansionProfile(new FHIRExpansionProfile($data[self::FIELD_EXPANSION_PROFILE]));
            }
            return;
        }
        if (isset($data[self::FIELD_EXPLANATION_OF_BENEFIT])) {
            if ($data[self::FIELD_EXPLANATION_OF_BENEFIT] instanceof FHIRExplanationOfBenefit) {
                $this->setExplanationOfBenefit($data[self::FIELD_EXPLANATION_OF_BENEFIT]);
            } else {
                $this->setExplanationOfBenefit(new FHIRExplanationOfBenefit($data[self::FIELD_EXPLANATION_OF_BENEFIT]));
            }
            return;
        }
        if (isset($data[self::FIELD_FAMILY_MEMBER_HISTORY])) {
            if ($data[self::FIELD_FAMILY_MEMBER_HISTORY] instanceof FHIRFamilyMemberHistory) {
                $this->setFamilyMemberHistory($data[self::FIELD_FAMILY_MEMBER_HISTORY]);
            } else {
                $this->setFamilyMemberHistory(new FHIRFamilyMemberHistory($data[self::FIELD_FAMILY_MEMBER_HISTORY]));
            }
            return;
        }
        if (isset($data[self::FIELD_FLAG])) {
            if ($data[self::FIELD_FLAG] instanceof FHIRFlag) {
                $this->setFlag($data[self::FIELD_FLAG]);
            } else {
                $this->setFlag(new FHIRFlag($data[self::FIELD_FLAG]));
            }
            return;
        }
        if (isset($data[self::FIELD_GOAL])) {
            if ($data[self::FIELD_GOAL] instanceof FHIRGoal) {
                $this->setGoal($data[self::FIELD_GOAL]);
            } else {
                $this->setGoal(new FHIRGoal($data[self::FIELD_GOAL]));
            }
            return;
        }
        if (isset($data[self::FIELD_GRAPH_DEFINITION])) {
            if ($data[self::FIELD_GRAPH_DEFINITION] instanceof FHIRGraphDefinition) {
                $this->setGraphDefinition($data[self::FIELD_GRAPH_DEFINITION]);
            } else {
                $this->setGraphDefinition(new FHIRGraphDefinition($data[self::FIELD_GRAPH_DEFINITION]));
            }
            return;
        }
        if (isset($data[self::FIELD_GROUP])) {
            if ($data[self::FIELD_GROUP] instanceof FHIRGroup) {
                $this->setGroup($data[self::FIELD_GROUP]);
            } else {
                $this->setGroup(new FHIRGroup($data[self::FIELD_GROUP]));
            }
            return;
        }
        if (isset($data[self::FIELD_GUIDANCE_RESPONSE])) {
            if ($data[self::FIELD_GUIDANCE_RESPONSE] instanceof FHIRGuidanceResponse) {
                $this->setGuidanceResponse($data[self::FIELD_GUIDANCE_RESPONSE]);
            } else {
                $this->setGuidanceResponse(new FHIRGuidanceResponse($data[self::FIELD_GUIDANCE_RESPONSE]));
            }
            return;
        }
        if (isset($data[self::FIELD_HEALTHCARE_SERVICE])) {
            if ($data[self::FIELD_HEALTHCARE_SERVICE] instanceof FHIRHealthcareService) {
                $this->setHealthcareService($data[self::FIELD_HEALTHCARE_SERVICE]);
            } else {
                $this->setHealthcareService(new FHIRHealthcareService($data[self::FIELD_HEALTHCARE_SERVICE]));
            }
            return;
        }
        if (isset($data[self::FIELD_IMAGING_MANIFEST])) {
            if ($data[self::FIELD_IMAGING_MANIFEST] instanceof FHIRImagingManifest) {
                $this->setImagingManifest($data[self::FIELD_IMAGING_MANIFEST]);
            } else {
                $this->setImagingManifest(new FHIRImagingManifest($data[self::FIELD_IMAGING_MANIFEST]));
            }
            return;
        }
        if (isset($data[self::FIELD_IMAGING_STUDY])) {
            if ($data[self::FIELD_IMAGING_STUDY] instanceof FHIRImagingStudy) {
                $this->setImagingStudy($data[self::FIELD_IMAGING_STUDY]);
            } else {
                $this->setImagingStudy(new FHIRImagingStudy($data[self::FIELD_IMAGING_STUDY]));
            }
            return;
        }
        if (isset($data[self::FIELD_IMMUNIZATION])) {
            if ($data[self::FIELD_IMMUNIZATION] instanceof FHIRImmunization) {
                $this->setImmunization($data[self::FIELD_IMMUNIZATION]);
            } else {
                $this->setImmunization(new FHIRImmunization($data[self::FIELD_IMMUNIZATION]));
            }
            return;
        }
        if (isset($data[self::FIELD_IMMUNIZATION_RECOMMENDATION])) {
            if ($data[self::FIELD_IMMUNIZATION_RECOMMENDATION] instanceof FHIRImmunizationRecommendation) {
                $this->setImmunizationRecommendation($data[self::FIELD_IMMUNIZATION_RECOMMENDATION]);
            } else {
                $this->setImmunizationRecommendation(new FHIRImmunizationRecommendation($data[self::FIELD_IMMUNIZATION_RECOMMENDATION]));
            }
            return;
        }
        if (isset($data[self::FIELD_IMPLEMENTATION_GUIDE])) {
            if ($data[self::FIELD_IMPLEMENTATION_GUIDE] instanceof FHIRImplementationGuide) {
                $this->setImplementationGuide($data[self::FIELD_IMPLEMENTATION_GUIDE]);
            } else {
                $this->setImplementationGuide(new FHIRImplementationGuide($data[self::FIELD_IMPLEMENTATION_GUIDE]));
            }
            return;
        }
        if (isset($data[self::FIELD_LIBRARY])) {
            if ($data[self::FIELD_LIBRARY] instanceof FHIRLibrary) {
                $this->setLibrary($data[self::FIELD_LIBRARY]);
            } else {
                $this->setLibrary(new FHIRLibrary($data[self::FIELD_LIBRARY]));
            }
            return;
        }
        if (isset($data[self::FIELD_LINKAGE])) {
            if ($data[self::FIELD_LINKAGE] instanceof FHIRLinkage) {
                $this->setLinkage($data[self::FIELD_LINKAGE]);
            } else {
                $this->setLinkage(new FHIRLinkage($data[self::FIELD_LINKAGE]));
            }
            return;
        }
        if (isset($data[self::FIELD_LIST])) {
            if ($data[self::FIELD_LIST] instanceof FHIRList) {
                $this->setList($data[self::FIELD_LIST]);
            } else {
                $this->setList(new FHIRList($data[self::FIELD_LIST]));
            }
            return;
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRLocation) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRLocation($data[self::FIELD_LOCATION]));
            }
            return;
        }
        if (isset($data[self::FIELD_MEASURE])) {
            if ($data[self::FIELD_MEASURE] instanceof FHIRMeasure) {
                $this->setMeasure($data[self::FIELD_MEASURE]);
            } else {
                $this->setMeasure(new FHIRMeasure($data[self::FIELD_MEASURE]));
            }
            return;
        }
        if (isset($data[self::FIELD_MEASURE_REPORT])) {
            if ($data[self::FIELD_MEASURE_REPORT] instanceof FHIRMeasureReport) {
                $this->setMeasureReport($data[self::FIELD_MEASURE_REPORT]);
            } else {
                $this->setMeasureReport(new FHIRMeasureReport($data[self::FIELD_MEASURE_REPORT]));
            }
            return;
        }
        if (isset($data[self::FIELD_MEDIA])) {
            if ($data[self::FIELD_MEDIA] instanceof FHIRMedia) {
                $this->setMedia($data[self::FIELD_MEDIA]);
            } else {
                $this->setMedia(new FHIRMedia($data[self::FIELD_MEDIA]));
            }
            return;
        }
        if (isset($data[self::FIELD_MEDICATION])) {
            if ($data[self::FIELD_MEDICATION] instanceof FHIRMedication) {
                $this->setMedication($data[self::FIELD_MEDICATION]);
            } else {
                $this->setMedication(new FHIRMedication($data[self::FIELD_MEDICATION]));
            }
            return;
        }
        if (isset($data[self::FIELD_MEDICATION_ADMINISTRATION])) {
            if ($data[self::FIELD_MEDICATION_ADMINISTRATION] instanceof FHIRMedicationAdministration) {
                $this->setMedicationAdministration($data[self::FIELD_MEDICATION_ADMINISTRATION]);
            } else {
                $this->setMedicationAdministration(new FHIRMedicationAdministration($data[self::FIELD_MEDICATION_ADMINISTRATION]));
            }
            return;
        }
        if (isset($data[self::FIELD_MEDICATION_DISPENSE])) {
            if ($data[self::FIELD_MEDICATION_DISPENSE] instanceof FHIRMedicationDispense) {
                $this->setMedicationDispense($data[self::FIELD_MEDICATION_DISPENSE]);
            } else {
                $this->setMedicationDispense(new FHIRMedicationDispense($data[self::FIELD_MEDICATION_DISPENSE]));
            }
            return;
        }
        if (isset($data[self::FIELD_MEDICATION_REQUEST])) {
            if ($data[self::FIELD_MEDICATION_REQUEST] instanceof FHIRMedicationRequest) {
                $this->setMedicationRequest($data[self::FIELD_MEDICATION_REQUEST]);
            } else {
                $this->setMedicationRequest(new FHIRMedicationRequest($data[self::FIELD_MEDICATION_REQUEST]));
            }
            return;
        }
        if (isset($data[self::FIELD_MEDICATION_STATEMENT])) {
            if ($data[self::FIELD_MEDICATION_STATEMENT] instanceof FHIRMedicationStatement) {
                $this->setMedicationStatement($data[self::FIELD_MEDICATION_STATEMENT]);
            } else {
                $this->setMedicationStatement(new FHIRMedicationStatement($data[self::FIELD_MEDICATION_STATEMENT]));
            }
            return;
        }
        if (isset($data[self::FIELD_MESSAGE_DEFINITION])) {
            if ($data[self::FIELD_MESSAGE_DEFINITION] instanceof FHIRMessageDefinition) {
                $this->setMessageDefinition($data[self::FIELD_MESSAGE_DEFINITION]);
            } else {
                $this->setMessageDefinition(new FHIRMessageDefinition($data[self::FIELD_MESSAGE_DEFINITION]));
            }
            return;
        }
        if (isset($data[self::FIELD_MESSAGE_HEADER])) {
            if ($data[self::FIELD_MESSAGE_HEADER] instanceof FHIRMessageHeader) {
                $this->setMessageHeader($data[self::FIELD_MESSAGE_HEADER]);
            } else {
                $this->setMessageHeader(new FHIRMessageHeader($data[self::FIELD_MESSAGE_HEADER]));
            }
            return;
        }
        if (isset($data[self::FIELD_NAMING_SYSTEM])) {
            if ($data[self::FIELD_NAMING_SYSTEM] instanceof FHIRNamingSystem) {
                $this->setNamingSystem($data[self::FIELD_NAMING_SYSTEM]);
            } else {
                $this->setNamingSystem(new FHIRNamingSystem($data[self::FIELD_NAMING_SYSTEM]));
            }
            return;
        }
        if (isset($data[self::FIELD_NUTRITION_ORDER])) {
            if ($data[self::FIELD_NUTRITION_ORDER] instanceof FHIRNutritionOrder) {
                $this->setNutritionOrder($data[self::FIELD_NUTRITION_ORDER]);
            } else {
                $this->setNutritionOrder(new FHIRNutritionOrder($data[self::FIELD_NUTRITION_ORDER]));
            }
            return;
        }
        if (isset($data[self::FIELD_OBSERVATION])) {
            if ($data[self::FIELD_OBSERVATION] instanceof FHIRObservation) {
                $this->setObservation($data[self::FIELD_OBSERVATION]);
            } else {
                $this->setObservation(new FHIRObservation($data[self::FIELD_OBSERVATION]));
            }
            return;
        }
        if (isset($data[self::FIELD_OPERATION_DEFINITION])) {
            if ($data[self::FIELD_OPERATION_DEFINITION] instanceof FHIROperationDefinition) {
                $this->setOperationDefinition($data[self::FIELD_OPERATION_DEFINITION]);
            } else {
                $this->setOperationDefinition(new FHIROperationDefinition($data[self::FIELD_OPERATION_DEFINITION]));
            }
            return;
        }
        if (isset($data[self::FIELD_OPERATION_OUTCOME])) {
            if ($data[self::FIELD_OPERATION_OUTCOME] instanceof FHIROperationOutcome) {
                $this->setOperationOutcome($data[self::FIELD_OPERATION_OUTCOME]);
            } else {
                $this->setOperationOutcome(new FHIROperationOutcome($data[self::FIELD_OPERATION_OUTCOME]));
            }
            return;
        }
        if (isset($data[self::FIELD_ORGANIZATION])) {
            if ($data[self::FIELD_ORGANIZATION] instanceof FHIROrganization) {
                $this->setOrganization($data[self::FIELD_ORGANIZATION]);
            } else {
                $this->setOrganization(new FHIROrganization($data[self::FIELD_ORGANIZATION]));
            }
            return;
        }
        if (isset($data[self::FIELD_PARAMETERS])) {
            if ($data[self::FIELD_PARAMETERS] instanceof FHIRParameters) {
                $this->setParameters($data[self::FIELD_PARAMETERS]);
            } else {
                $this->setParameters(new FHIRParameters($data[self::FIELD_PARAMETERS]));
            }
            return;
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRPatient) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRPatient($data[self::FIELD_PATIENT]));
            }
            return;
        }
        if (isset($data[self::FIELD_PAYMENT_NOTICE])) {
            if ($data[self::FIELD_PAYMENT_NOTICE] instanceof FHIRPaymentNotice) {
                $this->setPaymentNotice($data[self::FIELD_PAYMENT_NOTICE]);
            } else {
                $this->setPaymentNotice(new FHIRPaymentNotice($data[self::FIELD_PAYMENT_NOTICE]));
            }
            return;
        }
        if (isset($data[self::FIELD_PAYMENT_RECONCILIATION])) {
            if ($data[self::FIELD_PAYMENT_RECONCILIATION] instanceof FHIRPaymentReconciliation) {
                $this->setPaymentReconciliation($data[self::FIELD_PAYMENT_RECONCILIATION]);
            } else {
                $this->setPaymentReconciliation(new FHIRPaymentReconciliation($data[self::FIELD_PAYMENT_RECONCILIATION]));
            }
            return;
        }
        if (isset($data[self::FIELD_PERSON])) {
            if ($data[self::FIELD_PERSON] instanceof FHIRPerson) {
                $this->setPerson($data[self::FIELD_PERSON]);
            } else {
                $this->setPerson(new FHIRPerson($data[self::FIELD_PERSON]));
            }
            return;
        }
        if (isset($data[self::FIELD_PLAN_DEFINITION])) {
            if ($data[self::FIELD_PLAN_DEFINITION] instanceof FHIRPlanDefinition) {
                $this->setPlanDefinition($data[self::FIELD_PLAN_DEFINITION]);
            } else {
                $this->setPlanDefinition(new FHIRPlanDefinition($data[self::FIELD_PLAN_DEFINITION]));
            }
            return;
        }
        if (isset($data[self::FIELD_PRACTITIONER])) {
            if ($data[self::FIELD_PRACTITIONER] instanceof FHIRPractitioner) {
                $this->setPractitioner($data[self::FIELD_PRACTITIONER]);
            } else {
                $this->setPractitioner(new FHIRPractitioner($data[self::FIELD_PRACTITIONER]));
            }
            return;
        }
        if (isset($data[self::FIELD_PRACTITIONER_ROLE])) {
            if ($data[self::FIELD_PRACTITIONER_ROLE] instanceof FHIRPractitionerRole) {
                $this->setPractitionerRole($data[self::FIELD_PRACTITIONER_ROLE]);
            } else {
                $this->setPractitionerRole(new FHIRPractitionerRole($data[self::FIELD_PRACTITIONER_ROLE]));
            }
            return;
        }
        if (isset($data[self::FIELD_PROCEDURE])) {
            if ($data[self::FIELD_PROCEDURE] instanceof FHIRProcedure) {
                $this->setProcedure($data[self::FIELD_PROCEDURE]);
            } else {
                $this->setProcedure(new FHIRProcedure($data[self::FIELD_PROCEDURE]));
            }
            return;
        }
        if (isset($data[self::FIELD_PROCEDURE_REQUEST])) {
            if ($data[self::FIELD_PROCEDURE_REQUEST] instanceof FHIRProcedureRequest) {
                $this->setProcedureRequest($data[self::FIELD_PROCEDURE_REQUEST]);
            } else {
                $this->setProcedureRequest(new FHIRProcedureRequest($data[self::FIELD_PROCEDURE_REQUEST]));
            }
            return;
        }
        if (isset($data[self::FIELD_PROCESS_REQUEST])) {
            if ($data[self::FIELD_PROCESS_REQUEST] instanceof FHIRProcessRequest) {
                $this->setProcessRequest($data[self::FIELD_PROCESS_REQUEST]);
            } else {
                $this->setProcessRequest(new FHIRProcessRequest($data[self::FIELD_PROCESS_REQUEST]));
            }
            return;
        }
        if (isset($data[self::FIELD_PROCESS_RESPONSE])) {
            if ($data[self::FIELD_PROCESS_RESPONSE] instanceof FHIRProcessResponse) {
                $this->setProcessResponse($data[self::FIELD_PROCESS_RESPONSE]);
            } else {
                $this->setProcessResponse(new FHIRProcessResponse($data[self::FIELD_PROCESS_RESPONSE]));
            }
            return;
        }
        if (isset($data[self::FIELD_PROVENANCE])) {
            if ($data[self::FIELD_PROVENANCE] instanceof FHIRProvenance) {
                $this->setProvenance($data[self::FIELD_PROVENANCE]);
            } else {
                $this->setProvenance(new FHIRProvenance($data[self::FIELD_PROVENANCE]));
            }
            return;
        }
        if (isset($data[self::FIELD_QUESTIONNAIRE])) {
            if ($data[self::FIELD_QUESTIONNAIRE] instanceof FHIRQuestionnaire) {
                $this->setQuestionnaire($data[self::FIELD_QUESTIONNAIRE]);
            } else {
                $this->setQuestionnaire(new FHIRQuestionnaire($data[self::FIELD_QUESTIONNAIRE]));
            }
            return;
        }
        if (isset($data[self::FIELD_QUESTIONNAIRE_RESPONSE])) {
            if ($data[self::FIELD_QUESTIONNAIRE_RESPONSE] instanceof FHIRQuestionnaireResponse) {
                $this->setQuestionnaireResponse($data[self::FIELD_QUESTIONNAIRE_RESPONSE]);
            } else {
                $this->setQuestionnaireResponse(new FHIRQuestionnaireResponse($data[self::FIELD_QUESTIONNAIRE_RESPONSE]));
            }
            return;
        }
        if (isset($data[self::FIELD_REFERRAL_REQUEST])) {
            if ($data[self::FIELD_REFERRAL_REQUEST] instanceof FHIRReferralRequest) {
                $this->setReferralRequest($data[self::FIELD_REFERRAL_REQUEST]);
            } else {
                $this->setReferralRequest(new FHIRReferralRequest($data[self::FIELD_REFERRAL_REQUEST]));
            }
            return;
        }
        if (isset($data[self::FIELD_RELATED_PERSON])) {
            if ($data[self::FIELD_RELATED_PERSON] instanceof FHIRRelatedPerson) {
                $this->setRelatedPerson($data[self::FIELD_RELATED_PERSON]);
            } else {
                $this->setRelatedPerson(new FHIRRelatedPerson($data[self::FIELD_RELATED_PERSON]));
            }
            return;
        }
        if (isset($data[self::FIELD_REQUEST_GROUP])) {
            if ($data[self::FIELD_REQUEST_GROUP] instanceof FHIRRequestGroup) {
                $this->setRequestGroup($data[self::FIELD_REQUEST_GROUP]);
            } else {
                $this->setRequestGroup(new FHIRRequestGroup($data[self::FIELD_REQUEST_GROUP]));
            }
            return;
        }
        if (isset($data[self::FIELD_RESEARCH_STUDY])) {
            if ($data[self::FIELD_RESEARCH_STUDY] instanceof FHIRResearchStudy) {
                $this->setResearchStudy($data[self::FIELD_RESEARCH_STUDY]);
            } else {
                $this->setResearchStudy(new FHIRResearchStudy($data[self::FIELD_RESEARCH_STUDY]));
            }
            return;
        }
        if (isset($data[self::FIELD_RESEARCH_SUBJECT])) {
            if ($data[self::FIELD_RESEARCH_SUBJECT] instanceof FHIRResearchSubject) {
                $this->setResearchSubject($data[self::FIELD_RESEARCH_SUBJECT]);
            } else {
                $this->setResearchSubject(new FHIRResearchSubject($data[self::FIELD_RESEARCH_SUBJECT]));
            }
            return;
        }
        if (isset($data[self::FIELD_RISK_ASSESSMENT])) {
            if ($data[self::FIELD_RISK_ASSESSMENT] instanceof FHIRRiskAssessment) {
                $this->setRiskAssessment($data[self::FIELD_RISK_ASSESSMENT]);
            } else {
                $this->setRiskAssessment(new FHIRRiskAssessment($data[self::FIELD_RISK_ASSESSMENT]));
            }
            return;
        }
        if (isset($data[self::FIELD_SCHEDULE])) {
            if ($data[self::FIELD_SCHEDULE] instanceof FHIRSchedule) {
                $this->setSchedule($data[self::FIELD_SCHEDULE]);
            } else {
                $this->setSchedule(new FHIRSchedule($data[self::FIELD_SCHEDULE]));
            }
            return;
        }
        if (isset($data[self::FIELD_SEARCH_PARAMETER])) {
            if ($data[self::FIELD_SEARCH_PARAMETER] instanceof FHIRSearchParameter) {
                $this->setSearchParameter($data[self::FIELD_SEARCH_PARAMETER]);
            } else {
                $this->setSearchParameter(new FHIRSearchParameter($data[self::FIELD_SEARCH_PARAMETER]));
            }
            return;
        }
        if (isset($data[self::FIELD_SEQUENCE])) {
            if ($data[self::FIELD_SEQUENCE] instanceof FHIRSequence) {
                $this->setSequence($data[self::FIELD_SEQUENCE]);
            } else {
                $this->setSequence(new FHIRSequence($data[self::FIELD_SEQUENCE]));
            }
            return;
        }
        if (isset($data[self::FIELD_SERVICE_DEFINITION])) {
            if ($data[self::FIELD_SERVICE_DEFINITION] instanceof FHIRServiceDefinition) {
                $this->setServiceDefinition($data[self::FIELD_SERVICE_DEFINITION]);
            } else {
                $this->setServiceDefinition(new FHIRServiceDefinition($data[self::FIELD_SERVICE_DEFINITION]));
            }
            return;
        }
        if (isset($data[self::FIELD_SLOT])) {
            if ($data[self::FIELD_SLOT] instanceof FHIRSlot) {
                $this->setSlot($data[self::FIELD_SLOT]);
            } else {
                $this->setSlot(new FHIRSlot($data[self::FIELD_SLOT]));
            }
            return;
        }
        if (isset($data[self::FIELD_SPECIMEN])) {
            if ($data[self::FIELD_SPECIMEN] instanceof FHIRSpecimen) {
                $this->setSpecimen($data[self::FIELD_SPECIMEN]);
            } else {
                $this->setSpecimen(new FHIRSpecimen($data[self::FIELD_SPECIMEN]));
            }
            return;
        }
        if (isset($data[self::FIELD_STRUCTURE_DEFINITION])) {
            if ($data[self::FIELD_STRUCTURE_DEFINITION] instanceof FHIRStructureDefinition) {
                $this->setStructureDefinition($data[self::FIELD_STRUCTURE_DEFINITION]);
            } else {
                $this->setStructureDefinition(new FHIRStructureDefinition($data[self::FIELD_STRUCTURE_DEFINITION]));
            }
            return;
        }
        if (isset($data[self::FIELD_STRUCTURE_MAP])) {
            if ($data[self::FIELD_STRUCTURE_MAP] instanceof FHIRStructureMap) {
                $this->setStructureMap($data[self::FIELD_STRUCTURE_MAP]);
            } else {
                $this->setStructureMap(new FHIRStructureMap($data[self::FIELD_STRUCTURE_MAP]));
            }
            return;
        }
        if (isset($data[self::FIELD_SUBSCRIPTION])) {
            if ($data[self::FIELD_SUBSCRIPTION] instanceof FHIRSubscription) {
                $this->setSubscription($data[self::FIELD_SUBSCRIPTION]);
            } else {
                $this->setSubscription(new FHIRSubscription($data[self::FIELD_SUBSCRIPTION]));
            }
            return;
        }
        if (isset($data[self::FIELD_SUBSTANCE])) {
            if ($data[self::FIELD_SUBSTANCE] instanceof FHIRSubstance) {
                $this->setSubstance($data[self::FIELD_SUBSTANCE]);
            } else {
                $this->setSubstance(new FHIRSubstance($data[self::FIELD_SUBSTANCE]));
            }
            return;
        }
        if (isset($data[self::FIELD_SUPPLY_DELIVERY])) {
            if ($data[self::FIELD_SUPPLY_DELIVERY] instanceof FHIRSupplyDelivery) {
                $this->setSupplyDelivery($data[self::FIELD_SUPPLY_DELIVERY]);
            } else {
                $this->setSupplyDelivery(new FHIRSupplyDelivery($data[self::FIELD_SUPPLY_DELIVERY]));
            }
            return;
        }
        if (isset($data[self::FIELD_SUPPLY_REQUEST])) {
            if ($data[self::FIELD_SUPPLY_REQUEST] instanceof FHIRSupplyRequest) {
                $this->setSupplyRequest($data[self::FIELD_SUPPLY_REQUEST]);
            } else {
                $this->setSupplyRequest(new FHIRSupplyRequest($data[self::FIELD_SUPPLY_REQUEST]));
            }
            return;
        }
        if (isset($data[self::FIELD_TASK])) {
            if ($data[self::FIELD_TASK] instanceof FHIRTask) {
                $this->setTask($data[self::FIELD_TASK]);
            } else {
                $this->setTask(new FHIRTask($data[self::FIELD_TASK]));
            }
            return;
        }
        if (isset($data[self::FIELD_TEST_REPORT])) {
            if ($data[self::FIELD_TEST_REPORT] instanceof FHIRTestReport) {
                $this->setTestReport($data[self::FIELD_TEST_REPORT]);
            } else {
                $this->setTestReport(new FHIRTestReport($data[self::FIELD_TEST_REPORT]));
            }
            return;
        }
        if (isset($data[self::FIELD_TEST_SCRIPT])) {
            if ($data[self::FIELD_TEST_SCRIPT] instanceof FHIRTestScript) {
                $this->setTestScript($data[self::FIELD_TEST_SCRIPT]);
            } else {
                $this->setTestScript(new FHIRTestScript($data[self::FIELD_TEST_SCRIPT]));
            }
            return;
        }
        if (isset($data[self::FIELD_VALUE_SET])) {
            if ($data[self::FIELD_VALUE_SET] instanceof FHIRValueSet) {
                $this->setValueSet($data[self::FIELD_VALUE_SET]);
            } else {
                $this->setValueSet(new FHIRValueSet($data[self::FIELD_VALUE_SET]));
            }
            return;
        }
        if (isset($data[self::FIELD_VISION_PRESCRIPTION])) {
            if ($data[self::FIELD_VISION_PRESCRIPTION] instanceof FHIRVisionPrescription) {
                $this->setVisionPrescription($data[self::FIELD_VISION_PRESCRIPTION]);
            } else {
                $this->setVisionPrescription(new FHIRVisionPrescription($data[self::FIELD_VISION_PRESCRIPTION]));
            }
            return;
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
        return "<ResourceContainer{$xmlns}></ResourceContainer>";
    }


    /**
     * A financial tool for tracking value accrued for a particular purpose. In the
     * healthcare field, used to track charges for a patient, cost centers, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAccount
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * A financial tool for tracking value accrued for a particular purpose. In the
     * healthcare field, used to track charges for a patient, cost centers, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAccount $Account
     * @return static
     */
    public function setAccount(FHIRAccount $Account = null)
    {
        $this->Account = $Account;
        return $this;
    }

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRActivityDefinition
     */
    public function getActivityDefinition()
    {
        return $this->ActivityDefinition;
    }

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRActivityDefinition $ActivityDefinition
     * @return static
     */
    public function setActivityDefinition(FHIRActivityDefinition $ActivityDefinition = null)
    {
        $this->ActivityDefinition = $ActivityDefinition;
        return $this;
    }

    /**
     * Actual or potential/avoided event causing unintended physical injury resulting
     * from or contributed to by medical care, a research study or other healthcare
     * setting factors that requires additional monitoring, treatment, or
     * hospitalization, or that results in death.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function getAdverseEvent()
    {
        return $this->AdverseEvent;
    }

    /**
     * Actual or potential/avoided event causing unintended physical injury resulting
     * from or contributed to by medical care, a research study or other healthcare
     * setting factors that requires additional monitoring, treatment, or
     * hospitalization, or that results in death.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent $AdverseEvent
     * @return static
     */
    public function setAdverseEvent(FHIRAdverseEvent $AdverseEvent = null)
    {
        $this->AdverseEvent = $AdverseEvent;
        return $this;
    }

    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function getAllergyIntolerance()
    {
        return $this->AllergyIntolerance;
    }

    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance $AllergyIntolerance
     * @return static
     */
    public function setAllergyIntolerance(FHIRAllergyIntolerance $AllergyIntolerance = null)
    {
        $this->AllergyIntolerance = $AllergyIntolerance;
        return $this;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment
     */
    public function getAppointment()
    {
        return $this->Appointment;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment $Appointment
     * @return static
     */
    public function setAppointment(FHIRAppointment $Appointment = null)
    {
        $this->Appointment = $Appointment;
        return $this;
    }

    /**
     * A reply to an appointment request for a patient and/or practitioner(s), such as
     * a confirmation or rejection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse
     */
    public function getAppointmentResponse()
    {
        return $this->AppointmentResponse;
    }

    /**
     * A reply to an appointment request for a patient and/or practitioner(s), such as
     * a confirmation or rejection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse $AppointmentResponse
     * @return static
     */
    public function setAppointmentResponse(FHIRAppointmentResponse $AppointmentResponse = null)
    {
        $this->AppointmentResponse = $AppointmentResponse;
        return $this;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAuditEvent
     */
    public function getAuditEvent()
    {
        return $this->AuditEvent;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAuditEvent $AuditEvent
     * @return static
     */
    public function setAuditEvent(FHIRAuditEvent $AuditEvent = null)
    {
        $this->AuditEvent = $AuditEvent;
        return $this;
    }

    /**
     * Basic is used for handling concepts not yet defined in FHIR, narrative-only
     * resources that don't map to an existing resource, and custom resources not
     * appropriate for inclusion in the FHIR specification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRBasic
     */
    public function getBasic()
    {
        return $this->Basic;
    }

    /**
     * Basic is used for handling concepts not yet defined in FHIR, narrative-only
     * resources that don't map to an existing resource, and custom resources not
     * appropriate for inclusion in the FHIR specification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRBasic $Basic
     * @return static
     */
    public function setBasic(FHIRBasic $Basic = null)
    {
        $this->Basic = $Basic;
        return $this;
    }

    /**
     * A binary resource can contain any content, whether text, image, pdf, zip
     * archive, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRBinary
     */
    public function getBinary()
    {
        return $this->Binary;
    }

    /**
     * A binary resource can contain any content, whether text, image, pdf, zip
     * archive, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRBinary $Binary
     * @return static
     */
    public function setBinary(FHIRBinary $Binary = null)
    {
        $this->Binary = $Binary;
        return $this;
    }

    /**
     * Record details about the anatomical location of a specimen or body part. This
     * resource may be used when a coded concept does not provide the necessary detail
     * needed for the use case.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRBodySite
     */
    public function getBodySite()
    {
        return $this->BodySite;
    }

    /**
     * Record details about the anatomical location of a specimen or body part. This
     * resource may be used when a coded concept does not provide the necessary detail
     * needed for the use case.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRBodySite $BodySite
     * @return static
     */
    public function setBodySite(FHIRBodySite $BodySite = null)
    {
        $this->BodySite = $BodySite;
        return $this;
    }

    /**
     * A container for a collection of resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRBundle
     */
    public function getBundle()
    {
        return $this->Bundle;
    }

    /**
     * A container for a collection of resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRBundle $Bundle
     * @return static
     */
    public function setBundle(FHIRBundle $Bundle = null)
    {
        $this->Bundle = $Bundle;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     */
    public function getCapabilityStatement()
    {
        return $this->CapabilityStatement;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement $CapabilityStatement
     * @return static
     */
    public function setCapabilityStatement(FHIRCapabilityStatement $CapabilityStatement = null)
    {
        $this->CapabilityStatement = $CapabilityStatement;
        return $this;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient, group or community for a period of time, possibly
     * limited to care for a specific condition or set of conditions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCarePlan
     */
    public function getCarePlan()
    {
        return $this->CarePlan;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient, group or community for a period of time, possibly
     * limited to care for a specific condition or set of conditions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCarePlan $CarePlan
     * @return static
     */
    public function setCarePlan(FHIRCarePlan $CarePlan = null)
    {
        $this->CarePlan = $CarePlan;
        return $this;
    }

    /**
     * The Care Team includes all the people and organizations who plan to participate
     * in the coordination and delivery of care for a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCareTeam
     */
    public function getCareTeam()
    {
        return $this->CareTeam;
    }

    /**
     * The Care Team includes all the people and organizations who plan to participate
     * in the coordination and delivery of care for a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCareTeam $CareTeam
     * @return static
     */
    public function setCareTeam(FHIRCareTeam $CareTeam = null)
    {
        $this->CareTeam = $CareTeam;
        return $this;
    }

    /**
     * The resource ChargeItem describes the provision of healthcare provider products
     * for a certain patient, therefore referring not only to the product, but
     * containing in addition details of the provision, like date, time, amounts and
     * participating organizations and persons. Main Usage of the ChargeItem is to
     * enable the billing process and internal cost allocation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function getChargeItem()
    {
        return $this->ChargeItem;
    }

    /**
     * The resource ChargeItem describes the provision of healthcare provider products
     * for a certain patient, therefore referring not only to the product, but
     * containing in addition details of the provision, like date, time, amounts and
     * participating organizations and persons. Main Usage of the ChargeItem is to
     * enable the billing process and internal cost allocation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRChargeItem $ChargeItem
     * @return static
     */
    public function setChargeItem(FHIRChargeItem $ChargeItem = null)
    {
        $this->ChargeItem = $ChargeItem;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function getClaim()
    {
        return $this->Claim;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim $Claim
     * @return static
     */
    public function setClaim(FHIRClaim $Claim = null)
    {
        $this->Claim = $Claim;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function getClaimResponse()
    {
        return $this->ClaimResponse;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaimResponse $ClaimResponse
     * @return static
     */
    public function setClaimResponse(FHIRClaimResponse $ClaimResponse = null)
    {
        $this->ClaimResponse = $ClaimResponse;
        return $this;
    }

    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClinicalImpression
     */
    public function getClinicalImpression()
    {
        return $this->ClinicalImpression;
    }

    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClinicalImpression $ClinicalImpression
     * @return static
     */
    public function setClinicalImpression(FHIRClinicalImpression $ClinicalImpression = null)
    {
        $this->ClinicalImpression = $ClinicalImpression;
        return $this;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     */
    public function getCodeSystem()
    {
        return $this->CodeSystem;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem $CodeSystem
     * @return static
     */
    public function setCodeSystem(FHIRCodeSystem $CodeSystem = null)
    {
        $this->CodeSystem = $CodeSystem;
        return $this;
    }

    /**
     * An occurrence of information being transmitted; e.g. an alert that was sent to a
     * responsible provider, a public health agency was notified about a reportable
     * condition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCommunication
     */
    public function getCommunication()
    {
        return $this->Communication;
    }

    /**
     * An occurrence of information being transmitted; e.g. an alert that was sent to a
     * responsible provider, a public health agency was notified about a reportable
     * condition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCommunication $Communication
     * @return static
     */
    public function setCommunication(FHIRCommunication $Communication = null)
    {
        $this->Communication = $Communication;
        return $this;
    }

    /**
     * A request to convey information; e.g. the CDS system proposes that an alert be
     * sent to a responsible provider, the CDS system proposes that the public health
     * agency be notified about a reportable condition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest
     */
    public function getCommunicationRequest()
    {
        return $this->CommunicationRequest;
    }

    /**
     * A request to convey information; e.g. the CDS system proposes that an alert be
     * sent to a responsible provider, the CDS system proposes that the public health
     * agency be notified about a reportable condition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest $CommunicationRequest
     * @return static
     */
    public function setCommunicationRequest(FHIRCommunicationRequest $CommunicationRequest = null)
    {
        $this->CommunicationRequest = $CommunicationRequest;
        return $this;
    }

    /**
     * A compartment definition that defines how resources are accessed on a server.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition
     */
    public function getCompartmentDefinition()
    {
        return $this->CompartmentDefinition;
    }

    /**
     * A compartment definition that defines how resources are accessed on a server.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition $CompartmentDefinition
     * @return static
     */
    public function setCompartmentDefinition(FHIRCompartmentDefinition $CompartmentDefinition = null)
    {
        $this->CompartmentDefinition = $CompartmentDefinition;
        return $this;
    }

    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical document that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement. While a Composition defines the structure, it does not
     * actually contain the content: rather the full content of a document is contained
     * in a Bundle, of which the Composition is the first resource contained.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRComposition
     */
    public function getComposition()
    {
        return $this->Composition;
    }

    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical document that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement. While a Composition defines the structure, it does not
     * actually contain the content: rather the full content of a document is contained
     * in a Bundle, of which the Composition is the first resource contained.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRComposition $Composition
     * @return static
     */
    public function setComposition(FHIRComposition $Composition = null)
    {
        $this->Composition = $Composition;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRConceptMap
     */
    public function getConceptMap()
    {
        return $this->ConceptMap;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRConceptMap $ConceptMap
     * @return static
     */
    public function setConceptMap(FHIRConceptMap $ConceptMap = null)
    {
        $this->ConceptMap = $ConceptMap;
        return $this;
    }

    /**
     * A clinical condition, problem, diagnosis, or other event, situation, issue, or
     * clinical concept that has risen to a level of concern.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCondition
     */
    public function getCondition()
    {
        return $this->Condition;
    }

    /**
     * A clinical condition, problem, diagnosis, or other event, situation, issue, or
     * clinical concept that has risen to a level of concern.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCondition $Condition
     * @return static
     */
    public function setCondition(FHIRCondition $Condition = null)
    {
        $this->Condition = $Condition;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRConsent
     */
    public function getConsent()
    {
        return $this->Consent;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRConsent $Consent
     * @return static
     */
    public function setConsent(FHIRConsent $Consent = null)
    {
        $this->Consent = $Consent;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function getContract()
    {
        return $this->Contract;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRContract $Contract
     * @return static
     */
    public function setContract(FHIRContract $Contract = null)
    {
        $this->Contract = $Contract;
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function getCoverage()
    {
        return $this->Coverage;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCoverage $Coverage
     * @return static
     */
    public function setCoverage(FHIRCoverage $Coverage = null)
    {
        $this->Coverage = $Coverage;
        return $this;
    }

    /**
     * The formal description of a single piece of information that can be gathered and
     * reported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDataElement
     */
    public function getDataElement()
    {
        return $this->DataElement;
    }

    /**
     * The formal description of a single piece of information that can be gathered and
     * reported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDataElement $DataElement
     * @return static
     */
    public function setDataElement(FHIRDataElement $DataElement = null)
    {
        $this->DataElement = $DataElement;
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function getDetectedIssue()
    {
        return $this->DetectedIssue;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDetectedIssue $DetectedIssue
     * @return static
     */
    public function setDetectedIssue(FHIRDetectedIssue $DetectedIssue = null)
    {
        $this->DetectedIssue = $DetectedIssue;
        return $this;
    }

    /**
     * This resource identifies an instance or a type of a manufactured item that is
     * used in the provision of healthcare without being substantially changed through
     * that activity. The device may be a medical or non-medical device. Medical
     * devices include durable (reusable) medical equipment, implantable devices, as
     * well as disposable equipment used for diagnostic, treatment, and research for
     * healthcare and public health. Non-medical devices may include items such as a
     * machine, cellphone, computer, application, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDevice
     */
    public function getDevice()
    {
        return $this->Device;
    }

    /**
     * This resource identifies an instance or a type of a manufactured item that is
     * used in the provision of healthcare without being substantially changed through
     * that activity. The device may be a medical or non-medical device. Medical
     * devices include durable (reusable) medical equipment, implantable devices, as
     * well as disposable equipment used for diagnostic, treatment, and research for
     * healthcare and public health. Non-medical devices may include items such as a
     * machine, cellphone, computer, application, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDevice $Device
     * @return static
     */
    public function setDevice(FHIRDevice $Device = null)
    {
        $this->Device = $Device;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     */
    public function getDeviceComponent()
    {
        return $this->DeviceComponent;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceComponent $DeviceComponent
     * @return static
     */
    public function setDeviceComponent(FHIRDeviceComponent $DeviceComponent = null)
    {
        $this->DeviceComponent = $DeviceComponent;
        return $this;
    }

    /**
     * Describes a measurement, calculation or setting capability of a medical device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    public function getDeviceMetric()
    {
        return $this->DeviceMetric;
    }

    /**
     * Describes a measurement, calculation or setting capability of a medical device.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric $DeviceMetric
     * @return static
     */
    public function setDeviceMetric(FHIRDeviceMetric $DeviceMetric = null)
    {
        $this->DeviceMetric = $DeviceMetric;
        return $this;
    }

    /**
     * Represents a request for a patient to employ a medical device. The device may be
     * an implantable device, or an external assistive device, such as a walker.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceRequest
     */
    public function getDeviceRequest()
    {
        return $this->DeviceRequest;
    }

    /**
     * Represents a request for a patient to employ a medical device. The device may be
     * an implantable device, or an external assistive device, such as a walker.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceRequest $DeviceRequest
     * @return static
     */
    public function setDeviceRequest(FHIRDeviceRequest $DeviceRequest = null)
    {
        $this->DeviceRequest = $DeviceRequest;
        return $this;
    }

    /**
     * A record of a device being used by a patient where the record is the result of a
     * report from the patient or another clinician.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement
     */
    public function getDeviceUseStatement()
    {
        return $this->DeviceUseStatement;
    }

    /**
     * A record of a device being used by a patient where the record is the result of a
     * report from the patient or another clinician.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement $DeviceUseStatement
     * @return static
     */
    public function setDeviceUseStatement(FHIRDeviceUseStatement $DeviceUseStatement = null)
    {
        $this->DeviceUseStatement = $DeviceUseStatement;
        return $this;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretations, and formatted representation of diagnostic reports.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport
     */
    public function getDiagnosticReport()
    {
        return $this->DiagnosticReport;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretations, and formatted representation of diagnostic reports.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport $DiagnosticReport
     * @return static
     */
    public function setDiagnosticReport(FHIRDiagnosticReport $DiagnosticReport = null)
    {
        $this->DiagnosticReport = $DiagnosticReport;
        return $this;
    }

    /**
     * A collection of documents compiled for a purpose together with metadata that
     * applies to the collection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    public function getDocumentManifest()
    {
        return $this->DocumentManifest;
    }

    /**
     * A collection of documents compiled for a purpose together with metadata that
     * applies to the collection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDocumentManifest $DocumentManifest
     * @return static
     */
    public function setDocumentManifest(FHIRDocumentManifest $DocumentManifest = null)
    {
        $this->DocumentManifest = $DocumentManifest;
        return $this;
    }

    /**
     * A reference to a document.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDocumentReference
     */
    public function getDocumentReference()
    {
        return $this->DocumentReference;
    }

    /**
     * A reference to a document.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDocumentReference $DocumentReference
     * @return static
     */
    public function setDocumentReference(FHIRDocumentReference $DocumentReference = null)
    {
        $this->DocumentReference = $DocumentReference;
        return $this;
    }

    /**
     * The EligibilityRequest provides patient and insurance coverage information to an
     * insurer for them to respond, in the form of an EligibilityResponse, with
     * information regarding whether the stated coverage is valid and in-force and
     * optionally to provide the insurance details of the policy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityRequest
     */
    public function getEligibilityRequest()
    {
        return $this->EligibilityRequest;
    }

    /**
     * The EligibilityRequest provides patient and insurance coverage information to an
     * insurer for them to respond, in the form of an EligibilityResponse, with
     * information regarding whether the stated coverage is valid and in-force and
     * optionally to provide the insurance details of the policy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityRequest $EligibilityRequest
     * @return static
     */
    public function setEligibilityRequest(FHIREligibilityRequest $EligibilityRequest = null)
    {
        $this->EligibilityRequest = $EligibilityRequest;
        return $this;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     */
    public function getEligibilityResponse()
    {
        return $this->EligibilityResponse;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse $EligibilityResponse
     * @return static
     */
    public function setEligibilityResponse(FHIREligibilityResponse $EligibilityResponse = null)
    {
        $this->EligibilityResponse = $EligibilityResponse;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREncounter
     */
    public function getEncounter()
    {
        return $this->Encounter;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREncounter $Encounter
     * @return static
     */
    public function setEncounter(FHIREncounter $Encounter = null)
    {
        $this->Encounter = $Encounter;
        return $this;
    }

    /**
     * The technical details of an endpoint that can be used for electronic services,
     * such as for web services providing XDS.b or a REST endpoint for another FHIR
     * server. This may include any security context information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function getEndpoint()
    {
        return $this->Endpoint;
    }

    /**
     * The technical details of an endpoint that can be used for electronic services,
     * such as for web services providing XDS.b or a REST endpoint for another FHIR
     * server. This may include any security context information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREndpoint $Endpoint
     * @return static
     */
    public function setEndpoint(FHIREndpoint $Endpoint = null)
    {
        $this->Endpoint = $Endpoint;
        return $this;
    }

    /**
     * This resource provides the insurance enrollment details to the insurer regarding
     * a specified coverage.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest
     */
    public function getEnrollmentRequest()
    {
        return $this->EnrollmentRequest;
    }

    /**
     * This resource provides the insurance enrollment details to the insurer regarding
     * a specified coverage.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest $EnrollmentRequest
     * @return static
     */
    public function setEnrollmentRequest(FHIREnrollmentRequest $EnrollmentRequest = null)
    {
        $this->EnrollmentRequest = $EnrollmentRequest;
        return $this;
    }

    /**
     * This resource provides enrollment and plan details from the processing of an
     * Enrollment resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse
     */
    public function getEnrollmentResponse()
    {
        return $this->EnrollmentResponse;
    }

    /**
     * This resource provides enrollment and plan details from the processing of an
     * Enrollment resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse $EnrollmentResponse
     * @return static
     */
    public function setEnrollmentResponse(FHIREnrollmentResponse $EnrollmentResponse = null)
    {
        $this->EnrollmentResponse = $EnrollmentResponse;
        return $this;
    }

    /**
     * An association between a patient and an organization / healthcare provider(s)
     * during which time encounters may occur. The managing organization assumes a
     * level of responsibility for the patient during this time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function getEpisodeOfCare()
    {
        return $this->EpisodeOfCare;
    }

    /**
     * An association between a patient and an organization / healthcare provider(s)
     * during which time encounters may occur. The managing organization assumes a
     * level of responsibility for the patient during this time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare $EpisodeOfCare
     * @return static
     */
    public function setEpisodeOfCare(FHIREpisodeOfCare $EpisodeOfCare = null)
    {
        $this->EpisodeOfCare = $EpisodeOfCare;
        return $this;
    }

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRExpansionProfile
     */
    public function getExpansionProfile()
    {
        return $this->ExpansionProfile;
    }

    /**
     * Resource to define constraints on the Expansion of a FHIR ValueSet.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRExpansionProfile $ExpansionProfile
     * @return static
     */
    public function setExpansionProfile(FHIRExpansionProfile $ExpansionProfile = null)
    {
        $this->ExpansionProfile = $ExpansionProfile;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit
     */
    public function getExplanationOfBenefit()
    {
        return $this->ExplanationOfBenefit;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit $ExplanationOfBenefit
     * @return static
     */
    public function setExplanationOfBenefit(FHIRExplanationOfBenefit $ExplanationOfBenefit = null)
    {
        $this->ExplanationOfBenefit = $ExplanationOfBenefit;
        return $this;
    }

    /**
     * Significant health events and conditions for a person related to the patient
     * relevant in the context of care for the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
     */
    public function getFamilyMemberHistory()
    {
        return $this->FamilyMemberHistory;
    }

    /**
     * Significant health events and conditions for a person related to the patient
     * relevant in the context of care for the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory $FamilyMemberHistory
     * @return static
     */
    public function setFamilyMemberHistory(FHIRFamilyMemberHistory $FamilyMemberHistory = null)
    {
        $this->FamilyMemberHistory = $FamilyMemberHistory;
        return $this;
    }

    /**
     * Prospective warnings of potential issues when providing care to the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRFlag
     */
    public function getFlag()
    {
        return $this->Flag;
    }

    /**
     * Prospective warnings of potential issues when providing care to the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRFlag $Flag
     * @return static
     */
    public function setFlag(FHIRFlag $Flag = null)
    {
        $this->Flag = $Flag;
        return $this;
    }

    /**
     * Describes the intended objective(s) for a patient, group or organization care,
     * for example, weight loss, restoring an activity of daily living, obtaining herd
     * immunity via immunization, meeting a process improvement objective, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGoal
     */
    public function getGoal()
    {
        return $this->Goal;
    }

    /**
     * Describes the intended objective(s) for a patient, group or organization care,
     * for example, weight loss, restoring an activity of daily living, obtaining herd
     * immunity via immunization, meeting a process improvement objective, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGoal $Goal
     * @return static
     */
    public function setGoal(FHIRGoal $Goal = null)
    {
        $this->Goal = $Goal;
        return $this;
    }

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGraphDefinition
     */
    public function getGraphDefinition()
    {
        return $this->GraphDefinition;
    }

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGraphDefinition $GraphDefinition
     * @return static
     */
    public function setGraphDefinition(FHIRGraphDefinition $GraphDefinition = null)
    {
        $this->GraphDefinition = $GraphDefinition;
        return $this;
    }

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively and are not formally
     * or legally recognized; i.e. a collection of entities that isn't an Organization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGroup
     */
    public function getGroup()
    {
        return $this->Group;
    }

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively and are not formally
     * or legally recognized; i.e. a collection of entities that isn't an Organization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGroup $Group
     * @return static
     */
    public function setGroup(FHIRGroup $Group = null)
    {
        $this->Group = $Group;
        return $this;
    }

    /**
     * A guidance response is the formal response to a guidance request, including any
     * output parameters returned by the evaluation, as well as the description of any
     * proposed actions to be taken.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse
     */
    public function getGuidanceResponse()
    {
        return $this->GuidanceResponse;
    }

    /**
     * A guidance response is the formal response to a guidance request, including any
     * output parameters returned by the evaluation, as well as the description of any
     * proposed actions to be taken.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse $GuidanceResponse
     * @return static
     */
    public function setGuidanceResponse(FHIRGuidanceResponse $GuidanceResponse = null)
    {
        $this->GuidanceResponse = $GuidanceResponse;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function getHealthcareService()
    {
        return $this->HealthcareService;
    }

    /**
     * The details of a healthcare service available at a location.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRHealthcareService $HealthcareService
     * @return static
     */
    public function setHealthcareService(FHIRHealthcareService $HealthcareService = null)
    {
        $this->HealthcareService = $HealthcareService;
        return $this;
    }

    /**
     * A text description of the DICOM SOP instances selected in the ImagingManifest;
     * or the reason for, or significance of, the selection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImagingManifest
     */
    public function getImagingManifest()
    {
        return $this->ImagingManifest;
    }

    /**
     * A text description of the DICOM SOP instances selected in the ImagingManifest;
     * or the reason for, or significance of, the selection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImagingManifest $ImagingManifest
     * @return static
     */
    public function setImagingManifest(FHIRImagingManifest $ImagingManifest = null)
    {
        $this->ImagingManifest = $ImagingManifest;
        return $this;
    }

    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImagingStudy
     */
    public function getImagingStudy()
    {
        return $this->ImagingStudy;
    }

    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImagingStudy $ImagingStudy
     * @return static
     */
    public function setImagingStudy(FHIRImagingStudy $ImagingStudy = null)
    {
        $this->ImagingStudy = $ImagingStudy;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImmunization
     */
    public function getImmunization()
    {
        return $this->Immunization;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImmunization $Immunization
     * @return static
     */
    public function setImmunization(FHIRImmunization $Immunization = null)
    {
        $this->Immunization = $Immunization;
        return $this;
    }

    /**
     * A patient's point-in-time immunization and recommendation (i.e. forecasting a
     * patient's immunization eligibility according to a published schedule) with
     * optional supporting justification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation
     */
    public function getImmunizationRecommendation()
    {
        return $this->ImmunizationRecommendation;
    }

    /**
     * A patient's point-in-time immunization and recommendation (i.e. forecasting a
     * patient's immunization eligibility according to a published schedule) with
     * optional supporting justification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation $ImmunizationRecommendation
     * @return static
     */
    public function setImmunizationRecommendation(FHIRImmunizationRecommendation $ImmunizationRecommendation = null)
    {
        $this->ImmunizationRecommendation = $ImmunizationRecommendation;
        return $this;
    }

    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    public function getImplementationGuide()
    {
        return $this->ImplementationGuide;
    }

    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide $ImplementationGuide
     * @return static
     */
    public function setImplementationGuide(FHIRImplementationGuide $ImplementationGuide = null)
    {
        $this->ImplementationGuide = $ImplementationGuide;
        return $this;
    }

    /**
     * The Library resource is a general-purpose container for knowledge asset
     * definitions. It can be used to describe and expose existing knowledge assets
     * such as logic libraries and information model descriptions, as well as to
     * describe a collection of knowledge assets.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRLibrary
     */
    public function getLibrary()
    {
        return $this->Library;
    }

    /**
     * The Library resource is a general-purpose container for knowledge asset
     * definitions. It can be used to describe and expose existing knowledge assets
     * such as logic libraries and information model descriptions, as well as to
     * describe a collection of knowledge assets.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRLibrary $Library
     * @return static
     */
    public function setLibrary(FHIRLibrary $Library = null)
    {
        $this->Library = $Library;
        return $this;
    }

    /**
     * Identifies two or more records (resource instances) that are referring to the
     * same real-world "occurrence".
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRLinkage
     */
    public function getLinkage()
    {
        return $this->Linkage;
    }

    /**
     * Identifies two or more records (resource instances) that are referring to the
     * same real-world "occurrence".
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRLinkage $Linkage
     * @return static
     */
    public function setLinkage(FHIRLinkage $Linkage = null)
    {
        $this->Linkage = $Linkage;
        return $this;
    }

    /**
     * A set of information summarized from a list of other resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRList
     */
    public function getList()
    {
        return $this->List;
    }

    /**
     * A set of information summarized from a list of other resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRList $List
     * @return static
     */
    public function setList(FHIRList $List = null)
    {
        $this->List = $List;
        return $this;
    }

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained or
     * accommodated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRLocation
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained or
     * accommodated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRLocation $Location
     * @return static
     */
    public function setLocation(FHIRLocation $Location = null)
    {
        $this->Location = $Location;
        return $this;
    }

    /**
     * The Measure resource provides the definition of a quality measure.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMeasure
     */
    public function getMeasure()
    {
        return $this->Measure;
    }

    /**
     * The Measure resource provides the definition of a quality measure.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMeasure $Measure
     * @return static
     */
    public function setMeasure(FHIRMeasure $Measure = null)
    {
        $this->Measure = $Measure;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of evaluating a measure.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function getMeasureReport()
    {
        return $this->MeasureReport;
    }

    /**
     * The MeasureReport resource contains the results of evaluating a measure.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMeasureReport $MeasureReport
     * @return static
     */
    public function setMeasureReport(FHIRMeasureReport $MeasureReport = null)
    {
        $this->MeasureReport = $MeasureReport;
        return $this;
    }

    /**
     * A photo, video, or audio recording acquired or used in healthcare. The actual
     * content may be inline or provided by direct reference.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedia
     */
    public function getMedia()
    {
        return $this->Media;
    }

    /**
     * A photo, video, or audio recording acquired or used in healthcare. The actual
     * content may be inline or provided by direct reference.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedia $Media
     * @return static
     */
    public function setMedia(FHIRMedia $Media = null)
    {
        $this->Media = $Media;
        return $this;
    }

    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedication
     */
    public function getMedication()
    {
        return $this->Medication;
    }

    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedication $Medication
     * @return static
     */
    public function setMedication(FHIRMedication $Medication = null)
    {
        $this->Medication = $Medication;
        return $this;
    }

    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     */
    public function getMedicationAdministration()
    {
        return $this->MedicationAdministration;
    }

    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration $MedicationAdministration
     * @return static
     */
    public function setMedicationAdministration(FHIRMedicationAdministration $MedicationAdministration = null)
    {
        $this->MedicationAdministration = $MedicationAdministration;
        return $this;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function getMedicationDispense()
    {
        return $this->MedicationDispense;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationDispense $MedicationDispense
     * @return static
     */
    public function setMedicationDispense(FHIRMedicationDispense $MedicationDispense = null)
    {
        $this->MedicationDispense = $MedicationDispense;
        return $this;
    }

    /**
     * An order or request for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
     * generalize the use across inpatient and outpatient settings, including care
     * plans, etc., and to harmonize with workflow patterns.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationRequest
     */
    public function getMedicationRequest()
    {
        return $this->MedicationRequest;
    }

    /**
     * An order or request for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
     * generalize the use across inpatient and outpatient settings, including care
     * plans, etc., and to harmonize with workflow patterns.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationRequest $MedicationRequest
     * @return static
     */
    public function setMedicationRequest(FHIRMedicationRequest $MedicationRequest = null)
    {
        $this->MedicationRequest = $MedicationRequest;
        return $this;
    }

    /**
     * A record of a medication that is being consumed by a patient. A
     * MedicationStatement may indicate that the patient may be taking the medication
     * now, or has taken the medication in the past or will be taking the medication in
     * the future. The source of this information can be the patient, significant other
     * (such as a family member or spouse), or a clinician. A common scenario where
     * this information is captured is during the history taking process during a
     * patient visit or stay. The medication information may come from sources such as
     * the patient's memory, from a prescription bottle, or from a list of medications
     * the patient, clinician or other party maintains The primary difference between a
     * medication statement and a medication administration is that the medication
     * administration has complete administration information and is based on actual
     * administration information from the person who administered the medication. A
     * medication statement is often, if not always, less specific. There is no
     * required date/time when the medication was administered, in fact we only know
     * that a source has reported the patient is taking this medication, where details
     * such as time, quantity, or rate or even medication product may be incomplete or
     * missing or less precise. As stated earlier, the medication statement information
     * may come from the patient's memory, from a prescription bottle or from a list of
     * medications the patient, clinician or other party maintains. Medication
     * administration is more formal and is not missing detailed information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationStatement
     */
    public function getMedicationStatement()
    {
        return $this->MedicationStatement;
    }

    /**
     * A record of a medication that is being consumed by a patient. A
     * MedicationStatement may indicate that the patient may be taking the medication
     * now, or has taken the medication in the past or will be taking the medication in
     * the future. The source of this information can be the patient, significant other
     * (such as a family member or spouse), or a clinician. A common scenario where
     * this information is captured is during the history taking process during a
     * patient visit or stay. The medication information may come from sources such as
     * the patient's memory, from a prescription bottle, or from a list of medications
     * the patient, clinician or other party maintains The primary difference between a
     * medication statement and a medication administration is that the medication
     * administration has complete administration information and is based on actual
     * administration information from the person who administered the medication. A
     * medication statement is often, if not always, less specific. There is no
     * required date/time when the medication was administered, in fact we only know
     * that a source has reported the patient is taking this medication, where details
     * such as time, quantity, or rate or even medication product may be incomplete or
     * missing or less precise. As stated earlier, the medication statement information
     * may come from the patient's memory, from a prescription bottle or from a list of
     * medications the patient, clinician or other party maintains. Medication
     * administration is more formal and is not missing detailed information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationStatement $MedicationStatement
     * @return static
     */
    public function setMedicationStatement(FHIRMedicationStatement $MedicationStatement = null)
    {
        $this->MedicationStatement = $MedicationStatement;
        return $this;
    }

    /**
     * Defines the characteristics of a message that can be shared between systems,
     * including the type of event that initiates the message, the content to be
     * transmitted and what response(s), if any, are permitted.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMessageDefinition
     */
    public function getMessageDefinition()
    {
        return $this->MessageDefinition;
    }

    /**
     * Defines the characteristics of a message that can be shared between systems,
     * including the type of event that initiates the message, the content to be
     * transmitted and what response(s), if any, are permitted.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMessageDefinition $MessageDefinition
     * @return static
     */
    public function setMessageDefinition(FHIRMessageDefinition $MessageDefinition = null)
    {
        $this->MessageDefinition = $MessageDefinition;
        return $this;
    }

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The reference(s) that are the subject of the action as well as other
     * information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMessageHeader
     */
    public function getMessageHeader()
    {
        return $this->MessageHeader;
    }

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The reference(s) that are the subject of the action as well as other
     * information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMessageHeader $MessageHeader
     * @return static
     */
    public function setMessageHeader(FHIRMessageHeader $MessageHeader = null)
    {
        $this->MessageHeader = $MessageHeader;
        return $this;
    }

    /**
     * A curated namespace that issues unique symbols within that namespace for the
     * identification of concepts, people, devices, etc. Represents a "System" used
     * within the Identifier and Coding data types.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRNamingSystem
     */
    public function getNamingSystem()
    {
        return $this->NamingSystem;
    }

    /**
     * A curated namespace that issues unique symbols within that namespace for the
     * identification of concepts, people, devices, etc. Represents a "System" used
     * within the Identifier and Coding data types.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRNamingSystem $NamingSystem
     * @return static
     */
    public function setNamingSystem(FHIRNamingSystem $NamingSystem = null)
    {
        $this->NamingSystem = $NamingSystem;
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
     */
    public function getNutritionOrder()
    {
        return $this->NutritionOrder;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRNutritionOrder $NutritionOrder
     * @return static
     */
    public function setNutritionOrder(FHIRNutritionOrder $NutritionOrder = null)
    {
        $this->NutritionOrder = $NutritionOrder;
        return $this;
    }

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRObservation
     */
    public function getObservation()
    {
        return $this->Observation;
    }

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRObservation $Observation
     * @return static
     */
    public function setObservation(FHIRObservation $Observation = null)
    {
        $this->Observation = $Observation;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIROperationDefinition
     */
    public function getOperationDefinition()
    {
        return $this->OperationDefinition;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIROperationDefinition $OperationDefinition
     * @return static
     */
    public function setOperationDefinition(FHIROperationDefinition $OperationDefinition = null)
    {
        $this->OperationDefinition = $OperationDefinition;
        return $this;
    }

    /**
     * A collection of error, warning or information messages that result from a system
     * action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIROperationOutcome
     */
    public function getOperationOutcome()
    {
        return $this->OperationOutcome;
    }

    /**
     * A collection of error, warning or information messages that result from a system
     * action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIROperationOutcome $OperationOutcome
     * @return static
     */
    public function setOperationOutcome(FHIROperationOutcome $OperationOutcome = null)
    {
        $this->OperationOutcome = $OperationOutcome;
        return $this;
    }

    /**
     * A formally or informally recognized grouping of people or organizations formed
     * for the purpose of achieving some form of collective action. Includes companies,
     * institutions, corporations, departments, community groups, healthcare practice
     * groups, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIROrganization
     */
    public function getOrganization()
    {
        return $this->Organization;
    }

    /**
     * A formally or informally recognized grouping of people or organizations formed
     * for the purpose of achieving some form of collective action. Includes companies,
     * institutions, corporations, departments, community groups, healthcare practice
     * groups, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIROrganization $Organization
     * @return static
     */
    public function setOrganization(FHIROrganization $Organization = null)
    {
        $this->Organization = $Organization;
        return $this;
    }

    /**
     * This special resource type is used to represent an operation request and
     * response (operations.html). It has no other use, and there is no RESTful
     * endpoint associated with it.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRParameters
     */
    public function getParameters()
    {
        return $this->Parameters;
    }

    /**
     * This special resource type is used to represent an operation request and
     * response (operations.html). It has no other use, and there is no RESTful
     * endpoint associated with it.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRParameters $Parameters
     * @return static
     */
    public function setParameters(FHIRParameters $Parameters = null)
    {
        $this->Parameters = $Parameters;
        return $this;
    }

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPatient
     */
    public function getPatient()
    {
        return $this->Patient;
    }

    /**
     * Demographics and other administrative information about an individual or animal
     * receiving care or other health-related services.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPatient $Patient
     * @return static
     */
    public function setPatient(FHIRPatient $Patient = null)
    {
        $this->Patient = $Patient;
        return $this;
    }

    /**
     * This resource provides the status of the payment for goods and services
     * rendered, and the request and response resource references.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPaymentNotice
     */
    public function getPaymentNotice()
    {
        return $this->PaymentNotice;
    }

    /**
     * This resource provides the status of the payment for goods and services
     * rendered, and the request and response resource references.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPaymentNotice $PaymentNotice
     * @return static
     */
    public function setPaymentNotice(FHIRPaymentNotice $PaymentNotice = null)
    {
        $this->PaymentNotice = $PaymentNotice;
        return $this;
    }

    /**
     * This resource provides payment details and claim references supporting a bulk
     * payment.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation
     */
    public function getPaymentReconciliation()
    {
        return $this->PaymentReconciliation;
    }

    /**
     * This resource provides payment details and claim references supporting a bulk
     * payment.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation $PaymentReconciliation
     * @return static
     */
    public function setPaymentReconciliation(FHIRPaymentReconciliation $PaymentReconciliation = null)
    {
        $this->PaymentReconciliation = $PaymentReconciliation;
        return $this;
    }

    /**
     * Demographics and administrative information about a person independent of a
     * specific health-related context.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson
     */
    public function getPerson()
    {
        return $this->Person;
    }

    /**
     * Demographics and administrative information about a person independent of a
     * specific health-related context.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson $Person
     * @return static
     */
    public function setPerson(FHIRPerson $Person = null)
    {
        $this->Person = $Person;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     */
    public function getPlanDefinition()
    {
        return $this->PlanDefinition;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical artifacts such as clinical decision
     * support rules, order sets and protocols.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPlanDefinition $PlanDefinition
     * @return static
     */
    public function setPlanDefinition(FHIRPlanDefinition $PlanDefinition = null)
    {
        $this->PlanDefinition = $PlanDefinition;
        return $this;
    }

    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPractitioner
     */
    public function getPractitioner()
    {
        return $this->Practitioner;
    }

    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPractitioner $Practitioner
     * @return static
     */
    public function setPractitioner(FHIRPractitioner $Practitioner = null)
    {
        $this->Practitioner = $Practitioner;
        return $this;
    }

    /**
     * A specific set of Roles/Locations/specialties/services that a practitioner may
     * perform at an organization for a period of time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPractitionerRole
     */
    public function getPractitionerRole()
    {
        return $this->PractitionerRole;
    }

    /**
     * A specific set of Roles/Locations/specialties/services that a practitioner may
     * perform at an organization for a period of time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPractitionerRole $PractitionerRole
     * @return static
     */
    public function setPractitionerRole(FHIRPractitionerRole $PractitionerRole = null)
    {
        $this->PractitionerRole = $PractitionerRole;
        return $this;
    }

    /**
     * An action that is or was performed on a patient. This can be a physical
     * intervention like an operation, or less invasive like counseling or
     * hypnotherapy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcedure
     */
    public function getProcedure()
    {
        return $this->Procedure;
    }

    /**
     * An action that is or was performed on a patient. This can be a physical
     * intervention like an operation, or less invasive like counseling or
     * hypnotherapy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcedure $Procedure
     * @return static
     */
    public function setProcedure(FHIRProcedure $Procedure = null)
    {
        $this->Procedure = $Procedure;
        return $this;
    }

    /**
     * A record of a request for diagnostic investigations, treatments, or operations
     * to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcedureRequest
     */
    public function getProcedureRequest()
    {
        return $this->ProcedureRequest;
    }

    /**
     * A record of a request for diagnostic investigations, treatments, or operations
     * to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcedureRequest $ProcedureRequest
     * @return static
     */
    public function setProcedureRequest(FHIRProcedureRequest $ProcedureRequest = null)
    {
        $this->ProcedureRequest = $ProcedureRequest;
        return $this;
    }

    /**
     * This resource provides the target, request and response, and action details for
     * an action to be performed by the target on or about existing resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcessRequest
     */
    public function getProcessRequest()
    {
        return $this->ProcessRequest;
    }

    /**
     * This resource provides the target, request and response, and action details for
     * an action to be performed by the target on or about existing resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcessRequest $ProcessRequest
     * @return static
     */
    public function setProcessRequest(FHIRProcessRequest $ProcessRequest = null)
    {
        $this->ProcessRequest = $ProcessRequest;
        return $this;
    }

    /**
     * This resource provides processing status, errors and notes from the processing
     * of a resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    public function getProcessResponse()
    {
        return $this->ProcessResponse;
    }

    /**
     * This resource provides processing status, errors and notes from the processing
     * of a resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcessResponse $ProcessResponse
     * @return static
     */
    public function setProcessResponse(FHIRProcessResponse $ProcessResponse = null)
    {
        $this->ProcessResponse = $ProcessResponse;
        return $this;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function getProvenance()
    {
        return $this->Provenance;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProvenance $Provenance
     * @return static
     */
    public function setProvenance(FHIRProvenance $Provenance = null)
    {
        $this->Provenance = $Provenance;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRQuestionnaire
     */
    public function getQuestionnaire()
    {
        return $this->Questionnaire;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRQuestionnaire $Questionnaire
     * @return static
     */
    public function setQuestionnaire(FHIRQuestionnaire $Questionnaire = null)
    {
        $this->Questionnaire = $Questionnaire;
        return $this;
    }

    /**
     * A structured set of questions and their answers. The questions are ordered and
     * grouped into coherent subsets, corresponding to the structure of the grouping of
     * the questionnaire being responded to.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse
     */
    public function getQuestionnaireResponse()
    {
        return $this->QuestionnaireResponse;
    }

    /**
     * A structured set of questions and their answers. The questions are ordered and
     * grouped into coherent subsets, corresponding to the structure of the grouping of
     * the questionnaire being responded to.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse $QuestionnaireResponse
     * @return static
     */
    public function setQuestionnaireResponse(FHIRQuestionnaireResponse $QuestionnaireResponse = null)
    {
        $this->QuestionnaireResponse = $QuestionnaireResponse;
        return $this;
    }

    /**
     * Used to record and send details about a request for referral service or transfer
     * of a patient to the care of another provider or provider organization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRReferralRequest
     */
    public function getReferralRequest()
    {
        return $this->ReferralRequest;
    }

    /**
     * Used to record and send details about a request for referral service or transfer
     * of a patient to the care of another provider or provider organization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRReferralRequest $ReferralRequest
     * @return static
     */
    public function setReferralRequest(FHIRReferralRequest $ReferralRequest = null)
    {
        $this->ReferralRequest = $ReferralRequest;
        return $this;
    }

    /**
     * Information about a person that is involved in the care for a patient, but who
     * is not the target of healthcare, nor has a formal responsibility in the care
     * process.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRelatedPerson
     */
    public function getRelatedPerson()
    {
        return $this->RelatedPerson;
    }

    /**
     * Information about a person that is involved in the care for a patient, but who
     * is not the target of healthcare, nor has a formal responsibility in the care
     * process.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRelatedPerson $RelatedPerson
     * @return static
     */
    public function setRelatedPerson(FHIRRelatedPerson $RelatedPerson = null)
    {
        $this->RelatedPerson = $RelatedPerson;
        return $this;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRequestGroup
     */
    public function getRequestGroup()
    {
        return $this->RequestGroup;
    }

    /**
     * A group of related requests that can be used to capture intended activities that
     * have inter-dependencies such as "give this medication after that one".
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRequestGroup $RequestGroup
     * @return static
     */
    public function setRequestGroup(FHIRRequestGroup $RequestGroup = null)
    {
        $this->RequestGroup = $RequestGroup;
        return $this;
    }

    /**
     * A process where a researcher or organization plans and then executes a series of
     * steps intended to increase the field of healthcare-related knowledge. This
     * includes studies of safety, efficacy, comparative effectiveness and other
     * information about medications, devices, therapies and other interventional and
     * investigative techniques. A ResearchStudy involves the gathering of information
     * about human or animal subjects.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function getResearchStudy()
    {
        return $this->ResearchStudy;
    }

    /**
     * A process where a researcher or organization plans and then executes a series of
     * steps intended to increase the field of healthcare-related knowledge. This
     * includes studies of safety, efficacy, comparative effectiveness and other
     * information about medications, devices, therapies and other interventional and
     * investigative techniques. A ResearchStudy involves the gathering of information
     * about human or animal subjects.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy $ResearchStudy
     * @return static
     */
    public function setResearchStudy(FHIRResearchStudy $ResearchStudy = null)
    {
        $this->ResearchStudy = $ResearchStudy;
        return $this;
    }

    /**
     * A process where a researcher or organization plans and then executes a series of
     * steps intended to increase the field of healthcare-related knowledge. This
     * includes studies of safety, efficacy, comparative effectiveness and other
     * information about medications, devices, therapies and other interventional and
     * investigative techniques. A ResearchStudy involves the gathering of information
     * about human or animal subjects.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     */
    public function getResearchSubject()
    {
        return $this->ResearchSubject;
    }

    /**
     * A process where a researcher or organization plans and then executes a series of
     * steps intended to increase the field of healthcare-related knowledge. This
     * includes studies of safety, efficacy, comparative effectiveness and other
     * information about medications, devices, therapies and other interventional and
     * investigative techniques. A ResearchStudy involves the gathering of information
     * about human or animal subjects.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchSubject $ResearchSubject
     * @return static
     */
    public function setResearchSubject(FHIRResearchSubject $ResearchSubject = null)
    {
        $this->ResearchSubject = $ResearchSubject;
        return $this;
    }

    /**
     * An assessment of the likely outcome(s) for a patient or other subject as well as
     * the likelihood of each outcome.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRiskAssessment
     */
    public function getRiskAssessment()
    {
        return $this->RiskAssessment;
    }

    /**
     * An assessment of the likely outcome(s) for a patient or other subject as well as
     * the likelihood of each outcome.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRiskAssessment $RiskAssessment
     * @return static
     */
    public function setRiskAssessment(FHIRRiskAssessment $RiskAssessment = null)
    {
        $this->RiskAssessment = $RiskAssessment;
        return $this;
    }

    /**
     * A container for slots of time that may be available for booking appointments.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public function getSchedule()
    {
        return $this->Schedule;
    }

    /**
     * A container for slots of time that may be available for booking appointments.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSchedule $Schedule
     * @return static
     */
    public function setSchedule(FHIRSchedule $Schedule = null)
    {
        $this->Schedule = $Schedule;
        return $this;
    }

    /**
     * A search parameter that defines a named search item that can be used to
     * search/filter on a resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSearchParameter
     */
    public function getSearchParameter()
    {
        return $this->SearchParameter;
    }

    /**
     * A search parameter that defines a named search item that can be used to
     * search/filter on a resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSearchParameter $SearchParameter
     * @return static
     */
    public function setSearchParameter(FHIRSearchParameter $SearchParameter = null)
    {
        $this->SearchParameter = $SearchParameter;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSequence
     */
    public function getSequence()
    {
        return $this->Sequence;
    }

    /**
     * Raw data describing a biological sequence.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSequence $Sequence
     * @return static
     */
    public function setSequence(FHIRSequence $Sequence = null)
    {
        $this->Sequence = $Sequence;
        return $this;
    }

    /**
     * The ServiceDefinition describes a unit of decision support functionality that is
     * made available as a service, such as immunization modules or drug-drug
     * interaction checking.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRServiceDefinition
     */
    public function getServiceDefinition()
    {
        return $this->ServiceDefinition;
    }

    /**
     * The ServiceDefinition describes a unit of decision support functionality that is
     * made available as a service, such as immunization modules or drug-drug
     * interaction checking.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRServiceDefinition $ServiceDefinition
     * @return static
     */
    public function setServiceDefinition(FHIRServiceDefinition $ServiceDefinition = null)
    {
        $this->ServiceDefinition = $ServiceDefinition;
        return $this;
    }

    /**
     * A slot of time on a schedule that may be available for booking appointments.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSlot
     */
    public function getSlot()
    {
        return $this->Slot;
    }

    /**
     * A slot of time on a schedule that may be available for booking appointments.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSlot $Slot
     * @return static
     */
    public function setSlot(FHIRSlot $Slot = null)
    {
        $this->Slot = $Slot;
        return $this;
    }

    /**
     * A sample to be used for analysis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function getSpecimen()
    {
        return $this->Specimen;
    }

    /**
     * A sample to be used for analysis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSpecimen $Specimen
     * @return static
     */
    public function setSpecimen(FHIRSpecimen $Specimen = null)
    {
        $this->Specimen = $Specimen;
        return $this;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRStructureDefinition
     */
    public function getStructureDefinition()
    {
        return $this->StructureDefinition;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRStructureDefinition $StructureDefinition
     * @return static
     */
    public function setStructureDefinition(FHIRStructureDefinition $StructureDefinition = null)
    {
        $this->StructureDefinition = $StructureDefinition;
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRStructureMap
     */
    public function getStructureMap()
    {
        return $this->StructureMap;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRStructureMap $StructureMap
     * @return static
     */
    public function setStructureMap(FHIRStructureMap $StructureMap = null)
    {
        $this->StructureMap = $StructureMap;
        return $this;
    }

    /**
     * The subscription resource is used to define a push based subscription from a
     * server to another system. Once a subscription is registered with the server, the
     * server checks every resource that is created or updated, and if the resource
     * matches the given criteria, it sends a message on the defined "channel" so that
     * another system is able to take an appropriate action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSubscription
     */
    public function getSubscription()
    {
        return $this->Subscription;
    }

    /**
     * The subscription resource is used to define a push based subscription from a
     * server to another system. Once a subscription is registered with the server, the
     * server checks every resource that is created or updated, and if the resource
     * matches the given criteria, it sends a message on the defined "channel" so that
     * another system is able to take an appropriate action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSubscription $Subscription
     * @return static
     */
    public function setSubscription(FHIRSubscription $Subscription = null)
    {
        $this->Subscription = $Subscription;
        return $this;
    }

    /**
     * A homogeneous material with a definite composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSubstance
     */
    public function getSubstance()
    {
        return $this->Substance;
    }

    /**
     * A homogeneous material with a definite composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSubstance $Substance
     * @return static
     */
    public function setSubstance(FHIRSubstance $Substance = null)
    {
        $this->Substance = $Substance;
        return $this;
    }

    /**
     * Record of delivery of what is supplied.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery
     */
    public function getSupplyDelivery()
    {
        return $this->SupplyDelivery;
    }

    /**
     * Record of delivery of what is supplied.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery $SupplyDelivery
     * @return static
     */
    public function setSupplyDelivery(FHIRSupplyDelivery $SupplyDelivery = null)
    {
        $this->SupplyDelivery = $SupplyDelivery;
        return $this;
    }

    /**
     * A record of a request for a medication, substance or device used in the
     * healthcare setting.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSupplyRequest
     */
    public function getSupplyRequest()
    {
        return $this->SupplyRequest;
    }

    /**
     * A record of a request for a medication, substance or device used in the
     * healthcare setting.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSupplyRequest $SupplyRequest
     * @return static
     */
    public function setSupplyRequest(FHIRSupplyRequest $SupplyRequest = null)
    {
        $this->SupplyRequest = $SupplyRequest;
        return $this;
    }

    /**
     * A task to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTask
     */
    public function getTask()
    {
        return $this->Task;
    }

    /**
     * A task to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTask $Task
     * @return static
     */
    public function setTask(FHIRTask $Task = null)
    {
        $this->Task = $Task;
        return $this;
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTestReport
     */
    public function getTestReport()
    {
        return $this->TestReport;
    }

    /**
     * A summary of information based on the results of executing a TestScript.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTestReport $TestReport
     * @return static
     */
    public function setTestReport(FHIRTestReport $TestReport = null)
    {
        $this->TestReport = $TestReport;
        return $this;
    }

    /**
     * A structured set of tests against a FHIR server implementation to determine
     * compliance against the FHIR specification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTestScript
     */
    public function getTestScript()
    {
        return $this->TestScript;
    }

    /**
     * A structured set of tests against a FHIR server implementation to determine
     * compliance against the FHIR specification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTestScript $TestScript
     * @return static
     */
    public function setTestScript(FHIRTestScript $TestScript = null)
    {
        $this->TestScript = $TestScript;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRValueSet
     */
    public function getValueSet()
    {
        return $this->ValueSet;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRValueSet $ValueSet
     * @return static
     */
    public function setValueSet(FHIRValueSet $ValueSet = null)
    {
        $this->ValueSet = $ValueSet;
        return $this;
    }

    /**
     * An authorization for the supply of glasses and/or contact lenses to a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRVisionPrescription
     */
    public function getVisionPrescription()
    {
        return $this->VisionPrescription;
    }

    /**
     * An authorization for the supply of glasses and/or contact lenses to a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRVisionPrescription $VisionPrescription
     * @return static
     */
    public function setVisionPrescription(FHIRVisionPrescription $VisionPrescription = null)
    {
        $this->VisionPrescription = $VisionPrescription;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResourceContainer $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResourceContainer
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
                throw new \DomainException(sprintf('FHIRResourceContainer::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRResourceContainer::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRResourceContainer;
        } elseif (!is_object($type) || !($type instanceof FHIRResourceContainer)) {
            throw new \RuntimeException(sprintf(
                'FHIRResourceContainer::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResourceContainer or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->Account)) {
            $type->setAccount(FHIRAccount::xmlUnserialize($children->Account));
        }
        if (isset($children->ActivityDefinition)) {
            $type->setActivityDefinition(FHIRActivityDefinition::xmlUnserialize($children->ActivityDefinition));
        }
        if (isset($children->AdverseEvent)) {
            $type->setAdverseEvent(FHIRAdverseEvent::xmlUnserialize($children->AdverseEvent));
        }
        if (isset($children->AllergyIntolerance)) {
            $type->setAllergyIntolerance(FHIRAllergyIntolerance::xmlUnserialize($children->AllergyIntolerance));
        }
        if (isset($children->Appointment)) {
            $type->setAppointment(FHIRAppointment::xmlUnserialize($children->Appointment));
        }
        if (isset($children->AppointmentResponse)) {
            $type->setAppointmentResponse(FHIRAppointmentResponse::xmlUnserialize($children->AppointmentResponse));
        }
        if (isset($children->AuditEvent)) {
            $type->setAuditEvent(FHIRAuditEvent::xmlUnserialize($children->AuditEvent));
        }
        if (isset($children->Basic)) {
            $type->setBasic(FHIRBasic::xmlUnserialize($children->Basic));
        }
        if (isset($children->Binary)) {
            $type->setBinary(FHIRBinary::xmlUnserialize($children->Binary));
        }
        if (isset($children->BodySite)) {
            $type->setBodySite(FHIRBodySite::xmlUnserialize($children->BodySite));
        }
        if (isset($children->Bundle)) {
            $type->setBundle(FHIRBundle::xmlUnserialize($children->Bundle));
        }
        if (isset($children->CapabilityStatement)) {
            $type->setCapabilityStatement(FHIRCapabilityStatement::xmlUnserialize($children->CapabilityStatement));
        }
        if (isset($children->CarePlan)) {
            $type->setCarePlan(FHIRCarePlan::xmlUnserialize($children->CarePlan));
        }
        if (isset($children->CareTeam)) {
            $type->setCareTeam(FHIRCareTeam::xmlUnserialize($children->CareTeam));
        }
        if (isset($children->ChargeItem)) {
            $type->setChargeItem(FHIRChargeItem::xmlUnserialize($children->ChargeItem));
        }
        if (isset($children->Claim)) {
            $type->setClaim(FHIRClaim::xmlUnserialize($children->Claim));
        }
        if (isset($children->ClaimResponse)) {
            $type->setClaimResponse(FHIRClaimResponse::xmlUnserialize($children->ClaimResponse));
        }
        if (isset($children->ClinicalImpression)) {
            $type->setClinicalImpression(FHIRClinicalImpression::xmlUnserialize($children->ClinicalImpression));
        }
        if (isset($children->CodeSystem)) {
            $type->setCodeSystem(FHIRCodeSystem::xmlUnserialize($children->CodeSystem));
        }
        if (isset($children->Communication)) {
            $type->setCommunication(FHIRCommunication::xmlUnserialize($children->Communication));
        }
        if (isset($children->CommunicationRequest)) {
            $type->setCommunicationRequest(FHIRCommunicationRequest::xmlUnserialize($children->CommunicationRequest));
        }
        if (isset($children->CompartmentDefinition)) {
            $type->setCompartmentDefinition(FHIRCompartmentDefinition::xmlUnserialize($children->CompartmentDefinition));
        }
        if (isset($children->Composition)) {
            $type->setComposition(FHIRComposition::xmlUnserialize($children->Composition));
        }
        if (isset($children->ConceptMap)) {
            $type->setConceptMap(FHIRConceptMap::xmlUnserialize($children->ConceptMap));
        }
        if (isset($children->Condition)) {
            $type->setCondition(FHIRCondition::xmlUnserialize($children->Condition));
        }
        if (isset($children->Consent)) {
            $type->setConsent(FHIRConsent::xmlUnserialize($children->Consent));
        }
        if (isset($children->Contract)) {
            $type->setContract(FHIRContract::xmlUnserialize($children->Contract));
        }
        if (isset($children->Coverage)) {
            $type->setCoverage(FHIRCoverage::xmlUnserialize($children->Coverage));
        }
        if (isset($children->DataElement)) {
            $type->setDataElement(FHIRDataElement::xmlUnserialize($children->DataElement));
        }
        if (isset($children->DetectedIssue)) {
            $type->setDetectedIssue(FHIRDetectedIssue::xmlUnserialize($children->DetectedIssue));
        }
        if (isset($children->Device)) {
            $type->setDevice(FHIRDevice::xmlUnserialize($children->Device));
        }
        if (isset($children->DeviceComponent)) {
            $type->setDeviceComponent(FHIRDeviceComponent::xmlUnserialize($children->DeviceComponent));
        }
        if (isset($children->DeviceMetric)) {
            $type->setDeviceMetric(FHIRDeviceMetric::xmlUnserialize($children->DeviceMetric));
        }
        if (isset($children->DeviceRequest)) {
            $type->setDeviceRequest(FHIRDeviceRequest::xmlUnserialize($children->DeviceRequest));
        }
        if (isset($children->DeviceUseStatement)) {
            $type->setDeviceUseStatement(FHIRDeviceUseStatement::xmlUnserialize($children->DeviceUseStatement));
        }
        if (isset($children->DiagnosticReport)) {
            $type->setDiagnosticReport(FHIRDiagnosticReport::xmlUnserialize($children->DiagnosticReport));
        }
        if (isset($children->DocumentManifest)) {
            $type->setDocumentManifest(FHIRDocumentManifest::xmlUnserialize($children->DocumentManifest));
        }
        if (isset($children->DocumentReference)) {
            $type->setDocumentReference(FHIRDocumentReference::xmlUnserialize($children->DocumentReference));
        }
        if (isset($children->EligibilityRequest)) {
            $type->setEligibilityRequest(FHIREligibilityRequest::xmlUnserialize($children->EligibilityRequest));
        }
        if (isset($children->EligibilityResponse)) {
            $type->setEligibilityResponse(FHIREligibilityResponse::xmlUnserialize($children->EligibilityResponse));
        }
        if (isset($children->Encounter)) {
            $type->setEncounter(FHIREncounter::xmlUnserialize($children->Encounter));
        }
        if (isset($children->Endpoint)) {
            $type->setEndpoint(FHIREndpoint::xmlUnserialize($children->Endpoint));
        }
        if (isset($children->EnrollmentRequest)) {
            $type->setEnrollmentRequest(FHIREnrollmentRequest::xmlUnserialize($children->EnrollmentRequest));
        }
        if (isset($children->EnrollmentResponse)) {
            $type->setEnrollmentResponse(FHIREnrollmentResponse::xmlUnserialize($children->EnrollmentResponse));
        }
        if (isset($children->EpisodeOfCare)) {
            $type->setEpisodeOfCare(FHIREpisodeOfCare::xmlUnserialize($children->EpisodeOfCare));
        }
        if (isset($children->ExpansionProfile)) {
            $type->setExpansionProfile(FHIRExpansionProfile::xmlUnserialize($children->ExpansionProfile));
        }
        if (isset($children->ExplanationOfBenefit)) {
            $type->setExplanationOfBenefit(FHIRExplanationOfBenefit::xmlUnserialize($children->ExplanationOfBenefit));
        }
        if (isset($children->FamilyMemberHistory)) {
            $type->setFamilyMemberHistory(FHIRFamilyMemberHistory::xmlUnserialize($children->FamilyMemberHistory));
        }
        if (isset($children->Flag)) {
            $type->setFlag(FHIRFlag::xmlUnserialize($children->Flag));
        }
        if (isset($children->Goal)) {
            $type->setGoal(FHIRGoal::xmlUnserialize($children->Goal));
        }
        if (isset($children->GraphDefinition)) {
            $type->setGraphDefinition(FHIRGraphDefinition::xmlUnserialize($children->GraphDefinition));
        }
        if (isset($children->Group)) {
            $type->setGroup(FHIRGroup::xmlUnserialize($children->Group));
        }
        if (isset($children->GuidanceResponse)) {
            $type->setGuidanceResponse(FHIRGuidanceResponse::xmlUnserialize($children->GuidanceResponse));
        }
        if (isset($children->HealthcareService)) {
            $type->setHealthcareService(FHIRHealthcareService::xmlUnserialize($children->HealthcareService));
        }
        if (isset($children->ImagingManifest)) {
            $type->setImagingManifest(FHIRImagingManifest::xmlUnserialize($children->ImagingManifest));
        }
        if (isset($children->ImagingStudy)) {
            $type->setImagingStudy(FHIRImagingStudy::xmlUnserialize($children->ImagingStudy));
        }
        if (isset($children->Immunization)) {
            $type->setImmunization(FHIRImmunization::xmlUnserialize($children->Immunization));
        }
        if (isset($children->ImmunizationRecommendation)) {
            $type->setImmunizationRecommendation(FHIRImmunizationRecommendation::xmlUnserialize($children->ImmunizationRecommendation));
        }
        if (isset($children->ImplementationGuide)) {
            $type->setImplementationGuide(FHIRImplementationGuide::xmlUnserialize($children->ImplementationGuide));
        }
        if (isset($children->Library)) {
            $type->setLibrary(FHIRLibrary::xmlUnserialize($children->Library));
        }
        if (isset($children->Linkage)) {
            $type->setLinkage(FHIRLinkage::xmlUnserialize($children->Linkage));
        }
        if (isset($children->List)) {
            $type->setList(FHIRList::xmlUnserialize($children->List));
        }
        if (isset($children->Location)) {
            $type->setLocation(FHIRLocation::xmlUnserialize($children->Location));
        }
        if (isset($children->Measure)) {
            $type->setMeasure(FHIRMeasure::xmlUnserialize($children->Measure));
        }
        if (isset($children->MeasureReport)) {
            $type->setMeasureReport(FHIRMeasureReport::xmlUnserialize($children->MeasureReport));
        }
        if (isset($children->Media)) {
            $type->setMedia(FHIRMedia::xmlUnserialize($children->Media));
        }
        if (isset($children->Medication)) {
            $type->setMedication(FHIRMedication::xmlUnserialize($children->Medication));
        }
        if (isset($children->MedicationAdministration)) {
            $type->setMedicationAdministration(FHIRMedicationAdministration::xmlUnserialize($children->MedicationAdministration));
        }
        if (isset($children->MedicationDispense)) {
            $type->setMedicationDispense(FHIRMedicationDispense::xmlUnserialize($children->MedicationDispense));
        }
        if (isset($children->MedicationRequest)) {
            $type->setMedicationRequest(FHIRMedicationRequest::xmlUnserialize($children->MedicationRequest));
        }
        if (isset($children->MedicationStatement)) {
            $type->setMedicationStatement(FHIRMedicationStatement::xmlUnserialize($children->MedicationStatement));
        }
        if (isset($children->MessageDefinition)) {
            $type->setMessageDefinition(FHIRMessageDefinition::xmlUnserialize($children->MessageDefinition));
        }
        if (isset($children->MessageHeader)) {
            $type->setMessageHeader(FHIRMessageHeader::xmlUnserialize($children->MessageHeader));
        }
        if (isset($children->NamingSystem)) {
            $type->setNamingSystem(FHIRNamingSystem::xmlUnserialize($children->NamingSystem));
        }
        if (isset($children->NutritionOrder)) {
            $type->setNutritionOrder(FHIRNutritionOrder::xmlUnserialize($children->NutritionOrder));
        }
        if (isset($children->Observation)) {
            $type->setObservation(FHIRObservation::xmlUnserialize($children->Observation));
        }
        if (isset($children->OperationDefinition)) {
            $type->setOperationDefinition(FHIROperationDefinition::xmlUnserialize($children->OperationDefinition));
        }
        if (isset($children->OperationOutcome)) {
            $type->setOperationOutcome(FHIROperationOutcome::xmlUnserialize($children->OperationOutcome));
        }
        if (isset($children->Organization)) {
            $type->setOrganization(FHIROrganization::xmlUnserialize($children->Organization));
        }
        if (isset($children->Parameters)) {
            $type->setParameters(FHIRParameters::xmlUnserialize($children->Parameters));
        }
        if (isset($children->Patient)) {
            $type->setPatient(FHIRPatient::xmlUnserialize($children->Patient));
        }
        if (isset($children->PaymentNotice)) {
            $type->setPaymentNotice(FHIRPaymentNotice::xmlUnserialize($children->PaymentNotice));
        }
        if (isset($children->PaymentReconciliation)) {
            $type->setPaymentReconciliation(FHIRPaymentReconciliation::xmlUnserialize($children->PaymentReconciliation));
        }
        if (isset($children->Person)) {
            $type->setPerson(FHIRPerson::xmlUnserialize($children->Person));
        }
        if (isset($children->PlanDefinition)) {
            $type->setPlanDefinition(FHIRPlanDefinition::xmlUnserialize($children->PlanDefinition));
        }
        if (isset($children->Practitioner)) {
            $type->setPractitioner(FHIRPractitioner::xmlUnserialize($children->Practitioner));
        }
        if (isset($children->PractitionerRole)) {
            $type->setPractitionerRole(FHIRPractitionerRole::xmlUnserialize($children->PractitionerRole));
        }
        if (isset($children->Procedure)) {
            $type->setProcedure(FHIRProcedure::xmlUnserialize($children->Procedure));
        }
        if (isset($children->ProcedureRequest)) {
            $type->setProcedureRequest(FHIRProcedureRequest::xmlUnserialize($children->ProcedureRequest));
        }
        if (isset($children->ProcessRequest)) {
            $type->setProcessRequest(FHIRProcessRequest::xmlUnserialize($children->ProcessRequest));
        }
        if (isset($children->ProcessResponse)) {
            $type->setProcessResponse(FHIRProcessResponse::xmlUnserialize($children->ProcessResponse));
        }
        if (isset($children->Provenance)) {
            $type->setProvenance(FHIRProvenance::xmlUnserialize($children->Provenance));
        }
        if (isset($children->Questionnaire)) {
            $type->setQuestionnaire(FHIRQuestionnaire::xmlUnserialize($children->Questionnaire));
        }
        if (isset($children->QuestionnaireResponse)) {
            $type->setQuestionnaireResponse(FHIRQuestionnaireResponse::xmlUnserialize($children->QuestionnaireResponse));
        }
        if (isset($children->ReferralRequest)) {
            $type->setReferralRequest(FHIRReferralRequest::xmlUnserialize($children->ReferralRequest));
        }
        if (isset($children->RelatedPerson)) {
            $type->setRelatedPerson(FHIRRelatedPerson::xmlUnserialize($children->RelatedPerson));
        }
        if (isset($children->RequestGroup)) {
            $type->setRequestGroup(FHIRRequestGroup::xmlUnserialize($children->RequestGroup));
        }
        if (isset($children->ResearchStudy)) {
            $type->setResearchStudy(FHIRResearchStudy::xmlUnserialize($children->ResearchStudy));
        }
        if (isset($children->ResearchSubject)) {
            $type->setResearchSubject(FHIRResearchSubject::xmlUnserialize($children->ResearchSubject));
        }
        if (isset($children->RiskAssessment)) {
            $type->setRiskAssessment(FHIRRiskAssessment::xmlUnserialize($children->RiskAssessment));
        }
        if (isset($children->Schedule)) {
            $type->setSchedule(FHIRSchedule::xmlUnserialize($children->Schedule));
        }
        if (isset($children->SearchParameter)) {
            $type->setSearchParameter(FHIRSearchParameter::xmlUnserialize($children->SearchParameter));
        }
        if (isset($children->Sequence)) {
            $type->setSequence(FHIRSequence::xmlUnserialize($children->Sequence));
        }
        if (isset($children->ServiceDefinition)) {
            $type->setServiceDefinition(FHIRServiceDefinition::xmlUnserialize($children->ServiceDefinition));
        }
        if (isset($children->Slot)) {
            $type->setSlot(FHIRSlot::xmlUnserialize($children->Slot));
        }
        if (isset($children->Specimen)) {
            $type->setSpecimen(FHIRSpecimen::xmlUnserialize($children->Specimen));
        }
        if (isset($children->StructureDefinition)) {
            $type->setStructureDefinition(FHIRStructureDefinition::xmlUnserialize($children->StructureDefinition));
        }
        if (isset($children->StructureMap)) {
            $type->setStructureMap(FHIRStructureMap::xmlUnserialize($children->StructureMap));
        }
        if (isset($children->Subscription)) {
            $type->setSubscription(FHIRSubscription::xmlUnserialize($children->Subscription));
        }
        if (isset($children->Substance)) {
            $type->setSubstance(FHIRSubstance::xmlUnserialize($children->Substance));
        }
        if (isset($children->SupplyDelivery)) {
            $type->setSupplyDelivery(FHIRSupplyDelivery::xmlUnserialize($children->SupplyDelivery));
        }
        if (isset($children->SupplyRequest)) {
            $type->setSupplyRequest(FHIRSupplyRequest::xmlUnserialize($children->SupplyRequest));
        }
        if (isset($children->Task)) {
            $type->setTask(FHIRTask::xmlUnserialize($children->Task));
        }
        if (isset($children->TestReport)) {
            $type->setTestReport(FHIRTestReport::xmlUnserialize($children->TestReport));
        }
        if (isset($children->TestScript)) {
            $type->setTestScript(FHIRTestScript::xmlUnserialize($children->TestScript));
        }
        if (isset($children->ValueSet)) {
            $type->setValueSet(FHIRValueSet::xmlUnserialize($children->ValueSet));
        }
        if (isset($children->VisionPrescription)) {
            $type->setVisionPrescription(FHIRVisionPrescription::xmlUnserialize($children->VisionPrescription));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null !== ($v = $this->getAccount())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getActivityDefinition())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getAdverseEvent())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getAllergyIntolerance())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getAppointment())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getAppointmentResponse())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getAuditEvent())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getBasic())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getBinary())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getBodySite())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getBundle())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getCapabilityStatement())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getCarePlan())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getCareTeam())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getChargeItem())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getClaim())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getClaimResponse())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getClinicalImpression())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getCodeSystem())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getCommunication())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getCommunicationRequest())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getCompartmentDefinition())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getComposition())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getConceptMap())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getCondition())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getConsent())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getContract())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getCoverage())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getDataElement())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getDetectedIssue())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getDevice())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getDeviceComponent())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getDeviceMetric())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getDeviceRequest())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getDeviceUseStatement())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getDiagnosticReport())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getDocumentManifest())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getDocumentReference())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getEligibilityRequest())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getEligibilityResponse())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getEncounter())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getEndpoint())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getEnrollmentRequest())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getEnrollmentResponse())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getEpisodeOfCare())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getExpansionProfile())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getExplanationOfBenefit())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getFamilyMemberHistory())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getFlag())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getGoal())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getGraphDefinition())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getGroup())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getGuidanceResponse())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getHealthcareService())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getImagingManifest())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getImagingStudy())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getImmunization())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getImmunizationRecommendation())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getImplementationGuide())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getLibrary())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getLinkage())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getList())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getLocation())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMeasure())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMeasureReport())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMedia())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMedication())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMedicationAdministration())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMedicationDispense())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMedicationRequest())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMedicationStatement())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMessageDefinition())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMessageHeader())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getNamingSystem())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getNutritionOrder())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getObservation())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getOperationDefinition())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getOperationOutcome())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getOrganization())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getParameters())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getPatient())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getPaymentNotice())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getPaymentReconciliation())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getPerson())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getPlanDefinition())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getPractitioner())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getPractitionerRole())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getProcedure())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getProcedureRequest())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getProcessRequest())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getProcessResponse())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getProvenance())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getQuestionnaire())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getQuestionnaireResponse())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getReferralRequest())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getRelatedPerson())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getRequestGroup())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getResearchStudy())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getResearchSubject())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getRiskAssessment())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getSchedule())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getSearchParameter())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getSequence())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getServiceDefinition())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getSlot())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getSpecimen())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getStructureDefinition())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getStructureMap())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getSubscription())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getSubstance())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getSupplyDelivery())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getSupplyRequest())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getTask())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getTestReport())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getTestScript())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getValueSet())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getVisionPrescription())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        return $sxe;
    }

    /**
     * @return object|null
     */
    public function jsonSerialize()
    {
        if (null !== ($v = $this->getAccount())) {
            return $v;
        }
        if (null !== ($v = $this->getActivityDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getAdverseEvent())) {
            return $v;
        }
        if (null !== ($v = $this->getAllergyIntolerance())) {
            return $v;
        }
        if (null !== ($v = $this->getAppointment())) {
            return $v;
        }
        if (null !== ($v = $this->getAppointmentResponse())) {
            return $v;
        }
        if (null !== ($v = $this->getAuditEvent())) {
            return $v;
        }
        if (null !== ($v = $this->getBasic())) {
            return $v;
        }
        if (null !== ($v = $this->getBinary())) {
            return $v;
        }
        if (null !== ($v = $this->getBodySite())) {
            return $v;
        }
        if (null !== ($v = $this->getBundle())) {
            return $v;
        }
        if (null !== ($v = $this->getCapabilityStatement())) {
            return $v;
        }
        if (null !== ($v = $this->getCarePlan())) {
            return $v;
        }
        if (null !== ($v = $this->getCareTeam())) {
            return $v;
        }
        if (null !== ($v = $this->getChargeItem())) {
            return $v;
        }
        if (null !== ($v = $this->getClaim())) {
            return $v;
        }
        if (null !== ($v = $this->getClaimResponse())) {
            return $v;
        }
        if (null !== ($v = $this->getClinicalImpression())) {
            return $v;
        }
        if (null !== ($v = $this->getCodeSystem())) {
            return $v;
        }
        if (null !== ($v = $this->getCommunication())) {
            return $v;
        }
        if (null !== ($v = $this->getCommunicationRequest())) {
            return $v;
        }
        if (null !== ($v = $this->getCompartmentDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getComposition())) {
            return $v;
        }
        if (null !== ($v = $this->getConceptMap())) {
            return $v;
        }
        if (null !== ($v = $this->getCondition())) {
            return $v;
        }
        if (null !== ($v = $this->getConsent())) {
            return $v;
        }
        if (null !== ($v = $this->getContract())) {
            return $v;
        }
        if (null !== ($v = $this->getCoverage())) {
            return $v;
        }
        if (null !== ($v = $this->getDataElement())) {
            return $v;
        }
        if (null !== ($v = $this->getDetectedIssue())) {
            return $v;
        }
        if (null !== ($v = $this->getDevice())) {
            return $v;
        }
        if (null !== ($v = $this->getDeviceComponent())) {
            return $v;
        }
        if (null !== ($v = $this->getDeviceMetric())) {
            return $v;
        }
        if (null !== ($v = $this->getDeviceRequest())) {
            return $v;
        }
        if (null !== ($v = $this->getDeviceUseStatement())) {
            return $v;
        }
        if (null !== ($v = $this->getDiagnosticReport())) {
            return $v;
        }
        if (null !== ($v = $this->getDocumentManifest())) {
            return $v;
        }
        if (null !== ($v = $this->getDocumentReference())) {
            return $v;
        }
        if (null !== ($v = $this->getEligibilityRequest())) {
            return $v;
        }
        if (null !== ($v = $this->getEligibilityResponse())) {
            return $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            return $v;
        }
        if (null !== ($v = $this->getEndpoint())) {
            return $v;
        }
        if (null !== ($v = $this->getEnrollmentRequest())) {
            return $v;
        }
        if (null !== ($v = $this->getEnrollmentResponse())) {
            return $v;
        }
        if (null !== ($v = $this->getEpisodeOfCare())) {
            return $v;
        }
        if (null !== ($v = $this->getExpansionProfile())) {
            return $v;
        }
        if (null !== ($v = $this->getExplanationOfBenefit())) {
            return $v;
        }
        if (null !== ($v = $this->getFamilyMemberHistory())) {
            return $v;
        }
        if (null !== ($v = $this->getFlag())) {
            return $v;
        }
        if (null !== ($v = $this->getGoal())) {
            return $v;
        }
        if (null !== ($v = $this->getGraphDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getGroup())) {
            return $v;
        }
        if (null !== ($v = $this->getGuidanceResponse())) {
            return $v;
        }
        if (null !== ($v = $this->getHealthcareService())) {
            return $v;
        }
        if (null !== ($v = $this->getImagingManifest())) {
            return $v;
        }
        if (null !== ($v = $this->getImagingStudy())) {
            return $v;
        }
        if (null !== ($v = $this->getImmunization())) {
            return $v;
        }
        if (null !== ($v = $this->getImmunizationRecommendation())) {
            return $v;
        }
        if (null !== ($v = $this->getImplementationGuide())) {
            return $v;
        }
        if (null !== ($v = $this->getLibrary())) {
            return $v;
        }
        if (null !== ($v = $this->getLinkage())) {
            return $v;
        }
        if (null !== ($v = $this->getList())) {
            return $v;
        }
        if (null !== ($v = $this->getLocation())) {
            return $v;
        }
        if (null !== ($v = $this->getMeasure())) {
            return $v;
        }
        if (null !== ($v = $this->getMeasureReport())) {
            return $v;
        }
        if (null !== ($v = $this->getMedia())) {
            return $v;
        }
        if (null !== ($v = $this->getMedication())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationAdministration())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationDispense())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationRequest())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationStatement())) {
            return $v;
        }
        if (null !== ($v = $this->getMessageDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getMessageHeader())) {
            return $v;
        }
        if (null !== ($v = $this->getNamingSystem())) {
            return $v;
        }
        if (null !== ($v = $this->getNutritionOrder())) {
            return $v;
        }
        if (null !== ($v = $this->getObservation())) {
            return $v;
        }
        if (null !== ($v = $this->getOperationDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getOperationOutcome())) {
            return $v;
        }
        if (null !== ($v = $this->getOrganization())) {
            return $v;
        }
        if (null !== ($v = $this->getParameters())) {
            return $v;
        }
        if (null !== ($v = $this->getPatient())) {
            return $v;
        }
        if (null !== ($v = $this->getPaymentNotice())) {
            return $v;
        }
        if (null !== ($v = $this->getPaymentReconciliation())) {
            return $v;
        }
        if (null !== ($v = $this->getPerson())) {
            return $v;
        }
        if (null !== ($v = $this->getPlanDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getPractitioner())) {
            return $v;
        }
        if (null !== ($v = $this->getPractitionerRole())) {
            return $v;
        }
        if (null !== ($v = $this->getProcedure())) {
            return $v;
        }
        if (null !== ($v = $this->getProcedureRequest())) {
            return $v;
        }
        if (null !== ($v = $this->getProcessRequest())) {
            return $v;
        }
        if (null !== ($v = $this->getProcessResponse())) {
            return $v;
        }
        if (null !== ($v = $this->getProvenance())) {
            return $v;
        }
        if (null !== ($v = $this->getQuestionnaire())) {
            return $v;
        }
        if (null !== ($v = $this->getQuestionnaireResponse())) {
            return $v;
        }
        if (null !== ($v = $this->getReferralRequest())) {
            return $v;
        }
        if (null !== ($v = $this->getRelatedPerson())) {
            return $v;
        }
        if (null !== ($v = $this->getRequestGroup())) {
            return $v;
        }
        if (null !== ($v = $this->getResearchStudy())) {
            return $v;
        }
        if (null !== ($v = $this->getResearchSubject())) {
            return $v;
        }
        if (null !== ($v = $this->getRiskAssessment())) {
            return $v;
        }
        if (null !== ($v = $this->getSchedule())) {
            return $v;
        }
        if (null !== ($v = $this->getSearchParameter())) {
            return $v;
        }
        if (null !== ($v = $this->getSequence())) {
            return $v;
        }
        if (null !== ($v = $this->getServiceDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getSlot())) {
            return $v;
        }
        if (null !== ($v = $this->getSpecimen())) {
            return $v;
        }
        if (null !== ($v = $this->getStructureDefinition())) {
            return $v;
        }
        if (null !== ($v = $this->getStructureMap())) {
            return $v;
        }
        if (null !== ($v = $this->getSubscription())) {
            return $v;
        }
        if (null !== ($v = $this->getSubstance())) {
            return $v;
        }
        if (null !== ($v = $this->getSupplyDelivery())) {
            return $v;
        }
        if (null !== ($v = $this->getSupplyRequest())) {
            return $v;
        }
        if (null !== ($v = $this->getTask())) {
            return $v;
        }
        if (null !== ($v = $this->getTestReport())) {
            return $v;
        }
        if (null !== ($v = $this->getTestScript())) {
            return $v;
        }
        if (null !== ($v = $this->getValueSet())) {
            return $v;
        }
        if (null !== ($v = $this->getVisionPrescription())) {
            return $v;
        }
        return null;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}