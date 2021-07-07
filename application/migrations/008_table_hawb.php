<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_table_hawb extends CI_Migration
{
function up(){
            $this->dbforge->add_field(array(
                    'id' => array(
                        'type' => 'INT',
                        'constraint' => 5,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                    'task_id' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'status_id' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'code1' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'code2' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'code3' => array(
                        'type' => 'INT',
                        'null' => true,
                    ),
                    'code4' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'shipper' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'shipper_number' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'air_waybill' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'consignee' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'consignee_number' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'iata_Code' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'account_no' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                     'information' => array(
                    'type' => 'text',
                    'null' => true,
                    ),
                    'airport_departure' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                    'currency' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'chgs_Code' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'wt_val' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'other' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'carriage' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'customs' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'airport_of_destination' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'requested_flight_date' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'amount_of_insurance' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'handling_information' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'pieces_rcp' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'gross_weight' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'kg_ib' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'rate_class' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'commodity_item' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'chargeable_weight' => array(
                    'type' => 'text',
                    'null' => true,
                    ),
                    'rate_charge' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'total' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'Nature' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'dim' => array(
                        'type' => 'text',
                        'null' => true,
                        ),
                    'Vol' => array(
                            'type' => 'text',
                            'null' => true,
                        ),
                    'sap_no' => array(
                            'type' => 'text',
                            'null' => true,
                        ),
                    'mark' => array(
                            'type' => 'text',
                            'null' => true,
                        ),
                    'ciq_no' => array(
                            'type' => 'text',
                            'null' => true,
                        ),
                    'code' => array(
                            'type' => 'text',
                            'null' => true,
                        ),
                    'qty' => array(
                            'type' => 'text',
                            'null' => true,
                        ),
                    'total1' => array(
                            'type' => 'text',
                            'null' => true,
                        ),
                    'other_charges' => array(
                        'type' => 'text',
                        'null' => true,
                    ),
                    'weight_charge' => array(
                            'type' => 'text',
                            'null' => true,
                        ),
                    'valuation_charge' => array(
                            'type' => 'text',
                            'null' => true,
                        ),
                    'tax' => array(
                            'type' => 'text',
                            'null' => true,
                        ),
                    'due_agent' => array(
                            'type' => 'text',
                            'null' => true,
                        ),
                    'due_carrier' => array(
                            'type' => 'text',
                            'null' => true,
                        ),
                    'total_prepaid_collect' => array(
                            'type' => 'text',
                            'null' => true,
                        ),
                    'currency_conversion' => array(
                            'type' => 'text',
                            'null' => true,
                        ),
                    'at_destination' => array(
                            'type' => 'text',
                            'null' => true,
                        ),
                    'date' => array(
                            'type' => 'DATE',
                            'null' => true,
                        ),

            ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('hawb_table');

                        }
      public function down()
                {
                    $this->dbforge->drop_table('hawb_table');
                }
};
?>
