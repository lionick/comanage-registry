<?php
/**
 * COmanage Registry Language File
 *
 * Copyright (C) 2011-16 University Corporation for Advanced Internet Development, Inc.
 * 
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with
 * the License. You may obtain a copy of the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software distributed under
 * the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 *
 * @copyright     Copyright (C) 2011-16 University Corporation for Advanced Internet Development, Inc.
 * @link          http://www.internet2.edu/comanage COmanage Project
 * @package       registry
 * @since         COmanage Registry v0.1
 * @license       Apache License, Version 2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @version       $Id$
 */
  
global $cm_lang, $cm_texts, $cm_texts_orig;

// XXX move this to a master config
$cm_lang = "en_US";

// When localizing, the number in format specifications (eg: %1$s) indicates the argument
// position as passed to _txt.  This can be used to process the arguments in
// a different order than they were passed.

$cm_texts['en_US'] = array(
  // Application name
  'coordinate' =>     'COmanage Registry',
  
  // What a CO is called (abbreviated)
  'co' =>             'CO',
  'cos' =>            'COs',
  
  // What an Org is called
  'org' =>            'Organization',
  
  // API User texts
  'ap.note.privs' =>  'API Users are currently given full privileges to all Registry data. This is subject to change in a future release (<a href="https://bugs.internet2.edu/jira/browse/CO-91">CO-91</a>).',
  'ap.note.username' => 'The API username selected here cannot conflict with any identifier used by anyone to login to the platform',
  
  // Authnz
  'au.not' =>         'Not Logged In',
  
  // COs Controllers
  'co.cm.gradmin' =>  'COmanage Platform Administrators',
  'co.cm.grmembers' =>  'COmanage CO Members',
  'co.cm.desc' =>     'COmanage Registry Internal CO',
  'co.init' =>        'No COs found, initial CO created',
  'co.nomember' =>    'You are not a member of any COs',
  'co.select' =>      'Select the CO you wish to work with.',
  
  // Titles, per-controller
  'ct.addresses.1' =>           'Address',
  'ct.addresses.pl' =>          'Addresses',
  'ct.api_users.1' =>           'API User',
  'ct.api_users.pl' =>          'API Users',
  'ct.cmp_enrollment_configurations.1'  => 'CMP Enrollment Configuration',
  'ct.cmp_enrollment_configurations.pl' => 'CMP Enrollment Configurations',
  'ct.co_enrollment_attributes.1'  => 'Enrollment Attribute',
  'ct.co_enrollment_attributes.pl' => 'Enrollment Attributes',
  'ct.co_enrollment_flows.1'  => 'Enrollment Flow',
  'ct.co_enrollment_flows.pl' => 'Enrollment Flows',
  'ct.co_expiration_policies.1'  => 'Expiration Policy',
  'ct.co_expiration_policies.pl' => 'Expiration Policies',
  'ct.co_extended_attributes.1'  => 'Extended Attribute',
  'ct.co_extended_attributes.pl' => 'Extended Attributes',
  'ct.co_extended_types.1'  => 'Extended Type',
  'ct.co_extended_types.pl' => 'Extended Types',
  'ct.co_identifier_assignments.1' => 'Identifier Assignment',
  'ct.co_identifier_assignments.pl' => 'Identifier Assignments',
  'ct.co_group_members.1' =>    'Group Member',
  'ct.co_group_members.pl' =>   'Group Members',
  'ct.co_group_members.0' =>    'No members',
  'ct.co_groups.1' =>           'Group',
  'ct.co_groups.pl' =>          'Groups',
  'ct.co_all_groups' =>         'All Groups',
  'ct.co_invites.1' =>          'Invite',
  'ct.co_localizations.1' =>    'Localization',
  'ct.co_localizations.pl' =>   'Localizations',
  'ct.co_navigation_links.1' => 'CO Navigation Link',
  'ct.co_navigation_links.pl' => 'CO Navigation Links',
  'ct.co_notifications.1' =>    'Notification',
  'ct.co_notifications.pl' =>   'Notifications',
  'ct.co_invites.pl' =>         'Invites',
  'ct.co_nsf_demographics.1'  => 'NSF Demographic Record',
  'ct.co_nsf_demographics.pl' => 'NSF Demographic Records',
  'ct.co_org_identity_links.1' => 'CO Person / Org Identity Link',
  'ct.co_org_identity_links.pl' => 'CO Person / Org Identity Links',
  'ct.co_people.1' =>           'CO Person',
  'ct.co_people.pl' =>          'CO People',
  'ct.co_people.se' =>          'CO People Search',
  'ct.co_people.se.no_results' =>  'No results',
  'ct.co_people.se.restore' =>  'Restore default listing',
  'ct.co_person_roles.1' =>     'CO Person Role',
  'ct.co_person_roles.pl' =>    'CO Person Roles',
  'ct.co_petition_history_records.1' => 'CO Petition History Record',
  'ct.co_petition_history_records.pl' => 'CO Petition History Records',
  'ct.co_petitions.1' =>        'CO Petition',
  'ct.co_petitions.pl' =>       'CO Petitions',
  'ct.co_petitions.0' =>        'No petitions',
  'ct.co_provisioning_targets.1'  => 'Provisioning Target',
  'ct.co_provisioning_targets.pl' => 'Provisioning Targets',
  'ct.co_self_service_permissions.1'  => 'Self Service Permission',
  'ct.co_self_service_permissions.pl' => 'Self Service Permissions',
  'ct.co_settings.1' =>         'CO Setting',
  'ct.co_settings.pl' =>        'CO Settings',
  'ct.co_terms_and_conditions.1'  => 'Terms and Conditions',
  'ct.co_terms_and_conditions.pl' => 'Terms and Conditions',
  'ct.cos.1' =>                 'CO',
  'ct.cos.pl' =>                'COs',
  'ct.cous.1' =>                'COU',
  'ct.cous.pl' =>               'COUs',
  'ct.email_addresses.1' =>     'Email Address',
  'ct.email_addresses.pl' =>    'Email Addresses',
  'ct.enrollment_flows.1'  =>   'Enrollment Flow',
  'ct.enrollment_flows.pl' =>   'Enrollment Flows',
  'ct.history_records.1' =>     'History Record',
  'ct.history_records.pl' =>    'History Records',
  'ct.identifiers.1' =>         'Identifier',
  'ct.identifiers.pl' =>        'Identifiers',
  'ct.names.1' =>               'Name',
  'ct.names.pl' =>              'Names',
  'ct.navigation_links.1' =>    'Navigation Link',
  'ct.navigation_links.pl' =>   'Navigation Links',
  'ct.org_identities.1' =>      'Organizational Identity',
  'ct.org_identities.se' =>     'Organizational Identity Search',
  'ct.org_identities.pl' =>     'Organizational Identities',
  'ct.organizations.1' =>       'Organization',
  'ct.organizations.pl' =>      'Organizations',
  'ct.petitions.1' =>           'Petition',
  'ct.petitions.pl' =>          'Petitions',
  'ct.ssh_keys.1' =>            'SSH Key',
  'ct.ssh_keys.pl' =>           'SSH Keys',
  'ct.telephone_numbers.1' =>   'Telephone Number',
  'ct.telephone_numbers.pl' =>  'Telephone Numbers',
  
  // Embedded Discovery Service
  
  'eds.layout.preamble' =>      'Please enter the name of your organization in the box or click to choose from a list.',
  'eds.title' =>                'Please choose how to login',
  
  // Enrollment Flow Steps
  'ef.step.approve'                  => 'Approval',
  'ef.step.collectIdentifier'        => 'Record Identifier',
  'ef.step.deny'                     => 'Denial',
  'ef.step.finalize'                 => 'Finalize',
  'ef.step.petitionerAttributes'     => 'Collect Petitioner Attributes',
  'ef.step.processConfirmation'      => 'Confirm Email Address',
  'ef.step.provision'                => 'Provision',
  'ef.step.redirectOnConfirm'        => 'Process Confirmation',
  'ef.step.selectEnrollee'           => 'Select Person',
  'ef.step.sendApprovalNotification' => 'Approval Notification',
  'ef.step.sendApproverNotification' => 'Request Approval',
  'ef.step.sendConfirmation'         => 'Request Email Address Confirmation',
  'ef.step.start'                    => 'Start',
  'ef.step.waitForApproval'          => 'Wait For Approval',
  'ef.step.waitForConfirmation'      => 'Wait For Confirmation',
  
  // Email Messages
  'em.approval.subject.ef'   => 'Petition to join (@CO_NAME) has been approved',
  'em.approval.body.ef'      => 'Your petition to join (@CO_NAME) as been approved. You may now log in to the platform.',
  'em.expiration.subject'    => 'Placeholder expiration subject',
  'em.expiration.body'       => 'Placeholder expiration body',
  'em.invite.subject'        => 'Invitation to join %1$s',
  'em.invite.subject.ef'     => 'Invitation to join (@CO_NAME)',
  'em.invite.subject.ver'    => 'Please confirm your email address (@CO_NAME)',
  'em.invite.body'           => 'You have been invited to join %1$s.  Please click the link below to accept or decline.',
  'em.invite.body.ef'        => 'You have been invited to join (@CO_NAME).
Please click the link below to accept or decline.

(@INVITE_URL)',
  'em.invite.body.ver'       => 'You or an administrator for @CO_NAME has added or updated an email address.
Please click the link below to confirm that this is a valid request.

(@INVITE_URL)

For questions regarding this process, please contact your administrator.',
  'em.invite.ok'             => 'Invitation has been emailed to %1$s',
  'em.invite.footer'         => 'This email was sent using %1$s.',
  'em.notification.subject'  => 'New Notification for (@CO_NAME)',
  'em.notification.body'     => '(@COMMENT)

(@SOURCE_URL)

For more information, see the notification at

(@NOTIFICATION_URL)',
  'em.resolution.subject'    => 'Notification for (@CO_NAME) Resolved',
  'em.resolution.body'       => 'The action required for the notification
  
(@COMMENT)

has been resolved by (@ACTOR_NAME). For more information, see the
original notification at

(@NOTIFICATION_URL)',

  // Enumerations, corresponding to enum.php
  // Default history comments
  'en.action' =>   array(
    ActionEnum::CoGroupAdded                => 'CO Group Added',
    ActionEnum::CoGroupDeleted              => 'CO Group Deleted',
    ActionEnum::CoGroupEdited               => 'CO Group Edited',
    ActionEnum::CoGroupMemberAdded          => 'CO Group Member Added',
    ActionEnum::CoGroupMemberEdited         => 'CO Group Member Edited',
    ActionEnum::CoGroupMemberDeleted        => 'CO Group Member Deleted',
    ActionEnum::CoPersonAddedManual         => 'CO Person Created (Manual)',
    ActionEnum::CoPersonAddedPetition       => 'CO Person Created (Petition)',
    ActionEnum::CoPersonDeletedManual       => 'CO Person Deleted (Manual)',
    ActionEnum::CoPersonDeletedPetition     => 'CO Person Deleted (Petition)',
    ActionEnum::CoPersonEditedManual        => 'CO Person Edited',
    ActionEnum::CoPersonEditedPetition      => 'CO Person Edited (Petition)',
    ActionEnum::CoPersonManuallyProvisioned => 'CO Person Provisioned (Manual)',
    ActionEnum::CoPersonMatchedPetition     => 'CO Person Matched (Petition)',
    ActionEnum::CoPersonProvisioned         => 'CO Person Provisioned',
    ActionEnum::CoPersonStatusRecalculated  => 'CO Person Status Recalculated',
    ActionEnum::CoPersonRoleAddedManual     => 'CO Person Role Created (Manual)',
    ActionEnum::CoPersonRoleAddedPetition   => 'CO Person Role Created (Petition)',
    ActionEnum::CoPersonRoleDeletedManual   => 'CO Person Role Deleted (Manual)',
    ActionEnum::CoPersonRoleEditedExpiration => 'CO Person Role Edited (Expiration)',
    ActionEnum::CoPersonRoleEditedManual    => 'CO Person Role Edited',
    ActionEnum::CoPersonRoleEditedPetition  => 'CO Person Role Edited (Petition)',
    ActionEnum::CoPersonRoleRelinked        => 'CO Person Role Relinked',
    ActionEnum::CoPersonOrgIdLinked         => 'CO Person and Org Identity Linked',
    ActionEnum::CoPersonOrgIdUnlinked       => 'CO Person and Org Identity Unlinked',
    ActionEnum::CoPetitionCreated           => 'CO Petition Created',
    ActionEnum::CoPetitionUpdated           => 'CO Petition Updated',
    ActionEnum::EmailAddressVerified        => 'Email Address Verified',
    ActionEnum::EmailAddressVerifyCanceled  => 'Email Address Verification Canceled',
    ActionEnum::EmailAddressVerifyReqSent   => 'Email Address Verification Sent',
    ActionEnum::ExpirationPolicyMatched     => 'Expiration Policy Matched',
    ActionEnum::HistoryRecordActorExpunged  => 'History Record Actor Expunged',
    ActionEnum::IdentifierAutoAssigned      => 'Identifier Auto Assigned',
    ActionEnum::InvitationConfirmed         => 'Invitation Confirmed',
    ActionEnum::InvitationDeclined          => 'Invitation Declined',
    ActionEnum::InvitationExpired           => 'Invitation Expired',
    ActionEnum::InvitationSent              => 'Invitation Sent',
    ActionEnum::NotificationAcknowledged    => 'Notification Acknowledged',
    ActionEnum::NotificationCanceled        => 'Notification Canceled',
    ActionEnum::NotificationDelivered       => 'Notification Delivered',
    ActionEnum::NotificationParticipantExpunged => 'Notification Participant Expunged',
    ActionEnum::NotificationResolved        => 'Notification Resolved',
    ActionEnum::OrgIdAddedManual            => 'Org Identity Created (Manual)',
    ActionEnum::OrgIdAddedPetition          => 'Org Identity Created (Petition)',
    ActionEnum::OrgIdDeletedManual          => 'Org Identity Deleted (Manual)',
    ActionEnum::OrgIdDeletedPetition        => 'Org Identity Deleted (Petition)',
    ActionEnum::OrgIdEditedLoginEnv         => 'Org Identity Edited (Login, Env)',
    ActionEnum::OrgIdEditedManual           => 'Org Identity Edited (Manual)',
    ActionEnum::OrgIdEditedPetition         => 'Org Identity Edited (Petition)',
    ActionEnum::ProvisionerAction           => 'Provisioner Action',
    ActionEnum::ProvisionerFailed           => 'Provisioner Failed',
    ActionEnum::SshKeyAdded                 => 'SSH Key Added',
    ActionEnum::SshKeyDeleted               => 'SSH Key Deleted',
    ActionEnum::SshKeyEdited                => 'SSH Key Edited',
    ActionEnum::SshKeyUploaded              => 'SSH Key Uploaded'
  ),
  
  'en.action.petition' => array(
    PetitionActionEnum::Approved            => 'Petition Approved',
    PetitionActionEnum::CommentAdded        => 'Comment Added',
    PetitionActionEnum::Created             => 'Petition Created',
    PetitionActionEnum::Declined            => 'Petition Declined',
    PetitionActionEnum::Denied              => 'Petition Denied',
    PetitionActionEnum::Finalized           => 'Petition Finalized',
    PetitionActionEnum::FlaggedDuplicate    => 'Petition Flagged as Duplicate',
    PetitionActionEnum::IdentifiersAssigned => 'Identifiers Assigned',
    PetitionActionEnum::IdentityLinked      => 'Identity Linked',
    PetitionActionEnum::IdentityRelinked    => 'Identity Relinked',
    PetitionActionEnum::InviteConfirmed     => 'Invitation Confirmed',
    PetitionActionEnum::InviteSent          => 'Invitation Sent',
    PetitionActionEnum::NotificationSent    => 'Notification Sent',
    PetitionActionEnum::TCExplicitAgreement => 'Terms and Conditions Explicit Agreement',
    PetitionActionEnum::TCImpliedAgreement  => 'Terms and Conditions Implied Agreement'
  ),

  // Extended type, key must be en.model.attribute
  'en.address.type' =>  array(ContactEnum::Home => 'Home',
                              ContactEnum::Office => 'Office',
                              ContactEnum::Postal => 'Postal',
                              ContactEnum::Forwarding => 'Forwarding'),
  
  'en.admin' =>       array(AdministratorEnum::NoAdmin => 'None',
                            AdministratorEnum::CoAdmin => 'CO Admin',
                            AdministratorEnum::CoOrCouAdmin => 'CO or COU Admin'),
  
  'en.chars.permitted' => array(
    PermittedCharacterEnum::AlphaNumeric      => 'AlphaNumeric Only',
    PermittedCharacterEnum::AlphaNumDotDashUS => 'AlphaNumeric and Dot, Dash, Underscore',
    PermittedCharacterEnum::AlphaNumDDUSQuote => 'AlphaNumeric and Dot, Dash, Underscore, Apostrophe',
    PermittedCharacterEnum::Any               => 'Any Character'
  ),

  'en.chars.permitted.re' => array(
    PermittedCharacterEnum::AlphaNumeric      => '[A-Za-z]',
    PermittedCharacterEnum::AlphaNumDotDashUS => '[A-Za-z\.\-_]',
    PermittedCharacterEnum::AlphaNumDDUSQuote => '[A-Za-z\.\-_\']',
    PermittedCharacterEnum::Any               => '.*'
  ),
  
  // The inverse of the above (NOT permitted)
  'en.chars.permitted.re.not' => array(
    PermittedCharacterEnum::AlphaNumeric      => '[^A-Za-z]',
    PermittedCharacterEnum::AlphaNumDotDashUS => '[^A-Za-z\.\-_]',
    PermittedCharacterEnum::AlphaNumDDUSQuote => '[^A-Za-z\.\-_\']',
    PermittedCharacterEnum::Any               => ''
  ),
  
  'en.contact' =>     array(ContactEnum::Fax => 'Fax',
                            ContactEnum::Home => 'Home',
                            ContactEnum::Mobile => 'Mobile',
                            ContactEnum::Office => 'Office',
                            ContactEnum::Postal => 'Postal',
                            ContactEnum::Forwarding => 'Forwarding'),
  
  // Extended type, key must be en.model.attribute. This means we end up having affiliations
  // defined twice, once for CO Person Role and once for Org Identity. (Note the latter does
  // not currently support Extended Types, but it doesn't seem right for org identity to
  // reference a CO Person Role definition.
  // Note there is a similar enumeration in enum.php::AffiliationEnum.
  
  'en.co_person_role.affiliation' => array(AffiliationEnum::Faculty       => 'Faculty',
                                           AffiliationEnum::Student       => 'Student',
                                           AffiliationEnum::Staff         => 'Staff',
                                           AffiliationEnum::Alum          => 'Alum',
                                           AffiliationEnum::Member        => 'Member',
                                           AffiliationEnum::Affiliate     => 'Affiliate',
                                           AffiliationEnum::Employee      => 'Employee',
                                           AffiliationEnum::LibraryWalkIn => 'Library Walk-In'),
  
  // Sort of silly to have the same list twice...
  'en.org_identity.affiliation' => array(AffiliationEnum::Faculty       => 'Faculty',
                                         AffiliationEnum::Student       => 'Student',
                                         AffiliationEnum::Staff         => 'Staff',
                                         AffiliationEnum::Alum          => 'Alum',
                                         AffiliationEnum::Member        => 'Member',
                                         AffiliationEnum::Affiliate     => 'Affiliate',
                                         AffiliationEnum::Employee      => 'Employee',
                                         AffiliationEnum::LibraryWalkIn => 'Library Walk-In'),
  
  // Extended type, key must be en.model.attribute
  'en.email_address.type' => array(
    EmailAddressEnum::Delivery => 'Delivery',
    EmailAddressEnum::Forwarding => 'Forwarding',
    EmailAddressEnum::Official => 'Official',
    EmailAddressEnum::Personal => 'Personal'
  ),
  
  'en.enrollment.authz' => array(
    EnrollmentAuthzEnum::AuthUser       => 'Authenticated User',
    EnrollmentAuthzEnum::CoAdmin        => 'CO Admin',
    EnrollmentAuthzEnum::CoGroupMember  => 'CO Group Member',
    EnrollmentAuthzEnum::CoOrCouAdmin   => 'CO or COU Admin',
    EnrollmentAuthzEnum::CoPerson       => 'CO Person',
    EnrollmentAuthzEnum::CouAdmin       => 'COU Admin',
    EnrollmentAuthzEnum::CouPerson      => 'COU Person',
    EnrollmentAuthzEnum::None           => 'None'
  ),
  
  'en.enrollment.dupe' => array(
    EnrollmentDupeModeEnum::Duplicate       => 'Flag as Duplicate',
    EnrollmentDupeModeEnum::NewRole         => 'Create New Role',
    EnrollmentDupeModeEnum::NewRoleCouCheck => 'Create New Role If Different COU'
  ),
  
  'en.enrollment.match' => array(
    EnrollmentMatchPolicyEnum::Advisory  => 'Advisory',
    EnrollmentMatchPolicyEnum::Automatic => 'Automatic',
    EnrollmentMatchPolicyEnum::None      => 'None',
    EnrollmentMatchPolicyEnum::Select    => 'Select',
    EnrollmentMatchPolicyEnum::Self      => 'Self'
  ),
  
  'en.extattr' =>     array(ExtendedAttributeEnum::Integer => 'Integer',
                            ExtendedAttributeEnum::Timestamp => 'Timestamp',
                            ExtendedAttributeEnum::Varchar32 => 'String (32)'),

  'en.ia.algorithm' => array(IdentifierAssignmentEnum::Random => 'Random',
                             IdentifierAssignmentEnum::Sequential => 'Sequential'),

  // Extended type, key must be en.model.attribute
  'en.identifier.type' =>  array(IdentifierEnum::ePUID => 'ePUID',
                                 IdentifierEnum::ePPN => 'ePPN',
                                 IdentifierEnum::ePTID => 'ePTID',
                                 IdentifierEnum::Mail => 'Mail',
                                 IdentifierEnum::OpenID => 'OpenID',
                                 IdentifierEnum::UID => 'UID'),
  
  // As a moderately arbitrary decision, the languages listed here those with at least
  // 100m speakers per Ethnologue (by way of wikipedia)
  //  http://en.wikipedia.org/wiki/List_of_languages_by_total_number_of_speakers
  // as well as any official languages of REFEDS participants not in the above list
  //  https://refeds.org/resources_list.html
  // The key is the ISO 639-2 two letter tag
  //  http://www.loc.gov/standards/iso639-2/ISO-639-2_utf-8.txt
  // See also http://people.w3.org/rishida/names/languages.html
  // and http://www.iana.org/assignments/language-subtag-registry/language-subtag-registry
  'en.language' => array(
    'af'      => 'Afrikaans',
    'ar'      => 'Arabic (العربية)',
    'bn'      => 'Bengali',
    'zh-Hans' => 'Chinese - Simplified (简体中文)',
    'zh-Hant' => 'Chinese - Traditional (繁體中文)',
    'hr'      => 'Croatian (Hrvatski)',
    'cs'      => 'Czech (čeština)',
    'da'      => 'Danish (Dansk)',
    'nl'      => 'Dutch (Nederlands) / Flemish',
    'en'      => 'English',
    'et'      => 'Estonian (Eesti Keel)',
    'fi'      => 'Finnish (Suomi)',
    'fr'      => 'French (Français)',
    'de'      => 'German (Deutsch)',
    'el'      => 'Greek (ελληνικά)',
    'he'      => 'Hebrew (עִבְרִית)',
    'hi'      => 'Hindi (हिंदी)',
    'hu'      => 'Hungarian (Magyar)',
    'id'      => 'Indonesian (Bahasa Indonesia)',
    'it'      => 'Italian (Italiano)',
    'ja'      => 'Japanese (日本語)',
    'ko'      => 'Korean (한국어)',
    'lv'      => 'Latvian (Latviešu Valoda)',
    'lt'      => 'Lithuanian (Lietuvių Kalba)',
    'ms'      => 'Malaysian (Bahasa Malaysia)',
    'no'      => 'Norwegian (Norsk)',
    'pl'      => 'Polish (Język Polski)',
    'pt'      => 'Portuguese (Português)',
    'ro'      => 'Romanian (Limba Română)',
    'ru'      => 'Russian (Pyccĸий)',
    'sr'      => 'Serbian (српски / Srpski)',
    'sl'      => 'Slovene (Slovenski Jezik)',
    'es'      => 'Spanish (Español)',
    'sv'      => 'Swedish (Svenska)',
    'tr'      => 'Turkish (Türkçe)',
    'ur'      => 'Urdu (اُردُو)'
  ),

  // Extended type, key must be en.model.attribute
  'en.name.type' =>        array(NameEnum::Alternate => 'Alternate',
                                 NameEnum::Author => 'Author',
                                 NameEnum::FKA => 'FKA',
                                 NameEnum::Official => 'Official',
                                 NameEnum::Preferred => 'Preferred'),
  
  // Navigation links
  'en.nav.location' =>     array(LinkLocationEnum::topBar => 'Top Bar'),

  // Demographics
  'en.nsf.gender' =>       array(NSFGenderEnum::Female => 'Female',
                                 NSFGenderEnum::Male   => 'Male'),

  'en.nsf.citizen' =>      array(NSFCitizenshipEnum::USCitizen           => 'U.S. Citizen',
                                 NSFCitizenshipEnum::USPermanentResident => 'U.S. Permanent Resident',
                                 NSFCitizenshipEnum::Other               => 'Other non-U.S. Citizen'),

  'en.nsf.ethnic' =>       array(NSFEthnicityEnum::Hispanic    => 'Hispanic or Latino',
                                 NSFEthnicityEnum::NotHispanic => 'Not Hispanic or Latino'),

  'en.nsf.ethnic.desc' =>       array(NSFEthnicityEnum::Hispanic => 'A person of Mexican, Puerto Rican, Cuban, South or Central American, or other Spanish culture or origin, regardless of race',),


  'en.nsf.race' =>         array(NSFRaceEnum::Asian          => 'Asian',
                                 NSFRaceEnum::AmericanIndian => 'American Indian or Alaskan Native',
                                 NSFRaceEnum::Black          => 'Black or African American',
                                 NSFRaceEnum::NativeHawaiian => 'Native Hawaiian or Pacific Islander',
                                 NSFRaceEnum::White          => 'White'
                                ),

  'en.nsf.race.desc' =>         array(NSFRaceEnum::Asian          => 'A person having origins in any of the original peoples of the Far East, Southeast Asia, or the Indian subcontinent including, for example, Cambodia, China, India, Japan, Korea, Malaysia, Pakistan, the Philippine Islands, Thailand, and Vietnam',
                                      NSFRaceEnum::AmericanIndian => 'A person having origins in any of the original peoples of North and South America (including Central America), and who maintains tribal affiliation or community attachment',
                                      NSFRaceEnum::Black          => 'A person having origins in any of the black racial groups of Africa',
                                      NSFRaceEnum::NativeHawaiian => 'A person having origins in any of the original peoples of Hawaii, Guan, Samoa, or other Pacific Islands',
                                      NSFRaceEnum::White          => 'A person having origins in any of the original peoples of Europe, the Middle East, or North Africa'),

  'en.nsf.disab' =>        array(NSFDisabilityEnum::Hearing  => 'Hearing Impaired',
                                 NSFDisabilityEnum::Visual   => 'Visual Impaired',
                                 NSFDisabilityEnum::Mobility => 'Mobility/Orthopedic Impairment',
                                 NSFDisabilityEnum::Other    => 'Other Impairment'),

  'en.permission'  => array(PermissionEnum::None      => 'None',
                            PermissionEnum::ReadOnly  => 'Read Only',
                            PermissionEnum::ReadWrite => 'Read Write'),
  
  'en.permitted.name' => array(PermittedNameFieldsEnum::GF    => 'Given, Family',
                               PermittedNameFieldsEnum::GMF   => 'Given, Middle, Family',
                               PermittedNameFieldsEnum::GFS   => 'Given, Family, Suffix',
                               PermittedNameFieldsEnum::GMFS  => 'Given, Middle, Family, Suffix',
                               PermittedNameFieldsEnum::HGF   => 'Honorific, Given, Family',
                               PermittedNameFieldsEnum::HGMF  => 'Honorific, Given, Middle, Family',
                               PermittedNameFieldsEnum::HGFS  => 'Honorific, Given, Family, Suffix',
                               PermittedNameFieldsEnum::HGMFS => 'Honorific, Given, Middle, Family, Suffix'),
  
  'en.required' =>    array(RequiredEnum::Required => 'Required',
                            RequiredEnum::Optional => 'Optional',
                            RequiredEnum::NotPermitted => 'Not Permitted'),
  
  'en.required.address' => array(RequiredAddressFieldsEnum::Street                       => 'Street',
                                 RequiredAddressFieldsEnum::StreetCityStatePostal        => 'Street, City, State, ZIP/Postal Code',
                                 RequiredAddressFieldsEnum::StreetCityStatePostalCountry => 'Street, City, State, ZIP/Postal Code, Country'),
  
  'en.required.name' => array(RequiredNameFieldsEnum::Given       => 'Given Name',
                              RequiredNameFieldsEnum::GivenFamily => 'Given Name, Family Name'),
  
  'en.sponsor.eligibility' => array(SponsorEligibilityEnum::CoAdmin       => 'CO Admin',
                                    SponsorEligibilityEnum::CoGroupMember => 'CO Group Member',
                                    SponsorEligibilityEnum::CoOrCouAdmin  => 'CO or COU Admin',
                                    SponsorEligibilityEnum::CoPerson      => 'Active CO Person',
                                    SponsorEligibilityEnum::None          => 'Disable Sponsors'),

  'en.sshkey.type' => array(
    SshKeyTypeEnum::DSA  => 'DSA',
    SshKeyTypeEnum::RSA  => 'RSA',
    SshKeyTypeEnum::RSA1 => 'RSA1'
  ),
  
  'en.status' =>      array(StatusEnum::Active              => 'Active',
                            StatusEnum::Approved            => 'Approved',
                            StatusEnum::Confirmed           => 'Confirmed',
                            StatusEnum::Declined            => 'Declined',
                            StatusEnum::Deleted             => 'Deleted',
                            StatusEnum::Denied              => 'Denied',
                            StatusEnum::Duplicate           => 'Duplicate',
                            StatusEnum::Expired             => 'Expired',
                            StatusEnum::GracePeriod         => 'Grace Period',
                            StatusEnum::Invited             => 'Invited',
                            StatusEnum::Pending             => 'Pending',
                            StatusEnum::PendingApproval     => 'Pending Approval',
                            StatusEnum::PendingConfirmation => 'Pending Confirmation',
                            StatusEnum::Suspended           => 'Suspended'),
  
  'en.status.ef' => array(
    EnrollmentFlowStatusEnum::Active              => 'Active',
    EnrollmentFlowStatusEnum::Suspended           => 'Suspended',
    EnrollmentFlowStatusEnum::Template            => 'Template'
  ),
  
  'en.status.not' => array(
    NotificationStatusEnum::Acknowledged          => 'Acknowledged',
    NotificationStatusEnum::Canceled              => 'Canceled',
    NotificationStatusEnum::Deleted               => 'Deleted',
    NotificationStatusEnum::PendingAcknowledgment => 'Pending Acknowledgment',
    NotificationStatusEnum::PendingResolution     => 'Pending Resolution',
    NotificationStatusEnum::Resolved              => 'Resolved'
  ),
  
  'en.status.prov' => array(
    ProvisionerStatusEnum::AutomaticMode  => 'Automatic Mode',
    ProvisionerStatusEnum::ManualMode     => 'Manual Mode',
    ProvisionerStatusEnum::Disabled       => 'Disabled'
  ),
  
  'en.status.prov.desc' =>  'In automatic mode, provisioners are called automatically as needed<br />In manual mode, an administrator must invoke the provisioner',

  'en.status.prov.target' => array(
    ProvisioningStatusEnum::NotProvisioned => 'Not Provisioned',
    ProvisioningStatusEnum::Provisioned    => 'Provisioned',
    ProvisioningStatusEnum::Queued         => 'Queued',
    ProvisioningStatusEnum::Unknown        => 'Unknown'
  ),
  
  'en.status.pt' => array(
    PetitionStatusEnum::Active              => 'Active',
    PetitionStatusEnum::Approved            => 'Approved',
    PetitionStatusEnum::Confirmed           => 'Confirmed',
    PetitionStatusEnum::Created             => 'Created',
    PetitionStatusEnum::Declined            => 'Declined',
    PetitionStatusEnum::Denied              => 'Denied',
    PetitionStatusEnum::Duplicate           => 'Duplicate',
    PetitionStatusEnum::Finalized           => 'Finalized',
    PetitionStatusEnum::PendingApproval     => 'Pending Approval',
    PetitionStatusEnum::PendingConfirmation => 'Pending Confirmation'
  ),
  
  'en.status.susp' => array(
    SuspendableStatusEnum::Active              => 'Active',
    SuspendableStatusEnum::Suspended           => 'Suspended'
  ),
  
  'en.tandc.mode.enroll' => array(
    TAndCEnrollmentModeEnum::ExplicitConsent => 'Explicit Consent',
    TAndCEnrollmentModeEnum::ImpliedConsent  => 'Implied Consent',
    TAndCEnrollmentModeEnum::SplashPage      => 'Splash Page',
    TAndCEnrollmentModeEnum::Ignore          => 'Ignore'
  ),
  
  'en.tandc.mode.login' => array(
    TAndCLoginModeEnum::NotEnforced          => 'Do Not Enforce',
    TAndCLoginModeEnum::RegistryLogin        => 'Require At Registry Login'
    // TAndCLoginModeEnum::DisableAllServices   => 'Disable All Services' // not currently implemented
  ),

  // Extended type, key must be en.model.attribute
  'en.telephone_number.type' => array(ContactEnum::Fax => 'Fax',
                                      ContactEnum::Home => 'Home',
                                      ContactEnum::Mobile => 'Mobile',
                                      ContactEnum::Office => 'Office'),

  // Errors
  'er.archived' =>    'This record is already archived and cannot be edited',
  'er.auth' =>        'Not authenticated',
  'er.auth.co' =>     'You are not a member of any COs. Please contact an administrator for assistance.',
  'er.auth.empty' =>  'Found empty username at login. Please contact an administrator for assistance.',
  'er.auth.org' =>    'The identifier "%1$s" is not registered. If your request for enrollment is still being processed, you will not be able to login until it is approved. Please contact an administrator for assistance.',
  'er.auth.roles' =>  'You do not have any current roles. If your request for enrollment is still being processed, you will not be able to login until it is approved. Please contact an administrator for assistance.',
  'er.changelog.model.load' => 'Failed to load model "%1$s"',
  'er.co.cm.edit' =>  'Cannot edit COmanage CO',
  'er.co.cm.rm' =>    'Cannot remove COmanage CO',
  'er.co.exists' =>   'A CO named "%1$s" already exists',
  'er.co.fail' =>     'Unable to find CO',
  'er.co.gr.admin' => 'CO created, but failed to create initial admin group',
  'er.co.gr.members' => 'CO created, but failed to create initial members group',
  'er.co.gr.adminmembers' => 'CO created, but failed to create initial admin and members groups',      
  'er.co.none' =>     'No COs found (did you run setup.php?)',
  'er.co.notmember' => 'Not a Member',
  'er.co.mismatch' => 'Requested CO does not match CO of %1$s %2$s',
  'er.co.specify' =>  'No CO Specified',
  'er.co.unk' =>      'Unknown CO',
  'er.co.unk-a' =>    'Unknown CO "%1$s"',
  'er.coef.unk' =>    'Unknown CO Enrollment Flow',
  'er.comember' =>    '%1$s is a member of one or more COs (%2$s) and cannot be removed.',
  'er.coumember' =>   '%1$s is a member of one or more COUs that you do not manage (%2$s) and cannot be removed.',
  'er.cop.member' =>  '%1$s is already a member of %2$s and cannot be added again. However, an additional role may be added.',
  'er.cop.nomail' =>  '%1$s (CO Person %2$s) has no known email address.<br />Add an email address and then try again.',
  'er.cop.unk' =>     'Unknown CO Person',
  'er.cop.unk-a' =>   'Unknown CO Person "%1$s"',
  // XXX These should become er.copr (or tossed if not needed)
  'er.cop.nf' =>      'CO Person Role %1$s Not Found',
  'er.copr.exists' => '%1$s has one or more CO Person Roles and cannot be removed.',
  'er.copr.none' =>   'CO Person Role Not Provided',
  'er.copt.unk' =>    'Unknown CO Provisioning Target',
  'er.cou.copr' =>    'There are still one or more CO person role records in the COU %1$s, and so it cannot be deleted.',
  'er.cou.child' =>   'COUs with children can not be deleted',
  'er.cou.cycle' =>   'Parent is a descendant.  Cycles are not permitted.',
  'er.cou.exists' =>  'A COU named "%1$s" already exists',
  'er.cou.gr.admin' => 'COU created, but failed to create initial admin group',
  'er.cou.gr.members' => 'COU created, but failed to create initial members group',
  'er.cou.gr.adminmembers' => 'COU created, but failed to create initial admin and members groups',
  'er.cou.sameco' =>  'COUs must be in the same CO',
  'er.delete' =>      'Delete Failed',
  'er.delete.already' => 'Record is already marked deleted',
  'er.deleted-a' =>   'Deleted "%1$s"',  // XXX is this an er or an rs?
  'er.db.connect' =>  'Failed to connect to database: %1$s',
  'er.db.schema' =>   'Possibly failed to update database schema',
  'er.db.save' =>     'Database save failed',
  'er.db.save-a' =>   'Database save failed: %1$s',
  'er.ea.alter' =>    'Failed to alter table for attribute',
  'er.ea.exists' =>   'An attribute named "%1$s" already exists within the CO',
  'er.ea.index' =>    'Failed to update index for attribute',
  'er.ea.table' =>    'Failed to create CO Extended Attribute table',
  'er.ea.table.d' =>  'Failed to drop CO Extended Attribute table',
  'er.ef.active' =>   'The requested Enrollment Flow is not active',
  'er.ef.authz.cou' => 'A COU must be specified for authorization type "%1$s"',
  'er.ef.authz.gr' => 'A group must be specified for authorization type "%1$s"',
  'er.efcf.init' =>   'Failed to set up initial CMP Enrollment Configuration',
  'er.et.default' =>  'Failed to add default types',
  'er.et.exists' =>   'An extended type named "%1$s" already exists',
  'er.et.inuse' =>    'The extended type "%1$s" is in use by at least one CO Person record within this CO and cannot be removed.',
  'er.et.inuse-a' =>  'The extended type "%1$s" is in use by at least one %2$s within this CO and cannot be removed.',
  'er.et.inuse.ef' => 'The extended type "%1$s" is in use by at least one Enrollment Flow (as an attribute or default value) within this CO and cannot be removed.',
  'er.field.req' =>   'This field is required',
  'er.fields' =>      'Please recheck the highlighted fields',
  'er.file.none' =>   'No file specified',
  'er.file.read' =>   'Unable to open "%1$s" for reading',
  'er.file.write' =>  'Unable to open "%1$s" for writing',
  'er.gr.exists' =>   'A group named "%1$s" already exists within the CO',
  'er.gr.init' =>     'Group created, but failed to set initial owner/member',
  'er.gr.nf' =>       'Group %1$s Not Found',
  'er.gr.res' =>      'Groups named "admin" or prefixed "admin:" are reserved',
  'er.gr.admin.delete' => 'Admin groups for COs and COUs may not be deleted directly',
  'er.gr.members.delete' => 'Members groups for COs and COUs may not be deleted directly',
  'er.gr.members.edit' => 'Members groups for COs and COUs may not be edited directly',
  'er.gr.members.res' => 'Groups named "members" or prefixed "members:" are reserved',
  'er.gr.reconcile'    => 'Members group reconciliation failed: ',
  'er.grm.already' => 'CO Person %1$s is already a member of group %2$s',
  'er.grm.history' =>  'Error creating history record when automatically adding CO Person ID %1$s to group %2$s',
  'er.grm.history.members' => 'Error creating history record when automatically adding CO Person ID %1$s to members group',
  'er.grm.nf' =>      'Group Member %1$s Not Found',
  'er.grm.none' =>    'No group memberships to add',
  'er.history' =>     'Error creating history record (person=%1$s, role=%2$s, group=%3$s): %4$s',
  'er.ia' =>          'Identifier assignment failed: ',
  'er.ia.already' =>  'Identifier already assigned',
  'er.ia.exists' =>   'The identifier "%1$s" is already in use',
  'er.ia.failed' =>   'Failed to find a unique identifier to assign',
  'er.ia.none' =>     'No identifier assignments configured',
  'er.id.unk' =>      'Unknown Identifier',
  'er.id.unk-a' =>    'Unknown Identifier "%1$s"',
  'er.inv.exp' =>     'Invitation Expired',
  'er.inv.exp.use' => 'Processing of invitation failed due to invitation expiration',
  'er.inv.nf' =>      'Invitation Not Found',
  'er.loc.exists' =>  'A localization already exists for the key "%1$s" and language "%2$s"',
  'er.nd.already'  => 'NSF Demographic data already exists for this person',
  'er.nm.official.et' => 'The Name type "official" cannot be deleted or renamed',
  'er.nm.primary' =>  '"%1$s" is the primary name and cannot be deleted',
  'er.nt.ack' =>      'Notification is not pending acknowledgment and cannot be acknowledged',
  'er.nt.cxl' =>      'Notification is not pending and cannot be canceled',
  'er.nt.email' =>    'Notification could not be sent because no email address was found',
  'er.nt.res' =>      'Notification is not pending resolution and cannot be resolved',
  'er.nt.send' =>     'Notification to %1$s failed (%2$s)',
  'er.notfound' =>    '%1$s "%2$s" Not Found',
  'er.notimpl' =>     'Not Implemented',
  'er.notprov' =>     'Not Provided',
  'er.notprov.id' =>  '%1$s ID Not Provided',
  'er.orgp.nomail' => '%1$s (Org Identity %2$s) has no known email address.<br />Add an email address and then try again.',
  'er.orgp.pool' =>   'Failed to pool organizational identities',
  'er.orgp.unk-a' =>  'Unknown Org Identity "%1$s"',
  'er.orgp.unpool' => 'Failed to unpool organizational identities',
  'er.permission' =>  'Permission Denied',
  'er.person.noex' => 'Person does not exist',
  'er.person.none' => 'No CO Person, CO Person Role, or Org Identity specified',
  'er.plugin.fail' => 'Failed to load plugin "%1$s"',
  'er.plugin.prov.none' => 'There are no suitable plugins available. No provisioning targets can be added.',
  // er.prov is a javascript string and so cannot take a parameter
  'er.prov' =>        'Provisioning failed: ',
  'er.prov.plugin' => 'Provisioning failed for %1$s: %2$s',
  'er.pt.dupe.cou' => 'The target CO Person already has a Role in the specified COU',
  'er.pt.duplicate' => 'The identifier "%1$s" is already attached to an identity enrolled in this CO. This petition has been flagged as a duplicate.',
  'er.pt.relink.org' => 'Could not automatically relink Org Identity due to another existing CO Person record',
  'er.pt.relink.role.c' => 'Could not automatically relink CO Person Role due to another existing CO Person record',
  'er.pt.relink.role.o' => 'Could not automatically relink CO Person Role due to another existing Org Identity record',
  'er.pt.resend.status' => 'Cannot resend an invitation not in Pending Confirmation status',
  'er.pt.status' =>   'Change of petition status from %1$s to %2$s is not permitted',
  'er.reorder' =>     'Reorder failed: ',
  'er.reply.unk' =>   'Unknown Reply',
  'er.setting' =>     'Invalid Setting',
  'er.setting.gr' =>  'Invalid Setting: No group specified',
  'er.sh.cache' =>    'WARNING: Cache directory %1$s NOT empty, you may need to manually clear it',
  'er.ssh.format' =>  'File does not appear to be a valid ssh public key',
  'er.ssh.private' => 'Uploaded file appears to be a private key',
  'er.ssh.rfc4716' => 'RFC4716 format public keys are not currently supported',
  'er.ssh.type' =>    'Unknown SSH key type "%1$s"',
  'er.timeout' =>     'Your session has expired. Please login again.',
  'er.token' =>       'Invalid token',
  'er.ug.blocked' =>  'Cannot automatically upgrade past version %1$s. Please upgrade to that version first.',
  'er.ug.fail' =>     'ERROR: Upgrade failed',
  'er.ug.order' =>    'Target version is before current version (cannot downgrade)',
  'er.ug.same' =>     'Current and target versions are the same',
  'er.ug.version' =>  'Unknown version "%1$s"',
  'er.unknown' =>     'Unknown value "%1$s"',
  'er.url' =>         'Please supply a valid URL. Include "http://" (or similar) for off-site links.',
  'er.validation' =>  'Validation failed',
  
  'et.default' =>     'There are no Extended Types currently defined for this attribute. The default types are currently in use. When you create a new Extended Type, the default types will automatically be added to this list.',

  // Fields. Field names should match data model names to facilitate various auto-rendering.
  'fd.action' =>      'Action',
  'fd.actions' =>     'Actions',
  'fd.actor' =>       'Actor',
  'fd.actor.self' =>  'Self Signup',
  'fd.address' =>     'Address',
  // The next set must be named fd.model.validation-field
  'fd.address.country' => 'Country',
  'fd.address.language' => 'Language',
  'fd.address.locality' => 'City',
  'fd.address.street' => 'Street',
  'fd.address.postal_code' => 'ZIP/Postal Code',
  'fd.address.room' => 'Room',
  'fd.address.state' => 'State',
  'fd.address.fields.req' => 'An address must consist of at least these fields:',
  'fd.admin' =>       'Administrator',
  'fd.affiliation' => 'Affiliation',
  'fd.affiliation.ep' => 'eduPersonAffiliation',
  'fd.affiliation.ep.map.desc' => 'Map the extended affiliation to this eduPersonAffiliation, see <a href="https://spaces.internet2.edu/display/COmanage/Extending+the+Registry+Data+Model#ExtendingtheRegistryDataModel-%7B%7BeduPersonAffiliation%7D%7DandExtendedAffiliations">eduPersonAffiliation and Extended Affiliations</a>',
  'fd.all' =>         'All',
  'fd.an.desc' =>     'Alphanumeric characters only',
  'fd.approver' =>    'Approver',
  'fd.attribute' =>   'Attribute',
  'fd.attr.env' =>    'Environment Variable Name',
  'fd.attr.ldap' =>   'LDAP Name',
  'fd.attr.saml' =>   'SAML Name',
  'fd.attrs.cop' =>   'Person Attributes',
  'fd.attrs.copr' =>  'Role Attributes',
  'fd.attrs.org' =>   'Organizational Attributes',
  'fd.attrs.pet' =>   'Petition Attributes',
  'fd.changelog' =>   'Change Log',
  'fd.closed' =>      'Closed',
  // The next set must be named fd.model.validation-field
  'fd.co_group.description' => 'Description',
  'fd.comment' =>     'Comment',
  'fd.conditions' =>  'Conditions',
  'fd.copy-a' =>      'Copy of %1$s',
  'fd.cou' =>         'COU',
  'fd.cou.nopar'  =>  'No COUs are available to be assigned parent',  
  'fd.co_people.status' => 'CO Person Status',
  'fd.created' =>     'Created',
  'fd.created.tz' =>  'Created (%1$s)',
  'fd.deleted' =>     'Deleted',
  // Demographics fields
  'fd.de.persid'  =>  'Person ID',
  'fd.de.gender'  =>  'Gender',
  'fd.de.citizen' =>  'Citizenship',
  'fd.de.ethnic'  =>  'Ethnicity',
  'fd.de.race'    =>  'Race',
  'fd.de.disab'   =>  'Disability',
  'fd.de.enable'  =>  'Enable NSF Demographics',
  'fd.default'    =>  'Default',
  'fd.desc' =>        'Description',
  'fd.directory' =>   'Directory',
  'fd.domain' =>      'Domain',
  // Enrollment configuration fields
  'fd.ea.attr.copy2cop' => 'Copy this attribute to the CO Person record',
  'fd.ea.ignauth' =>  'Ignore Authoritative Values',
  'fd.ea.ignauth.desc' => 'Ignore authoritative values for this attribute, such as those provided via environment variables, SAML, or LDAP',
  'fd.ea.desc'    =>  'Description',
  'fd.ea.desc.desc' => 'Descriptive text to be displayed when prompting for this attribute (like this text you\'re reading now)',
  'fd.ea.label'   =>  'Label',
  'fd.ea.label.desc' => 'The label to be displayed when prompting for this attribute as part of the enrollment process',
  'fd.ea.order'   =>  'Order',
  'fd.ea.order.desc' => 'The order in which this attribute will be presented (leave blank to append at the end of the current attributes)',
  'fd.ed.date.fixed'  => 'On',
  'fd.ed.date.next'   => 'On the next',
  'fd.ed.date.next-note' => '(year is ignored)',
  'fd.ed.date.offset' => 'days from the Petition creation',
  'fd.ed.default' =>  'Default Value',
  'fd.ed.modify'  =>  'Modifiable',
  'fd.ed.modify.desc' => 'If false, the Petitioner cannot change the default value placed into the Petition',
  'fd.ef.aea' =>      'Require Authentication For Administrator Enrollment',
  'fd.ef.aea.desc' => 'If administrator enrollment is enabled, require enrollees to authenticate to the platform in order to complete their enrollment',
  'fd.ef.aee' =>      'Require Email Confirmation For Administrator Enrollment',
  'fd.ef.aee.desc' => 'If administrator enrollment is enabled, require enrollees to confirm their email address in order to complete their enrollment',
  'fd.ef.abody' =>    'Approval Email Body',
  'fd.ef.abody.desc' => 'Body for email message sent after Petition is approved. Max 4000 characters.',
  'fd.ef.asub' =>     'Subject For Approval Email',
  'fd.ef.asub.desc' => 'Subject line for email message sent after Petition is approved.',
  'fd.ef.appr' =>     'Require Approval For Enrollment',
  'fd.ef.appr.desc' => 'If administrator approval is required, a Petition must be approved before the Enrollee becomes active.',
  'fd.ef.appr.gr' =>  'Members of this Group are authorized approvers (or else CO/COU admins by default)',
  'fd.ef.authn' =>    'Require Enrollee Authentication',
  'fd.ef.authn.desc' => 'Require enrollee to authenticate in order to complete their enrollment',
  'fd.ef.authz' =>    'Petitioner Enrollment Authorization',
  'fd.ef.authz.desc' => 'Authorization required to execute this enrollment flow, see <a href="https://spaces.internet2.edu/display/COmanage/Registry+Enrollment+Flow+Configuration#RegistryEnrollmentFlowConfiguration-EnrollmentAuthorization">Enrollment Authorization</a> for details',
  'fd.ef.ce' =>       'Require Confirmation of Email',
  'fd.ef.ce.desc' =>  'Confirm email addresses provided by sending a confirmation URL to the address',
  'fd.ef.coef' =>     'Enable Organizational Attributes Via CO Enrollment Flow',
  'fd.ef.coef.desc' => 'If enabled, allow organizational identity attributes to be collected via forms during CO enrollment flows (these attributes will be less authoritative than those obtained via LDAP or SAML, however those options are not currently supported)',
  'fd.ef.concl' =>    'Conclusion',
  'fd.ef.concl.desc' => 'Optional text to display at the bottom of a Petition form, before the Submit button',
  'fd.ef.dupe'     => 'Duplicate Enrollment Mode',
  'fd.ef.dupe.desc' => 'How to handle automatically detected duplicate enrollments',
  'fd.ef.eds.help' => 'EDS Help URL',
  'fd.ef.eds.help.desc' => 'Help URL presented by the <a href="https://spaces.internet2.edu/x/QIhRBQ">Embedded Discovery Service</a> (EDS)',
  'fd.ef.eds.hide' => 'IdPs to hide from the EDS',
  'fd.ef.eds.hide.desc' => 'List of entity IDs representing IdPs that should not be offered via the EDS, one per line',
  'fd.ef.eds.prefer' => 'IdPs to prefer for the EDS',
  'fd.ef.eds.prefer.desc' => 'List of entity Ids to always show ("prefer") via the EDS, one per line, maximum of 3',
  'fd.ef.efn'      => 'From Address For Notifications',
  'fd.ef.efn.desc' => 'Email address notifications will come from',
  'fd.ef.env'      => 'Enable Environment Attribute Retrieval',
  'fd.ef.env.desc' => 'Examine the server environment for authoritative organizational identity attributes',
  'fd.ef.epx' =>      'Early Provisioning Executable',
  'fd.ef.epx.desc' => '(Need for this TBD)',
  'fd.ef.ignauth' =>  'Ignore Authoritative Values',
  'fd.ef.ignauth.desc' => 'Ignore authoritative values for all attributes for this enrollment flow, such as those provided via environment variables, SAML, or LDAP',
  'fd.ef.intro' =>    'Introduction',
  'fd.ef.intro.desc' => 'Optional text to display at the top of a Petition form',
  'fd.ef.invval' =>   'Invitation Validity (Minutes)',
  'fd.ef.invval.desc' => 'When confirming an email address (done via an "invitation"), the length of time (in minutes) the confirmation link is valid for (default is 1 day = 1440 minutes)',
  'fd.ef.ldap' =>     'Enable LDAP Attribute Retrieval',
  'fd.ef.ldap.desc' => 'If the enrollee is affiliated with an organization with a known LDAP server, query the LDAP server for authoritative attributes',
  'fd.ef.match' =>    'Identity Matching',
  'fd.ef.match.desc' => 'Identity Matching policy for this enrollment flow, see <a href="https://spaces.internet2.edu/display/COmanage/Registry+Enrollment+Flow+Configuration#RegistryEnrollmentFlowConfiguration-IdentityMatching">Identity Matching</a> for details',
  'fd.ef.noa' =>      'Notify On Active Status',
  'fd.ef.noa.desc' => 'Email address to notify upon status being set to active',
  'fd.ef.noap' =>     'Notify On Approved Status',
  'fd.ef.noap.desc' => 'Notify enrollee when Petition is approved',
  'fd.ef.noep' =>     'Notify On Early Provisioning',
  'fd.ef.noep.desc' => 'Email address to notify upon execution of early provisioning',
  'fd.ef.nogr' =>     'Notification Group',
  'fd.ef.nogr.desc' => 'Group to notify on new petitions and changes of petition status. (This is an informational notification. Separate notifications will be sent to approvers and enrollees, as appropriate.)',
  'fd.ef.nop' =>      'Notify On Provisioning',
  'fd.ef.nop.desc' => 'Email address to notify upon execution of provisioning',
  'fd.ef.pool' =>     'Pool Organizational Identities',
  'fd.ef.pool.desc' => 'If <a href="https://spaces.internet2.edu/display/COmanage/Organizational+Identity+Pooling">pooling is enabled</a>, organizational identities -- as well as any attributes released by IdPs -- will be made available to all COs, regardless of which CO enrollment flows added them (This setting can no longer be changed)',
  'fd.ef.pool.on.warn' => 'Enabling pooling will delete any existing links between organizational identities and the COs which created them (when you click Save). This operation cannot be undone.',
  'fd.ef.pool.off.warn' => 'Disabling pooling will duplicate any organizational identities used by more than one CO (when you click Save). This operation cannot be undone.',
  'fd.ef.px' =>       'Provisioning Executable',
  'fd.ef.px.desc' =>  'Executable to call to initiate user provisioning',
  'fd.ef.rd.confirm' => 'Confirmation Redirect URL',
  'fd.ef.rd.confirm.desc' => 'URL to redirect to after the email address associated with the Petition is confirmed. Leave blank for account linking enrollment.',
  'fd.ef.rd.submit' => 'Submission Redirect URL',
  'fd.ef.rd.submit.desc' => 'URL to redirect to after Petition is submitted by someone who is not already in the CO.',
  'fd.ef.saml' =>     'Enable SAML Attribute Extraction',
  'fd.ef.saml.desc' => 'If the enrollee is authenticated via a SAML IdP with attributes released, examine the SAML assertion for authoritative attributes',
  'fd.ef.sea' =>      'Require Authentication For Self Enrollment',
  'fd.ef.sea.desc' => 'If self enrollment is enabled, require enrollees who are self-enrolling to authenticate to the platform',
  'fd.ef.tandc' =>    'Terms and Conditions Mode',
  'fd.ef.tandc.desc' => 'How to handle Terms and Conditions at enrollment, if any are defined. See <a href="https://spaces.internet2.edu/display/COmanage/Registry+Terms+and+Conditions">Terms and Conditions</a>',
  'fd.ef.vbody' =>    'Verification Email Body',
  'fd.ef.vbody.desc' => 'Body for email message sent as part of verification step. Max 4000 characters.',
  'fd.ef.vsub' =>     'Subject For Verification Email',
  'fd.ef.vsub.desc' => 'Subject line for email message sent as part of verification step.',
  // (End enrollment configuration fields)
  // Enrollment Flow Template Names
  'fd.ef.tmpl.arl' => 'Additional Role (Template)',
  'fd.ef.tmpl.csp' => 'Conscription With Approval (Template)',
  'fd.ef.tmpl.inv' => 'Invitation (Template)',
  'fd.ef.tmpl.lnk' => 'Account Linking (Template)',
  'fd.ef.tmpl.ssu' => 'Self Signup With Approval (Template)',
  // This must be named fd.model.validation-field
  'fd.email_address.mail' => 'Email',
  'fd.email_address.verified' => 'Verified',
  'fd.email_address.unverified' => 'Unverified',
  'fd.email_address.verified.warn' => 'Editing a verified email address will make it unverified',
  'fd.enrollee' =>    'Enrollee',
  'fd.enrollee.new' => 'New Enrollee',
  'fd.et.forattr' =>  'For Attribute',
  'fd.ev.for' =>      'Verification for %1$s',
  'fd.ev.verify' =>   'Verify email address %1$s',
  'fd.ev.verify.desc' => 'Please confirm %1$s is your email address by clicking the <b>Confirm</b> button, below.',
  'fd.false' =>       'False',
  'fd.group.desc.adm' => '%1$s Administrators',
  'fd.group.desc.mem' => '%1$s Members',
  'fd.group.grmem' => 'Group Member',
  'fd.group.grmemown' => 'Group Member and Owner',
  'fd.group.mem' =>   'Member',
  'fd.group.memin' => 'membership in "%1$s"',
  'fd.group.own' =>   'Owner',
  'fd.group.own.only' => 'Owner (only)',
  'fd.groups' =>      'Groups',
  'fd.hidden' =>      'Hidden',
  'fd.hidden.desc' => 'If true, this field will not be rendered during enrollment',
  'fd.history.pt' =>  'Petition History',
  // Identifier Assignment
  'fd.ia.algorithm' => 'Algorithm',
  'fd.ia.algorithm.desc' => 'The algorithm to use when generating identifiers',
  'fd.ia.exclusions' => 'Exclusions',
  'fd.ia.exclusions.desc' => '(Not yet implemented)',
  'fd.ia.format' =>   'Format',
  'fd.ia.format.desc' => 'See <a href="https://spaces.internet2.edu/display/COmanage/Configuring+Registry+Identifier+Assignment">Configuring Registry Identifier Assignment</a> for details',
  'fd.ia.format.prefab' => 'Select a Common Pattern',
  'fd.ia.format.p0' => 'Default (#)',
  'fd.ia.format.p1' => 'given.family(.#)@myvo.org',
  'fd.ia.format.p2' => 'given(.m).family(.#)@myvo.org',
  'fd.ia.format.p3' => 'gmf#@myvo.org',
  'fd.ia.maximum' =>  'Maximum',
  'fd.ia.maximum.desc' => 'The maximum value for randomly generated identifiers',
  'fd.ia.minimum' =>  'Minimum',
  'fd.ia.minimum.desc' => 'The minimum value for randomly generated identifiers, or the starting value for sequences',
  'fd.ia.permitted' => 'Permitted Characters',
  'fd.ia.permitted.desc' => 'When substituting parameters in a format, only permit these characters to be used',
  'fd.ia.type.email' => 'Email Type',
  'fd.ia.type.email.desc' => 'For Identifier Assignments applied to Type <i>Mail</i>, an Email Address (instead of an Identifier) will be created with this type (if not blank)',
  // The next set must be named fd.model.validation-field
  'fd.identifier.identifier' => 'Identifier',
  'fd.identifier.login' => 'Login',
  'fd.identifier.login.desc' =>  'Allow this identifier to login to Registry',
  'fd.identifier.ids.login' => 'Login Identifiers',
  'fd.ids' =>         'Identifiers',
  'fd.index' =>       'Index',
  'fd.inv.exp' =>     'Invitation Expiration',
  'fd.inv.for' =>     'Invitation for %1$s',
  'fd.inv.to' =>      'Invitation to %1$s',
  'fd.key' =>         'Key',
  'fd.language' =>    'Language',
  'fd.lan.desc' =>    'Lowercase alphanumeric characters only',
  'fd.link.location' => 'Link Location',  
  'fd.link.order' =>  'Link Order',
  'fd.link.title' =>  'Link Title',
  'fd.link.url' =>    'Link URL',
  'fd.members' =>     'Members',
  'fd.model' =>       'Model',
  'fd.modified' =>    'Modified',
  'fd.modified.tz' => 'Modified (%1$s)',
  'fd.name' =>        'Name',
  'fd.name.affil'  => 'Name and Affiliation',
  'fd.name.d' =>      'Display Name',
  'fd.name.h.desc' => '(Dr, Hon, etc)',
  'fd.name.s.desc' => '(Jr, III, etc)',
  // The next set must be named fd.model.validation-field
  'fd.name.honorific' => 'Honorific',
  'fd.name.given'  => 'Given Name',
  'fd.name.middle' => 'Middle Name',
  'fd.name.family' => 'Family Name',
  'fd.name.suffix' => 'Suffix',
  'fd.name.language' => 'Language',
  'fd.name.primary_name' => 'Primary',
  'fd.name.fields.req' => 'A name must consist of at least these fields:',
  'fd.no' =>           'No',
  'fd.none' =>         'None',
  'fd.not.email.body' => 'Notification Email Body',
  'fd.not.email.subject' => 'Notification Email Subject',
  'fd.not.res.body' => 'Resolution Email Body',
  'fd.not.res.subject' => 'Resolution Email Subject',
  'fd.not.for' =>     'Notifications for %1$s (%2$s, %3$s)',
  'fd.not.last' =>    'Last Notification',
  'fd.nr.enable' =>   'Enable Normalizations',
  'fd.null' =>        'Null',
  'fd.o' =>           'Organization',
  'fd.open' =>        'Open',
  'fd.order' =>       'Order',
  'fd.order.prov.desc' => 'The order in which this provisioner will be run when automatic provisioning occurs (leave blank to run after all current provisioners)',
  'fd.organization_id' => 'Organization ID',
  'fd.ou' =>          'Department',
  'fd.parent' =>      'Parent COU',
  'fd.password' =>    'Password',
  'fd.people' =>      '%1$s People',
  'fd.perm' =>        'Permission',
  'fd.perms' =>       'Permissions',
  'fd.permitted.name' => 'Name Permitted Fields',
  'fd.petitioner' =>  'Petitioner',
  'fd.plugin' =>      'Plugin',
  'fd.plugin.ptwarn' => 'Once a Provisioning Target has been created, the Plugin cannot be changed',
  'fd.prov.status' => 'Provisioning Status',
  'fd.prov.status.for' => 'Provisioning Status for %1$s',
  'fd.pt.archived' => 'The definition of this attribute changed after the creation of this petition',
  'fd.pt.deleted' =>  'This attribute was deleted after the creation of this petition',
  'fd.pt.textfield' => 'Text Field (Petition Use Only)',
  'fd.pt.required' => '&dagger; denotes required fields if you populate this section',
  'fd.recipient' =>   'Recipient',
  'fd.req' =>         '* denotes required field',
  'fd.required' =>    'Required',
  'fd.required.addr' => 'Address Required Fields',
  'fd.required.name' => 'Name Required Fields',
  'fd.resolved' =>    'Resolved',
  'fd.resolved.tz' => 'Resolved (%1$s)',
  'fd.resolver' =>    'Resolver',
  'fd.revision' =>    'Revision',
  'fd.roles' =>       'Roles',
  'fd.room' =>        'Room',
  'fd.searchbase' =>  'Search Base',
  'fd.sshkey.comment' => 'Comment',
  'fd.sshkey.skey' => 'Key',
  'fd.sshkey.type' => 'Key Type',
  'fd.sort.by' =>     'Sort By',
  'fd.source' =>      'Source',
  'fd.sponsor' =>     'Sponsor',
  'fd.sponsor.desc' =>'(for continued membership)',
  'fd.sponsor.inel' => 'The current sponsor is no longer eligible to act as a sponsor',
  'fd.sponsor.mode' => 'Sponsor Eligibility Mode',
  'fd.sponsor.mode.desc' => 'Which CO People are eligible to sponsor CO Person Roles',
  'fd.ssp.default' => 'If permission is not explicitly granted here for a supported model, then self service updates are not permitted for that model. The permission will be Read Only. Default Read Write permission is required to add new values.',
  'fd.ssp.type.desc' => '"Default" applies this permission to all types not otherwise specified',
  'fd.status' =>      'Status',
  'fd.status.change' => 'Manually changing the status of a CO Person when there is a Petition in progress will not change the status of the Petiton',
  'fd.status.et.desc' => 'An Extended Type that is in use cannot be made inactive',
  'fd.subject' =>     'Subject',
  'fd.tc.agree.desc' => 'You must agree to the following Terms and Conditions before continuing.<br />You must review the T&C before you can click <i>I Agree</i>, and you must agree before you can submit.',
  'fd.tc.agree.impl' => 'By clicking <i>Submit</i>, you are agreeing to the following Terms and Conditions.<br />Please review the T&C before continuing.',
  'fd.tc.agree.login' => 'You must agree to all of the following Terms and Conditions before continuing.',
  'fd.tc.agree.no' => 'Not Agreed',
  'fd.tc.agree.yes' => 'Agreed',
  'fd.tc.cou.desc' => 'If set, this T&C only applies to members of the specified COU',
  'fd.tc.for' =>      'Terms and Conditions for %1$s (%2$s)',
  'fd.tc.mode.login' => 'Terms and Conditions Mode',
  'fd.tc.mode.login.desc' => 'How to handle Terms and Conditions at login, if any are defined. See <a href="https://spaces.internet2.edu/display/COmanage/Registry+Terms+and+Conditions">Terms and Conditions</a>',
  'fd.tc.none' =>     'There are no applicable Terms and Conditions',
  'fd.tc.url.desc' => 'The URL to the Terms and Conditions, which will be displayed in a popup',
  // These must be named fd.model.validation-field
  'fd.telephone_number.country_code' => 'Country Code',
  'fd.telephone_number.area_code' => 'Area Code',
  'fd.telephone_number.number' => 'Number',
  'fd.telephone_number.extension' => 'Extension',
  // This one is for rendering into a telephone number string (eg: 555 1212 x279)
  'fd.telephone.ext' => 'x',
  'fd.text' =>        'Text',
  'fd.text.original' => 'Original Translation',
  'fd.timestamp' =>   'Timestamp',
  'fd.timestamp.tz' => 'Timestamp (%1$s)',
  'fd.title' =>       'Title',
  'fd.title.none' =>  'No Title',
  'fd.toggle.all' =>  'Toggle All',
  'fd.true' =>        'True',
  'fd.type' =>        'Type',
  'fd.type.warn' =>   'After an extended attribute is created, its type may not be changed',
  'fd.timezone' =>    'Timezone',
  'fd.timezone.change' => 'A change to your preferred timezone will take effect after your next login',
  'fd.unresolved' =>  'Unresolved',
  'fd.untitled' =>    'Untitled',
  'fd.url' =>         'URL',
  'fd.username.api' => 'API User Name',
  'fd.valid_from' =>  'Valid From',
  'fd.valid_from.desc' => '(leave blank for immediate validity)',
  'fd.valid_through' => 'Valid Through',
  'fd.valid_through.desc' => '(leave blank for indefinite validity)',
  'fd.xp.actions' =>  'All of the following <b>actions</b> will be taken when the specified conditions match:',
  'fd.xp.conditions' => 'All of the following <b>conditions</b> must be met for this Expiration Policy to take effect:',
  'fd.xp.affil.act.desc' => 'CO Person Roles matching this Expiration Policy will be given this affiliation',
  'fd.xp.affil.cond.desc' => 'This Expiration Policy will only apply to CO Person Roles with this affiliation',
  'fd.xp.after_expiry.cond' => 'Days After Expiration (Grace Period)',
  'fd.xp.after_expiry.cond.desc' => 'This Expiration Policy will apply beginning the specified number of days after the expiration time of a CO Person Role (If set, Days Before Expiration may not be set)',
  'fd.xp.before_expiry.cond' => 'Days Before Expiration (Notification Period)',
  'fd.xp.before_expiry.cond.desc' => 'This Expiration Policy will apply beginning the specified number of days prior to the expiration time of a CO Person Role (If set, Days After Expiration may not be set)',
  'fd.xp.clear_expiry.act' => 'Clear Expiration',
  'fd.xp.clear_expiry.act.desc' => 'The expiration date for the affected CO Person Role will be cleared when this Expiration Policy is applied',
  'fd.xp.cou.act.desc' => 'CO Person Roles matching this Expiration Policy will be moved to this COU',
  'fd.xp.cou.cond.desc' => 'This Expiration Policy will only apply to CO Person Roles in this COU',
  'fd.xp.disable' => 'Disable Expiration',
  'fd.xp.disable.desc' => 'Disable automatic (scheduled) expirations<br />This setting does not impact manual expirations',
  'fd.xp.notify_coadmin.act' => 'Notify CO Administrator(s)',
  'fd.xp.notify_coadmin.act.desc' => 'The CO Administrator(s) will be notified when this Expiration Policy is applied',
  'fd.xp.notify_cogroup.act' => 'Notify CO Group',
  'fd.xp.notify_cogroup.act.desc' => 'Members of the specified CO Group will be notified when this Expiration Policy is applied',
  'fd.xp.notify_couadmin.act' => 'Notify COU Administrator(s)',
  'fd.xp.notify_couadmin.act.desc' => 'The COU Administrator(s) for the affected CO Person Role will be notified when this Expiration Policy is applied',
  'fd.xp.notify_coperson.act' => 'Notify CO Person',
  'fd.xp.notify_coperson.act.desc' => 'The CO Person whose Role is affected will be notified when this Expiration Policy is applied',
  'fd.xp.nbody' =>    'Notification Email Body',
  'fd.xp.nbody.desc' => 'Body for email message sent for notification (max 4000 characters)',
  'fd.xp.nsubject' => 'Notification Email Subject',
  'fd.xp.nsubject.desc' => 'Subject for email message sent for notification',
  'fd.xp.sponsor.cond' => 'Invalid Sponsor',
  'fd.xp.sponsor.cond.desc' => 'This Expiration Policy will apply when the Sponsor for a CO Person Role is no longer valid (active)',
  'fd.xp.status.act.desc' => 'CO Person Roles matching this Expiration Policy will be given this status',
  'fd.xp.status.cond.desc' => 'This Expiration Policy will only apply to CO Person Roles with this status',
  'fd.yes' =>         'Yes',

  // Informational messages
  'in.groupmember.select' => 'This change will not take effect until the person becomes active.',
  'in.orgidentities'   => 'Organizational Identities represent a person\'s identity as asserted by a "home" institution, such as their University or a social identity provider.  Reading the documentation before editing them is advised.',
  'in.orgid.co'        => 'An Organizational Identity already attached to a CO Person within the CO cannot be re-invited or linked.',
  'in.orgid.email'     => 'An Organizational Identity must have an email address defined in order to be invited.',
  'in.pagination.format' =>  'Page {:page} of {:pages}, Viewing {:start}-{:end} of {:count}',

  // Menu
  'me.account'         => 'My Account',
  'me.changepassword'  => 'Change Password',
  'me.collaborations'  => 'Collaborations',
  'me.configuration'   => 'Configuration',
  'me.identity.for'    => 'My %1$s Identity',
  'me.label'           => 'Manage:',
  'me.people'          => 'People',
  'me.platform'        => 'Platform',
  'me.population'      => 'My Population',
  'me.population.cou'  => 'My %1$s Population',
  'me.tandc'           => 'Terms and Conditions',

  // Breadcrumbs
  'bc.home'            => 'Home',

  // Alphabet menu (for co_people filter by first letter of family name)
  // Can be changed to a static array of internationalized characters, for example:
  //'me.alpha' => array('a','ä','b','c'),
  'me.alpha' => range('a','z'),

  // JavaScript dialog box strings
  // Can include token replacements in the form of {0}, {1}, {2}, etc.
  // Pass a replacements array as the last parameter to js_confirm_generic() in default.ctp
  // NOTE: these strings should escape all quotes using &quot; (or \x22) and &apos; (or \x27)
  'js.remove'         =>  'Are you sure you wish to remove \x22{0}\x22?  This action cannot be undone.',
  'js.remove.member'  =>  'Are you sure you wish to remove this member from group \x22{0}\x22?  This action cannot be undone.',
  'js.reinvite'       =>  'Are you sure you wish to resend an invitation to {0}?  Any previous invitation will be invalidated.',
  'js.confirm.verify' =>  'Are you sure you wish to send a verification request to {0}? Any previous request will be invalidated.',

  // Operations
  'op.accept' =>      'Accept',
  'op.ack' =>         'Acknowledge',
  'op.add' =>         'Add',
  'op.add-a' =>       'Add %1$s',
  'op.add.new' =>     'Add a New %1$s',
  'op.approve' =>     'Approve',
  'op.back' =>        'Back',
  'op.begin' =>       'Begin',
  'op.cancel' =>      'Cancel',
  'op.clear.all' =>   'Clear',
  'op.compare' =>     'Compare',
  'op.config' =>      'Configure',
  'op.confirm' =>     'Confirm',
  'op.cont' =>        'Continue',
  'op.confirm.box' => 'Check the box to confirm',
  'op.db.ok' =>       'Database schema update successful',
  'op.db.schema' =>   'Loading schema from file %1$s...',
  'op.decline' =>     'Decline',
  'op.delete' =>      'Delete',
  'op.delete.consfdemographics' => 'this NSF demographic entry',
  'op.delete.ok' =>   'Are you sure you wish to remove "%1$s"? This action cannot be undone.',
  'op.deny' =>        'Deny',
  'op.done' =>        'Done',
  'op.dupe' =>        'Duplicate',
  'op.edit' =>        'Edit',
  'op.edit.ea' =>     'Edit Enrollment Attributes',
  'op.edit-a' =>      'Edit %1$s',
  'op.edit-f' =>      'Edit %1$s for %2$s',
  'op.enroll' =>      'Enroll',
  'op.expunge' =>     'Expunge',
  'op.expunge-a' =>   'Expunge %1$s',
  'op.expunge.confirm' => 'Are you sure you wish to expunge %1$s? This operation cannot be undone.',
  'op.expunge.info' => 'Expunging will permanently delete',
  'op.expunge.info.cop' => 'The complete CO Person record for <a href="%2$s">%1$s</a>, including <a href="%3$s">history</a>',
  'op.expunge.info.copr' => '%1$s role record: <a href="%3$s">%2$s</a>',
  'op.expunge.info.hist' => '<a href="%2$s">%1$s history record(s)</a> will be updated to have no Actor',
  'op.expunge.info.not.act' => '<a href="%2$s">%1$s notification(s)</a> will be updated to have no Actor',
  'op.expunge.info.not.rec' => '<a href="%2$s">%1$s notification(s)</a> will be updated to have no Recipient',
  'op.expunge.info.not.res' => '<a href="%2$s">%1$s notification(s)</a> will be updated to have no Resolver',
  'op.expunge.info.org' => 'Org Identity: <a href="%2$s">%1$s</a>',
  'op.expunge.info.org.no' => 'The Org Identity <a href="%2$s">%1$s</a> will <b>not</b> be deleted because it is associated with at least one other CO Person record',
  'op.filter' => 'Filter',
  'op.filter.status' => 'Filter By Status:',
  'op.filter.status.by' => 'Filter By Status',
  'op.find.inv' =>    'Find a Person to Invite to %1$s',
  'op.find.link' =>   'Find an Organizational Identity to Link to %1$s',
  'op.gr.memadd' =>   'Manage %1$s Group Memberships',
  'op.gr.reconcile' => 'Reconcile',      
  'op.gr.reconcile.all' => 'Reconcile All Members Groups',      
  'op.gr.reconcile.all.confirm' => 'Are you sure you wish to reconcile all members groups?',
  'op.gr.reconcile.wait' => 'Reconciling members groups, please wait...',
  'op.grm.edit' =>    'Edit Members of %1$s Group %2$s',
  'op.grm.manage' =>  'Manage My Group Memberships',
  'op.grm.my.groups' => 'My Groups',
  'op.grm.title' =>   '%1$s %2$s Membership For %3$s',
  'op.history' =>     'View History',
  'op.home.login' =>  'Welcome to %1$s. Please login.',
  'op.home.select' => 'Welcome to %1$s. Please select a collaboration.',
  'op.home.collabs' => 'Available Collaborations',
  'op.home.no.collabs' => 'No collaborations are currently available.',
  'op.dashboard.select' => 'Welcome to %1$s. Please select an action from the menus, above.',
  'op.id.auto' =>     'Autogenerate Identifiers',
  'op.id.auto.all' => 'Autogenerate Identifiers For All',
  'op.id.auto.all.confirm' => 'Are you sure you wish to autogenerate identifiers for all active CO People?',
  'op.id.auto.confirm' => 'Are you sure you wish to autogenerate identifiers?',
  'op.id.auto.wait' => 'Generating identifiers, please wait...',
  'op.inv' =>         'Invite',
  'op.inv-a' =>       'Invite %1$s',
  'op.inv-t' =>       'Invite %1$s to %2$s',
  'op.inv.reply' =>   'Reply to Invitation',
  'op.inv.resend' =>  'Resend Invite',
  'op.inv.resend.confirm' => 'Are you sure you wish to resend an invitation to %1$s? Any previous invitation will be invalidated.',
  'op.inv.send' =>    'Send Invite',
  'op.manage.grm' =>  'Manage Group Memberships',
  'op.menu' =>        'Menu',
  'op.link' =>        'Link',
  'op.link.confirm' => 'Are you sure you wish to proceed?',
  'op.link.info' =>   'Linking will attach the Organizational Identity %1$s to the CO Person record for %2$s.',
  'op.link.petition' => 'There is a petition %1$s (%2$s) attached to the Organizational Identity. You may wish to approve or deny this petition before linking.',
  'op.link.select' => 'Please select the CO Person you would like to attach the Organizational Identity "%1$s" (%2$s) to by clicking the associated link button.',
  'op.link.to.co' =>  'Link to %1$s CO Person',
  'op.login' =>       'Login',
  'op.logout' =>      'Logout',
  'op.next' =>        'Next',
  'op.ok' =>          'OK',
  'op.order.attr' =>  'Reorder Attributes',
  'op.order.link' =>  'Reorder Links',
  'op.petition' =>    'Petition',
  'op.petition.comment' => 'Add Comment',
  'op.petition.create' => 'Create Petition',
  'op.petition.dupe' => 'Flag Petition as Duplicate',
  'op.petition.dupe.confirm' => 'Are you sure you wish to flag this petition as a duplicate?',
  'op.petition.nextstep' => 'Initiating %1$s step, please wait...',
  'op.previous' =>    'Previous',
  'op.primary' =>     'Make Primary',
  'op.processing' =>  'Processing request, please wait...',
  'op.proceed.ok' =>  'Are you sure you wish to proceed?',
  'op.prov' =>        'Provision',
  'op.prov.all' =>    'Reprovision All',
  'op.prov.all.confirm' => 'Are you sure you wish to (re)provision all records? This will affect %1$s CO People and %2$s CO Groups.',
  'op.prov.confirm' => 'Are you sure you wish to (re)provision this record?',
  'op.prov.view' =>   'Provisioned Services',
  'op.prov.wait' =>   'Requesting provisioning, please wait...',
  'op.relink' =>      'Relink',
  'op.relink.confirm' => 'Relinking will remove the association of this Organizational Identity from the current CO Person. Are you sure you wish to proceed?',
  'op.relink.info' => 'Relinking will move the Organizational Identity %1$s from the CO Person record for %2$s to the CO Person record for %3$s.',
  'op.relink.petition' => 'There is a petition %1$s (%2$s) attached to the Organizational Identity. You may wish to approve or deny this petition before relinking.',
  'op.relink.role.confirm' => 'Relinking will remove the association of this Role from the current CO Person. Are you sure you wish to proceed?',
  'op.relink.role.info' => 'Relinking will move the Role %1$s from the CO Person record for %2$s to the CO Person record for %3$s.',
  'op.relink.role.petition' => 'There is a petition %1$s (%2$s) attached to the CO Person Role. You may wish to approve or deny this petition before relinking.',
  'op.relink.role.select' => 'Please select the CO Person you would like to move the Role "%1$s" (%2$s) to by clicking the associated relink button.',
  'op.relink.select' => 'Please select the CO Person you would like to move the Organizational Identity "%1$s" (%2$s) to by clicking the associated relink button.',
  'op.remove' =>      'Remove',
  'op.reorder' =>     'Reorder',
  'op.reorder-a' =>   'Reorder %1$s',
  'op.reset' =>       'Reset Form',
  'op.restore.ef' =>  'Add/Restore Default Templates',
  'op.restore.types' => 'Add/Restore Default Types',
  'op.save' =>        'Save',
  'op.search' =>      'Search',
  'op.see.notifications' =>  'View full notifications list...',
  'op.select' =>      'Select',
  'op.select-a' =>    'Select %1$s',
  'op.select.select' => 'Please select the CO Person you would like to attach to this Petition by clicking the associated select button.',
  'op.select.empty' => '(select...)',
  'op.submit' =>      'Submit',
  'op.tc.agree' =>    'Agree to Terms and Conditions',
  'op.tc.agree.i' =>  'I Agree',
  'op.tc.review' =>   'Review Terms and Conditions',
  'op.tc.review.pt' => 'Review All Agreed To Terms and Conditions',
  'op.unlink' =>      'Unlink',
  'op.unlink.confirm' => 'Are you sure you wish to unlink this identity?',
  'op.upload' =>      'Upload',
  'op.upload.new' =>  'Upload a New %1$s',
  'op.verify' =>      'Verify',
  'op.view' =>        'View',
  'op.view.all' =>    'View All',
  'op.view.pending' => 'View Pending',
  'op.view-a' =>      'View %1$s',
  'op.view-f' =>      'View %1$s for %2$s',
  
  // Results
  'rs.added' =>       'Added',
  'rs.added-a' =>     '"%1$s" Added',
  'rs.added-a2' =>    '%1$s "%2$s" Added',
  'rs.added-a3' =>    '%1$s Added',
  'rs.cop.recalc' =>  'CO Person status recalculated to %1$s',
  'rs.copr.mod' =>    'CO Person Role status changed from %1$s to %2$s',
  'rs.copy-a1' =>     '%1$s Copied',
  'rs.deleted-a2' =>  '%1$s "%2$s" Deleted',
  'rs.deleted-a3' =>  '%1$s Deleted',
  'rs.edited-a2' =>   '%1$s "%2$s" Edited',
  'rs.edited-a3' =>   '%1$s Edited',
  'rs.ef.defaults' => 'Default enrollment flow templates added',
  'rs.ev.cxl' =>      'Verification of Email Address canceled',
  'rs.ev.cxl-a' =>    'Verification of Email Address %1$s canceled',
  'rs.ev.sent' =>     'Email verification request sent to %1$s',
  'rs.ev.ver' =>      'Email Address verified',
  'rs.ev.ver-a' =>    'Email Address %1$s verified by %2$s',
  'rs.expunged' =>    'Record Expunged',
  'rs.gr.added' =>    'Added CO Group "%1$s"',
  'rs.gr.deleted' =>  'Deleted CO Group "%1$s"',
  'rs.gr.reconcile.ok' => 'Members Groups Reconciled',
  'rs.grm.added' =>   'Added to CO Group %1$s (%2$s) (member=%3$s, owner=%4$s)',
  'rs.grm.added-p' => 'Added to CO Group %1$s (%2$s) via Petition (member=%3$s, owner=%4$s)',
  'rs.grm.deleted' => 'Removed from CO Group %1$s (%2$s)',
  'rs.grm.edited' =>  'Edited CO Group Roles %1$s (%2$s) (from member=%3$s, owner=%4$s to member=%5$s, owner=%6$s)',
  'rs.hr.expunge' =>  'History Record %1$s actor removed as part of CO Person expunge',
  'rs.ia.ok' =>       'Identifiers Assigned',
  'rs.inv.conf' =>    'Invitation Confirmed',
  'rs.inv.conf-a' =>  'Invitation to %1$s confirmed',
  'rs.inv.dec' =>     'Invitation Declined',
  'rs.inv.dec-a' =>   'Invitation to %1$s declined',
  'rs.inv.sent' =>    'Invitation sent to %1$s',
  'rs.mail.verified' => 'Email Address "%1$s" verified',
  'rs.match.possible' => 'Possible Matches',
  'rs.moved.copr' =>  'CO Person Role "%1$s" (%2$s) moved from %3$s (%4$s) to %5$s (%6$s)',
  'rs.nm.primary' =>  'Primary name updated',
  'rs.nm.primary-a' => 'Primary name updated to "%1$s"',
  'rs.nt.ackd' =>     'Notification acknowledged',
  'rs.nt.ackd-a' =>   'Notification acknowledged: "%1$s"',
  'rs.nt.cxld' =>     'Notification canceled',
  'rs.nt.cxld-a' =>   'Notification canceled: "%1$s"',
  'rs.nt.delivered' => 'Notification delivered: "%1$s"',
  'rs.nt.delivered.email' => 'Notification delivered to %1$s: "%2$s"',
  'rs.nt.expunge' =>  'Notification %1$s %2$s removed as part of CO Person expunge',
  'rs.nt.resd-a' =>   'Notification resolved: "%1$s"',
  'rs.nt.sent' =>     'Approval notification sent to %1$s',
  'rs.prov-a' =>      'Provisioned %1$s',
  'rs.prov.ok' =>     'Provisioning completed successfully',
  'rs.pt.approve' =>  'Petition Approved',
  'rs.pt.attr.upd' => 'Petition attributes updated',
  'rs.pt.confirm' =>  'Petition Confirmed',
  'rs.pt.cop.del' =>  'Deleted duplicate CO Person',
  'rs.pt.create' =>   'Petition Created',
  'rs.pt.create.from' => 'Petition created from enrollment flow "%1$s"',
  'rs.pt.create.not' => 'Petition created for %1$s from enrollment flow "%2$s"',
  'rs.pt.create.self' => 'Petition Created. You may need to check your email for further information.', 
  'rs.pt.deny' =>     'Petition Denied',
  'rs.pt.dupe' =>     'Petition Flagged as Duplicate',
  'rs.pt.final' =>    'Petition Finalized',
  'rs.pt.id.attached' => 'Authenticated identifier "%1$s" attached to organizational identity',
  'rs.pt.id.auth' =>  'Identifier "%1$s" authenticated',
  'rs.pt.id.login' => 'Identifier "%1$s" flagged for login',
  'rs.pt.link.cop' => 'Linked existing CO Person (%1$s) to Petition',
  'rs.pt.login' =>    'Petition Created. You have been logged out, and an activation URL has been sent to your email address. Please click the link in that email to continue.',
  'rs.pt.org.del' =>  'Deleted duplicate Org Identity',
  'rs.pt.relink.org' => 'Relinked CO Person to existing Org Identity (%1$s)',
  'rs.pt.relink.role' => 'Relinked CO Person Role to existing CO Person (%1$s)',
  'rs.pt.relogin' =>  'Petition Confirmed. You have been logged out, and will need to login again for your new identity to take effect.',
  'rs.pt.status' =>   'Petition for %1$s changed status from %2$s to %3$s (%4$s)',
  'rs.pt.status.h' => 'Petition changed status from %1$s to %2$s',
  'rs.pt.tc.explicit' => 'Explicit agreement to Terms and Conditions "%1$s"',
  'rs.pt.tc.implied' => 'Implied agreement to Terms and Conditions "%1$s"',
  'rs.tc.agree' =>    'Terms and Conditions "%1$s" agreed to',
  'rs.tc.agree.behalf' => 'Terms and Conditions "%1$s" agreed to on behalf of',
  'rs.tc.agree.ok' => 'Agreement to Terms and Conditions recorded',
  'rs.types.defaults' => 'Default types added',
  'rs.saved' =>       'Saved',
  'rs.updated' =>     '"%1$s" Updated',
  'rs.updated-a2' =>  '%1$s "%2$s" Updated',
  'rs.updated-a3' =>  '%1$s Updated',
  'rs.uploaded-a2' => '%1$s "%2$s" Uploaded',
  'rs.xp.action' =>   'Expiration Policy "%1$s" (%2$s): %3$s',
  'rs.xp.match' =>    'Expiration Policy "%1$s" (%2$s) conditions matched',
  
  // Setup
  
  'se.already' =>         'Setup appears to have already run',
  'se.already.override' => 'Override with --force if you know what you are doing',
  'se.arg.admin.given' => 'Administrator\'s given name',
  'se.arg.admin.sn' =>    'Administrator\'s family name',
  'se.arg.admin.user' =>  'Administrator\'s login username',
  'se.arg.desc' =>        'Execute initial setup',
  'se.arg.force' =>       'Force setup to run even if security file already exists',
  'se.arg.pool' =>        'Enable organizational identity pooling',
  'se.cache.done' =>      'Done clearing cache',
  'se.cf.admin.given' =>  'Enter administrator\'s given name',
  'se.cf.admin.sn' =>     'Enter administrator\'s family name',
  'se.cf.admin.user' =>   'Enter administrator\'s login username',
  'se.cf.pool' =>         'Enable organizational identity pooling?',
  'se.cmp.init' =>        'Setting initial platform configuration',
  'se.db.co' =>           'Creating COmanage CO',
  'se.db.cop' =>          'Adding Org Identity to CO',
  'se.db.admingroup' =>        'Creating COmanage admin group',
  'se.db.membersgroup' =>        'Creating COmanage members group',
  'se.db.op' =>           'Adding initial Org Identity',
  'se.security.salt' =>   'Creating security salt file',
  'se.security.salt.exists' => 'Security salt file already exists',
  'se.security.seed' =>   'Creating security seed file',
  'se.security.seed.exists' => 'Security seed file already exists',
  'se.done' =>            'Setup complete',
  'se.users.view' =>      'Creating users view',
  
  // Shell
  
  'sh.cron.done' =>       'Cron shell finished',
  'sh.cron.xp' =>         'Running expirations for CO %1$s (%2$s)',
  'sh.cron.xp.disabled' => 'Expirations are disabled for this CO',
  'sh.nt.arg.action' =>   '4-character action code (eg: from ActionEnum)',
  'sh.nt.arg.actoridentifier' => 'Identifier associated with CO Person who sent notification',
  'sh.nt.arg.comment' =>  'Human readable comment (for body of notification)',
  'sh.nt.arg.coname' =>   'Name of CO (cm_cos:name)',
  'sh.nt.arg.desc' =>     'Manually generate a Notification',
  'sh.nt.arg.epilog' =>   "Identifiers are specified as <type>:<value>, eg: 'eppn:plee@university.edu', corresponding to cm_identifiers",
  'sh.nt.arg.recipientidentifier' => 'Either the name of a CO Group or the identifier of a CO Person to send the notification to',
  'sh.nt.arg.resolve' =>  'If set, resolution is required (not just acknowledgment)',
  'sh.nt.arg.source' =>   'Source of notification, either as a URL or a comma separated list of controller,action,id,arg0,val0 (arg0/val0 are optional)',
  'sh.nt.arg.subjectidentifier' => 'Identifier associated with CO Person notification is about',
  'sh.ug.arg.desc' =>     'Perform upgrade steps',
  'sh.ug.arg.version' =>  'Version to upgrade to (default: current RELEASE)',
  'sh.ug.current' =>      'Current version: %1$s',
  'sh.ug.post' =>         'Executing post-database step (%1$s)',
  'sh.ug.pre' =>          'Executing pre-database step (%1$s)',
  'sh.ug.target' =>       'Target version: %1$s',
  'sh.ug.094.address' =>  'Migrating address configurations',
  'sh.ug.100.cmpdefault' => 'Verifying default CMP Enrollment Configuration',
);

// Make a copy of the original texts, since CoLocalizations can override them
$cm_texts_orig = $cm_texts;

/**
 * Render localized text
 *
 * @since  COmanage Registry 0.1
 * @param  string Index of message to render
 * @param  array Substitutions for variables within localized text
 * @param  integer If <key> represents an array, the index of the corresponding message
 * @return string Localized text
 */

function _txt($key, $vars=null, $index=null)
{
  global $cm_lang, $cm_texts;

  // XXX need to figure out how to pass arbitrary # of args to sprintf
  
  $s = (isset($index) ? $cm_texts[ $cm_lang ][$key][$index] : $cm_texts[ $cm_lang ][$key]);
  
  switch(count($vars))
  {
  case 1:
    return(sprintf($s, $vars[0]));
    break;
  case 2:
    return(sprintf($s, $vars[0], $vars[1]));
    break;
  case 3:
    return(sprintf($s, $vars[0], $vars[1], $vars[2]));
    break;
  case 4:
    return(sprintf($s, $vars[0], $vars[1], $vars[2], $vars[3]));
    break;
  case 5:
    return(sprintf($s, $vars[0], $vars[1], $vars[2], $vars[3], $vars[4]));
    break;
  case 6:
    return(sprintf($s, $vars[0], $vars[1], $vars[2], $vars[3], $vars[4], $vars[5]));
    break;
  default:
    return($s);
  }
}

/**
 * Bootstrap plugin texts
 *
 * @since  COmanage Registry v0.8
 */

function _bootstrap_plugin_txt()
{
  global $cm_lang, $cm_texts;
  
  $plugins = App::objects('plugin');
  
  foreach($plugins as $plugin) {
    // Plugin lang files could be under APP or LOCAL
    foreach(array(APP, LOCAL) as $dir) {
      $langfile = $dir . '/Plugin/' . $plugin . '/Lib/lang.php';
      
      if(is_readable($langfile)) {
        // Include the file
        include $langfile;
        
        // And merge its texts for the current language
        $varName = 'cm_' . Inflector::underscore($plugin) . '_texts';
        
        $cm_texts[$cm_lang] = array_merge($cm_texts[$cm_lang], ${$varName}[$cm_lang]);
        
        break;
      }
    }
  }
}
