<?php
abstract class ImpactSurveyMigration extends DynamicMigration {
  public function __construct() {
    parent::__construct(MigrateGroup::getInstance('ImpactMigrate'));
  }
}

// Imports data to create a new user
class ImpactUserMigration extends ImpactSurveyMigration {
  public function __construct() {
    parent::__construct();
    $this->description = t('Library systems to register');
    $columns = impact_migrate_columns();
    
    // TODO: Set the source to a better location.
    $this->source = new MigrateSourceCSV('sites/local.impactsurvey.org/files/migrate/users.csv', $columns);//(drupal_get_path('module', 'migrate').'/includes/dr_users.csv', $columns);
    $this->destination = new MigrateDestinationUser();
    $this->map = new MigrateSQLMap(
      $this->machineName,
      array(
      	'fscs_key' => array(
          'type' => 'varchar',
          'length' => 6,
          'not null' => TRUE,
          'description' => 'FSCS Key'
        )
      ),
      MigrateDestinationUser::getKeySchema()
    );
      
    $this->addFieldMapping('name', 'fscs_key');
    $this->addFieldMapping('mail', 'email');
    $this->addFieldMapping('pass')
      ->defaultValue('asdf');
    $this->addFieldMapping('is_new')
      ->defaultValue(TRUE);
    $this->addFieldMapping('roles')
      ->defaultValue(6);
    $this->addFieldMapping('theme')
      ->defaultValue('');
    $this->addFieldMapping('signature')
      ->defaultValue('');
    $this->addFieldMapping('signature_format')
      ->defaultValue('filtered_html');
    $this->addFieldMapping('created')
      ->defaultValue(time());
    $this->addFieldMapping('access')
      ->defaultValue(0);
    $this->addFieldMapping('login')
      ->defaultValue(0);
    $this->addFieldMapping('status')
      ->defaultValue(1);
    $this->addFieldMapping('timezone')
      ->defaultValue(NULL);
    $this->addFieldMapping('language')
      ->defaultValue('');
    $this->addFieldMapping('picture')
      ->defaultValue(0);
    $this->addFieldMapping('init', 'email');
    
    // Other handlers
    $this->addFieldMapping('path')
      ->defaultValue(NULL);
    $this->addFieldMapping('pathauto')
      ->defaultValue(0);
      
    $this->addUnmigratedSources(array('system_name', 'first_name', 'last_name', 'phone', 'website'));
  }
}

class ImpactRegistrationMigration extends ImpactSurveyMigration {
  public function __construct() {
    parent::__construct();
    $this->description = t('Imports library registration profile');
    $columns = impact_migrate_columns();
    $this->source = new MigrateSourceCSV('sites/local.impactsurvey.org/files/migrate/registration.csv', $columns);
    $this->destination = new MigrateDestinationProfile2('library_registration');
    $this->map = new MigrateSQLMap($this->machineName,
        array('fscs_key' => array(
                'type' => 'varchar',
                'length' => 6,
                'not null' => TRUE,
                'description' => 'FSCS Key'
                )
             ),
        MigrateDestinationProfile2::getKeySchema()
    );
    
    $this->addFieldMapping('field_library_reg_system', 'fscs_key');
    $this->addFieldMapping('field_library_reg_pref', 'system_name');
    $this->addFieldMapping('field_library_reg_fname', 'first_name');
    $this->addFieldMapping('field_library_reg_lname', 'last_name');
    $this->addFieldMapping('field_library_reg_position')
      ->defaultValue('Library Director');
    $this->addFieldMapping('field_library_reg_auth')
      ->defaultValue(1);
    $this->addFieldMapping('field_library_reg_state')
      ->defaultValue('ID');
    $this->addFieldMapping('field_library_reg_phone', 'phone');
    $this->addFieldMapping('field_library_reg_website', 'website');
    
    $this->addFieldMapping('uid', 'fscs_key')
      ->sourceMigration('ImpactUser')
      ->defaultValue(1);
    
    $this->addUnmigratedSources(array('email'));
    $this->addUnmigratedDestinations(array('field_library_reg_extension', 'field_library_reg_short_name', 'language', 'path', 'revision_uid'));
  }
  
  /*public function prepareRow($row) {
    $sql = "SELECT uid FROM {users} WHERE name='$row->fscs_key'";
    $uid = db_query($sql)->fetchField();
    
    $row->uid = $uid;
  }*/

}
class ImpactIMLSMigration extends ImpactSurveyMigration {
  public function __construct() {
    parent::__construct();
    $this->description = t('Imports IMLS Data profile');
    $columns = impact_migrate_imls_columns();
    $this->source = new MigrateSourceCSV('sites/local.impactsurvey.org/files/migrate/imls.csv', $columns);
    $this->destination = new MigrateDestinationProfile2('imls_data');
    $this->map = new MigrateSQLMap($this->machineName,
        array('fscs_key' => array(
                'type' => 'varchar',
                'length' => 6,
                'not null' => TRUE,
                'description' => 'FSCS Key'
                )
             ),
        MigrateDestinationProfile2::getKeySchema()
    );
    
    $this->addFieldMapping('field_hours', 'num_hours');
    $this->addFieldMapping('field_expend_tot', 'op_exp');
    $this->addFieldMapping('field_fte_decimal', 'num_fte');
    $this->addFieldMapping('field_terminals', 'num_term');
    $this->addFieldMapping('field_pac_uses', 'num_uses');
    $this->addFieldMapping('field_legalpop', 'num_residents');
    $this->addFieldMapping('field_visits', 'num_visits');
    $this->addFieldMapping('field_num_branches', 'num_branches');
    
    $this->addFieldMapping('uid', 'fscs_key')
      ->sourceMigration('ImpactUser')
      ->defaultValue(1);
    
    $this->addUnmigratedSources(array('email'));
    $this->addUnmigratedDestinations(array('language', 'path', 'revision_uid'));
  }
  
  public function prepareRow($row) {
    $sql = "SELECT uid FROM {users} WHERE name='$row->fscs_key'";
    $uid = db_query($sql)->fetchField();
    
    $row->uid = $uid;
  }
}

class ImpactIntakeMigration extends ImpactSurveyMigration {
  public function __construct() {
    parent::__construct();
    $this->description = t('Imports Intake Form profile');
    $columns = impact_migrate_intake_columns();
    $this->source = new MigrateSourceCSV('sites/local.impactsurvey.org/files/migrate/intake.csv', $columns);
    $this->destination = new MigrateDestinationProfile2('pilot_intake');
    $this->map = new MigrateSQLMap($this->machineName,
        array('fscs_key' => array(
                'type' => 'varchar',
                'length' => 6,
                'not null' => TRUE,
                'description' => 'FSCS Key'
                )
             ),
        MigrateDestinationProfile2::getKeySchema()
    );
    $this->addFieldMapping('field_pilot_intake_it_support', 'it_source');
    $this->addFieldMapping('field_pilot_intake_connection', 'isp');
    $this->addFieldMapping('field_pilot_intake_max_speed', 'dl_speed');
    $this->addFieldMapping('field_pilot_intake_wireless', 'wifi');
    $this->addFieldMapping('field_pilot_intake_assistive', 'assistive');
    $this->addFieldMapping('field_pilot_intake_session_m', 'session');
    $this->addFieldMapping('field_pilot_intake_staff_learn', 'staff_learn');
    $this->addFieldMapping('field_pilot_intake_vol_train', 'vol_training');
    $this->addFieldMapping('field_pilot_intake_one_on_one', 'one');
    $this->addFieldMapping('field_pilot_intake_online_safety', 'safety');
    $this->addFieldMapping('field_pilot_intake_strat_plan', 'pac');
    $this->addFieldMapping('field_pilot_intake_partners', 'partners');
    $this->addFieldMapping('field_pilot_intake_pat_expense', 'expenses');
    $this->addFieldMapping('field_pilot_intake_hardware', 'replacement');
    $this->addFieldMapping('field_pilot_intake_timelimit', 'max_session');
    $this->addFieldMapping('field_pilot_intake_extend', 'extend');
    $this->addFieldMapping('field_pilot_intake_uses', 'dedicated')
      ->separator(';');
    
    
    $this->addFieldMapping('uid', 'fscs_key')
      ->sourceMigration('ImpactUser')
      ->defaultValue(1);
  }
  public function prepareRow($row) {
    $sql = "SELECT uid FROM {users} WHERE name='$row->fscs_key'";
    $uid = db_query($sql)->fetchField();
    
    $row->uid = $uid;
  }
}