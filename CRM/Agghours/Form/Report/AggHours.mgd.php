<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 =>
  array (
    'name' => 'CRM_Agghours_Form_Report_AggHours',
    'entity' => 'ReportTemplate',
    'params' =>
    array (
      'version' => 3,
      'label' => 'AggHours',
      'description' => 'AggHours (com.semperit.agghours)',
      'class_name' => 'CRM_Agghours_Form_Report_AggHours',
      'report_url' => 'com.semperit.agghours/agghours',
      'component' => 'Event',
    ),
  ),
);
