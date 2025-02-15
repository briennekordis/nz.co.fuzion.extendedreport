<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate.
// @see https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed/
return [
  0 => [
    'name' => 'Extended Report - Campaign progress',
    'entity' => 'ReportTemplate',
    'params' => [
      'version' => 3,
      'label' => 'Extended Report - Campaign progress',
      'description' => 'Extended Report - Campaign progress',
      'class_name' => 'CRM_Extendedreport_Form_Report_Campaign_CampaignProgressReport',
      'report_url' => 'campaign/progress',
      'component' => 'CiviCampaign',
    ],
  ],
];
